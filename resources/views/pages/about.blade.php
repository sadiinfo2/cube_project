@extends('layouts.app', ['title' => 'Cube Limited | About'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>About Us</h1>
        <p>প্রযুক্তিনির্ভর সমাধানের মাধ্যমে প্রতিষ্ঠানকে আরও স্মার্ট করা আমাদের লক্ষ্য।</p>
    </div>
</section>

<section class="inner-section">
    <div class="container two-column">
        <div>
            <img class="rounded-img" src="https://picsum.photos/seed/about-cube/900/600" alt="About Cube Limited">
        </div>
        <div class="text-card">
            <h2>কিউব লিমিটেড</h2>
            <p>
                কিউব লিমিটেড আধুনিক ডিজিটাল সেবা, ওয়েবসাইট, শিক্ষা ব্যবস্থাপনা সফটওয়্যার,
                হোয়াটসঅ্যাপ যোগাযোগ ব্যবস্থা এবং প্রতিষ্ঠানভিত্তিক স্মার্ট সলিউশন প্রদান করে।
            </p>
        </div>
    </div>
</section>

<img class="rounded-img" src="https://loremflickr.com/1000/650/office,team,business" alt="About Cube Limited">

@include('partials.review-cta')
@endsection