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
                {{-- TODO: make fakeable --}}
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-8">About Us</h2>
            <div class="max-w-3xl mx-auto text-center">
                <p class="text-gray-600 mb-6">
                    {{-- Welcome to [Company Name], where we specialize in delivering exceptional [services/products].
                    With [X] years of experience, our team is dedicated to providing the highest quality solutions for our
                    clients. --}}
                    Welcome to Four-Last-Names, where we specialize in delivering exceptional Connected TV advertising
                    solutions. With over 15 years of combined experience, in a variety of industries, our team is dedicated
                    to providing insights and data-driven strategies to help our clients succeed in the ever-evolving world
                    of advertising.
                </p>
                <p class="text-gray-600">
                    Our mission is to help businesses of all sizes reach their target audiences with precision and
                    efficiency. We believe that the future of advertising lies in the power of data and analytics, and we
                    are committed to helping our clients stay ahead of the curve. Whether you are looking to optimize your
                    CTV media spend, improve audience targeting, or track campaign performance, we have the expertise to
                    help you achieve your goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    {{-- TODO: pull from database / JSON  --}}
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

    {{-- FAQ  --}}


    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">What is CTV advertising?</h3>
                    <p class="text-gray-600">Connected TV (CTV) advertising refers to ads shown on streaming services and
                        smart TVs, allowing for more targeted and measurable TV advertising campaigns.</p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">How do you measure CTV ad performance?</h3>
                    <p class="text-gray-600">We use advanced analytics tools to track impressions, completion rates,
                        audience engagement, and conversion metrics in real-time.</p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">What makes CTV advertising effective?</h3>
                    <p class="text-gray-600">CTV combines the impact of traditional TV with digital targeting capabilities,
                        allowing for precise audience targeting and measurable results.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    {{-- TODO: Use faker / factory for this part  --}}
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
    {{-- TODO: import team member info here, get from database --}}
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
    {{-- TODO: update this and get from database --}}
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
                    {{-- <div class="p-6">

                        {{-- Latest blog posts --}}
                    {{-- TODO: make this dynamic and pull from posts model --}}


                    <h3 class="text-xl font-bold mb-2">The Rise of CTV Advertising in 2024</h3>
                    <p class="text-gray-600 mb-4">Explore how CTV is reshaping the advertising landscape...</p>
                    <a href="#" class="text-blue-500 hover:text-blue-600">Read More →</a>
                </div>

                <h3 class="text-xl font-bold mb-2">Maximizing ROI with Data-Driven CTV Campaigns</h3>
                <p class="text-gray-600 mb-4">Learn how to leverage viewer data for better campaign performance...</p>
                <a href="#" class="text-blue-500 hover:text-blue-600">Read More →</a>
            </div>

            <h3 class="text-xl font-bold mb-2">CTV vs Traditional TV: The Evolution of Advertising</h3>
            <p class="text-gray-600 mb-4">Understanding the key differences and advantages of CTV...</p>
            <a href="#" class="text-blue-500 hover:text-blue-600">Read More →</a>
        </div>



        {{-- Chatbot --}}




    </section>
@endsection
