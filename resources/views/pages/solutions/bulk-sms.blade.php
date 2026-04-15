@extends('layouts.app', ['title' => 'কিউব লিমিটেড | বাল্ক এসএমএস'])

@section('content')
<section class="solution-banner">
    <div class="container two-column">
        <div class="solution-text">
            <span class="hero-subtitle">SMS Solution</span>
            <h1>বাল্ক এসএমএস</h1>
            <p>
                notice, campaign, reminder এবং mass communication-এর জন্য দ্রুত,
                নির্ভরযোগ্য এবং কার্যকর SMS solution।
            </p>
            <a href="{{ route('contact') }}" class="btn">যোগাযোগ করুন</a>
        </div>

        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/smartphone,message,notification,sms" alt="বাল্ক এসএমএস">
        </div>
    </div>
</section>

<section class="inner-section">
    <div class="container">
        <div class="section-title">
            <h2>Bulk SMS-এর ব্যবহার</h2>
            <p>দ্রুত তথ্য পৌঁছানোর সবচেয়ে কার্যকর মাধ্যমগুলোর একটি।</p>
        </div>

        <div class="service-grid">
            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/phone,notification,message,sms" alt="">
                <div class="service-card-body">
                    <h3>Notice Delivery</h3>
                    <p>শিক্ষার্থী, অভিভাবক বা গ্রাহকের কাছে দ্রুত notice পাঠানো যায়।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/mobile,text,alert,communication" alt="">
                <div class="service-card-body">
                    <h3>Campaign & Promotion</h3>
                    <p>offer, update এবং marketing message একসাথে পাঠানো যায়।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/smartphone,bulk,message,marketing" alt="">
                <div class="service-card-body">
                    <h3>Reminder & Alerts</h3>
                    <p>fee reminder, alert এবং জরুরি notification পাঠানোর সহজ উপায়।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h2>কেন Bulk SMS গুরুত্বপূর্ণ</h2>
            <p>
                কম সময়ে অনেক মানুষের কাছে তথ্য পৌঁছানো যায় এবং delivery rate খুবই বেশি।
            </p>
            <p>
                education, business, office এবং service sector-এ এটি অপরিহার্য।
            </p>
        </div>

        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/message,mobile,phone" alt="">
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection