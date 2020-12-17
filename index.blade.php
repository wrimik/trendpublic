@extends('public-site.public-parts.public-layout')
@section('content')

    <div class="home-page">
        <section class="top-section">
            <div class="transparent-layer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content">
                                <h1 data-aos="zoom-in" data-aos-duration="800">On-Time Deliveries</h1>
                                <h2 data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1500">Are <span>Trending</span></h2>
                                <p data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500">eCommerce Freight Modernized by Technology</p>
                                @include('public-site.public-parts.tracking-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-text" data-aos="fade-in" data-aos-delay="1600" data-aos-duration="1500">
            <div class="bg_shape"></div>
            <div class="bg_shape_bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="1700">Trend Transport is a freight carrier specializing in LTL and expedited transportation services.  At Trend Transport, we move your freight at the speed of E-Commerce</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1500" class="security_section">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="security_block text-center">
                                <div class="security_block_icon">
                                    <a href="/services"><img alt="ACCURATE DATA" src="/assets/images/ic-statistics-funnel.png"></a>
                                </div>
                                <div class="security_block_content">
                                    <a href="/services"><h4 class="sub-heading">Transparency</h4></a>
                                    <p class="sub-content">Our real time tracking technology gives you full visibility into the status of your delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="security_block middle text-center">
                                <div class="security_block_icon">
                                    <a href="/services"><img alt="Expedited Transit" src="/assets/images/ic-sport-golf.png"></a>
                                </div>
                                <div class="security_block_content">
                                    <a href="/services"><h4 class="sub-heading">Expedited Transit</h4></a>
                                    <p class="sub-content">We utilize team drivers to meet the ever growing expectations of ECommerce deliveries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="security_block text-center">
                                <div class="security_block_icon">
                                    <a href="/services"><img alt="PHOTO SECURITY" src="/assets/images/ic-actions-danger.png"></a>
                                </div>
                                <div class="security_block_content">
                                    <a href="/services"><h4 class="sub-heading">ACCURATE DATA</h4></a>
                                    <p class="sub-content">Our proprietary technology allows you to keep track of the metrics that matter most to your company.  Reports can be customized to match your needs and are presented in a bold, user friendly format.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="learnmore_section">
                <div class="cross_overlay"></div>
                <div data-aos="fade-up" data-aos-duration="1500" class="left_triangle">
                    <img alt="Triangle" src="/assets/images/left_dot.png">
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" class="right_triangle">
                    <img alt="Triangle" src="/assets/images/right_dot.png">
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" class="dark_triangle">
                    <img alt="Triangle" src="/assets/images/dark_triangle.png">
                </div>
                <div class="container">
                    <div class="row">
                        <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1500" class="col-6">
                            <div class="learnmore_img">
                                <img alt="Truck" src="/assets/images/truck.png">
                            </div>
                        </div>
                        <div data-aos="slide-up" data-aos-delay="500" data-aos-duration="1500" class="col-6">
                            <div class="learnmore_content">
                                <p>Find out how TrendTransport is disrupting ECommerce Freight.</p>
                                <a href="/why-us" class="btn btn-primary">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="whylove_section">
                <div class="container-fluid">
                    <h3 data-aos="slide-up" data-aos-duration="1500" class="heading">Why You’ll Love Us</h3>
                    <div class="row">
                        <div data-aos="slide-up" data-aos-duration="1500" class="col-6">
                            <div class="whylove_block">
                                <h4 class="sub-heading">PEACE OF MIND</h4>
                                <p class="sub-content">Trend Transport is the only LTL carrier with capabilities to capture pictures of freight at time of delivery.  Reduce claims and resolve disputes through our proprietary Picture Proof of Delivery Technology</p>
                            </div>
                            <div class="whylove_block">
                                <h4 class="sub-heading">Reliability</h4>
                                <p class="sub-content">The last impression your customer has with your brand is the truck driver making delivery.  You can trust TrendTransport to deliver on time and leave the last positive impression.</p>
                            </div>
                            <div class="whylove_block">
                                <h4 class="sub-heading">Competitive Pricing</h4>
                                <p class="sub-content">TrendTransport's focus on accessorials and minimums enables us to offer the most competitive pricing for your most sensitive freight.</p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500" class="col-6">
                            <div class="whylove_img">
                                <img alt="Home-Delivery-man" src="/assets/images/why-youll-love-us-2.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="client_section">
                <div class="client_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <h3 data-aos="slide-up" data-aos-duration="1500" class="heading">Why Our Clients Trust Us</h3>
                        </div>
                        <div  class="col-7">
                            <div class="client_content">
                                <div class="arrow_bg">
                                    <img alt="Arrow" src="/assets/images/arrows.png">
                                </div>
                                <ul>
                                    <li>
                                        <h2>99.3%</h2>
                                        <p>On-Time Delivery</p>
                                    </li>
                                    <li>
                                        <h2>50,000+</h2>
                                        <p>On-Time Deliveries</p>
                                    </li>
                                    <li>
                                        <h2>1,000+</h2>
                                        <p>Lift Gate Trucks</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="contactus_section">
                <div data-aos="fade-up" data-aos-duration="1500" class="primary_triangle">
                    <img alt="Triangle" src="/assets/images/Group_triangle.png">
                </div>
                <div data-aos="slide-up" data-aos-duration="1500" class="container">
                    <div class="row">
                        <div class="col-10">
                            <p>On time deliveries are trending. Contact us for more information.</p>
                        </div>
                        <div class="col-2">
                            <a href="/contact-us" class="btn btn-primary">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
