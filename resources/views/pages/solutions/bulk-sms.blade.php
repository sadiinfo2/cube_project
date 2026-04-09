@extends('layouts.app', ['title' => 'কিউব লিমিটেড | বাল্ক এসএমএস'])

@section('content')
<section class="solution-hero">
    <div class="container solution-hero-grid">
        <div>
            <span class="eyebrow">ডিজিটাল সলিউশন</span>
            <h1>বাল্ক এসএমএস</h1>
            <p>নোটিশ, ক্যাম্পেইন এবং mass communication-এর জন্য দ্রুত ও নির্ভরযোগ্য উপস্থাপন।</p>
        </div>
        <div>
            <img src="{{ asset('assets/images/bulk-sms.jpg') }}" alt="বাল্ক এসএমএস">
        </div>
    </div>
</section>

<section class="section">
    <div class="container two-col">
        <div class="plain-card">
            <h3>ব্যবহার ক্ষেত্র</h3>
            <ul class="feature-list">
                <li>নোটিশ প্রদান</li>
                <li>অফার ও প্রচারণা</li>
                <li>বিল/পেমেন্ট reminder</li>
                <li>attendance alert</li>
            </ul>
        </div>
        <div class="plain-card">
            <h3>উপকারিতা</h3>
            <p>দ্রুত বার্তা পৌঁছানো, বেশি সংখ্যক ব্যবহারকারীর কাছে যোগাযোগ এবং simple campaign flow।</p>
        </div>
    </div>
</section>
@endsection