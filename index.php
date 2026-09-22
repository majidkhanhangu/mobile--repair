<?php
// Handles the booking form POST and sets $success / $error for the page below.
require_once 'process-booking.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TechPro Mobile Repair — Don't Delay, Repair Today</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ===== TOP INFO BAR ===== -->
<div class="topbar">
    <div class="container topbar-inner">
        <div class="topbar-contact">
            <a href="tel:+15551234567">+1 (234) 567-8910</a>
            <a href="mailto:support@techprorepair.com">support@techprorepair.com</a>
        </div>
        <div class="topbar-social">
            <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12Z"/></svg></a>
            <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 2H22l-7.6 8.7L23.3 22h-7l-5.5-7.2L4.5 22H1.4l8.1-9.3L1 2h7.2l5 6.6L18.9 2Zm-1.2 18h1.7L7.4 4h-1.8l12.1 16Z"/></svg></a>
            <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c2.7 0 3 0 4.1.06 1.1.05 1.85.23 2.5.48a5 5 0 0 1 1.8 1.17 5 5 0 0 1 1.17 1.8c.25.65.43 1.4.48 2.5C22 8.9 22 9.3 22 12s0 3-.06 4.1c-.05 1.1-.23 1.85-.48 2.5a5 5 0 0 1-1.17 1.8 5 5 0 0 1-1.8 1.17c-.65.25-1.4.43-2.5.48C15.1 22 14.7 22 12 22s-3 0-4.1-.06c-1.1-.05-1.85-.23-2.5-.48a5 5 0 0 1-1.8-1.17 5 5 0 0 1-1.17-1.8c-.25-.65-.43-1.4-.48-2.5C2 15.1 2 14.7 2 12s0-3 .06-4.1c.05-1.1.23-1.85.48-2.5a5 5 0 0 1 1.17-1.8A5 5 0 0 1 5.51 2.54c.65-.25 1.4-.43 2.5-.48C8.9 2 9.3 2 12 2Zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4ZM17.4 6.6a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4Z"/></svg></a>
        </div>
    </div>
</div>

<!-- ===== NAVBAR ===== -->
<nav class="navbar">
    <div class="container navbar-inner">
        <a href="#top" class="logo">Tech<span>Pro</span></a>

        <ul class="nav-links" id="navLinks">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Pricing</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#faq">News</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#booking">Contact Us</a></li>
        </ul>

        <a href="#booking" class="btn btn-primary">Get a Quote</a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- ===== HERO ===== -->
<section class="hero" id="top">
    <div class="container hero-grid">
        <div class="hero-content">
            <span class="hero-eyebrow">Welcome to TechPro</span>
            <h1>Don't Delay,<br>Repair Today.</h1>
            <p class="hero-lead">
                Trust TechPro — where tech meets pro. We're here to breathe new life
                into your devices, swiftly and seamlessly.
            </p>

            <div class="hero-policy-row">
                <span>Warranty Policy</span>
                <span>Service Policy</span>
                <span>Support</span>
            </div>

            <button class="watch-video-btn" type="button">
                <span class="play-circle">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7L8 5Z"/></svg>
                </span>
                Watch Video
            </button>
        </div>

        <div class="hero-visual">
            <div class="phone-mockup">
                <div class="phone-mockup-clock">18:00</div>
            </div>

            <div class="stat-callout">
                <div class="stat-callout-num">34.5k<span>+</span></div>
                <div class="stat-callout-label">Clients in NY</div>
                <div class="stat-callout-people">
                    <span class="avatar-dot"></span>
                    <p>Our experts are ready to diagnose your device for completely free. Write us!</p>
                </div>
                <a href="#services" class="stat-callout-link">Get repair services →</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== PHOTO BANNER STRIP ===== -->
<div class="photo-banner">
    <img src="images/repair1.jpg" alt="Technician repairing a mobile device at a workbench">
</div>

<!-- ===== FEATURES ===== -->
<section class="section" id="features">
    <div class="container">
        <div class="section-head">
            <span class="section-eyebrow">Why TechPro</span>
            <h2>We Make Mobile Repair Stress-Free</h2>
            <p>No jargon, no surprise fees — just a straight answer and a fast fix.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <img src="images/mobile-phone-repair-technician-1.webp" alt="Certified technician repairing a device" class="feature-img">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3>Certified Technicians</h3>
                <p>Every repair is handled by a trained, background-checked technician.</p>
            </div>
            <div class="feature-card">
                <img src="images/Phone-Repair-Shops-That-Use-Genuine-Parts-Why-OEM-Matters-1.webp" alt="Genuine replacement parts" class="feature-img">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="15" height="10" rx="1.5"/><path d="M18 10h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2"/></svg>
                </div>
                <h3>Genuine Parts</h3>
                <p>We only fit original or manufacturer-grade components — never knock-offs.</p>
            </div>
            <div class="feature-card">
                <img src="images/Fast-Turnaround-img.jpg" alt="Fast phone repair turnaround" class="feature-img">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                </div>
                <h3>Fast Turnaround</h3>
                <p>Most screen and battery repairs are done in under an hour, while you wait.</p>
            </div>
            <div class="feature-card">
                <img src="images/mobile-pricing.jpg" alt="Transparent repair pricing" class="feature-img">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="4.5" width="19" height="15" rx="2"/><path d="M2.5 9h19"/></svg>
                </div>
                <h3>Transparent Pricing</h3>
                <p>You get a firm quote before any work starts — no surprises on pickup.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="section section-alt" id="about">
    <div class="container about-grid">
        <div class="about-image">
            <img src="images/repairbig2.jpg" alt="Technician holding a repaired phone in the workshop">
        </div>
        <div class="about-text">
            <span class="section-eyebrow">About Us</span>
            <h2>Bringing Life Back to Your Gadgets</h2>
            <p>
                At TechPro, we're dedicated to your go-to destination for all things mobile
                repair in the city. With a team of skilled technicians equipped to handle a
                wide range of issues with precision and care, we understand the frustration
                that comes with a malfunctioning device — which is why we strive to provide
                swift and reliable solutions that get you back to enjoying your gadgets, fast.
            </p>
            <a href="#services" class="btn btn-primary">Learn More →</a>
        </div>
    </div>
</section>

<!-- ===== STATS STRIP ===== -->
<section class="stats-strip">
    <div class="container stats-grid">
        <div class="stat-item">
            <div class="stat-item-num">25<span>+</span></div>
            <div class="stat-item-label">Years of Experience</div>
        </div>
        <div class="stat-item">
            <div class="stat-item-num">30<span>+</span></div>
            <div class="stat-item-label">Gadgets Repaired Daily</div>
        </div>
        <div class="stat-item">
            <div class="stat-item-num">15</div>
            <div class="stat-item-label">Tech Experts</div>
        </div>
        <div class="stat-item">
            <div class="stat-item-num">34.5k<span>+</span></div>
            <div class="stat-item-label">Clients Served in NY</div>
        </div>
    </div>
</section>

<!-- ===== 3 STEPS ===== -->
<section class="section section-alt" id="steps">
    <div class="container">
        <div class="section-head">
            <span class="section-eyebrow">The Process</span>
            <h2>3 Steps to a Repaired Phone</h2>
            <p>From booking to a fixed device, most repairs move through these steps in under a day.</p>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-num">01</div>
                <h3>Book Your Repair</h3>
                <p>Tell us your device and issue online, or walk in — either works.</p>
            </div>
            <div class="step-card">
                <div class="step-num">02</div>
                <h3>Free Diagnostic</h3>
                <p>A technician checks the device and confirms the fix and price before starting.</p>
            </div>
            <div class="step-card">
                <div class="step-num">03</div>
                <h3>Fast Repair</h3>
                <p>Most repairs are completed same-day, backed by our 90-day warranty.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="section" id="services">
    <div class="container">
        <div class="section-head">
            <span class="section-eyebrow">Services</span>
            <h2>What We Repair</h2>
            <p>The three issues we see most — each backed by the same 90-day warranty.</p>
        </div>

       <div class="services-grid">
    <!-- Service 1 -->
    <div class="service-card">
        <div class="card-img-wrapper">
            <img src="images\Screen Replacement.jpg" alt="Screen Replacement">
        </div>
        <div class="service-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M10 19h4"/></svg>
        </div>
        <h3>Screen Replacement</h3>
        <p>Cracked glass or a dead display — replaced with a genuine-quality panel.</p>
        <div class="service-price">From $59</div>
    </div>

    <!-- Service 2 -->
    <div class="service-card">
        <div class="card-img-wrapper">
            <img src="images\battery-repair.jpg" alt="Battery Repair">
        </div>
        <div class="service-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="17" height="10" rx="1.5"/><path d="M19 10h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2"/></svg>
        </div>
        <h3>Battery Repair</h3>
        <p>Won't hold a charge or drains fast? A fresh battery brings it back to full life.</p>
        <div class="service-price">From $39</div>
    </div>

    <!-- Service 3 -->
    <div class="service-card">
        <div class="card-img-wrapper">
            <img src="images\water-damage-repair.jpg" alt="Water Damage">
        </div>
        <div class="service-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3s7 8 7 13a7 7 0 0 1-14 0c0-5 7-13 7-13Z"/></svg>
        </div>
        <h3>Water Damage</h3>
        <p>Full ultrasonic cleaning and component-level repair for liquid-damaged devices.</p>
        <div class="service-price">From $79</div>
    </div>
</div>
    </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="section section-alt" id="testimonials">
    <div class="container">
        <div class="section-head">
            <span class="section-eyebrow">Reviews</span>
            <h2>What Customers Say</h2>
            <p>Real words from people who walked out with a working phone.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">"Cracked my screen the night before a trip — they had it fixed in 40 minutes the next morning. Looks brand new."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">R</div>
                    <div>
                        <div class="author-name">Ravi M.</div>
                        <div class="author-role">Verified Customer</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">"Dropped my phone in the pool. They were upfront that it might not be saveable, but they got it working — and it's been fine for months."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">S</div>
                    <div>
                        <div class="author-name">Sara K.</div>
                        <div class="author-role">Verified Customer</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">"Battery was dying by noon every day. New battery, and now it easily makes it through a full shift. Fair price too."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">D</div>
                    <div>
                        <div class="author-name">Daniel O.</div>
                        <div class="author-role">Verified Customer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="section" id="faq">
    <div class="container">
        <div class="section-head">
            <span class="section-eyebrow">FAQ</span>
            <h2>Common Questions</h2>
            <p>Still unsure about something? Here are the ones we hear most.</p>
        </div>

        <div class="faq-list">
            <details class="faq-item">
                <summary>How long does a typical repair take?</summary>
                <p class="faq-answer">Most screen and battery repairs are completed in 30–60 minutes while you wait. Water damage repairs usually take 24–48 hours due to the drying and testing process.</p>
            </details>
            <details class="faq-item">
                <summary>Do you use genuine replacement parts?</summary>
                <p class="faq-answer">Yes — we only fit original or manufacturer-grade parts. We never use low-quality aftermarket components, which is why every repair carries a 90-day warranty.</p>
            </details>
            <details class="faq-item">
                <summary>Will I lose my data during a repair?</summary>
                <p class="faq-answer">For screen and battery repairs, your data is untouched. For water damage, we recommend backing up beforehand if possible, though most repairs preserve your data.</p>
            </details>
            <details class="faq-item">
                <summary>Do I need to book in advance, or can I walk in?</summary>
                <p class="faq-answer">Both work — booking online guarantees a technician is ready for you, but we also accept walk-ins based on availability.</p>
            </details>
        </div>
    </div>
</section>

<!-- ===== DISCOUNT CTA + ICON ROW ===== -->
<section class="section discount-cta">
    <div class="container">
        <div class="discount-cta-head">
            <div>
                <span class="section-eyebrow">Limited Offer</span>
                <h2>Contact Us and Get 20% Off Your Order.</h2>
            </div>
            <a href="#booking" class="btn btn-primary">Contact Us</a>
        </div>

        <div class="discount-icons-grid">
    <div class="discount-icon-item">
        <div class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/></svg>
        </div>
        <h3>Warranty Service</h3>
        <p>Every repair backed by a 90-day warranty.</p>
    </div>
    <div class="discount-icon-item">
        <div class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
        </div>
        <h3>Quick Repairs</h3>
        <p>Most fixes completed in under an hour.</p>
    </div>
    <div class="discount-icon-item">
        <div class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m18 0V5a2 2 0 0 0-2-2h-4m0 18h4a2 2 0 0 0 2-2v-4M3 15v4a2 2 0 0 0 2 2h4"/></svg>
        </div>
        <h3>Free Diagnostics</h3>
        <p>We check the issue before quoting a price.</p>
    </div>
    <div class="discount-icon-item">
        <div class="feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78L12 21l8.84-8.61a5.5 5.5 0 0 0 0-7.78Z"/></svg>
        </div>
        <h3>Customer Service</h3>
        <p>Friendly support before, during, and after.</p>
    </div>
</div>
    </div>
</section>

<!-- ===== BOOKING / CONTACT FORM ===== -->
<section class="section section-alt" id="booking">
    <div class="container booking-grid">
        <div class="booking-info">
            <span class="section-eyebrow">Get Started</span>
            <h2>Book Your Repair</h2>
            <p>Tell us about your device and the issue — we'll confirm your appointment and a firm quote before any work starts.</p>

            <div class="booking-contact-item">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z"/></svg>
                </div>
                <div>+1 (555) 016-0234</div>
            </div>
            <div class="booking-contact-item">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2.5" y="4.5" width="19" height="15" rx="2"/><path d="m3 6 9 7 9-7"/></svg>
                </div>
                <div>support@techprorepair.com</div>
            </div>
            <div class="booking-contact-item">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 5.5-8 12-8 12s-8-6.5-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>Mon–Sat, 9am–7pm — Downtown Repair Bar</div>
            </div>
        </div>

        <form class="booking-form" method="POST" action="index.php#booking">
            <?php if ($success): ?>
                <div class="form-msg success">Thanks — your repair request has been received. We'll be in touch shortly to confirm.</div>
            <?php elseif ($error): ?>
                <div class="form-msg error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="device_model">Device Model</label>
                    <input type="text" id="device_model" name="device_model" placeholder="e.g. iPhone 14 Pro" required>
                </div>
            </div>
            <div class="form-group">
                <label for="issue_description">Describe the Issue</label>
                <textarea id="issue_description" name="issue_description" placeholder="e.g. Cracked screen, battery drains fast..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Book a Repair</button>
        </form>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-cta">
        <div class="container footer-cta-inner">
            <div>
                <span class="section-eyebrow">Call Us</span>
                <h2>Contact Us Now for Swift Repairs</h2>
            </div>
            <a href="tel:+15551234567" class="btn btn-primary">+1 (555) 016-0234</a>
        </div>
    </div>

    <div class="container footer-columns">
        <div class="footer-brand">
            <a href="#top" class="logo">Tech<span>Pro</span></a>
            <p>Certified technicians, genuine parts, and a 90-day warranty on every repair.</p>
        </div>
        <div>
            <h4>Useful Links</h4>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#booking">Contact Us</a></li>
            </ul>
        </div>
        <div>
            <h4>Services</h4>
            <ul>
                <li><a href="#services">Screen Replacement</a></li>
                <li><a href="#services">Battery Repair</a></li>
                <li><a href="#services">Water Damage Restoration</a></li>
            </ul>
        </div>
        <div>
            <h4>Support</h4>
            <ul>
                <li><a href="#faq">Warranty Policy</a></li>
                <li><a href="#faq">Service Policy</a></li>
                <li><a href="mailto:support@techprorepair.com">Email Support</a></li>
            </ul>
        </div>
    </div>

    <div class="container footer-inner">
        <span>&copy; <?= date('Y') ?> TechPro Mobile Repair. All rights reserved.</span>
        <nav class="footer-links">
            <a href="#top">Home</a>
            <a href="#services">Services</a>
            <a href="#booking">Book a Repair</a>
        </nav>
    </div>
</footer>

<script>
document.getElementById('navToggle').addEventListener('click', () => {
    document.getElementById('navLinks').classList.toggle('show');
});
</script>

</body>
</html>
