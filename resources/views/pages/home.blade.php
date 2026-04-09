@extends('layouts.app', ['title' => 'কিউব লিমিটেড | হোম'])

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div>
            <span class="eyebrow">আপনার বিশ্বস্ত ডিজিটাল পার্টনার</span>
            <h1>ব্যবসা, শিক্ষা ও সেবার জন্য স্মার্ট ডিজিটাল সমাধান</h1>
            <p>
                কিউব লিমিটেড ওয়েবসাইট, সফটওয়্যার, বাল্ক মেসেজিং, ইনস্টিটিউট ম্যানেজমেন্ট
                ও ডিজিটাল ব্র্যান্ডিং সলিউশন প্রদান করে।
            </p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn">যোগাযোগ করুন</a>
                <a href="#services" class="btn btn-outline">আমাদের সেবা</a>
            </div>
        </div>

        <div class="hero-image-card">
            <img src="{{ asset('assets/images/hero-office.jpg') }}" alt="Cube Limited Hero">
        </div>
    </div>
</section>

<section class="section" id="services">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow">আমাদের সলিউশন</span>
            <h2>প্রতিটি সেবার জন্য আলাদা পেইজ, আলাদা ভিজ্যুয়াল ও পরিষ্কার উপস্থাপন</h2>
            <p>কর্পোরেট presentation style-এ service cards এবং solution-based layout।</p>
        </div>

        <div class="card-grid">
            <a href="{{ route('solutions.digital-health') }}" class="service-card">
                <img src="{{ asset('assets/images/digital-health.jpg') }}" alt="ডিজিটাল হেলথ সার্ভিস">
                <div class="service-card-body">
                    <h3>ডিজিটাল হেলথ সার্ভিস</h3>
                    <p>ক্লিনিক, ডায়াগনস্টিক ও স্বাস্থ্যসেবা প্রতিষ্ঠানের জন্য ডিজিটাল উপস্থিতি।</p>
                </div>
            </a>

            <a href="{{ route('solutions.whatsapp') }}" class="service-card">
                <img src="{{ asset('assets/images/whatsapp.jpg') }}" alt="হোয়াটসঅ্যাপ ম্যাসেজিং">
                <div class="service-card-body">
                    <h3>হোয়াটসঅ্যাপ ম্যাসেজিং</h3>
                    <p>গ্রাহক সাপোর্ট, প্রমোশন ও নোটিফিকেশনের জন্য দ্রুত যোগাযোগ ব্যবস্থা।</p>
                </div>
            </a>

            <a href="{{ route('solutions.institute') }}" class="service-card">
                <img src="{{ asset('assets/images/institute.jpg') }}" alt="ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম">
                <div class="service-card-body">
                    <h3>ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম</h3>
                    <p>শিক্ষা প্রতিষ্ঠানের attendance, fees, student management-এর সমাধান।</p>
                </div>
            </a>

            <a href="{{ route('solutions.website') }}" class="service-card">
                <img src="{{ asset('assets/images/website.jpg') }}" alt="ওয়েবসাইট সলিউশন">
                <div class="service-card-body">
                    <h3>ওয়েবসাইট সলিউশন</h3>
                    <p>আধুনিক responsive corporate website design ও frontend interface।</p>
                </div>
            </a>

            <a href="{{ route('solutions.idcard') }}" class="service-card">
                <img src="{{ asset('assets/images/idcard.jpg') }}" alt="আইডি কার্ড সলিউশন">
                <div class="service-card-body">
                    <h3>আইডি কার্ড সলিউশন</h3>
                    <p>প্রতিষ্ঠানের পরিচয়পত্র ব্যবস্থাপনা ও প্রিন্ট রেডি ডিজাইন উপস্থাপন।</p>
                </div>
            </a>

            <a href="{{ route('solutions.bulk-sms') }}" class="service-card">
                <img src="{{ asset('assets/images/bulk-sms.jpg') }}" alt="বাল্ক এসএমএস">
                <div class="service-card-body">
                    <h3>বাল্ক এসএমএস</h3>
                    <p>নোটিশ, ক্যাম্পেইন ও জরুরি বার্তার জন্য কার্যকর mass communication।</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container two-col align-center">
        <div>
            <img class="rounded-img" src="{{ asset('assets/images/company.jpg') }}" alt="কিউব লিমিটেড">
        </div>
        <div>
            <span class="eyebrow">আমাদের সম্পর্কে</span>
            <h2>নকশা, প্রযুক্তি ও উপস্থাপনার সমন্বয়ে শক্তিশালী ডিজিটাল অভিজ্ঞতা</h2>
            <p>
                আমরা এমন frontend design তৈরি করি যা ব্যবসায়িক বিশ্বাসযোগ্যতা বাড়ায়,
                service presentation-কে আরো পরিষ্কার করে এবং modern corporate look দেয়।
            </p>
            <a href="{{ route('about') }}" class="btn">আরও জানুন</a>
        </div>
    </div>
</section>
@endsection