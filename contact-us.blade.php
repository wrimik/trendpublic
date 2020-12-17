@extends('public-site.public-parts.public-layout')
@section('content')
    <div class="home-page">
        <section class="contactus_form">
            <div class="transparent-layer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div  ng-controller="ContactController" style="min-height:calc(100vh - 100px)"  class="banner-content">
                                <div ng-show="ui.submitted"
                                     class="alert bg-white border text-success text-center my-5 py-5">
                                    <h1>
                                        <i class="fad fa-check-circle"></i> <br>
                                        Sent! <br>
                                        <small>Thanks for reaching out!</small>
                                    </h1>
                                </div>
                                <form ng-show="!ui.submitted" action="" method="post">
                                    <div class="title"><h4>Need Help with ECommerce Freight?</h4></div>
                                    <div class="form-group">
                                        <input ng-model="data.name" type="text" name="" placeholder="Name&#42;">
                                    </div>
                                    <div class="form-group">
                                        <input  ng-model="data.email" type="text" name="" placeholder="Email Address&#42;">
                                    </div>
                                    <div class="form-group">
                                        <input  ng-model="data.phone" type="Number" name="" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea ng-model="data.message"  placeholder="Message&#42;" rows="4"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <div ng-click="submit()"
                                               type="submit"
                                               class="btn btn-primary"  name="">
                                            <i ng-if="ui.submitting" class="fas fa-spinner fa-spin"></i>
                                            SEND MESSAGE
                                        </div>
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