<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Aesthetic Dental Clinic — Silang, Cavite</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Outfit:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.jpg') }}">
</head>

<body>

    <header id="header">
        <div class="wrap nav-row">
            <a href="#top" class="brand">
                <div class="brand-mark">
                    <img src="{{ asset('img/logo1.png') }}" alt="Crown Aesthetic Dental logo" />
                </div>
                <span class="brand-name">Crown <span>Aesthetic</span></span>
            </a>

            <nav class="links" id="navLinks">
                <a href="#announcements">Announcements</a>
                <a href="#about">About</a>
                <a href="#meet">Meet the Dentist</a>
                <a href="#services">Treatments</a>
                <a href="#voices">Stories</a>
                <a href="#visit">Visit</a>
                <a href="#book">Book</a>
            </nav>

            <div class="nav-right">
                <button class="theme-btn" id="themeToggle" aria-label="Toggle theme">
                    <svg class="moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 14.5A8.5 8.5 0 1 1 9.5 3a7 7 0 0 0 11.5 11.5z" />
                    </svg>
                    <svg class="sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="4" />
                        <path
                            d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
                    </svg>
                </button>
                <a href="#book" class="cta-nav desktop">Book a visit</a>
                <button class="menu-btn" id="menuToggle" aria-label="Menu">☰</button>
            </div>
        </div>
    </header>

    <main id="top">

        <section class="hero">
            <div class="wrap hero-inner">
                <div>
                    <div class="hero-label">Silang, Cavite</div>
                    <h1>Your smile, <em>elevated.</em></h1>
                    <p class="hero-lead">Refined dental care in the heart of Biluso — where gentle expertise meets
                        timeless aesthetics. Every visit is calm, considered, and personal.</p>
                    <div class="hero-actions">
                        <a href="#book" class="btn-main">Book an appointment</a>
                        <a href="#services" class="btn-outline">View treatments</a>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <span class="stat-num">5</span>
                            <span class="stat-label">Patients cared for</span>
                        </div>
                        <div>
                            <span class="stat-num">Purok 5</span>
                            <span class="stat-label">Brgy. Biluso</span>
                        </div>
                        <div>
                            <span class="stat-num">By Appointment</span>
                            <span class="stat-label">No walk-ins — questions always welcome</span>
                        </div>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-card">
                        <div class="hero-crest">
                            <img src="{{ asset('img/logo1.png') }}" alt="Crown Aesthetic Dental logo" />
                        </div>
                        <h3>Crown Aesthetic</h3>
                        <p>Dental Clinic · Silang</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="trust">
            <div class="wrap">
                <div class="trust-bar">
                    <div class="trust-item">
                        <h3>Unhurried care</h3>
                        <p>Every consultation begins with listening. We explain options clearly so you feel informed,
                            never pressured.</p>
                    </div>
                    <div class="trust-item">
                        <h3>Modern precision</h3>
                        <p>Sterile, well-equipped rooms and materials chosen for both beauty and lasting function.</p>
                    </div>
                    <div class="trust-item">
                        <h3>Local & trusted</h3>
                        <p>Serving families across Biluso and Silang with flexible hours and a warm, familiar welcome.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ANNOUNCEMENTS SECTION -->
        <section class="announcements" id="announcements">
            <div class="wrap">
                <div class="section-head">
                    <span class="about-label">Clinic updates</span>
                    <h2>Announcements</h2>
                    <p>Notes from Dr. Phili Velasco and the team — schedule changes, special offers, and clinic news.
                    </p>
                </div>

                <div class="announcements-grid">
                    <article class="announce-card">
                        <div class="announce-meta">
                            <span class="announce-badge">Update</span>
                            <span class="announce-date">September 10, 2026</span>
                        </div>
                        <h3>Extended Saturday hours this month</h3>
                        <p>We’re opening until 7:00 PM on Saturdays throughout September to accommodate more families.
                            Please book your slot ahead of time — we’re not able to accommodate walk-ins, but we’re
                            always happy to answer any questions you have beforehand.</p>
                        <div class="announce-author">
                            <div class="avatar">PV</div>
                            <div><strong>Dr. Phili Velasco</strong> · Clinic Director</div>
                        </div>
                    </article>

                    <article class="announce-card">
                        <div class="announce-meta">
                            <span class="announce-badge">Special</span>
                            <span class="announce-date">September 5, 2026</span>
                        </div>
                        <h3>Complimentary consultation for new patients</h3>
                        <p>First-time visitors this month receive a free initial assessment and oral health check. Book
                            ahead or drop by — we’d love to meet you and discuss your smile goals.</p>
                        <div class="announce-author">
                            <div class="avatar">PV</div>
                            <div><strong>Dr. Phili Velasco</strong> · Clinic Director</div>
                        </div>
                    </article>

                    <article class="announce-card">
                        <div class="announce-meta">
                            <span class="announce-badge">Notice</span>
                            <span class="announce-date">August 28, 2026</span>
                        </div>
                        <h3>Holiday schedule – National Heroes Day</h3>
                        <p>The clinic will be closed on August 31 (National Heroes Day). We reopen Tuesday, September 1
                            at our regular 9:00 AM hours. Happy long weekend!</p>
                        <div class="announce-author">
                            <div class="avatar">A</div>
                            <div><strong>Clinic Admin</strong></div>
                        </div>
                    </article>

                    <article class="announce-card">
                        <div class="announce-meta">
                            <span class="announce-badge">Tip</span>
                            <span class="announce-date">August 20, 2026</span>
                        </div>
                        <h3>After whitening: keep your smile bright</h3>
                        <p>Avoid dark drinks (coffee, tea, red wine) for 48 hours after professional whitening. We’re
                            happy to share a simple home-care guide at your next visit.</p>
                        <div class="announce-author">
                            <div class="avatar">PV</div>
                            <div><strong>Dr. Phili Velasco</strong> · Clinic Director</div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="wrap about-grid">
                <div>
                    <span class="about-label">About us</span>
                    <h2>Dentistry with intention and grace.</h2>
                </div>
                <div class="about-text">
                    <p>Crown Aesthetic Dental Clinic was founded on a simple belief: dental care should feel as refined
                        as the results it creates. We take time with every patient — understanding your goals before we
                        ever pick up an instrument.</p>
                    <p>Whether you need a routine cleaning or a complete smile transformation, our approach remains the
                        same: careful diagnosis, honest guidance, and craftsmanship that endures. We’re proud to be part
                        of the Silang community, right here on Ambid Street in Brgy. Biluso.</p>
                </div>
            </div>
        </section>

        <!-- MEET THE DENTIST -->
        <section class="meet" id="meet">
            <div class="wrap">
                <div class="meet-panel">
                    <div class="meet-photo-wrap">
                        <div class="meet-photo">
                            {{-- EXAMPLE PHOTO — a stock placeholder, not Dr. Velasco. Replace src with:
                                 {{ asset('img/dr-velasco.jpg') }} once you have his real photo. --}}
                            <img src="https://images.unsplash.com/photo-1758691463384-771db2f192b3?w=500&h=625&fit=crop&q=80"
                                alt="Placeholder photo — replace with Dr. Velasco's actual photo">
                        </div>
                        <p class="meet-photo-caption">Example photo</p>
                    </div>
                    <div class="meet-body">
                        <span class="meet-role">Clinic Director</span>
                        <h3>Dr. Phili Velasco, DMD</h3>
                        <p class="meet-bio">With years of practice serving the Silang community, Dr. Velasco combines
                            careful, conservative diagnosis with an eye for aesthetics — treating every patient as a
                            person first, not just a set of teeth.</p>
                        <div class="cred-list">
                            <div class="cred-item">
                                <div class="cred-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6">
                                        <path d="M22 10L12 5 2 10l10 5 10-5z" />
                                        <path d="M6 12v5c0 1.5 3 3 6 3s6-1.5 6-3v-5" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="cred-label">Degree</div>
                                    <div class="cred-value">Doctor of Dental Medicine (DMD)</div>
                                </div>
                            </div>
                            <div class="cred-item">
                                <div class="cred-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6">
                                        <path d="M12 15a4 4 0 100-8 4 4 0 000 8z" />
                                        <path d="M8.5 13.5L6 21l6-3 6 3-2.5-7.5" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="cred-label">License</div>
                                    <div class="cred-value">PRC-Licensed Dentist</div>
                                </div>
                            </div>
                            <div class="cred-item">
                                <div class="cred-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6">
                                        <circle cx="12" cy="8" r="5" />
                                        <path d="M8 13l-2 8 6-3 6 3-2-8" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="cred-label">Membership</div>
                                    <div class="cred-value">Philippine Dental Association</div>
                                </div>
                            </div>
                            <div class="cred-item">
                                <div class="cred-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6">
                                        <path d="M12 2l1.8 5.6H20l-4.6 3.4L17 17l-5-3.6L7 17l1.6-6-4.6-3.4h6.2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="cred-label">Focus</div>
                                    <div class="cred-value">Cosmetic & Restorative Dentistry</div>
                                </div>
                            </div>
                        </div>

                        {{-- EXAMPLE MILESTONES — placeholder years/events. Replace with his real timeline. --}}
                        <div class="milestones">
                            <span class="milestones-label">Milestones (example — replace with real dates)</span>
                            <div class="milestone-row">
                                <span class="milestone-year">2010</span>
                                <div>
                                    <div class="milestone-title">Graduated Doctor of Dental Medicine</div>
                                    <div class="milestone-desc">Example: name of dental school here</div>
                                </div>
                            </div>
                            <div class="milestone-row">
                                <span class="milestone-year">2011</span>
                                <div>
                                    <div class="milestone-title">Passed the PRC Dental Licensure Exam</div>
                                    <div class="milestone-desc">Example: board rank or notable score, if any</div>
                                </div>
                            </div>
                            <div class="milestone-row">
                                <span class="milestone-year">2015</span>
                                <div>
                                    <div class="milestone-title">Certified in Cosmetic & Restorative Dentistry</div>
                                    <div class="milestone-desc">Example: certifying body / training program</div>
                                </div>
                            </div>
                            <div class="milestone-row">
                                <span class="milestone-year">2019</span>
                                <div>
                                    <div class="milestone-title">Founded Crown Aesthetic Dental Clinic</div>
                                    <div class="milestone-desc">Example: opened the Biluso, Silang location</div>
                                </div>
                            </div>
                            <div class="milestone-row">
                                <span class="milestone-year">2026</span>
                                <div>
                                    <div class="milestone-title">996+ patients served</div>
                                    <div class="milestone-desc">Example: award, recognition, or patient milestone</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="wrap">
                <div class="section-head">
                    <span class="about-label">Treatments</span>
                    <h2>Crafted for your smile</h2>
                    <p>Thoughtfully selected aesthetic and restorative care — each treatment designed to enhance both
                        form and function.</p>
                </div>

                <div class="services-grid">
                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=600&h=400&fit=crop&q=80"
                                alt="Teeth Whitening example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">01</span>
                            <h3>Teeth Whitening</h3>
                            <p>Professional in-office and take-home systems that gently lift stains for a brighter,
                                natural-looking smile in as little as one visit.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=600&h=400&fit=crop&q=80"
                                alt="Porcelain Veneers example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">02</span>
                            <h3>Porcelain Veneers</h3>
                            <p>Ultra-thin ceramic shells that refine color, shape, and minor alignment — creating a
                                polished, camera-ready smile that lasts.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1609840114035-3c981b782dfe?w=600&h=400&fit=crop&q=80"
                                alt="Composite Bonding example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">03</span>
                            <h3>Composite Bonding</h3>
                            <p>Artistic, same-day resin work to repair chips, close gaps, and reshape edges with minimal
                                intervention and beautiful results.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1598256989800-fe5f95da9787?w=600&h=400&fit=crop&q=80"
                                alt="Clear Aligners example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">04</span>
                            <h3>Clear Aligners</h3>
                            <p>Nearly invisible trays that straighten teeth discreetly — a modern alternative to braces
                                for
                                adults and teens alike.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1629909615184-74f495363b67?w=600&h=400&fit=crop&q=80"
                                alt="Dental Crowns example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">05</span>
                            <h3>Dental Crowns</h3>
                            <p>Custom ceramic crowns that restore strength and beauty to damaged or heavily filled teeth
                                with lifelike translucency.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=600&h=400&fit=crop&q=80"
                                alt="Gum Contouring example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">06</span>
                            <h3>Gum Contouring</h3>
                            <p>Subtle reshaping of the gum line for better balance and proportion — ideal for refining a
                                gummy or uneven smile.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1588776814546-daab30f310ce?w=600&h=400&fit=crop&q=80"
                                alt="Preventive Care example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">07</span>
                            <h3>Preventive Care</h3>
                            <p>Thorough check-ups, cleanings, and early intervention to keep your smile healthy and
                                protect
                                your long-term investment.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?w=600&h=400&fit=crop&q=80"
                                alt="Pediatric Care example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">08</span>
                            <h3>Pediatric Care</h3>
                            <p>Gentle, age-appropriate dentistry that helps children feel at ease and builds positive
                                habits
                                from the very first visit.</p>
                        </div>
                    </article>

                    <article class="svc-card reveal">
                        <div class="svc-img-wrap">
                            <img class="svc-img"
                                src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?w=600&h=400&fit=crop&q=80"
                                alt="Smile Design example" loading="lazy">
                        </div>
                        <div class="svc-body">
                            <span class="svc-num">09</span>
                            <h3>Smile Design</h3>
                            <p>A personalized combination of treatments tailored to your face, features, and goals —
                                planned
                                with artistry and precision.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="quote-section">
            <div class="wrap quote-inner">
                <blockquote>“A confident smile isn’t an accessory — it’s something we help <span>build with you</span>,
                    visit by visit.”</blockquote>
                <cite>— The Crown Aesthetic team</cite>
            </div>
        </section>

        <section class="voices" id="voices">
            <div class="wrap">
                <div class="section-head">
                    <span class="about-label">Patient stories</span>
                    <h2>Words from our community</h2>
                </div>
                <div class="voices-grid">
                    <div class="voice-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>“They explained every step. The whitening result felt natural — not overdone. I
                            finally smile in photos again.”</blockquote>
                        <cite>— Patient from Silang</cite>
                    </div>
                    <div class="voice-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>“First dental clinic where I didn’t feel rushed. My kids actually ask when we’re
                            going back.”</blockquote>
                        <cite>— Parent, Brgy. Biluso</cite>
                    </div>
                    <div class="voice-card">
                        <div class="stars">★★★★★</div>
                        <blockquote>“The bonding fixed a chip I’d hidden for years. Same-day work and it still looks
                            seamless months later.”</blockquote>
                        <cite>— Local professional</cite>
                    </div>
                </div>
            </div>
        </section>

        <section class="visit" id="visit">
            <div class="wrap">
                <div class="visit-panel">
                    <div class="visit-info">
                        <span class="about-label">Visit us</span>
                        <h2>Find us in Biluso</h2>

                        <div class="visit-row">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 2L4 6v6c0 5 3.5 8.5 8 10 4.5-1.5 8-5 8-10V6l-8-4z" />
                                </svg>
                            </div>
                            <div>
                                <div class="label">Address</div>
                                <div class="value">268 Ambid Street, Purok 5, Brgy. Biluso, Silang, Cavite 4118</div>
                            </div>
                        </div>
                        <div class="visit-row">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5l3 3" />
                                </svg>
                            </div>
                            <div>
                                <div class="label">Hours</div>
                                <div class="value">Monday – Saturday · 9:00 AM – 6:00 PM</div>
                            </div>
                        </div>
                        <div class="visit-row">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M4 5c0 8 7 15 15 15l3-4-6-3-2 2c-3-1.5-5-3.5-6-6l2-2-3-6-4 3z" />
                                </svg>
                            </div>
                            <div>
                                <div class="label">Contact</div>
                                <div class="value"><a href="tel:+639170000000">(0000) 000 0000</a> · <a
                                        href="https://www.facebook.com/CrownAestheticDental/" target="_blank"
                                        rel="noopener">Facebook</a></div>
                            </div>
                        </div>

                        <div class="visit-actions">
                            <a href="https://www.google.com/maps/search/?api=1&query=14.247212,120.955098"
                                target="_blank" rel="noopener" class="btn-main">Get directions</a>
                            <a href="tel:+639170000000" class="btn-outline">Call us</a>
                        </div>
                        <p class="form-note" style="margin-top:16px;">We see patients by appointment only and aren’t
                            able to accommodate walk-ins — but questions are always welcome, so feel free to call or
                            message us before booking.</p>
                    </div>
                    <div class="visit-visual">
                        <iframe
                            title="Map to Crown Aesthetic Dental Clinic, 268 Ambid Street, Purok 5, Brgy. Biluso, Silang, Cavite"
                            src="https://www.google.com/maps?q=14.247212,120.955098&output=embed" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- BOOKING / CONTACT FORM -->
        <section class="booking" id="book">
            <div class="wrap">
                <div class="booking-panel">
                    <div class="section-head">
                        <span class="about-label">Book a visit</span>
                        <h2>Request an appointment</h2>
                        <p>Fill out the form and we’ll get back to you shortly. Free · no account needed.</p>
                    </div>


                    <form id="bookingForm" data-endpoint="https://formsubmit.co/ajax/pagawpawjemoyacerenado@gmail.com"
                        novalidate>
                        <input type="text" name="_honey" id="honeyField" style="display:none" tabindex="-1"
                            autocomplete="off">

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Full name</label>
                                <input type="text" id="name" name="name" placeholder="Juan Dela Cruz"
                                    required>
                                <span class="field-error" data-error-for="name"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone / WhatsApp</label>
                                <input type="tel" id="phone" name="phone" placeholder="0917 000 0000"
                                    required>
                                <span class="field-error" data-error-for="phone"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="you@email.com">
                                <span class="field-error" data-error-for="email"></span>
                            </div>
                            <!--- date picker --->
                            <div class="form-group">
                                <label for="date">Preferred Date</label>
                                <input type="date" id="date" name="date" required>
                                <span class="field-error" data-error-for="date"></span>
                            </div>
                            <!---time picker --->
                            <div class="form-group">
                                <label for="time">Preferred Time</label>
                                <input type="time" id="time" name="time" required>
                                <span class="field-error" data-error-for="time"></span>
                            </div>
                            <div class="form-group">
                                <label for="service">Preferred treatment</label>
                                <select id="service" name="service">
                                    <option value="">Select a treatment</option>
                                    <option value="Brace Adjustment">Brace Adjustment</option>
                                    <option value="Teeth Whitening">Teeth Whitening</option>
                                    <option value="Porcelain Veneers">Porcelain Veneers</option>
                                    <option value="Composite Bonding">Composite Bonding</option>
                                    <option value="Clear Aligners">Clear Aligners</option>
                                    <option value="Dental Crowns">Dental Crowns</option>
                                    <option value="Gum Contouring">Gum Contouring</option>
                                    <option value="Preventive Care / Cleaning">Preventive Care / Cleaning</option>
                                    <option value="Pediatric Care">Pediatric Care</option>
                                    <option value="Smile Design">Smile Design</option>
                                    <option value="General Consultation">General Consultation</option>
                                </select>
                            </div>
                            <div class="form-group full">
                                <label for="message">Message / preferred date</label>
                                <textarea id="message" name="message" placeholder="Tell us a bit about what you need, or preferred days/times…"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-main" id="submitBtn">Send request</button>
                            <span class="form-note">By appointment only — we don’t accommodate walk-ins. Just have a
                                question? Call or message us anytime, no booking needed.</span>
                        </div>
                    </form>

                    <div class="form-success" id="formSuccess"></div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="wrap">
            <div class="foot-grid">
                <div>
                    <div class="foot-brand">
                        <div class="brand-mark">
                            <img src ="{{ asset('img/logo1.png') }}" alt="Crown Aesthetic Dental Clinic logo"
                                width="30" height="30">
                        </div>
                        <span>Crown Aesthetic</span>
                    </div>
                    <p>268 Ambid Street, Purok 5, Brgy. Biluso, Silang, Cavite 4118, Philippines.</p>
                </div>
                <div class="foot-col">
                    <h4>Explore</h4>
                    <a href="#announcements">Announcements</a>
                    <a href="#about">About</a>
                    <a href="#meet">Meet the Dentist</a>
                    <a href="#services">Treatments</a>
                    <a href="#voices">Stories</a>
                    <a href="#visit">Visit</a>
                    <a href="#book">Book</a>
                </div>
                <div class="foot-col">
                    <h4>Connect</h4>
                    <a href="tel:+639170000000">(0000) 000 0000</a>
                    <a href="https://www.facebook.com/CrownAestheticDental/" target="_blank"
                        rel="noopener">Facebook</a>
                </div>
            </div>
            <div class="foot-bottom">
                <span>© 2026 Crown Aesthetic Dental Clinic</span>
                <span>Silang, Cavite</span>
            </div>
        </div>
    </footer>

    <script>
        (function() {
            const root = document.documentElement;
            const btn = document.getElementById('themeToggle');
            const KEY = 'crown-theme';

            function preferred() {
                const s = localStorage.getItem(KEY);
                if (s === 'light' || s === 'dark') return s;
                return matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            function apply(t) {
                root.setAttribute('data-theme', t);
                if (btn) btn.setAttribute('aria-label', t === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
            }
            apply(preferred());
            if (btn) {
                btn.addEventListener('click', () => {
                    const next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                    localStorage.setItem(KEY, next);
                    apply(next);
                });
            }
            matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (!localStorage.getItem(KEY)) apply(e.matches ? 'dark' : 'light');
            });
        })();

        (function() {
            const h = document.getElementById('header');
            const onScroll = () => h.classList.toggle('scrolled', scrollY > 40);
            addEventListener('scroll', onScroll, {
                passive: true
            });
            onScroll();
        })();

        (function() {
            const btn = document.getElementById('menuToggle');
            const nav = document.getElementById('navLinks');
            if (!btn || !nav) return;
            btn.addEventListener('click', () => {
                const open = nav.classList.toggle('open');
                btn.textContent = open ? '✕' : '☰';
            });
            nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
                nav.classList.remove('open');
                btn.textContent = '☰';
            }));
        })();

        // ---- Scroll-triggered reveal for the treatment cards ----
        (function() {
            const cards = document.querySelectorAll('.services-grid .reveal');
            if (!cards.length) return;
            if (!('IntersectionObserver' in window) || matchMedia('(prefers-reduced-motion: reduce)').matches) {
                cards.forEach(el => el.classList.add('in-view'));
                return;
            }
            cards.forEach((el, i) => {
                el.style.animationDelay = (i % 3 * 90) + 'ms'; // stagger by column
            });
            const io = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });
            cards.forEach(el => io.observe(el));
        })();

        // ---- Booking form: validation + real AJAX submission to FormSubmit ----
        // Submits via fetch to FormSubmit's /ajax/ endpoint and reads the JSON
        // response's "success" field directly, rather than assuming any HTTP
        // 200 response means the email was actually delivered. This is what
        // was silently failing before: a plain POST gives no way to tell
        // whether FormSubmit actually sent the email or just accepted the
        // request, so a form that "looked" like it worked could still be
        // dropping every submission (most commonly because the one-time
        // activation email hasn't been confirmed yet — see the HTML comment
        // above the <form> tag).
        (function() {
            const form = document.getElementById('bookingForm');
            const endpoint = form ? form.dataset.endpoint : null;
            const status = document.getElementById('formSuccess');
            const submitBtn = document.getElementById('submitBtn');
            if (!form || !endpoint) return;

            function showError(field, msg) {
                const el = form.querySelector('[data-error-for="' + field + '"]');
                if (el) el.textContent = msg;
            }

            function clearErrors() {
                form.querySelectorAll('.field-error').forEach(el => el.textContent = '');
            }

            function validate() {
                clearErrors();
                let ok = true;
                const name = form.elements['name'].value.trim();
                const phone = form.elements['phone'].value.trim();
                const date = form.elements['date'];
                const time = form.elements['time'];
                const email = form.elements['email'].value.trim();

                if (name.length < 2) {
                    showError('name', 'Please enter your full name.');
                    ok = false;
                }
                if (phone.replace(/[^0-9+]/g, '').length < 7) {
                    showError('phone', 'Please enter a valid phone number.');
                    ok = false;
                }
                if (date.value === '') {
                    showError('date', 'Please select a preferred date.');
                    ok = false;
                }
                if (time.value === '') {
                    showError('time', 'Please select a preferred time.');
                    ok = false;
                }
                if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    showError('email', 'Please enter a valid email address.');
                    ok = false;
                }

                return ok;
            }

            function resetButton() {
                submitBtn.removeAttribute('disabled');
                submitBtn.textContent = 'Send request';
            }

            function showStatus(kind, html) {
                form.style.display = 'none';
                status.className = 'form-success show' + (kind === 'error' ? ' error' : '');
                status.innerHTML = html;
                const retry = status.querySelector('.retry-btn');
                if (retry) retry.addEventListener('click', () => {
                    form.style.display = '';
                    status.className = 'form-success';
                    status.innerHTML = '';
                });
            }

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                if (!validate()) return;

                // Honeypot: a filled hidden field means a bot filled the form.
                // Pretend success and stop — don't send bots feedback either way.
                if (form.elements['_honey'].value) {
                    showStatus('success',
                        '<h3>Request sent ✓</h3><p>Thank you! We\u2019ll contact you soon to confirm your appointment.</p>'
                    );
                    return;
                }

                submitBtn.setAttribute('disabled', 'true');
                submitBtn.textContent = 'Sending…';

                const payload = {
                    name: form.elements['name'].value.trim(),
                    phone: form.elements['phone'].value.trim(),
                    email: form.elements['email'].value.trim(),
                    date: form.elements['date'].value,
                    time: form.elements['time'].value,
                    service: form.elements['service'].value,
                    message: form.elements['message'].value.trim(),
                    _subject: 'New Appointment Request — Crown Aesthetic',
                    _template: 'table'
                };

                try {
                    const res = await fetch(endpoint, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(payload)
                    });
                    let data = null;
                    try {
                        data = await res.json();
                    } catch (parseErr) {
                        data = null;
                    }

                    // FormSubmit returns { success: "true" | "false", message: "..." }.
                    // Only treat it as delivered when success is explicitly truthy —
                    // this is the check that was missing before.
                    const delivered = res.ok && data && (data.success === true || data.success === 'true');

                    if (delivered) {
                        showStatus('success',
                            '<h3>Request sent ✓</h3><p>Thank you! We\u2019ll contact you soon to confirm your appointment.</p>'
                        );
                    } else if (data && /activat|confirm/i.test(data.message || '')) {
                        // The address hasn't clicked the one-time FormSubmit
                        // activation link yet — the request did not go through.
                        showStatus('error',
                            '<h3>We couldn\u2019t send that yet</h3>' +
                            '<p>Our booking form needs a one-time activation before it can deliver requests. ' +
                            'Please call us at <a href="tel:+639170000000">(0917) 000 0000</a> or message us on ' +
                            '<a href="https://www.facebook.com/CrownAestheticDental/" target="_blank" rel="noopener">Facebook</a> ' +
                            'and we\u2019ll get you booked right away.</p>' +
                            '<button type="button" class="btn-outline retry-btn">Try again</button>');
                    } else {
                        showStatus('error',
                            '<h3>Something went wrong</h3>' +
                            '<p>Your request wasn\u2019t sent. Please try again, or reach us directly at ' +
                            '<a href="tel:+639170000000">(0917) 000 0000</a> or on ' +
                            '<a href="https://www.facebook.com/CrownAestheticDental/" target="_blank" rel="noopener">Facebook</a>.</p>' +
                            '<button type="button" class="btn-outline retry-btn">Try again</button>');
                    }
                } catch (networkErr) {
                    showStatus('error',
                        '<h3>Connection problem</h3>' +
                        '<p>We couldn\u2019t reach the booking service. Please check your connection and try again, or call ' +
                        '<a href="tel:+639170000000">(0917) 000 0000</a> directly.</p>' +
                        '<button type="button" class="btn-outline retry-btn">Try again</button>');
                } finally {
                    resetButton();
                }
            });
        })();
    </script>
</body>

</html>
