@extends('layouts.app', ['title' => 'কিউব লিমিটেড | সেমিনার'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>সেমিনার</h1>
        <p>ডিজিটাল পরিবর্তন, সফটওয়্যার ব্যবহার এবং আধুনিক কর্পোরেট ওয়েব উপস্থিতি নিয়ে আয়োজন।</p>
    </div>
</section>

<section class="section">
    <div class="container card-grid">
        <div class="plain-card">
            <img src="{{ asset('assets/images/seminar-1.jpg') }}" alt="সেমিনার ১">
            <h3>ডিজিটাল বিজনেস ট্রান্সফরমেশন</h3>
            <p>প্রযুক্তির মাধ্যমে ব্যবসা কীভাবে আরো সংগঠিত ও কার্যকর হয়।</p>
        </div>

        <div class="plain-card">
            <img src="{{ asset('assets/images/seminar-2.jpg') }}" alt="সেমিনার ২">
            <h3>এডুকেশন ম্যানেজমেন্ট সিস্টেম</h3>
            <p>শিক্ষা প্রতিষ্ঠানে automation, attendance, এবং reporting-এর ভবিষ্যৎ।</p>
        </div>

        <div class="plain-card">
            <img src="{{ asset('assets/images/seminar-3.jpg') }}" alt="সেমিনার ৩">
            <h3>কর্পোরেট ওয়েবসাইট স্ট্রাটেজি</h3>
            <p>একটি modern website কীভাবে brand value ও trust বাড়ায়।</p>
        </div>
    </div>
</section>
@endsection