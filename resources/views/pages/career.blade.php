@extends('layouts.app', ['title' => 'Cube Limited | Career'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>Career</h1>
        <p>প্রযুক্তিপ্রেমী ও সৃজনশীলদের জন্য কাজের সুযোগ।</p>
    </div>
</section>

<section class="services-section">
    <div class="container service-grid">
        <div class="service-card static-card">
            <img src="https://picsum.photos/seed/career-1/700/450" alt="">
            <div class="service-card-body">
                <h3>Frontend Developer</h3>
                <p>Laravel Blade, CSS, JavaScript এবং responsive UI design-এ দক্ষতা।</p>
            </div>
        </div>

        <div class="service-card static-card">
            <img src="https://picsum.photos/seed/career-2/700/450" alt="">
            <div class="service-card-body">
                <h3>UI/UX Designer</h3>
                <p>Corporate layout, landing page design এবং clean visual presentation।</p>
            </div>
        </div>

        <div class="service-card static-card">
            <img src="https://picsum.photos/seed/career-3/700/450" alt="">
            <div class="service-card-body">
                <h3>Marketing Executive</h3>
                <p>Digital promotion, communication এবং campaign support।</p>
            </div>
        </div>
    </div>
</section>

<img src="https://loremflickr.com/900/560/programmer,office,computer" alt="">
<img src="https://loremflickr.com/900/560/designer,workspace,laptop" alt="">
<img src="https://loremflickr.com/900/560/marketing,office,meeting" alt="">

@include('partials.review-cta')
@endsection