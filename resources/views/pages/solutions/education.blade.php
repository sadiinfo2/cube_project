@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম'])

@section('content')
<section class="solution-banner">
    <div class="container two-column">
        <div class="solution-text">
            <span class="hero-subtitle">Education Solution</span>
            <h1>ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম</h1>
            <p>
                স্কুল, কলেজ, মাদরাসা ও কোচিং সেন্টারের জন্য attendance, fees, result,
                notice, accounts এবং প্রশাসনিক কাজের স্মার্ট সমাধান।
            </p>
            <a href="{{ route('contact') }}" class="btn">যোগাযোগ করুন</a>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/school,education,classroom" alt="ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম">
        </div>
    </div>
</section>

<section class="inner-section">
    <div class="container">
        <div class="section-title">
            <h2>মূল ফিচারসমূহ</h2>
            <p>প্রতিষ্ঠান ব্যবস্থাপনার জন্য প্রয়োজনীয় digital module সমূহ।</p>
        </div>

        <div class="service-grid">
            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/student,classroom,school" alt="">
                <div class="service-card-body">
                    <h3>Student Management</h3>
                    <p>শিক্ষার্থীর তথ্য, profile, শ্রেণি, section এবং academic record management।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/teacher,class,education" alt="">
                <div class="service-card-body">
                    <h3>Attendance & Routine</h3>
                    <p>attendance monitoring, class routine এবং daily institution activity management।</p>
                </div>
            </div>

            <div class="service-card static-card">
                <img src="https://loremflickr.com/900/560/computer,students,school" alt="">
                <div class="service-card-body">
                    <h3>Fees, Result & Reports</h3>
                    <p>ফি সংগ্রহ, পরীক্ষার ফলাফল, রিপোর্ট ও হিসাব ব্যবস্থাপনার smart solution।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h2>কেন প্রতিষ্ঠানগুলো এটি পছন্দ করে</h2>
            <p>
                প্রশাসনিক কাজ সহজ হয়, সময় বাঁচে, তথ্য সংরক্ষণ নিরাপদ হয় এবং reporting আরও
                পরিষ্কারভাবে করা যায়।
            </p>
            <p>
                শিক্ষা প্রতিষ্ঠানের জন্য এটি একটি complete digital management feel দেয়।
            </p>
        </div>
        <div>
            <img class="rounded-img" src="https://loremflickr.com/1000/650/education,students,computer" alt="">
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection