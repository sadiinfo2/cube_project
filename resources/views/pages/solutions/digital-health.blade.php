@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ডিজিটাল হেলথ সার্ভিস'])

@section('content')
<section class="solution-hero">
    <div class="container solution-hero-grid">
        <div>
            <span class="eyebrow">ডিজিটাল সলিউশন</span>
            <h1>ডিজিটাল হেলথ সার্ভিস</h1>
            <p>স্বাস্থ্যসেবা প্রতিষ্ঠানের জন্য তথ্য উপস্থাপন, সেবা পরিচিতি এবং patient-friendly interface।</p>
        </div>
        <div>
            <img src="{{ asset('assets/images/digital-health.jpg') }}" alt="ডিজিটাল হেলথ সার্ভিস">
        </div>
    </div>
</section>

<section class="section">
    <div class="container two-col">
        <div class="plain-card">
            <h3>যা পাবেন</h3>
            <ul class="feature-list">
                <li>ক্লিনিক/ডায়াগনস্টিক service presentation</li>
                <li>চিকিৎসা তথ্যের পরিষ্কার layout</li>
                <li>responsive page design</li>
                <li>modern corporate visual structure</li>
            </ul>
        </div>
        <div class="plain-card">
            <h3>উপযোগী</h3>
            <p>ক্লিনিক, হাসপাতাল, ডায়াগনস্টিক সেন্টার, স্বাস্থ্যসেবা ক্যাম্পেইন এবং health-focused প্রতিষ্ঠান।</p>
        </div>
    </div>
</section>
@endsection