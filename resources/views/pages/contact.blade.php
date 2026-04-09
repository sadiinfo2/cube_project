@extends('layouts.app', ['title' => 'কিউব লিমিটেড | যোগাযোগ'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>যোগাযোগ</h1>
        <p>আপনার প্রতিষ্ঠানের জন্য উপযুক্ত ডিজিটাল সমাধান নিয়ে আজই আমাদের সাথে কথা বলুন।</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="plain-card contact-info">
            <h3>যোগাযোগের তথ্য</h3>
            <p><strong>প্রতিষ্ঠান:</strong> কিউব লিমিটেড</p>
            <p><strong>ইমেইল:</strong> info@cubelimited.com</p>
            <p><strong>মোবাইল:</strong> +8801XXXXXXXXX</p>
            <p><strong>ঠিকানা:</strong> ঢাকা, বাংলাদেশ</p>
        </div>

        <form class="contact-form">
            <div class="form-row">
                <input type="text" placeholder="আপনার নাম">
                <input type="email" placeholder="ইমেইল">
            </div>

            <div class="form-row">
                <input type="text" placeholder="মোবাইল নম্বর">
                <input type="text" placeholder="বিষয়">
            </div>

            <textarea rows="6" placeholder="আপনার বার্তা লিখুন"></textarea>
            <button type="submit" class="btn">বার্তা পাঠান</button>
        </form>
    </div>
</section>
@endsection