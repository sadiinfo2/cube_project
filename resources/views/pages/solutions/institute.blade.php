@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম'])

@section('content')
<section class="solution-hero">
    <div class="container solution-hero-grid">
        <div>
            <span class="eyebrow">ডিজিটাল সলিউশন</span>
            <h1>ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম</h1>
            <p>শিক্ষা প্রতিষ্ঠানের প্রশাসনিক ব্যবস্থাপনা ও তথ্য সংরক্ষণের জন্য আধুনিক সমাধান।</p>
        </div>
        <div>
            <img src="{{ asset('assets/images/institute.jpg') }}" alt="ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম">
        </div>
    </div>
</section>

<section class="section">
    <div class="container card-grid">
        <div class="plain-card">
            <h3>Student Management</h3>
            <p>শিক্ষার্থী তথ্য, প্রোফাইল ও রেকর্ড ব্যবস্থাপনা।</p>
        </div>
        <div class="plain-card">
            <h3>Attendance</h3>
            <p>উপস্থিতি রিপোর্ট, tracking ও daily monitoring।</p>
        </div>
        <div class="plain-card">
            <h3>Fee Collection</h3>
            <p>ফি তথ্য ও হিসাব ব্যবস্থাপনার উপস্থাপন।</p>
        </div>
    </div>
</section>
@endsection