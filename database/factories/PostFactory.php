<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory

{
    protected $model = Post::class;
    protected $fallbackImage = 'public/images/fallback-post-image.jpg'; // Adjust path as needed
    protected $cacheKey = 'pexels_images';
    protected $cacheDuration = 60 * 24; // 24 hours in minutes

    protected function getRandomPexelsImage()
    {
        // Try to get images from cache first
        $cachedImages = Cache::get($this->cacheKey);

        if (!$cachedImages) {
            try {
                $response = Http::withHeaders([
                    'Authorization' => env('PEXELS_API_KEY'),
                ])->get('https://api.pexels.com/v1/search', [
                    'query' => 'random', // You can change this query
                    'per_page' => 80, // Get more images at once to cache
                    'page' => rand(1, 10),
                ]);

                if ($response->successful()) {
                    $data = $response->json();
                    $images = collect($data['photos'])->pluck('src.large')->filter();

                    if ($images->isNotEmpty()) {
                        // Cache the images
                        Cache::put($this->cacheKey, $images, now()->addMinutes($this->cacheDuration));
                        $cachedImages = $images;
                    }
                }
            } catch (\Exception $e) {
                \Log::error('Pexels API Error: ' . $e->getMessage());
            }
        }

        // If we have cached images, return a random one
        if ($cachedImages && $cachedImages->isNotEmpty()) {
            return $cachedImages->random();
        }

        // Try picsum as second fallback
        try {
            $picsumUrl = 'https://picsum.photos/800/600?random=' . rand(1, 1000);
            $picsumResponse = Http::get($picsumUrl);

            if ($picsumResponse->successful()) {
                return $picsumUrl;
            }
        } catch (\Exception $e) {
            \Log::error('Picsum API Error: ' . $e->getMessage());
        }

        // If all else fails, return the local fallback image
        return asset('/storage/app/public/images/fallback-image.png');
    }

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(3, true),
            'featured_image' => $this->getRandomPexelsImage(),
            // ... other fields ...
            'excerpt' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'user_id' => User::factory(), // will create a new user if one doesn't exist
            // Or use this to get a random existing user:
            // 'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    // Helper method to clear the image cache if needed
    public static function clearImageCache()
    {
        Cache::forget('pexels_images');
    }
}