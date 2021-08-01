<!doctype html>
<html class="no-js" lang="vn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') | VietMMO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('frontend')}}/">
   @include('frontend.layouts.head')
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
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
{{--@include('frontend.layouts.video')--}}
    <!-- Video Area End -->

    <!-- Project Count Area Start -->
{{--@include('frontend.layouts.project_count')--}}
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
{{--@include('frontend.layouts.download')--}}
    <!-- Download Area End  -->

    <!-- Contact Area Start -->
@include('frontend.layouts.contact')
    <!-- Contact Area End -->

    <!-- Footer Area Start -->
@include('frontend.layouts.footer')
    <!-- Footer Area End -->

</div>

<!-- JS
============================================ -->

@include('frontend.layouts.footer-srcipt')


</body>

</html>
