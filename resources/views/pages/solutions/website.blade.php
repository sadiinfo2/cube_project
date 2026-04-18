@extends('layouts.app', ['title' => 'কিউব লিমিটেড | ওয়েবসাইট সলিউশন'])

@section('content')
<section class="cube-website-hero">
    <div class="container cube-website-hero-grid">
        <div class="cube-website-hero-content">
            <span class="cube-website-kicker">Website Solution</span>
            <h1>প্রতিষ্ঠানের জন্য আধুনিক, স্মার্ট ও ডায়নামিক ওয়েবসাইট</h1>
            <p>
                স্কুল, কলেজ, মাদ্রাসা, অফিস, ব্যবসা প্রতিষ্ঠান ও সেবামূলক সংগঠনের জন্য
                প্রফেশনাল ওয়েবসাইট ডিজাইন ও ডেভেলপমেন্ট সলিউশন।
            </p>

            <div class="cube-website-hero-points">
                <span>Responsive Design</span>
                <span>Dynamic Content</span>
                <span>Easy Management</span>
            </div>

            <div class="cube-website-hero-actions">
                <a href="{{ route('contact') }}" class="cube-website-btn primary">Order Now</a>
                <a href="{{ route('contact') }}" class="cube-website-btn secondary">Get Proposal</a>
            </div>
        </div>

        <div class="cube-website-hero-image">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1400&auto=format&fit=crop" alt="Website Design">
        </div>
    </div>
</section>

<section class="cube-website-info">
    <div class="container cube-website-info-grid">
        <div class="cube-website-info-image">
            <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?q=80&w=1400&auto=format&fit=crop" alt="Dynamic Website">
        </div>

        <div class="cube-website-info-content">
            <h2>ওয়েবসাইট আপনার প্রতিষ্ঠানের ডিজিটাল পরিচয়</h2>
            <p>
                একটি প্রফেশনাল ওয়েবসাইট প্রতিষ্ঠানের বিশ্বাসযোগ্যতা বাড়ায়, তথ্য উপস্থাপন সহজ করে,
                এবং অভিভাবক, শিক্ষার্থী, গ্রাহক বা দর্শনার্থীর কাছে প্রতিষ্ঠানের পরিচিতি শক্তিশালী করে।
            </p>
            <p>
                Cube Limited এমন ওয়েবসাইট তৈরি করে, যা শুধু দেখতে সুন্দর নয়,
                বরং ব্যবহার করতেও সহজ, দ্রুত লোড হয় এবং প্রয়োজন অনুযায়ী আপডেট করা যায়।
            </p>

            <a href="{{ route('contact') }}" class="cube-website-btn primary small">যোগাযোগ করুন</a>
        </div>
    </div>
</section>

<section class="cube-website-services">
    <div class="container">
        <div class="section-title">
            <h2>ওয়েবসাইটে যে সেকশনগুলো থাকতে পারে</h2>
            <p>প্রতিষ্ঠানের ধরন অনুযায়ী প্রয়োজনীয় তথ্য, feature এবং presentation block।</p>
        </div>

        <div class="cube-website-card-grid">
            <div class="cube-website-service-card">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop" alt="Institution Profile">
                <div class="cube-website-service-body">
                    <h3>প্রতিষ্ঠান পরিচিতি</h3>
                    <p>ইতিহাস, লক্ষ্য, ভিশন, স্বীকৃতি, পরিচালনা পর্ষদ এবং গুরুত্বপূর্ণ পরিচিতি।</p>
                </div>
            </div>

            <div class="cube-website-service-card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop" alt="Teacher Staff">
                <div class="cube-website-service-body">
                    <h3>শিক্ষক ও স্টাফ প্রোফাইল</h3>
                    <p>প্রতিষ্ঠানের শিক্ষক, কর্মচারী ও প্রশাসনিক টিমের প্রফেশনাল উপস্থাপন।</p>
                </div>
            </div>

            <div class="cube-website-service-card">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200&auto=format&fit=crop" alt="Notice Board">
                <div class="cube-website-service-body">
                    <h3>নোটিশ ও আপডেট</h3>
                    <p>সর্বশেষ নোটিশ, ঘোষণা, event update ও প্রয়োজনীয় তথ্য প্রকাশের ব্যবস্থা।</p>
                </div>
            </div>

            <div class="cube-website-service-card">
                <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?q=80&w=1200&auto=format&fit=crop" alt="Routine Syllabus">
                <div class="cube-website-service-body">
                    <h3>রুটিন ও সিলেবাস</h3>
                    <p>ক্লাস রুটিন, একাডেমিক ক্যালেন্ডার, সিলেবাস, বুকলিস্ট ও ডাউনলোড সেকশন।</p>
                </div>
            </div>

            <div class="cube-website-service-card">
                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200&auto=format&fit=crop" alt="Gallery">
                <div class="cube-website-service-body">
                    <h3>গ্যালারি ও মিডিয়া</h3>
                    <p>ফটো গ্যালারি, ভিডিও, campus highlight এবং কার্যক্রমের ভিজ্যুয়াল উপস্থাপন।</p>
                </div>
            </div>

            <div class="cube-website-service-card">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop" alt="Contact Form">
                <div class="cube-website-service-body">
                    <h3>যোগাযোগ ও ফরম</h3>
                    <p>যোগাযোগ ফরম, ম্যাপ, inquiry, admission request এবং প্রয়োজনীয় অনলাইন submission।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cube-website-feature-band">
    <div class="container">
        <div class="section-title">
            <h2>অতিরিক্ত ফিচার সমূহ</h2>
            <p>প্রয়োজন অনুযায়ী ওয়েবসাইটে আরও advanced সুবিধা যোগ করা যাবে।</p>
        </div>

        <div class="cube-website-feature-band-grid">
            <div class="cube-website-feature-box">
                <img src="https://images.unsplash.com/photo-1516321165247-4aa89a48be28?q=80&w=1200&auto=format&fit=crop" alt="Online Admission">
                <div>
                    <h3>Online Admission</h3>
                    <p>অনলাইন আবেদন ও ভর্তি সংক্রান্ত তথ্য সংগ্রহের ব্যবস্থা।</p>
                </div>
            </div>

            <div class="cube-website-feature-box">
                <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop" alt="Payment Integration">
                <div>
                    <h3>Payment Integration</h3>
                    <p>প্রয়োজনে payment gateway বা fee-related module integration।</p>
                </div>
            </div>

            <div class="cube-website-feature-box">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1200&auto=format&fit=crop" alt="Software Integration">
                <div>
                    <h3>Software Integration</h3>
                    <p>School/Institute software বা data system-এর সাথে connected structure।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cube-website-pricing">
    <div class="container">
        <div class="section-title">
            <h2>প্যাকেজ সমূহ</h2>
            <p>আপনার প্রয়োজন ও বাজেট অনুযায়ী উপযোগী প্যাকেজ নির্বাচন করুন।</p>
        </div>

        <div class="cube-website-pricing-grid">
            <div class="cube-website-price-card">
                <span class="cube-website-plan">Basic</span>
                <h3>Starter Website</h3>
                <div class="cube-website-price">৳ ১০,০০০</div>
                <ul>
                    <li>স্ট্যান্ডার্ড ডিজাইন</li>
                    <li>Responsive Layout</li>
                    <li>বেসিক তথ্য সেকশন</li>
                    <li>ডোমেইন/হোস্টিং সহায়তা</li>
                </ul>
            </div>

            <div class="cube-website-price-card featured">
                <span class="cube-website-badge">Popular</span>
                <span class="cube-website-plan">Standard</span>
                <h3>Professional Website</h3>
                <div class="cube-website-price">৳ ১৫,০০০</div>
                <ul>
                    <li>ডায়নামিক নোটিশ</li>
                    <li>Gallery + Download</li>
                    <li>ফরম / inquiry section</li>
                    <li>৬ মাস সাপোর্ট</li>
                </ul>
            </div>

            <div class="cube-website-price-card">
                <span class="cube-website-plan">Premium</span>
                <h3>Advanced Website</h3>
                <div class="cube-website-price">৳ ২০,০০০</div>
                <ul>
                    <li>Custom Layout</li>
                    <li>Advanced Feature</li>
                    <li>Integration Support</li>
                    <li>১ বছর সাপোর্ট</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cube-website-cta">
    <div class="container cube-website-cta-box">
        <div>
            <h2>আপনার প্রতিষ্ঠানের জন্য একটি প্রফেশনাল ওয়েবসাইট শুরু করতে চান?</h2>
            <p>Cube Limited-এর সাথে যোগাযোগ করুন এবং আপনার প্রয়োজন অনুযায়ী সেরা সমাধান নিন।</p>
        </div>

        <a href="{{ route('contact') }}" class="cube-website-btn primary">Contact Now</a>
    </div>
</section>

@include('partials.review-cta')
@endsection