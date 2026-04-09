<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3>কিউব লিমিটেড</h3>
            <p>
                আধুনিক ব্যবসা, শিক্ষা প্রতিষ্ঠান ও সেবামূলক প্রতিষ্ঠানের জন্য
                নির্ভরযোগ্য সফটওয়্যার, ওয়েবসাইট ও যোগাযোগভিত্তিক সমাধান।
            </p>
        </div>

        <div>
            <h4>দ্রুত লিংক</h4>
            <ul class="footer-links">
                <li><a href="{{ route('home') }}">হোম</a></li>
                <li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
                <li><a href="{{ route('career') }}">ক্যারিয়ার</a></li>
                <li><a href="{{ route('seminar') }}">সেমিনার</a></li>
                <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
            </ul>
        </div>

        <div>
            <h4>যোগাযোগ</h4>
            <p>ইমেইল: info@cubelimited.com</p>
            <p>মোবাইল: +8801XXXXXXXXX</p>
            <p>ঠিকানা: ঢাকা, বাংলাদেশ</p>
        </div>
    </div>

    <div class="copyright">
        © {{ date('Y') }} কিউব লিমিটেড। সর্বস্বত্ব সংরক্ষিত।
    </div>
</footer>