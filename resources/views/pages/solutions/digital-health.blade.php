@extends('layouts.app')

@section('title', 'Digital Health Solution | Cube Limited')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/digital-health.css') }}">
@endpush

@section('content')
<section class="digital-health-page">

    {{-- HERO --}}
    <section class="dh-hero">
        <div class="container dh-hero-wrap">
            <div class="dh-hero-content">
                <span class="dh-badge">Cube Limited Digital Health Solution</span>
                <h1>
                    স্মার্ট <span>Digital Health</span><br>
                    Solution for Modern Care
                </h1>
                <p>
                    হাসপাতাল, ক্লিনিক, ডায়াগনস্টিক সেন্টার, ডাক্তার চেম্বার ও স্বাস্থ্যসেবা প্রতিষ্ঠানের
                    জন্য appointment, patient record, prescription, billing, রিপোর্ট ও follow-up management-এর
                    একীভূত ডিজিটাল সমাধান।
                </p>

                <div class="dh-hero-actions">
                    <a href="#contact" class="dh-btn dh-btn-primary">ফ্রি ডেমো নিন</a>
                    <a href="#features" class="dh-btn dh-btn-outline">ফিচার দেখুন</a>
                </div>

                <div class="dh-hero-mini-stats">
                    <div class="mini-stat">
                        <strong>24/7</strong>
                        <span>Support Service</span>
                    </div>
                    <div class="mini-stat">
                        <strong>Fast</strong>
                        <span>Implementation</span>
                    </div>
                    <div class="mini-stat">
                        <strong>Secure</strong>
                        <span>Data Management</span>
                    </div>
                </div>
            </div>

            <div class="dh-hero-visual">
                <div class="hero-glow"></div>

                <div class="hero-device-card hero-device-main">
                    <img src="{{ asset('assets/images/digital-health/hero-mobile.png') }}" alt="Cube Limited Digital Health Solution">
                </div>

                <div class="hero-device-card hero-device-float top">
                    <img src="{{ asset('assets/images/digital-health/hero-top-card.png') }}" alt="Appointment Dashboard">
                </div>

                <div class="hero-device-card hero-device-float bottom">
                    <img src="{{ asset('assets/images/digital-health/hero-bottom-card.png') }}" alt="Patient Dashboard">
                </div>
            </div>
        </div>
    </section>

    {{-- TRUST BAR --}}
    <section class="dh-trust">
        <div class="container">
            <div class="dh-trust-grid">
                <div class="trust-item">Patient Management</div>
                <div class="trust-item">Online Appointment</div>
                <div class="trust-item">Digital Prescription</div>
                <div class="trust-item">Billing & Reports</div>
                <div class="trust-item">Doctor Panel</div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="dh-section dh-about">
        <div class="container">
            <div class="dh-section-heading center">
                <span class="section-tag">Why Choose It</span>
                <h2>স্বাস্থ্যসেবা ব্যবস্থাপনাকে করুন আরো দ্রুত, নির্ভুল ও আধুনিক</h2>
                <p>
                    Cube Limited Digital Health Solution manual process কমিয়ে পুরো service flow-কে করে
                    আরও smart, organized এবং patient-friendly।
                </p>
            </div>

            <div class="dh-about-grid">
                <div class="about-card">
                    <div class="about-icon">🩺</div>
                    <h3>Smart Patient Care</h3>
                    <p>Patient registration, visit history, prescription, report ও follow-up data এক জায়গায় রাখুন।</p>
                </div>

                <div class="about-card">
                    <div class="about-icon">📅</div>
                    <h3>Appointment Control</h3>
                    <p>Doctor schedule, serial management, chamber timing এবং appointment flow সহজে নিয়ন্ত্রণ করুন।</p>
                </div>

                <div class="about-card">
                    <div class="about-icon">💳</div>
                    <h3>Billing Automation</h3>
                    <p>Invoice, collection, payment history, service charge ও summary report গুছিয়ে পরিচালনা করুন।</p>
                </div>

                <div class="about-card">
                    <div class="about-icon">🔒</div>
                    <h3>Secure Data System</h3>
                    <p>Role-based access, structured records এবং better operational visibility নিশ্চিত করুন।</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SPLIT SECTION --}}
    <section class="dh-section dh-split-section">
        <div class="container">
            <div class="dh-split-grid">
                <div class="dh-split-image">
                    <img src="{{ asset('assets/images/digital-health/doctor-dashboard.png') }}" alt="Doctor Dashboard">
                </div>

                <div class="dh-split-content">
                    <span class="section-tag">Complete Operational Control</span>
                    <h2>ডাক্তার, রোগী ও প্রশাসনের জন্য একীভূত ডিজিটাল প্ল্যাটফর্ম</h2>
                    <p>
                        Front desk থেকে doctor consultation, patient record থেকে billing ও reporting —
                        পুরো workflow একটি connected system-এর মধ্যে পরিচালনা করুন।
                    </p>

                    <div class="dh-check-list">
                        <div class="check-item">✔ Patient registration & profile management</div>
                        <div class="check-item">✔ Doctor appointment & serial control</div>
                        <div class="check-item">✔ E-prescription & treatment advice</div>
                        <div class="check-item">✔ Billing, invoice & collection tracking</div>
                        <div class="check-item">✔ Notification, reminder & follow-up support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="dh-section dh-features" id="features">
        <div class="container">
            <div class="dh-section-heading center">
                <span class="section-tag">Core Features</span>
                <h2>ডিজিটাল হেলথ সল্যুশনের গুরুত্বপূর্ণ ফিচারসমূহ</h2>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">👨‍⚕️</div>
                    <h3>Doctor Management</h3>
                    <p>Doctor profile, timing, chamber setup, consultation fee এবং schedule control।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🧑‍🤝‍🧑</div>
                    <h3>Patient Management</h3>
                    <p>Patient history, visit records, prescription log, report tracking ও follow-up notes।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📝</div>
                    <h3>Digital Prescription</h3>
                    <p>Readable digital prescription, diagnosis, medicine advice এবং print/share সুবিধা।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🧪</div>
                    <h3>Diagnostic Integration</h3>
                    <p>Test booking, lab workflow, report status ও result delivery management।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Billing & Invoice</h3>
                    <p>Service-wise billing, invoice generation, payment update ও daily collection summary।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Reports & Analytics</h3>
                    <p>Patient trend, service report, revenue insight, doctor activity এবং operational analysis।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>Responsive Access</h3>
                    <p>Desktop, tablet এবং android view-এ smooth browsing ও usable layout experience।</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🔔</div>
                    <h3>Notification System</h3>
                    <p>Appointment reminder, follow-up message, service update ও communication support।</p>
                </div>
            </div>
        </div>
    </section>

    {{-- COLOR BOXES --}}
    <section class="dh-section dh-color-boxes">
        <div class="container">
            <div class="color-box-grid">
                <div class="color-box blue">
                    <h3>For Hospitals</h3>
                    <p>Department-wise management, patient flow control, billing transparency এবং admin visibility।</p>
                </div>

                <div class="color-box orange">
                    <h3>For Clinics</h3>
                    <p>Appointment, doctor serial, patient service ও operational structure আরও smooth করুন।</p>
                </div>

                <div class="color-box green">
                    <h3>For Diagnostic Centers</h3>
                    <p>Test booking, sample workflow, report delivery এবং service management সহজ করুন।</p>
                </div>

                <div class="color-box pink">
                    <h3>For Chambers</h3>
                    <p>Consultation flow, digital prescription, visit history এবং better patient experience নিশ্চিত করুন।</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SCREENSHOTS --}}
    <section class="dh-section dh-screenshots">
        <div class="container">
            <div class="dh-section-heading center">
                <span class="section-tag">System Preview</span>
                <h2>সিস্টেমের কিছু প্রিমিয়াম স্ক্রিন প্রিভিউ</h2>
            </div>

            <div class="screen-grid">
                <div class="screen-card">
                    <img src="{{ asset('assets/images/digital-health/screen-1.png') }}" alt="Main Dashboard">
                    <h4>Main Dashboard</h4>
                </div>

                <div class="screen-card">
                    <img src="{{ asset('assets/images/digital-health/screen-2.png') }}" alt="Patient Record">
                    <h4>Patient Record</h4>
                </div>

                <div class="screen-card">
                    <img src="{{ asset('assets/images/digital-health/screen-3.png') }}" alt="Prescription Panel">
                    <h4>Prescription Panel</h4>
                </div>

                <div class="screen-card">
                    <img src="{{ asset('assets/images/digital-health/screen-4.png') }}" alt="Billing & Invoice">
                    <h4>Billing & Invoice</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- PROCESS --}}
    <section class="dh-section dh-process">
        <div class="container">
            <div class="dh-section-heading center">
                <span class="section-tag">How It Works</span>
                <h2>কিভাবে কাজ করে</h2>
            </div>

            <div class="process-grid">
                <div class="process-step">
                    <span>01</span>
                    <h3>Patient Entry</h3>
                    <p>রোগী রেজিস্ট্রেশন, basic information entry এবং visit tracking শুরু হয়।</p>
                </div>

                <div class="process-step">
                    <span>02</span>
                    <h3>Appointment & Queue</h3>
                    <p>Doctor-wise schedule, serial setup এবং appointment flow automatically managed হয়।</p>
                </div>

                <div class="process-step">
                    <span>03</span>
                    <h3>Consultation</h3>
                    <p>Doctor consultation, digital prescription, advice ও investigation note তৈরি হয়।</p>
                </div>

                <div class="process-step">
                    <span>04</span>
                    <h3>Billing & Report</h3>
                    <p>Invoice, payment update, report handling এবং follow-up communication সম্পন্ন হয়।</p>
                </div>
            </div>
        </div>
    </section>

    {{-- MEDIA SECTION --}}
    <section class="dh-section dh-media-section">
        <div class="container">
            <div class="media-grid">
                <div class="media-video-card">
                    <img src="{{ asset('assets/images/digital-health/video-cover.jpg') }}" alt="Digital Health Solution">
                    <a href="javascript:void(0)" class="play-btn">▶</a>
                </div>

                <div class="media-content">
                    <span class="section-tag">Better Experience</span>
                    <h2>স্বাস্থ্যসেবাকে দিন আরো বিশ্বাসযোগ্য ডিজিটাল ভিত্তি</h2>
                    <p>
                        Cube Limited Digital Health Solution প্রতিষ্ঠানের service delivery, record keeping,
                        follow-up ও administrative efficiency-কে আরও শক্তিশালী করে।
                    </p>

                    <div class="dh-check-list compact">
                        <div class="check-item">✔ Faster service delivery</div>
                        <div class="check-item">✔ Less manual error</div>
                        <div class="check-item">✔ Better patient satisfaction</div>
                        <div class="check-item">✔ Organized healthcare operations</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CLIENT REVIEW BANNER --}}
    <section class="dh-section dh-client-review-banner-wrap">
        <div class="container">
            <div class="dh-client-review-banner">
                <div class="dh-client-review-banner-left">
                    <span class="dh-client-review-label">CLIENT FEEDBACK</span>
                    <h2>আপনার অভিজ্ঞতা আমাদের জ্ঞান</h2>
                    <p>আমাদের সেবা সম্পর্কে আপনার মূল্যবান মতামত দিন।</p>
                </div>

                <div class="dh-client-review-banner-right">
                    <a href="#client-review-form" class="dh-client-review-box-link">Client Review</a>
                </div>
            </div>
        </div>
    </section>

    {{-- CLIENT REVIEW FORM SECTION --}}
    <section class="dh-section dh-client-review-section" id="client-review-form">
        <div class="container">
            <div class="dh-client-review-wrapper">
                <div class="dh-client-review-left">
                    <span class="section-tag">Client Feedback</span>
                    <h2>আপনার মতামত আমাদের উন্নতির শক্তি</h2>
                    <p>
                        Cube Limited Digital Health Solution সম্পর্কে আপনার মূল্যবান মতামত, অভিজ্ঞতা
                        এবং পরামর্শ আমাদের সঙ্গে শেয়ার করুন। আপনার feedback আমাদের সেবা আরও উন্নত করতে সাহায্য করবে।
                    </p>

                    <div class="dh-review-features">
                        <div class="dh-review-feature">✔ Real Experience Share</div>
                        <div class="dh-review-feature">✔ Improve Our Service</div>
                        <div class="dh-review-feature">✔ Quick Response Team</div>
                    </div>
                </div>

                <div class="dh-client-review-form-card">
                    <div class="dh-review-form-head">
                        <span class="mini-tag">Submit Review</span>
                        <h3>Client Review Form</h3>
                        <p>নিচের ফর্ম পূরণ করে আপনার review submit করুন।</p>
                    </div>

                    <form action="#" method="POST">
                        @csrf

                        <div class="dh-form-row">
                            <input type="text" name="name" placeholder="আপনার নাম">
                        </div>

                        <div class="dh-form-row dh-form-two">
                            <input type="text" name="phone" placeholder="মোবাইল নাম্বার">
                            <input type="email" name="email" placeholder="ইমেইল ঠিকানা">
                        </div>

                        <div class="dh-form-row">
                            <input type="text" name="organization" placeholder="প্রতিষ্ঠানের নাম">
                        </div>

                        <div class="dh-form-row">
                            <select name="rating">
                                <option value="">রেটিং নির্বাচন করুন</option>
                                <option value="5">★★★★★ - Excellent</option>
                                <option value="4">★★★★☆ - Very Good</option>
                                <option value="3">★★★☆☆ - Good</option>
                                <option value="2">★★☆☆☆ - Fair</option>
                                <option value="1">★☆☆☆☆ - Poor</option>
                            </select>
                        </div>

                        <div class="dh-form-row">
                            <textarea name="message" rows="5" placeholder="আপনার রিভিউ লিখুন"></textarea>
                        </div>

                        <div class="dh-form-row">
                            <button type="submit" class="dh-btn dh-btn-primary full-width">
                                Review Submit করুন
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="dh-section dh-reviews">
        <div class="container">
            <div class="dh-section-heading center">
                <span class="section-tag">Testimonials</span>
                <h2>আমাদের ক্লায়েন্টরা যা বলছেন</h2>
                <p>
                    বিভিন্ন স্বাস্থ্যসেবা প্রতিষ্ঠান Cube Limited Digital Health Solution ব্যবহার করে
                    তাদের দৈনন্দিন কার্যক্রমকে আরও গুছানো এবং patient-friendly করতে পেরেছে।
                </p>
            </div>

            <div class="review-grid">
                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">
                        “এই সফটওয়্যার ব্যবহারের পর patient appointment, prescription এবং billing management
                        অনেক সহজ হয়েছে। আমাদের daily operation এখন অনেক বেশি organized.”
                    </p>
                    <div class="review-client">
                        <img src="{{ asset('assets/images/digital-health/reviewer-1.jpg') }}" alt="Reviewer 1">
                        <div>
                            <h4>Dr. Rahman</h4>
                            <span>Managing Director, City Care Clinic</span>
                        </div>
                    </div>
                </div>

                <div class="review-card featured">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">
                        “Cube Limited-এর Digital Health Solution আমাদের diagnostic workflow, report delivery এবং
                        patient service system-এ খুব ভালো impact তৈরি করেছে। Support team-ও খুব responsive.”
                    </p>
                    <div class="review-client">
                        <img src="{{ asset('assets/images/digital-health/reviewer-2.jpg') }}" alt="Reviewer 2">
                        <div>
                            <h4>Mahmud Hasan</h4>
                            <span>Director, Popular Diagnostic Point</span>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">
                        “Doctor chamber management, digital prescription এবং patient history tracking-এর জন্য
                        এটা সত্যিই একটি effective solution. আমাদের service quality noticeably improve করেছে.”
                    </p>
                    <div class="review-client">
                        <img src="{{ asset('assets/images/digital-health/reviewer-3.jpg') }}" alt="Reviewer 3">
                        <div>
                            <h4>Dr. Nusrat Jahan</h4>
                            <span>Consultant Physician</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ARTICLES --}}
    <section class="dh-section dh-articles">
        <div class="container">
            <div class="dh-section-heading center">
                <span class="section-tag">Insights</span>
                <h2>স্বাস্থ্যখাতের ডিজিটাল রূপান্তরের কিছু প্রয়োজনীয় দিক</h2>
            </div>

            <div class="article-grid">
                <div class="article-card">
                    <img src="{{ asset('assets/images/digital-health/blog-1.jpg') }}" alt="Article 1">
                    <div class="article-content">
                        <h3>Modern Healthcare Needs Better Data Flow</h3>
                        <p>চিকিৎসা ব্যবস্থায় দ্রুত ও নির্ভুল data flow পুরো operation-এর মান উন্নত করে।</p>
                        <a href="javascript:void(0)">আরও পড়ুন</a>
                    </div>
                </div>

                <div class="article-card">
                    <img src="{{ asset('assets/images/digital-health/blog-2.jpg') }}" alt="Article 2">
                    <div class="article-content">
                        <h3>Appointment Automation Improves Patient Experience</h3>
                        <p>Manual booking-এর বদলে digital appointment flow রোগীর অভিজ্ঞতা আরও উন্নত করে।</p>
                        <a href="javascript:void(0)">আরও পড়ুন</a>
                    </div>
                </div>

                <div class="article-card">
                    <img src="{{ asset('assets/images/digital-health/blog-3.jpg') }}" alt="Article 3">
                    <div class="article-content">
                        <h3>Billing Transparency Builds Trust</h3>
                        <p>Automated invoice, service breakdown ও payment tracking প্রশাসনিক জবাবদিহি বাড়ায়।</p>
                        <a href="javascript:void(0)">আরও পড়ুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA BAND --}}
    <section class="dh-cta-band">
        <div class="container dh-cta-band-wrap">
            <div>
                <span class="section-tag light">Get Started</span>
                <h2>আপনার প্রতিষ্ঠানের জন্য Digital Health Solution শুরু করতে চান?</h2>
                <p>আজই Cube Limited-এর সাথে যোগাযোগ করুন এবং একটি live demo দেখুন।</p>
            </div>

            <div class="dh-cta-actions">
                <a href="#contact" class="dh-btn dh-btn-white">যোগাযোগ করুন</a>
                <a href="tel:+8801XXXXXXXXX" class="dh-btn dh-btn-glass">কল করুন</a>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section class="dh-section dh-contact" id="contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <span class="section-tag">Contact Us</span>
                    <h2>ডেমো, মূল্য অথবা পরামর্শের জন্য যোগাযোগ করুন</h2>
                    <p>
                        আমাদের টিম আপনার প্রতিষ্ঠানের প্রয়োজন অনুযায়ী উপযুক্ত module planning,
                        implementation guidance এবং support প্রদান করবে।
                    </p>

                    <div class="contact-points">
                        <div class="contact-point">
                            <strong>Phone</strong>
                            <span>+8801XXXXXXXXX</span>
                        </div>
                        <div class="contact-point">
                            <strong>Email</strong>
                            <span>info@cubelimited.com</span>
                        </div>
                        <div class="contact-point">
                            <strong>Office</strong>
                            <span>Mymensingh, Bangladesh</span>
                        </div>
                    </div>
                </div>

                <div class="contact-form-card">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-row">
                            <input type="text" name="name" placeholder="আপনার নাম">
                        </div>
                        <div class="form-row two-col">
                            <input type="text" name="phone" placeholder="মোবাইল নাম্বার">
                            <input type="email" name="email" placeholder="ইমেইল ঠিকানা">
                        </div>
                        <div class="form-row">
                            <input type="text" name="organization" placeholder="প্রতিষ্ঠানের নাম">
                        </div>
                        <div class="form-row">
                            <select name="service_type">
                                <option value="">Service Type নির্বাচন করুন</option>
                                <option value="hospital">Hospital</option>
                                <option value="clinic">Clinic</option>
                                <option value="diagnostic">Diagnostic Center</option>
                                <option value="doctor-chamber">Doctor Chamber</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <textarea name="message" rows="5" placeholder="আপনার প্রয়োজন লিখুন"></textarea>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="dh-btn dh-btn-primary full-width">
                                ডেমো রিকোয়েস্ট পাঠান
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</section>
@endsection