@extends('layouts.app', ['title' => 'কিউব লিমিটেড | হোম'])

@section('content')
<section class="hero-slider">
    <div class="slide active" style="background-image:url('https://loremflickr.com/1600/900/technology,office,business');">
        <div class="container slide-content">
            <span class="hero-subtitle">ডিজিটাল সলিউশন হাউজ</span>
            <h1>ডিজিটাল সলিউশন হাউজ থেকে আপনার প্রয়োজনীয় সলিউশনটি বেছে নিন</h1>
            <ul class="hero-list">
                <li>প্রয়োজনমাফিক ওয়েব সার্ভিসসমূহ</li>
                <li>প্রতিষ্ঠানের জন্য অটোমেশন</li>
                <li>শিক্ষা প্রতিষ্ঠানের স্মার্ট ম্যানেজমেন্ট</li>
                <li>ব্যবসা প্রতিষ্ঠানের জন্য আধুনিক ডিজিটাল উপস্থিতি</li>
            </ul>
        </div>
    </div>

    <div class="slide" style="background-image:url('https://loremflickr.com/1600/900/school,classroom,students');">
        <div class="container slide-content">
            <span class="hero-subtitle">Education Solution</span>
            <h1>শিক্ষা প্রতিষ্ঠানের ডিজিটাল সলিউশন</h1>
            <ul class="hero-list">
                <li>ক্লাস ম্যানেজমেন্ট</li>
                <li>ফিস ও একাউন্টিং</li>
                <li>পরীক্ষা, রিপোর্ট, মার্কশিট</li>
                <li>শিক্ষক, স্টাফ, নোটিশ ও SMS</li>
            </ul>
        </div>
    </div>

    <div class="slide" style="background-image:url('https://loremflickr.com/1600/900/mobile,chat,messaging');">
        <div class="container slide-content">
            <span class="hero-subtitle">Business Messaging</span>
            <h1>হোয়াটসঅ্যাপ ও বাল্ক মেসেজিং সলিউশন</h1>
            <ul class="hero-list">
                <li>কাস্টমার সাপোর্ট</li>
                <li>ক্যাম্পেইন মেসেজিং</li>
                <li>নোটিশ ও এলার্ট</li>
                <li>দ্রুত যোগাযোগ ব্যবস্থা</li>
            </ul>
        </div>
    </div>

    <div class="slider-dots">
        <button class="dot active" type="button"></button>
        <button class="dot" type="button"></button>
        <button class="dot" type="button"></button>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <div class="section-title">
            <h2>আমাদের সেবা সমূহ</h2>
            <p>আপনার প্রয়োজন অনুযায়ী আধুনিক ডিজিটাল সলিউশন।</p>
        </div>

        <div class="service-grid">
            <a href="{{ route('solutions.digital-health') }}" class="service-card">
                <img src="https://loremflickr.com/900/560/hospital,doctor,healthcare" alt="ডিজিটাল হেলথ সার্ভিস">
                <div class="service-card-body">
                    <h3>ডিজিটাল হেলথ সার্ভিস</h3>
                    <p>স্বাস্থ্যসেবা প্রতিষ্ঠানগুলোর আধুনিক ডিজিটাল উপস্থাপন।</p>
                    <span>বিস্তারিত</span>
                </div>
            </a>

            <a href="{{ route('solutions.institute') }}" class="service-card">
                <img src="https://loremflickr.com/900/560/school,students,classroom" alt="ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম">
                <div class="service-card-body">
                    <h3>ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম</h3>
                    <p>শিক্ষা প্রতিষ্ঠানের জন্য স্মার্ট ব্যবস্থাপনা সমাধান।</p>
                    <span>বিস্তারিত</span>
                </div>
            </a>

            <a href="{{ route('solutions.whatsapp') }}" class="service-card">
                <img src="https://loremflickr.com/900/560/phone,chat,messaging" alt="হোয়াটসঅ্যাপ ম্যাসেজিং">
                <div class="service-card-body">
                    <h3>হোয়াটসঅ্যাপ ম্যাসেজিং</h3>
                    <p>দ্রুত, স্মার্ট এবং পেশাদার গ্রাহক যোগাযোগ।</p>
                    <span>বিস্তারিত</span>
                </div>
            </a>

            <a href="{{ route('solutions.website') }}" class="service-card">
                <img src="https://loremflickr.com/900/560/web,design,computer,office" alt="ওয়েবসাইট সলিউশন">
                <div class="service-card-body">
                    <h3>ওয়েবসাইট সলিউশন</h3>
                    <p>প্রতিষ্ঠানের জন্য responsive corporate website design।</p>
                    <span>বিস্তারিত</span>
                </div>
            </a>

            <a href="{{ route('solutions.idcard') }}" class="service-card">
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=900&auto=format&fit=crop" alt="আইডি কার্ড সলিউশন">
                <div class="service-card-body">
                    <h3>আইডি কার্ড সলিউশন</h3>
                    <p>প্রতিষ্ঠানের পরিচিতি কার্ডের আধুনিক নকশা ও উপস্থাপন।</p>
                    <span>বিস্তারিত</span>
                </div>
            </a>

            <a href="{{ route('solutions.bulk-sms') }}" class="service-card">
                <img src="https://loremflickr.com/900/560/smartphone,text,message,notification" alt="বাল্ক এসএমএস">
                <div class="service-card-body">
                    <h3>বাল্ক এসএমএস</h3>
                    <p>দ্রুত নোটিশ, ক্যাম্পেইন ও গ্রাহক যোগাযোগ সমাধান।</p>
                    <span>বিস্তারিত</span>
                </div>
            </a>
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection