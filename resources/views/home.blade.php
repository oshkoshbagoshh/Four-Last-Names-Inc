@extends('layouts.app')

@section('content')
    <section class="bg-white py-5">
        <div class="container">
            <h2 class="display-4 fw-bold mb-4">Welcome to {{ config('app.name') }}</h2>
            <p class="lead mb-5">We are a consulting firm focused on helping the ad industry thrive with Connected TV (CTV)
                advertising.</p>

            <div class="row g-4">
                <!-- Service Cards -->
                <div class="row g-4">
                    <!-- CTV Media Optimization -->
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <svg class="mb-3" width="48" height="48" viewBox="0 0 24 24">
                                    <path d="M21 6h-7.59l.58-3H6l.92 5H3v13h18V6zm-2 11H5V8h14v9z" />
                                </svg>
                                <h3 class="card-title fw-bold">CTV Media Optimization</h3>
                                <p class="card-text">Maximize ROI with full-funnel, data-driven insights</p>
                                <a href="#" class="btn btn-purple">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audience Targeting -->
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <svg class="mb-3" width="48" height="48" viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                                <h3 class="card-title fw-bold">Audience Targeting</h3>
                                <p class="card-text">Precision targeting with advanced viewer analytics</p>
                                <a href="#" class="btn btn-purple">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign Analytics -->
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <svg class="mb-3" width="48" height="48" viewBox="0 0 24 24">
                                    <path d="M3 3v18h18v-18h-18zm5 14h-2v-7h2v7zm5 0h-2v-11h2v11zm5 0h-2v-4h2v4z" />
                                </svg>
                                <h3 class="card-title fw-bold">Campaign Analytics</h3>
                                <p class="card-text">Real-time performance tracking and optimization</p>
                                <a href="#" class="btn btn-purple">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Add other service cards similarly -->
                {{-- TODO: Service Cards --}}
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-8">About Us</h2>
            <div class="max-w-3xl mx-auto text-center">
                <p class="text-gray-600 mb-6">
                    Welcome to [Company Name], where we specialize in delivering exceptional [services/products].
                    With [X] years of experience, our team is dedicated to providing the highest quality solutions for our
                    clients.
                </p>
                <p class="text-gray-600">
                    [Placeholder for company mission and values]
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-4">Service 1</h3>
                    <p class="text-gray-600">Description of service 1 goes here.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-4">Service 2</h3>
                    <p class="text-gray-600">Description of service 2 goes here.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-bold mb-4">Service 3</h3>
                    <p class="text-gray-600">Description of service 3 goes here.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">Question 1?</h3>
                    <p class="text-gray-600">Answer to question 1 goes here.</p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">Question 2?</h3>
                    <p class="text-gray-600">Answer to question 2 goes here.</p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">Question 3?</h3>
                    <p class="text-gray-600">Answer to question 3 goes here.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">"Testimonial text goes here..."</p>
                    <p class="font-bold">- Client Name 1</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">"Another testimonial text..."</p>
                    <p class="font-bold">- Client Name 2</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-600 mb-4">"More testimonial text..."</p>
                    <p class="font-bold">- Client Name 3</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section id="team" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-300 mb-4"></div>
                    <h3 class="text-xl font-bold">Team Member 1</h3>
                    <p class="text-gray-600">Position</p>
                </div>
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-300 mb-4"></div>
                    <h3 class="text-xl font-bold">Team Member 2</h3>
                    <p class="text-gray-600">Position</p>
                </div>
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-300 mb-4"></div>
                    <h3 class="text-xl font-bold">Team Member 3</h3>
                    <p class="text-gray-600">Position</p>
                </div>
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-300 mb-4"></div>
                    <h3 class="text-xl font-bold">Team Member 4</h3>
                    <p class="text-gray-600">Position</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Contact Us</h2>
            <div class="max-w-xl mx-auto">
                <form class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2">Name</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-lg" placeholder="Your name">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-2 border rounded-lg" placeholder="Your email">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Message</label>
                        <textarea class="w-full px-4 py-2 border rounded-lg" rows="4" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Latest Blog Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-48 bg-gray-300"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Blog Post Title 1</h3>
                        <p class="text-gray-600 mb-4">Short description of the blog post...</p>
                        <a href="#" class="text-blue-500 hover:text-blue-600">Read More →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-48 bg-gray-300"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Blog Post Title 2</h3>
                        <p class="text-gray-600 mb-4">Short description of the blog post...</p>
                        <a href="#" class="text-blue-500 hover:text-blue-600">Read More →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-48 bg-gray-300"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Blog Post Title 3</h3>
                        <p class="text-gray-600 mb-4">Short description of the blog post...</p>
                        <a href="#" class="text-blue-500 hover:text-blue-600">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
