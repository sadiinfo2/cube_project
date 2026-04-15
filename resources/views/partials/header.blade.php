<header class="site-header">
    <div class="container nav-wrap">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-logo">ক</span>
            <div class="brand-text">
                <strong>কিউব লিমিটেড</strong>
                <small>স্মার্ট ডিজিটাল সলিউশন</small>
            </div>
        </a>

        <nav class="main-nav" id="mainNav">
            <a href="{{ route('home') }}" class="nav-box">Home</a>

            <div class="nav-dropdown">
                <button class="nav-box nav-btn" type="button">
                    Solutions <span class="caret">▼</span>
                </button>
                <div class="nav-dropdown-menu">
                    <a href="{{ route('solutions.digital-health') }}">Digital Health Service</a>
                    <a href="{{ route('solutions.whatsapp') }}">WhatsApp Messaging</a>
                    <a href="{{ route('solutions.institute') }}">Institute Management System</a>
                    <a href="{{ route('solutions.website') }}">Website Solution</a>
                    <a href="{{ route('solutions.idcard') }}">ID Card Solution</a>
                    <a href="{{ route('solutions.bulk-sms') }}">Bulk SMS</a>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="nav-box">Contact</a>

            <div class="nav-dropdown">
                <button class="nav-box nav-btn" type="button">
                    Get In Touch <span class="caret">▼</span>
                </button>
                <div class="nav-dropdown-menu nav-dropdown-menu-right">
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('career') }}">Career</a>
                    <a href="{{ route('seminar') }}">Seminar</a>
                </div>
            </div>
        </nav>
    </div>
</header>