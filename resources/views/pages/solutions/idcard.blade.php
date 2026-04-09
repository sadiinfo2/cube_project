@extends('layouts.app', ['title' => 'কিউব লিমিটেড | আইডি কার্ড সলিউশন'])

@section('content')
<section class="solution-hero">
    <div class="container solution-hero-grid">
        <div>
            <span class="eyebrow">ডিজিটাল সলিউশন</span>
            <h1>আইডি কার্ড সলিউশন</h1>
            <p>প্রতিষ্ঠানের পরিচয়পত্রের উপস্থাপন, ডিজাইন ধারণা এবং ব্যবস্থাপনা কাঠামো।</p>
        </div>
        <div>
            <img src="{{ asset('assets/images/idcard.jpg') }}" alt="আইডি কার্ড সলিউশন">
        </div>
    </div>
</section>

<section class="section">
    <div class="container plain-card">
        <ul class="feature-list">
            <li>আইডি কার্ড design layout</li>
            <li>প্রিন্ট রেডি structure</li>
            <li>staff/student পরিচিতি ব্যবস্থাপনা</li>
            <li>professional brand consistency</li>
        </ul>
    </div>
</section>
@endsection