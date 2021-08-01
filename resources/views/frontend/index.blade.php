@extends('frontend.layouts.master')
@section('css')

@endsection

@section('title', 'Home')

@section('content')
    <!-- header-area start -->
    @include('frontend.layouts.header')
    <!-- Header-area end -->

    <!-- Hero Slider start -->
    @include('frontend.layouts.hero')
    <!-- Hero Slider end -->

    <!-- About Area Start -->
    @include('frontend.layouts.about')
    <!-- About Area End -->

    <!-- Feature Area Start  -->
    @include('frontend.layouts.feature')
    <!-- Feature Area End -->

    <!-- Video Area Start -->
    @include('frontend.layouts.video')
    <!-- Video Area End -->

    <!-- Project Count Area Start -->
    @include('frontend.layouts.project_count')
    <!-- Project Count Area End -->

    <!-- Pricing Packages Start -->
    @include('frontend.layouts.pricing')
    <!-- Pricing Packages End -->

    <!-- Testimonial Area Start -->
    @include('frontend.layouts.testmonial')
    <!-- Testimonial Area End -->

    <!-- Screenshot Area Tow Start -->
    @include('frontend.layouts.screenshot')
    <!-- Screenshot Area Tow End -->

    <!-- Download Area Start  -->
    @include('frontend.layouts.download')
    <!-- Download Area End  -->
    <!-- Contact Area Start -->
    <div id="contact" class="contact-area-two section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-info-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-title">
                                    <h2>Contact Us</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolores ad molestiae rem repudiandae modi, quisquam illum hic euorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit accusamus</p>
                                </div>
                                <div class="contact-address">
                                    <ul>
                                        <li><i class="fa fa-phone"></i> <span class="information">(977) 324 644 676 / (800) 123 456 789</span></li>
                                        <li><i class="fa fa-envelope-o"></i> <span class="information"><a href="#">admin@power-boosts.com</a></span></li>
                                        <li><i class="fa fa-map-o"></i> <span class="information">No 40 Baria Sreet 133/2 New York City, NY,<br> United States</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form class="contact-form-area" action="mail.php" method="post" id="contact-form">
                                    <div class="row contact-form">
                                        <div class="form-group col-md-12">
                                            <input name="name" class="form-control" placeholder="Name" type="text" id="name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input name="email" class="form-control" placeholder="Email" type="email" id="email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input name="subject" class="form-control" placeholder="Subject" type="text" id="subject">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea name="message" class="yourmessage form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-form form-group col-sm-12">
                                            <button class="button submit-btn" type="submit"><span>Submit</span></button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->



@endsection

@section('script')

@endsection

