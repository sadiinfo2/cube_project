@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ডিজিটাল হেলথ সার্ভিস'])

@section('content')
<section class="solution-banner">
    <div class="container two-column">
        <div class="solution-text">
            <span class="hero-subtitle">Healthcare Solution</span>
            <h1>ডিজিটাল হেলথ সার্ভিস</h1>
            <p>
                ক্লিনিক, হাসপাতাল, ডায়াগনস্টিক সেন্টার এবং স্বাস্থ্যসেবা প্রতিষ্ঠানের জন্য
                আধুনিক ডিজিটাল উপস্থিতি, তথ্য উপস্থাপন এবং smart communication solution।
            </p>
            <a href="{{ route('contact') }}" class="btn">যোগাযোগ করুন</a>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/healthcare,hospital,doctor" alt="ডিজিটাল হেলথ সার্ভিস">
        </div>
    </div>
</section>

<section class="inner-section">
    <div class="container">
        <div class="section-title">
            <h2>এই সেবায় যা থাকছে</h2>
            <p>স্বাস্থ্যসেবা প্রতিষ্ঠানের জন্য professional digital presentation ও feature showcase।</p>
        </div>

        <div class="service-grid">
            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/clinic,doctor,patient" alt="">
                <div class="service-card-body">
                    <h3>Service Information Display</h3>
                    <p>চিকিৎসা সেবা, বিভাগ, সময়সূচি ও যোগাযোগ তথ্য সুন্দরভাবে উপস্থাপন।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/medical,hospital,reception" alt="">
                <div class="service-card-body">
                    <h3>Modern Healthcare Branding</h3>
                    <p>স্বাস্থ্যসেবা প্রতিষ্ঠানের জন্য পরিষ্কার, বিশ্বাসযোগ্য এবং আধুনিক ডিজিটাল look।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/diagnostic,lab,healthcare" alt="">
                <div class="service-card-body">
                    <h3>Patient Friendly Presentation</h3>
                    <p>রোগী ও সেবাগ্রহীতার জন্য সহজবোধ্য এবং সুসংগঠিত তথ্য প্রদর্শন।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h2>কেন এই সেবা প্রয়োজন</h2>
            <p>
                আধুনিক সময়ে একটি স্বাস্থ্যসেবা প্রতিষ্ঠানকে শুধু অফলাইনে নয়, অনলাইনেও
                পেশাদার ও বিশ্বাসযোগ্যভাবে উপস্থাপন করা অত্যন্ত জরুরি।
            </p>
            <p>
                এই service-এর মাধ্যমে আপনার প্রতিষ্ঠানের পরিচিতি, সেবা তালিকা,
                রোগী সাপোর্ট এবং যোগাযোগ আরও সুসংগঠিতভাবে দেখানো সম্ভব।
            </p>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/hospital,medical,service" alt="">
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection