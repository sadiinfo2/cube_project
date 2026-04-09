@extends('layouts.app', ['title' => 'কিউব লিমিটেড | আমাদের সম্পর্কে'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>আমাদের সম্পর্কে</h1>
        <p>নির্ভরযোগ্য, আধুনিক এবং উপযোগী ডিজিটাল সমাধান তৈরিতে প্রতিশ্রুতিবদ্ধ।</p>
    </div>
</section>

<section class="section">
    <div class="container two-col">
        <div>
            <img class="rounded-img" src="{{ asset('assets/images/about.jpg') }}" alt="About Cube Limited">
        </div>
        <div>
            <h2>কিউব লিমিটেড কী করে?</h2>
            <p>
                কিউব লিমিটেড ব্যবসা, শিক্ষা প্রতিষ্ঠান, স্বাস্থ্যসেবা ও কর্পোরেট প্রতিষ্ঠানের জন্য
                ওয়েবসাইট, সফটওয়্যার frontend, ডিজিটাল যোগাযোগ এবং solution presentation তৈরি করে।
            </p>
            <p>
                আমাদের লক্ষ্য হচ্ছে সহজ, মার্জিত, responsive এবং business-focused design তৈরি করা।
            </p>
        </div>
    </div>
</section>
@endsection