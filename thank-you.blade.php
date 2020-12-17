@extends('public-site.public-parts.public-layout')
@section('content')
    <div class="home-page">
        <section class="contactus_form">
            <div class="transparent-layer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content">

                                <form action="" method="post">
                                    <div class="title"><h4>Need Help with ECommerce Freight?</h4></div>
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Name&#42;">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Email Address&#42;">
                                    </div>
                                    <div class="form-group">
                                        <input type="Number" name="" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message&#42;" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="send message" name="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection