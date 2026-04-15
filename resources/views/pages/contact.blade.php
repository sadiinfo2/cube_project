@extends('layouts.app', ['title' => 'Cube Limited | Contact'])

@section('content')
<section class="page-banner">
    <div class="container">
        <h1>Contact Us</h1>
        <p>আপনার প্রয়োজনীয় সলিউশন সম্পর্কে আজই যোগাযোগ করুন।</p>
    </div>
</section>

<section class="inner-section">
    <div class="container two-column">
        <div class="text-card">
            <h3>যোগাযোগের তথ্য</h3>
            <p><strong>Email:</strong> info@cubelimited.com</p>
            <p><strong>Phone:</strong> +8801XXXXXXXXX</p>
            <p><strong>Address:</strong> Mymensingh, Bangladesh</p>
        </div>

        <form class="form-card">
            <div class="form-row">
                <input type="text" placeholder="আপনার নাম">
                <input type="email" placeholder="ইমেইল">
            </div>
            <div class="form-row">
                <input type="text" placeholder="ফোন নম্বর">
                <input type="text" placeholder="বিষয়">
            </div>
            <textarea rows="6" placeholder="আপনার বার্তা লিখুন"></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</section>

<img class="rounded-img" src="https://loremflickr.com/1000/650/office,reception,business" alt="">

@include('partials.review-cta')
@endsection