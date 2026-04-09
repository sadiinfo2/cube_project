<header class="site-header">
    <div class="container nav-wrap">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-logo">C</span>
            <div>
                <strong>কিউব লিমিটেড</strong>
                <small>Smart Digital Partner</small>
            </div>
        </a>

        <button class="nav-toggle" id="navToggle">☰</button>

        <nav class="main-nav" id="mainNav">
            <a href="{{ route('home') }}">হোম</a>
            <a href="{{ route('about') }}">আমাদের সম্পর্কে</a>
            <a href="{{ route('career') }}">ক্যারিয়ার</a>
            <a href="{{ route('seminar') }}">সেমিনার</a>

            <div class="dropdown">
                <button class="dropdown-btn">সলিউশন</button>
                <div class="dropdown-menu">
                    <a href="{{ route('solutions.digital-health') }}">ডিজিটাল হেলথ সার্ভিস</a>
                    <a href="{{ route('solutions.whatsapp') }}">হোয়াটসঅ্যাপ ম্যাসেজিং</a>
                    <a href="{{ route('solutions.institute') }}">ইনস্টিটিউট ম্যানেজমেন্ট সিস্টেম</a>
                    <a href="{{ route('solutions.website') }}">ওয়েবসাইট সলিউশন</a>
                    <a href="{{ route('solutions.idcard') }}">আইডি কার্ড সলিউশন</a>
                    <a href="{{ route('solutions.bulk-sms') }}">বাল্ক এসএমএস</a>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="btn btn-sm">যোগাযোগ</a>
        </nav>
    </div>
</header>