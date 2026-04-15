@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ওয়েবসাইট সলিউশন'])

@section('content')
<section class="solution-banner">
    <div class="container two-column">
        <div class="solution-text">
            <span class="hero-subtitle">Website Solution</span>
            <h1>ওয়েবসাইট সলিউশন</h1>
            <p>
                ব্যবসা, শিক্ষা প্রতিষ্ঠান, স্বাস্থ্যসেবা ও কর্পোরেট প্রতিষ্ঠানের জন্য responsive,
                professional এবং modern website design।
            </p>
            <a href="{{ route('contact') }}" class="btn">যোগাযোগ করুন</a>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/web,design,computer" alt="ওয়েবসাইট সলিউশন">
        </div>
    </div>
</section>

<section class="inner-section">
    <div class="container">
        <div class="section-title">
            <h2>একটি professional website-এ যা থাকে</h2>
            <p>Modern web presence-এর জন্য প্রয়োজনীয় key section এবং presentation।</p>
        </div>

        <div class="service-grid">
            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/laptop,website,office" alt="">
                <div class="service-card-body">
                    <h3>Landing Page Design</h3>
                    <p>প্রথম impression তৈরি করার জন্য modern hero banner এবং clean layout।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/computer,web,developer" alt="">
                <div class="service-card-body">
                    <h3>Service Page Structure</h3>
                    <p>প্রতিটি service-এর জন্য আলাদা page, ছবি, তথ্য এবং call to action।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/office,computer,design" alt="">
                <div class="service-card-body">
                    <h3>Responsive Experience</h3>
                    <p>Desktop, tablet ও mobile—সব device-এ সুন্দরভাবে দেখা যায়।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h2>আপনার প্রতিষ্ঠানের জন্য কেন জরুরি</h2>
            <p>
                একটি website আপনার brand value বাড়ায়, service visibility তৈরি করে
                এবং client trust বাড়াতে সাহায্য করে।
            </p>
            <p>
                modern online presence ছাড়া বর্তমানে প্রতিষ্ঠানের competitive image অসম্পূর্ণ থাকে।
            </p>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/web,office,business" alt="">
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection