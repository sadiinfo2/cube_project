@extends('layouts.app', ['title' => 'কিউব লিমিটেড | হোয়াটসঅ্যাপ ম্যাসেজিং'])

@section('content')
<section class="solution-banner">
    <div class="container two-column">
        <div class="solution-text">
            <span class="hero-subtitle">Messaging Solution</span>
            <h1>হোয়াটসঅ্যাপ ম্যাসেজিং</h1>
            <p>
                গ্রাহকের সাথে দ্রুত, সহজ এবং পেশাদার যোগাযোগের জন্য হোয়াটসঅ্যাপ ভিত্তিক
                business messaging solution।
            </p>
            <a href="{{ route('contact') }}" class="btn">যোগাযোগ করুন</a>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/phone,messaging,chat" alt="হোয়াটসঅ্যাপ ম্যাসেজিং">
        </div>
    </div>
</section>

<section class="inner-section">
    <div class="container">
        <div class="section-title">
            <h2>হোয়াটসঅ্যাপ ম্যাসেজিং-এর সুবিধা</h2>
            <p>দ্রুত customer response, support flow এবং business communication।</p>
        </div>

        <div class="service-grid">
            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/mobile,chat,customer" alt="">
                <div class="service-card-body">
                    <h3>Customer Support</h3>
                    <p>গ্রাহকের প্রশ্ন, তথ্য ও support message দ্রুতভাবে handle করা যায়।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/phone,marketing,message" alt="">
                <div class="service-card-body">
                    <h3>Promotional Messaging</h3>
                    <p>অফার, campaign এবং নতুন service update দ্রুত পাঠানো সম্ভব।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/support,phone,office" alt="">
                <div class="service-card-body">
                    <h3>Business Communication</h3>
                    <p>স্মার্ট ও পরিচিত মাধ্যমে client communication আরও সহজ হয়।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h2>কার জন্য উপযুক্ত</h2>
            <p>
                retail business, service company, প্রতিষ্ঠানভিত্তিক support team,
                healthcare support, education notice এবং corporate communication-এর জন্য।
            </p>
            <p>
                দ্রুত response-based business model-এ এটি খুবই কার্যকর।
            </p>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/chat,phone,business" alt="">
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection