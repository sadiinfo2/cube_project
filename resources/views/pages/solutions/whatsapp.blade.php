@extends('layouts.app', ['title' => 'কিউব লিমিটেড | WhatsApp Solution'])

@section('content')

<section class="wa-premium-hero">
    <div class="container wa-premium-hero-grid">
        <div class="wa-premium-hero-content">
            <span class="wa-premium-kicker">WhatsApp Marketing Solution</span>

            <h1>WhatsApp Bulk Messaging System</h1>
            <h2>এক ক্লিকে শত শত গ্রাহকের কাছে পৌঁছে যান</h2>

            <p>
                Excel upload, bulk messaging, promotional campaign, customer follow-up
                এবং business communication-এর জন্য Cube Limited-এর প্রিমিয়াম
                WhatsApp solution ব্যবহার করুন।
            </p>

            <ul class="wa-premium-list">
                <li>Bulk WhatsApp Send</li>
                <li>Excel Upload System</li>
                <li>Auto Reply Facility</li>
                <li>Business Marketing Tool</li>
            </ul>

            <div class="wa-premium-actions">
                <a href="{{ route('contact') }}" class="wa-premium-btn primary">Order Now</a>
                <a href="{{ route('contact') }}" class="wa-premium-btn secondary">Contact Us</a>
            </div>
        </div>

        <div class="wa-premium-hero-visual">
            <div class="wa-premium-phone-card">
                <img src="https://images.unsplash.com/photo-1611605698335-8b1569810432?q=80&w=1200&auto=format&fit=crop" alt="WhatsApp Messaging">
            </div>

            <div class="wa-floating wa-floating-top">
                <strong>500+</strong>
                <span>Contacts in one go</span>
            </div>

            <div class="wa-floating wa-floating-bottom">
                <strong>Auto Reply</strong>
                <span>Keyword based</span>
            </div>
        </div>
    </div>
</section>

<section class="wa-premium-intro">
    <div class="container wa-premium-intro-grid">
        <div class="wa-premium-intro-copy">
            <h2>Why WhatsApp Messaging?</h2>
            <p>
                WhatsApp এখন ব্যবসায়িক যোগাযোগের সবচেয়ে কার্যকর মাধ্যমগুলোর একটি।
                customer engagement, order follow-up, offer প্রচার এবং instant support —
                সবকিছুই এক platform-এ করা যায়।
            </p>

            <div class="wa-premium-mini-tags">
                <span>Instant Reach</span>
                <span>Higher Response</span>
                <span>Easy Communication</span>
            </div>
        </div>

        <div class="wa-premium-intro-image">
            <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop" alt="WhatsApp Dashboard">
        </div>
    </div>
</section>

<section class="wa-premium-feature-section">
    <div class="container">
        <div class="section-title">
            <h2>WhatsApp Solution Features</h2>
            <p>ব্যবসা, শিক্ষা প্রতিষ্ঠান এবং সেবামূলক প্রতিষ্ঠানের জন্য প্রয়োজনীয় core সুবিধাসমূহ</p>
        </div>

        <div class="wa-premium-feature-grid">
            <div class="wa-premium-feature-card">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop" alt="Bulk Messaging">
                <div class="wa-premium-feature-body">
                    <h3>Bulk Messaging</h3>
                    <p>একসাথে অনেক contact-এ campaign, notice বা reminder পাঠান।</p>
                </div>
            </div>

            <div class="wa-premium-feature-card">
                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200&auto=format&fit=crop" alt="Excel Upload">
                <div class="wa-premium-feature-body">
                    <h3>Excel Upload</h3>
                    <p>Excel sheet upload করে structured contact list অনুযায়ী message send করুন।</p>
                </div>
            </div>

            <div class="wa-premium-feature-card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop" alt="Auto Reply">
                <div class="wa-premium-feature-body">
                    <h3>Auto Reply</h3>
                    <p>নির্দিষ্ট keyword-এর ভিত্তিতে automated reply system চালু করুন।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wa-premium-process">
    <div class="container wa-premium-process-grid">
        <div class="wa-premium-process-image">
            <img src="https://images.unsplash.com/photo-1587614382346-4ec70e388b28?q=80&w=1200&auto=format&fit=crop" alt="Process">
        </div>

        <div class="wa-premium-process-copy">
            <h2>কিভাবে কাজ করবে?</h2>
            <p>
                আপনার WhatsApp number connect করে, contact list import করে,
                message template সেট করে খুব সহজে messaging automation চালাতে পারবেন।
            </p>

            <ul>
                <li>Account connect করুন</li>
                <li>Excel contact upload করুন</li>
                <li>Message লিখে campaign run করুন</li>
                <li>Auto reply দিয়ে customer handling করুন</li>
            </ul>

            <a href="{{ route('contact') }}" class="wa-premium-btn primary">Get Started</a>
        </div>
    </div>
</section>

<section class="wa-premium-form-section">
    <div class="container">
        <div class="wa-premium-form-head">
            <h2>WhatsApp Activation Form</h2>
            <p>Service activation-এর জন্য নিচের form পূরণ করুন</p>
        </div>

        <div class="wa-premium-form-box">
            <div class="wa-premium-grid-2">
                <div class="wa-premium-group">
                    <label>Your Name</label>
                    <input type="text" placeholder="Enter your name">
                </div>
                <div class="wa-premium-group">
                    <label>WhatsApp Number</label>
                    <input type="text" placeholder="01XXXXXXXXX">
                </div>
            </div>

            <div class="wa-premium-grid-2">
                <div class="wa-premium-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="example@mail.com">
                </div>
                <div class="wa-premium-group">
                    <label>Business Name</label>
                    <input type="text" placeholder="Business / Institute Name">
                </div>
            </div>

            <div class="wa-premium-group">
                <label>Package / Requirement</label>
                <select>
                    <option>Select Package</option>
                    <option>Bulk Messaging Setup</option>
                    <option>Auto Reply Setup</option>
                    <option>Full WhatsApp Solution</option>
                </select>
            </div>

            <div class="wa-premium-group">
                <label>Message / Requirement</label>
                <textarea rows="5" placeholder="Write your requirement"></textarea>
            </div>

            <div class="wa-premium-submit">
                <button type="submit">Submit Form</button>
            </div>
        </div>
    </div>
</section>

<section class="wa-premium-account">
    <div class="container wa-premium-account-grid">
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

        <div class="wa-premium-contact-card">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1200&auto=format&fit=crop" alt="Quick Contact">
            <div class="wa-premium-contact-body">
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