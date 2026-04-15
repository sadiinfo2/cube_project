@extends('layouts.app', ['title' => 'Cube Limited | Client Review'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>Client Review</h1>
        <p>আপনার মতামত আমাদের সেবাকে আরও উন্নত করতে সাহায্য করে।</p>
    </div>
</section>

<section class="inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h3>আপনার অভিজ্ঞতা লিখুন</h3>
            <p>সেবা, ডিজাইন, সাপোর্ট এবং overall experience সম্পর্কে আপনার মূল্যবান মতামত দিন।</p>
        </div>

        <form class="form-card">
            <div class="form-row">
                <input type="text" placeholder="আপনার নাম">
                <input type="text" placeholder="প্রতিষ্ঠানের নাম">
            </div>
            <div class="form-row">
                <input type="email" placeholder="ইমেইল">
                <select>
                    <option selected disabled>রেটিং নির্বাচন করুন</option>
                    <option>5 Star</option>
                    <option>4 Star</option>
                    <option>3 Star</option>
                    <option>2 Star</option>
                    <option>1 Star</option>
                </select>
            </div>
            <textarea rows="7" placeholder="আপনার রিভিউ লিখুন"></textarea>
            <button type="submit" class="btn">Submit Review</button>
        </form>
    </div>
</section>

@include('partials.review-cta')
@endsection