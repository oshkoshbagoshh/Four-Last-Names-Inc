@extends('layouts.app')

@section('content')
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8" x-data="meetingForm()" x-cloak>
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <!-- Success Message -->
                <div x-show="submitted" class="text-center p-8" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <div class="mb-4">
                        <svg class="mx-auto h-12 w-12 text-green-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Thank You!</h2>
                    <p class="text-gray-600 mb-6">
                        Your meeting request has been submitted successfully. Our team will contact you shortly to discuss
                        your CTV campaign needs.
                    </p>
                    <button @click="resetForm"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Submit Another Request
                    </button>
                </div>

                <!-- Form -->
                <div x-show="!submitted">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Schedule a Meeting</h2>
                    <form @submit.prevent="submitForm">
                        <div class="space-y-6">
                            <!-- Company Information -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="company_name" class="block text-sm font-medium text-gray-700">Company
                                        Name</label>
                                    <input type="text" id="company_name" x-model="formData.company_name" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
                                    <select id="industry" x-model="formData.industry" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select Industry</option>
                                        <option value="technology">Technology</option>
                                        <option value="retail">Retail</option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="finance">Finance</option>
                                        <option value="education">Education</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="contact_name" class="block text-sm font-medium text-gray-700">Contact
                                        Name</label>
                                    <input type="text" id="contact_name" x-model="formData.contact_name" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="job_title" class="block text-sm font-medium text-gray-700">Job Title</label>
                                    <input type="text" id="job_title" x-model="formData.job_title" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" x-model="formData.email" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <input type="tel" id="phone" x-model="formData.phone" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Campaign Information -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label for="monthly_budget" class="block text-sm font-medium text-gray-700">Monthly
                                        Budget Range</label>
                                    <select id="monthly_budget" x-model="formData.monthly_budget" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select Budget Range</option>
                                        <option value="under-10000">Under $10,000</option>
                                        <option value="10000-25000">$10,000 - $25,000</option>
                                        <option value="25000-50000">$25,000 - $50,000</option>
                                        <option value="50000-100000">$50,000 - $100,000</option>
                                        <option value="over-100000">Over $100,000</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="campaign_duration" class="block text-sm font-medium text-gray-700">Campaign
                                        Duration (months)</label>
                                    <select id="campaign_duration" x-model="formData.campaign_duration" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Select Duration</option>
                                        <option value="3">3 months</option>
                                        <option value="6">6 months</option>
                                        <option value="12">12 months</option>
                                        <option value="ongoing">Ongoing</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="campaign_goals" class="block text-sm font-medium text-gray-700">Campaign
                                    Goals</label>
                                <textarea id="campaign_goals" x-model="formData.campaign_goals" rows="4" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Please describe your campaign objectives..."></textarea>
                            </div>

                            <div class="flex justify-between items-center">
                                <button type="button" @click="fillMockData"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Fill Sample Data
                                </button>
                                <button type="submit"
                                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                    :disabled="loading">
                                    <span x-show="loading" class="mr-2">
                                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span x-text="loading ? 'Submitting...' : 'Submit Request'"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function meetingForm() {
                return {
                    formData: {
                        company_name: '',
                        industry: '',
                        contact_name: '',
                        email: '',
                        phone: '',
                        job_title: '',
                        monthly_budget: '',
                        campaign_duration: '',
                        campaign_goals: '',
                    },
                    loading: false,
                    submitted: false,

                    async submitForm() {
                        this.loading = true;
                        try {
                            const response = await fetch('/meetings', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                },
                                body: JSON.stringify(this.formData)
                            });

                            const data = await response.json();

                            if (response.ok) {
                                this.submitted = true;
                                this.loading = false;
                            } else {
                                throw new Error(data.message || 'Something went wrong');
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            alert('There was an error submitting your request. Please try again.');
                            this.loading = false;
                        }
                    },

                    resetForm() {
                        this.formData = {
                            company_name: '',
                            industry: '',
                            contact_name: '',
                            email: '',
                            phone: '',
                            job_title: '',
                            monthly_budget: '',
                            campaign_duration: '',
                            campaign_goals: '',
                        };
                        this.submitted = false;
                    },

                    fillMockData() {
                        this.formData = {
                            company_name: 'Tech Solutions Inc.',
                            industry: 'technology',
                            contact_name: 'John Smith',
                            email: 'john@techsolutions.com',
                            phone: '(555) 123-4567',
                            job_title: 'Marketing Director',
                            monthly_budget: '10000-25000',
                            campaign_duration: '6',
                            campaign_goals: 'Increase brand awareness and drive conversions through targeted CTV advertising.',
                        };
                    }
                }
            }
        </script>
    @endpush
@endsection
