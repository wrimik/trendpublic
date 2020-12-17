@extends('public-site.public-parts.public-layout')
@section('content')
    <div class="home-page">
        <section class="whyus_top-section services_top-section">
            <div class="whyus_banner-layer"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="banner-overlay">
                            <div class="banner-overlay-inner"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="banner-content">
                            <h1 data-aos="zoom-in" data-aos-duration="800">Our Services</h1>
                            <h1 data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1500">and Technology</h1>
                            <p data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500">eCommerce Freight Modernized by Technology</p>
                            @include('public-site.public-parts.tracking-form')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="whyus_top-text">
            <div class="bg-light_overlay"></div>
            <div data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1500" class="right_primary_triangle">
                <img alt="Triangle" src="/assets/images/right_primary_triangle.png">
            </div>
            <div data-aos="fade-up" data-aos-delay="1800" data-aos-duration="1500" class="left_triangle">
                <img alt="Triangle" src="/assets/images/left_dot.png">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1500" class="text-center">TrendTransport's services and technology are focussed on meeting the ever growing consumer expectations for ECommerce Freight</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="cross-arrow_section">
            <section>
                <div class="accurate_section">
                    <div class="whyus_dark_overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div data-aos="zoom-in" data-aos-duration="1500" class="col-6">
                                <div class="block_img">
                                    <img alt="Accurate Data" src="/assets/images/accurate-2.png">
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1500" class="col-6">
                                <div class="accurate_block_content text-left sub-text">
                                    <h3 class="heading">Accurate Data</h3>
                                    <p>Reduce customer service requests and complaints through TrendTransport's real time tracking technology.  Every shipment is proactively monitored to ensure customers will always know when they can expect their delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="tracking_section">
                    <div class="container">
                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="1500" class="col-6">
                                <div class="tracking_block_content text-left sub-text">
                                    <h3 class="heading">Expedited Delivery</h3>
                                    <p>We know the needs of your ECommerce customers.  That's why at TrendTransport we use team line haul drivers to ensure the fastest transit time available.</p>
                                </div>
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1500" class="col-6">
                                <div class="block_img">
                                    <img alt="Expedited Delivery" src="/assets/images/expedited-delivery.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="photo-security_section">
                    <div class="container">
                        <div class="row">
                            <div data-aos="zoom-in" data-aos-duration="1500" class="col-6">
                                <div class="block_img">
                                    <img alt="Photo Security" src="/assets/images/photo-security-2.png">
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1500" class="col-6">
                                <div class="photo-security_block_content text-left sub-text">
                                    <h3 class="heading">Photo Security</h3>
                                    <p>Residential deliveries have a 20%+ increased likelihood of a claim or delivery dispute.  Our drivers take pictures at time of delivery and automatically available to view on our site by customers, shippers, and brokers <br> TrendTransport's proprietary Picture Proof of Delivery technology can reduce claims and disputes by up to 50%.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="client_section whyus">
                    <div class="client_overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <h3 data-aos="slide-up" data-aos-duration="1500" class="heading">Why Our Clients Trust Us</h3>
                            </div>
                            <div class="col-7" data-aos="fade-up" data-aos-duration="1500">
                                <div class="client_content">
                                    <ul>
                                        <li>
                                            <div class="security_block_icon">
                                                <img alt="Delivery" src="/assets/images/ic-actions-danger.png">
                                            </div>
                                            <h2>99.3%</h2>
                                            <p>On-Time Delivery.</p>
                                        </li>
                                        <li>
                                            <div class="security_block_icon">
                                                <img alt="Delivery" src="/assets/images/ic-sport-golf.png">
                                            </div>
                                            <h2>50,000+</h2>
                                            <p>On-Time Deliveries.</p>
                                        </li>
                                        <li>
                                            <div class="security_block_icon">
                                                <img alt="Delivery" src="/assets/images/ic-statistics-funnel.png">
                                            </div>
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
        </div>
        <section>
            <div class="contactus_section">
                <div data-aos="fade-up" data-aos-duration="1500" class="primary_triangle">
                    <img alt="Triangle" src="/assets/images/Group_triangle.png">
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" class="container">
                    <div class="row">
                        <div class="col-10">
                            <p>TrendTransport is your solution for ECommerce freight. Contact us to find a broker.</p>
                        </div>
                        <div class="col-2 text-right">
                            <a href="/contact-us" class="btn btn-primary">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
