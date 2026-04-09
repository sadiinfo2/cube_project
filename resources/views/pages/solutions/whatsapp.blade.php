@extends('layouts.app', ['title' => 'কিউব লিমিটেড | হোয়াটসঅ্যাপ ম্যাসেজিং'])

@section('content')
<section class="solution-hero">
    <div class="container solution-hero-grid">
        <div>
            <span class="eyebrow">ডিজিটাল সলিউশন</span>
            <h1>হোয়াটসঅ্যাপ ম্যাসেজিং</h1>
            <p>দ্রুত, পরিচিত এবং গ্রাহকবান্ধব যোগাযোগের আধুনিক উপায়।</p>
        </div>
        <div>
            <img src="{{ asset('assets/images/whatsapp.jpg') }}" alt="হোয়াটসঅ্যাপ ম্যাসেজিং">
        </div>
    </div>
</section>

<section class="section">
    <div class="container plain-card">
        <ul class="feature-list">
            <li>গ্রাহক সাপোর্ট মেসেজিং</li>
            <li>নোটিশ ও আপডেট পাঠানো</li>
            <li>service communication flow</li>
            <li>marketing-friendly presentation</li>
        </ul>
    </div>
</section>
@endsection