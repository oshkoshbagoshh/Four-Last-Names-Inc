<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;
use App\Mail\MeetingScheduled;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class MeetingController extends Controller
{
    public function index()
    {
        return view('meeting.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'job_title' => 'required|string',
            'monthly_budget' => 'required|string',
            'campaign_duration' => 'required|integer',
            'campaign_goals' => 'required|string',
        ]);

        $meeting = Meeting::create($validated);

        // Send confirmation email
        Mail::to($meeting->email)->send(new MeetingScheduled($meeting));

        // Send Slack notification
        $this->sendSlackNotification($meeting);

        return response()->json([
            'message' => 'Meeting request submitted successfully',
            'meeting' => $meeting
        ]);
    }

    private function sendSlackNotification($meeting)
    {
        $slackWebhookUrl = config('services.slack.webhook_url');

        $message = [
            'blocks' => [
                [
                    'type' => 'header',
                    'text' => [
                        'type' => 'plain_text',
                        'text' => '🎯 New CTV Campaign Meeting Request',
                        'emoji' => true
                    ]
                ],
                [
                    'type' => 'section',
                    'fields' => [
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Company:*\n{$meeting->company_name}"
                        ],
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Industry:*\n{$meeting->industry}"
                        ]
                    ]
                ],
                [
                    'type' => 'section',
                    'fields' => [
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Contact:*\n{$meeting->contact_name}"
                        ],
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Title:*\n{$meeting->job_title}"
                        ]
                    ]
                ],
                [
                    'type' => 'section',
                    'fields' => [
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Email:*\n{$meeting->email}"
                        ],
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Phone:*\n{$meeting->phone}"
                        ]
                    ]
                ],
                [
                    'type' => 'section',
                    'fields' => [
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Budget Range:*\n{$meeting->monthly_budget}"
                        ],
                        [
                            'type' => 'mrkdwn',
                            'text' => "*Duration:*\n{$meeting->campaign_duration} months"
                        ]
                    ]
                ],
                [
                    'type' => 'section',
                    'text' => [
                        'type' => 'mrkdwn',
                        'text' => "*Campaign Goals:*\n{$meeting->campaign_goals}"
                    ]
                ],
                [
                    'type' => 'actions',
                    'elements' => [
                        [
                            'type' => 'button',
                            'text' => [
                                'type' => 'plain_text',
                                'text' => '📧 Send Email',
                                'emoji' => true
                            ],
                            'url' => "mailto:{$meeting->email}"
                        ],
                        [
                            'type' => 'button',
                            'text' => [
                                'type' => 'plain_text',
                                'text' => '📞 Call',
                                'emoji' => true
                            ],
                            'url' => "tel:{$meeting->phone}"
                        ]
                    ]
                ],
                [
                    'type' => 'context',
                    'elements' => [
                        [
                            'type' => 'mrkdwn',
                            'text' => "Submitted: <!date^" . $meeting->created_at->timestamp . "^{date_pretty} at {time}|" . $meeting->created_at . ">"
                        ]
                    ]
                ]
            ]
        ];

        try {
            Http::post($slackWebhookUrl, $message);
        } catch (\Exception $e) {
            \Log::error('Failed to send Slack notification: ' . $e->getMessage());
        }
    }
}
