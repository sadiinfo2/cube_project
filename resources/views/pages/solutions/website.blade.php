@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ওয়েবসাইট সলিউশন'])

@section('content')
<section class="solution-hero">
    <div class="container solution-hero-grid">
        <div>
            <span class="eyebrow">ডিজিটাল সলিউশন</span>
            <h1>ওয়েবসাইট সলিউশন</h1>
            <p>আধুনিক, responsive এবং ব্যবসাবান্ধব corporate website presentation।</p>
        </div>
        <div>
            <img src="{{ asset('assets/images/website.jpg') }}" alt="ওয়েবসাইট সলিউশন">
        </div>
    </div>
</section>

<section class="section">
    <div class="container two-col">
        <div class="plain-card">
            <h3>কেন প্রয়োজন</h3>
            <p>একটি ভালো ওয়েবসাইট আপনার ব্র্যান্ড, সেবা ও বিশ্বাসযোগ্যতা সুন্দরভাবে তুলে ধরে।</p>
        </div>
        <div class="plain-card">
            <h3>সুবিধা</h3>
            <ul class="feature-list">
                <li>কর্পোরেট পরিচিতি</li>
                <li>service page structure</li>
                <li>responsive layout</li>
                <li>professional contact section</li>
            </ul>
        </div>
    </div>
</section>
@endsection