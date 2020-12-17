@extends('public-site.public-parts.public-layout')
@section('content')
    <div class="home-page">
        <section class="mission_top-section">
            <div data-aos="fade-up" data-aos-duration="1500" class="primary_triangle">
                <img alt="Triangle" src="/assets/images/Group_triangle.png">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content">
                            <h1 data-aos="zoom-in" data-aos-duration="800">Necessity Driving</h1>
                            <h1 data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1500">Innovation</h1>
                            <p data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500">eCommerce Freight Modernized by Technology</p>
                            @include('public-site.public-parts.tracking-form')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="why_weare_section">
                <div class="container">
                    <h3 data-aos="slide-up" data-aos-duration="1500" class="heading">Who We Are</h3>
                    <div class="row">
                        <div data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1500" class="col-6">
                            <div class="why_weare_content sub-text">
                                <h4 class="sub-heading">The Solution to a Problem</h4>
                                <p>Trend Transport was founded by veterans of the transportation industry who strive to provide innovative solutions.</p>
                                <p>We know that delivering expedited shipments directly to customer’s homes on demand is quite the undertaking for shippers.
                                    Trend Transport's investment in technology, specialized services and equipment provides our customers with the ability to not only meet those expectations, but to exceed them.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="why_weare_img">
                                <img alt="Who We Are" src="/assets/images/who_weare.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="ecommerce_section">
                <div class="ecommerce_bg">
                    <div class="ecommerce_overlay"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ecommerce_section_content">
                                <h3 data-aos="fade-up" data-aos-duration="1500" class="heading">Current Industry Trends</h3>
                                <ul>
                                    <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">
											<span class="security_block_icon">
												<a href="/services"><img alt="eCommerce" src="/assets/images/ic-statistics-funnel.png"></a>
											</span>
                                        <p>Every business is expected to match the service of billion dollar companies like Walmart and Amazon</p>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="800" data-aos-duration="1500"><span class="security_block_icon"><a href="/services"><img alt="eCommerce" src="/assets/images/ic-statistics-funnel.png"></a></span>
                                        <p>Traditional carriers can't handle today’s freight in a manner that meets the high expectations of consumers and shippers.</p>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1500"><span class="security_block_icon"><a href="/services"><img alt="eCommerce" src="/assets/images/ic-statistics-funnel.png"></a></span>
                                        <p>As a result, traditional carriers have been implementing double digit price increases in order to provide service.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="our-solution_section">
                <div class="our-solution_overlay"></div>
                <div data-aos="fade-up" data-aos-duration="1500" class="dark_triangle">
                    <img alt="Triangle" src="/assets/images/blue-triangles.png">
                </div>
                <div class="container">
                    <h3 data-aos="fade-up" data-aos-duration="1500" class="heading">The Trend Advantage</h3>
                    <div class="row">
                        <div class="col-12">
                            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">
                                <div class="our-solution_block">
                                    <div class="our-solution_content">
                                        <p style="min-width: 100%;">Shipping with Trend Transport will provide you with the ability to move your freight at the speed of today’s marketplace.  Our technology will provide fast, accurate feedback on your freight movements, allowing you to outperform customer expectations.</p>
                                    </div>
                                </div>
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
                <div class="container" data-aos="slide-up" data-aos-duration="1500" >
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