<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cube Limited</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="container navbar">
            <a href="#home" class="brand">
                <span class="brand-main">Cube</span>
                <span class="brand-accent">Limited</span>
            </a>

            <nav class="nav-menu">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#why-us">Why Us</a>
                <a href="#contact">Contact</a>
            </nav>

            <a href="#contact" class="btn btn-primary">Get Started</a>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-slides">
            <div class="hero-slide active" style="background-image: linear-gradient(rgba(2,6,23,.72), rgba(2,6,23,.72)), url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1600&q=80');"></div>
            <div class="hero-slide" style="background-image: linear-gradient(rgba(2,6,23,.72), rgba(2,6,23,.72)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1600&q=80');"></div>
            <div class="hero-slide" style="background-image: linear-gradient(rgba(2,6,23,.72), rgba(2,6,23,.72)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1600&q=80');"></div>
        </div>

        <div class="container hero-content">
            <div class="hero-text fade-up">
                <span class="hero-badge">Smart Digital Support For Your Organization</span>
                <h1>Build Smarter, Grow Faster With Cube Limited</h1>
                <p>
                    We provide modern digital services for businesses, institutions, and organizations.
                    From communication systems to professional web solutions, Cube Limited helps you
                    present your brand better and operate more efficiently.
                </p>

                <div class="hero-actions">
                    <a href="#services" class="btn btn-primary">Explore Services</a>
                    <a href="#contact" class="btn btn-outline">Order Now</a>
                </div>

                <div class="hero-dots">
                    <button class="dot active" data-slide="0"></button>
                    <button class="dot" data-slide="1"></button>
                    <button class="dot" data-slide="2"></button>
                </div>
            </div>

            <div class="hero-cards">
                <div class="glass-card float-card">
                    <h3>Bulk Messaging</h3>
                    <p>Reach customers faster with modern communication tools.</p>
                </div>
                <div class="glass-card float-card delay-1">
                    <h3>Education Solutions</h3>
                    <p>Smart systems for schools, colleges, and institutions.</p>
                </div>
                <div class="glass-card float-card delay-2">
                    <h3>Website Services</h3>
                    <p>Professional, responsive, and conversion-focused websites.</p>
                </div>
                <div class="glass-card float-card delay-3">
                    <h3>ID Card Package</h3>
                    <p>Practical service packages for institutional needs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="container two-col">
            <div class="reveal">
                <span class="section-tag">About Cube Limited</span>
                <h2>A Trusted Partner For Modern Digital Transformation</h2>
                <p class="section-text">
                    Cube Limited is designed as a modern business landing page for digital services.
                    It is ideal for service companies that want a clean presentation, strong trust-building
                    sections, attractive animations, and a responsive experience across devices.
                </p>

                <div class="stats-grid">
                    <div class="stat-box reveal">
                        <h3>24/7</h3>
                        <p>Responsive communication approach</p>
                    </div>
                    <div class="stat-box reveal">
                        <h3>100%</h3>
                        <p>Client-focused service delivery</p>
                    </div>
                </div>
            </div>

            <div class="feature-panel reveal">
                <div class="feature-item">Modern business landing page structure</div>
                <div class="feature-item">Animated cards and smooth section reveals</div>
                <div class="feature-item">Slideshow-based hero presentation</div>
                <div class="feature-item">Mobile responsive frontend layout</div>
            </div>
        </div>
    </section>

    <section class="section section-light" id="services">
        <div class="container">
            <div class="section-head reveal">
                <span class="section-tag">Our Services</span>
                <h2>Solutions Built For Modern Organizations</h2>
                <p class="section-text center-text">
                    A clean service area inspired by the overall public service categories shown on D Solution,
                    but rewritten as original content for Cube Limited. :contentReference[oaicite:1]{index=1}
                </p>
            </div>

            <div class="service-grid">
                <div class="service-card reveal">
                    <div class="service-no">01</div>
                    <h3>Bulk Messaging Solutions</h3>
                    <p>Send updates, offers, and notifications to many customers quickly and effectively.</p>
                    <a href="#contact">Learn More</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-no">02</div>
                    <h3>Smart Education Solutions</h3>
                    <p>Digital tools that help institutions improve communication and workflow efficiency.</p>
                    <a href="#contact">Learn More</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-no">03</div>
                    <h3>Website For Organizations</h3>
                    <p>Professional websites with strong visual identity and clear service presentation.</p>
                    <a href="#contact">Learn More</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-no">04</div>
                    <h3>Identity Card Package</h3>
                    <p>Practical ID card support and presentation packages for institutions and teams.</p>
                    <a href="#contact">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section dark-section" id="why-us">
        <div class="container two-col">
            <div class="reveal">
                <span class="section-tag light-tag">Why Choose Us</span>
                <h2>Simple Process. Strong Delivery. Better Results.</h2>
                <p class="section-text dark-text">
                    Cube Limited helps organizations present services clearly, capture leads effectively,
                    and create a polished online presence with modern frontend design.
                </p>
            </div>

            <div class="why-grid">
                <div class="why-box reveal">Hero slideshow with manual and auto controls</div>
                <div class="why-box reveal">Scroll reveal animations</div>
                <div class="why-box reveal">Hover animated service cards</div>
                <div class="why-box reveal">Laravel-friendly Blade structure</div>
            </div>
        </div>
    </section>

    <section class="section section-blue" id="contact">
        <div class="container">
            <div class="section-head reveal">
                <span class="section-tag">Contact Us</span>
                <h2>Let’s Build Your Next Digital Solution</h2>
                <p class="section-text center-text">
                    Tell us what you need and Cube Limited will help you choose the right digital service package.
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-info reveal">
                    <div class="contact-box">
                        <h4>Phone</h4>
                        <p>+880 1700 000000</p>
                    </div>
                    <div class="contact-box">
                        <h4>Email</h4>
                        <p>info@cubelimited.com</p>
                    </div>
                    <div class="contact-box">
                        <h4>Address</h4>
                        <p>Dhaka, Bangladesh</p>
                    </div>
                </div>

                <div class="contact-form-wrap reveal">
                    <form class="contact-form">
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Phone Number">
                        <input type="email" placeholder="Email Address">
                        <textarea rows="5" placeholder="Tell us about your project"></textarea>
                        <button type="submit" class="btn btn-primary full-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container footer-row">
            <p>© {{ date('Y') }} Cube Limited. All rights reserved.</p>
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>