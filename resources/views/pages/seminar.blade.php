@extends('layouts.app', ['title' => 'Cube Limited | Seminar'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>Seminar</h1>
        <p>ডিজিটাল সেবা, শিক্ষা ব্যবস্থাপনা এবং আধুনিক প্রতিষ্ঠানের রূপান্তর নিয়ে আয়োজন।</p>
    </div>
</section>

<section class="services-section">
    <div class="container service-grid">
        <div class="service-card static-card">
            <img src="https://picsum.photos/seed/seminar-1/700/450" alt="">
            <div class="service-card-body">
                <h3>ডিজিটাল বিজনেস ট্রান্সফরমেশন</h3>
                <p>প্রতিষ্ঠানকে প্রযুক্তির মাধ্যমে স্মার্ট করার ধাপসমূহ।</p>
            </div>
        </div>

        <div class="service-card static-card">
            <img src="https://picsum.photos/seed/seminar-2/700/450" alt="">
            <div class="service-card-body">
                <h3>শিক্ষা ব্যবস্থাপনা অটোমেশন</h3>
                <p>স্কুল-কলেজের ডিজিটাল রূপান্তরের কার্যকর সমাধান।</p>
            </div>
        </div>

        <div class="service-card static-card">
            <img src="https://picsum.photos/seed/seminar-3/700/450" alt="">
            <div class="service-card-body">
                <h3>কর্পোরেট ওয়েবসাইট স্ট্র্যাটেজি</h3>
                <p>প্রতিষ্ঠানের অনলাইন উপস্থিতি আরও শক্তিশালী করার উপায়।</p>
            </div>
        </div>
    </div>
</section>

<img src="https://loremflickr.com/900/560/seminar,conference,business" alt="">
<img src="https://loremflickr.com/900/560/workshop,training,classroom" alt="">
<img src="https://loremflickr.com/900/560/presentation,meeting,audience" alt="">

@include('partials.review-cta')
@endsection