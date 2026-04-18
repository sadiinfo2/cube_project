@extends('layouts.app', ['title' => 'কিউব লিমিটেড | Bulk SMS Solution'])

@section('content')

<!-- HERO -->
<section class="cube-premium-sms-hero">
    <div class="container cube-premium-sms-hero-grid">

        <div class="cube-premium-sms-hero-content">
            <span class="cube-premium-sms-kicker">Bulk SMS Service</span>

            <h1>BULK SMS পাঠান দেশের সেরা রেটে</h1>
            <h2>দ্রুত, নির্ভরযোগ্য ও প্রফেশনাল SMS সলিউশন</h2>

            <p>
                শিক্ষা প্রতিষ্ঠান, ব্যবসা প্রতিষ্ঠান, হাসপাতাল, কোচিং সেন্টার
                ও বিভিন্ন প্রতিষ্ঠানের জন্য দ্রুত notification, reminder
                এবং campaign চালানোর সহজ সমাধান।
            </p>

            <ul class="cube-premium-sms-list">
                <li>✔ Fast SMS Delivery</li>
                <li>✔ Masking & Non-Masking SMS</li>
                <li>✔ Easy Control Panel</li>
                <li>✔ Reliable Support</li>
            </ul>

            <div class="cube-premium-sms-actions">
                <a href="{{ route('contact') }}" class="cube-premium-sms-btn primary">
                    Order Now
                </a>

                <a href="{{ route('contact') }}" class="cube-premium-sms-btn secondary">
                    Contact Us
                </a>
            </div>
        </div>

        <div class="cube-premium-sms-hero-image">
            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1400&auto=format&fit=crop" alt="Bulk SMS Service">
        </div>

    </div>
</section>

<!-- WHY SECTION -->
<section class="cube-premium-sms-intro">
    <div class="container cube-premium-sms-intro-grid">

        <div class="cube-premium-sms-intro-text">
            <h2>Bulk SMS কেন ব্যবহার করবেন?</h2>

            <p>
                SMS হচ্ছে সবচেয়ে দ্রুত এবং সরাসরি communication মাধ্যম।
                Email বা app notification-এর তুলনায় SMS user-এর কাছে
                instantly পৌঁছে যায়।
            </p>

            <div class="cube-premium-sms-mini-points">
                <span>Instant Reach</span>
                <span>High Open Rate</span>
                <span>Direct Communication</span>
            </div>
        </div>

        <div class="cube-premium-sms-intro-image">
            <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop" alt="SMS Dashboard">
        </div>

    </div>
</section>

<!-- PRICING -->
<section class="cube-premium-sms-pricing">
    <div class="container">

        <div class="section-title">
            <h2>Bulk SMS Price</h2>
            <p>আপনার প্রয়োজন অনুযায়ী প্যাকেজ বেছে নিন</p>
        </div>

        <div class="cube-premium-sms-pricing-grid">

            <div class="cube-premium-sms-price-card">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop" alt="Non Masking SMS">
                <div class="cube-premium-sms-price-body">
                    <span class="cube-premium-sms-plan">Non Masking</span>
                    <h3>Portal Setup</h3>
                    <div class="cube-premium-sms-price">৳ 3000</div>
                    <p>General SMS এর জন্য basic setup</p>
                </div>
            </div>

            <div class="cube-premium-sms-price-card featured">
                <span class="cube-premium-sms-badge">Popular</span>
                <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop" alt="Masking SMS">
                <div class="cube-premium-sms-price-body">
                    <span class="cube-premium-sms-plan">Masking</span>
                    <h3>Onboard Setup</h3>
                    <div class="cube-premium-sms-price">৳ 5000</div>
                    <p>Brand name সহ professional SMS setup</p>
                </div>
            </div>

            <div class="cube-premium-sms-price-card">
                <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?q=80&w=1200&auto=format&fit=crop" alt="Recharge SMS">
                <div class="cube-premium-sms-price-body">
                    <span class="cube-premium-sms-plan">Recharge</span>
                    <h3>SMS Balance</h3>
                    <div class="cube-premium-sms-price">Custom</div>
                    <p>Flexible recharge system</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DOCUMENT SECTION -->
<section class="cube-premium-sms-docs">
    <div class="container cube-premium-sms-docs-grid">

        <div class="cube-premium-sms-docs-text">
            <h2>Masking SMS এর জন্য প্রয়োজনীয় ডকুমেন্ট</h2>

            <div class="cube-premium-sms-note">
                <strong>Note:</strong>
                <span>Activation হতে ৫-৭ কর্মদিবস সময় লাগতে পারে</span>
            </div>

            <ul>
                <li>✔ NID Copy</li>
                <li>✔ Trade License</li>
                <li>✔ Authorization Letter</li>
                <li>✔ Email Address</li>
                <li>✔ Mobile Number</li>
            </ul>

            <div class="cube-premium-sms-docs-btn">
                <a href="{{ route('contact') }}" class="cube-premium-sms-btn primary">
                    Order Now
                </a>
            </div>
        </div>

        <div class="cube-premium-sms-docs-image">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=1200&auto=format&fit=crop" alt="Required Documents">
        </div>

    </div>
</section>

<!-- FORM -->
<section class="cube-premium-sms-form-section">
    <div class="container">

        <div class="cube-premium-sms-form-head">
            <h2>বাল্ক এসএমএস এক্টিভেশন ফর্ম</h2>
            <p>পেমেন্ট করার পর নিচের তথ্যগুলো পূরণ করুন</p>
        </div>

        <div class="cube-premium-sms-form-box">

            <div class="cube-form-grid-2">
                <div class="cube-form-group">
                    <label>আপনার নাম</label>
                    <input type="text" placeholder="Enter your name">
                </div>

                <div class="cube-form-group">
                    <label>WhatsApp নাম্বার</label>
                    <input type="text" placeholder="01XXXXXXXXX">
                </div>
            </div>

            <div class="cube-form-grid-2">
                <div class="cube-form-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="example@mail.com">
                </div>

                <div class="cube-form-group">
                    <label>Payment Amount</label>
                    <input type="text" placeholder="Amount">
                </div>
            </div>

            <div class="cube-form-group">
                <label>SMS Type</label>
                <select>
                    <option>Select SMS Type</option>
                    <option>Non Masking SMS</option>
                    <option>Masking SMS</option>
                </select>
            </div>

            <div class="cube-form-group">
                <label>Payment From (Number)</label>
                <input type="text" placeholder="Payment number">
            </div>

            <div class="cube-form-group">
                <label>Reference (Optional)</label>
                <input type="text" placeholder="Reference">
            </div>

            <div class="cube-form-submit">
                <button type="submit">Submit Form</button>
            </div>

        </div>

    </div>
</section>

<!-- ACCOUNT / CONTACT -->
<section class="cube-premium-sms-account">
    <div class="container cube-premium-sms-account-grid">
        <div class="account-info-box">
            <h4>Account Information</h4>

            <div class="account-block">
                <h5>Bkash Merchant Payment</h5>
                <p>Acc Name: Cube Limited</p>
                <p>Ac No: 01XXXXXXXXX</p>
            </div>

            <div class="account-block">
                <h5>Dutch Bangla Bank</h5>
                <p>Acc Name: Cube Limited</p>
                <p>Branch: Banani</p>
                <p>Ac No: 103 110 0399154</p>
            </div>
        </div>

        <div class="cube-premium-sms-contact-card">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1200&auto=format&fit=crop" alt="Quick Contact">
            <div class="cube-premium-sms-contact-body">
                <h3>Quick Contact</h3>
                <p>01720991000</p>
                <p>01622991000</p>
                <p>info@cubelimited.com</p>
                <p>Dhaka, Bangladesh</p>
            </div>
        </div>
    </div>
</section>

@include('partials.review-cta')
@endsection