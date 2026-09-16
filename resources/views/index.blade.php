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
    <style>
        :root {
            --ink: #1a1f2e;
            --ink-soft: #3d4455;
            --muted: #7a8294;
            --gold: #c4a574;
            --gold-light: #e8d5b5;
            --gold-deep: #a68b5b;
            --cream: #faf7f2;
            --cream-2: #f3efe8;
            --white: #ffffff;
            --line: rgba(26, 31, 46, 0.08);
            --bg: var(--cream);
            --surface: var(--white);
            --text: var(--ink);
            --text-muted: var(--muted);
            --shadow-sm: 0 2px 12px rgba(26, 31, 46, 0.04);
            --shadow-md: 0 8px 32px rgba(26, 31, 46, 0.06);
            --shadow-lg: 0 20px 60px rgba(26, 31, 46, 0.08);
            --radius: 20px;
            --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        @media (prefers-color-scheme: dark) {
            :root:not([data-theme="light"]) {
                --bg: #0e1118;
                --surface: #171c27;
                --text: #f0ebe3;
                --text-muted: #9ba3b5;
                --ink: #f0ebe3;
                --ink-soft: #c8cdd8;
                --line: rgba(240, 235, 227, 0.08);
                --cream: #0e1118;
                --cream-2: #141922;
                --shadow-sm: 0 2px 12px rgba(0, 0, 0, 0.2);
                --shadow-md: 0 8px 32px rgba(0, 0, 0, 0.25);
                --shadow-lg: 0 20px 60px rgba(0, 0, 0, 0.3);
            }
        }

        :root[data-theme="dark"] {
            --bg: #0e1118;
            --surface: #171c27;
            --text: #f0ebe3;
            --text-muted: #9ba3b5;
            --ink: #f0ebe3;
            --ink-soft: #c8cdd8;
            --line: rgba(240, 235, 227, 0.08);
            --cream: #0e1118;
            --cream-2: #141922;
            --shadow-sm: 0 2px 12px rgba(0, 0, 0, 0.2);
            --shadow-md: 0 8px 32px rgba(0, 0, 0, 0.25);
            --shadow-lg: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Outfit', -apple-system, sans-serif;
            font-weight: 400;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            transition: background 0.35s var(--ease), color 0.35s var(--ease);
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .wrap {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 32px;
        }

        h1,
        h2,
        h3 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-weight: 500;
            line-height: 1.15;
            letter-spacing: -0.01em;
        }

        :focus-visible {
            outline: 2px solid var(--gold);
            outline-offset: 3px;
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
            }
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            transition: background 0.35s var(--ease), box-shadow 0.35s var(--ease);
        }

        header.scrolled {
            background: color-mix(in srgb, var(--bg) 92%, transparent);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: 0 1px 0 var(--line);
        }

        .nav-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand-mark {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--gold) 0%, var(--gold-deep) 100%);
            display: grid;
            place-items: center;
            color: #1a1f2e;
        }

        .brand-mark svg {
            width: 18px;
            height: 18px;
        }

        .brand-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.25rem;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        .brand-name span {
            color: var(--gold-deep);
        }

        nav.links {
            display: flex;
            gap: 28px;
            align-items: center;
        }

        nav.links a {
            font-size: 0.875rem;
            font-weight: 400;
            color: var(--text-muted);
            letter-spacing: 0.02em;
            transition: color 0.25s var(--ease);
            position: relative;
        }

        nav.links a:hover {
            color: var(--text);
        }

        nav.links a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: width 0.3s var(--ease);
        }

        nav.links a:hover::after {
            width: 100%;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .theme-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid var(--line);
            background: transparent;
            color: var(--text-muted);
            cursor: pointer;
            display: grid;
            place-items: center;
            transition: all 0.25s var(--ease);
        }

        .theme-btn:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .theme-btn svg {
            width: 18px;
            height: 18px;
        }

        .theme-btn .sun {
            display: none;
        }

        .theme-btn .moon {
            display: block;
        }

        :root[data-theme="dark"] .theme-btn .sun {
            display: block;
        }

        :root[data-theme="dark"] .theme-btn .moon {
            display: none;
        }

        @media (prefers-color-scheme: dark) {
            :root:not([data-theme="light"]) .theme-btn .sun {
                display: block;
            }

            :root:not([data-theme="light"]) .theme-btn .moon {
                display: none;
            }
        }

        .cta-nav {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text);
            padding: 10px 22px;
            border: 1px solid var(--line);
            border-radius: 100px;
            transition: all 0.3s var(--ease);
            letter-spacing: 0.02em;
        }

        .cta-nav:hover {
            background: var(--ink);
            color: var(--cream);
            border-color: var(--ink);
        }

        .menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text);
            font-size: 1.4rem;
            cursor: pointer;
            padding: 4px;
        }

        @media (max-width: 960px) {
            nav.links {
                position: fixed;
                inset: 0;
                background: var(--bg);
                flex-direction: column;
                justify-content: center;
                gap: 28px;
                transform: translateX(100%);
                transition: transform 0.4s var(--ease);
                z-index: 90;
            }

            nav.links.open {
                transform: translateX(0);
            }

            nav.links a {
                font-size: 1.4rem;
                font-family: 'Cormorant Garamond', serif;
            }

            .menu-btn {
                display: block;
                z-index: 95;
            }

            .cta-nav.desktop {
                display: none;
            }
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 60%;
            height: 120%;
            background: radial-gradient(ellipse at center, color-mix(in srgb, var(--gold) 12%, transparent) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-inner {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--gold-deep);
            margin-bottom: 28px;
        }

        .hero-label::before {
            content: '';
            width: 28px;
            height: 1px;
            background: var(--gold);
        }

        .hero h1 {
            font-size: clamp(3rem, 6vw, 4.5rem);
            font-weight: 400;
            max-width: 11ch;
            margin-bottom: 24px;
            color: var(--text);
        }

        .hero h1 em {
            font-style: italic;
            color: var(--gold-deep);
        }

        .hero-lead {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 40ch;
            line-height: 1.7;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 56px;
        }

        .btn-main {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--ink);
            color: var(--cream);
            padding: 16px 32px;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 100px;
            letter-spacing: 0.02em;
            transition: all 0.3s var(--ease);
            border: none;
        }

        .btn-main:hover {
            background: var(--gold-deep);
            color: #1a1f2e;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            padding: 16px 28px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid var(--line);
            border-radius: 100px;
            color: var(--text);
            transition: all 0.3s var(--ease);
        }

        .btn-outline:hover {
            border-color: var(--gold);
            color: var(--gold-deep);
        }

        .hero-stats {
            display: flex;
            gap: 40px;
        }

        .hero-stats .stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 500;
            color: var(--text);
            display: block;
            line-height: 1.2;
        }

        .hero-stats .stat-label {
            font-size: 0.78rem;
            color: var(--text-muted);
            letter-spacing: 0.03em;
        }

        .hero-visual {
            position: relative;
        }

        .hero-card {
            background: var(--surface);
            border-radius: 28px;
            padding: 48px 40px;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--line);
            text-align: center;
            position: relative;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            inset: 12px;
            border: 1px solid color-mix(in srgb, var(--gold) 25%, transparent);
            border-radius: 20px;
            pointer-events: none;
        }

        .hero-crest {
            width: 140px;
            height: 140px;
            margin: 0 auto 28px;
            background: linear-gradient(160deg, var(--gold-light) 0%, var(--gold) 50%, var(--gold-deep) 100%);
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: #1a1f2e;
        }

        .hero-crest svg {
            width: 64px;
            height: 64px;
        }

        .hero-card h3 {
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .hero-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
            font-weight: 300;
        }

        @media (max-width: 900px) {
            .hero {
                min-height: auto;
                padding: 110px 0 60px;
            }

            .hero-inner {
                grid-template-columns: 1fr;
                gap: 48px;
            }

            .hero-visual {
                max-width: 360px;
                margin: 0 auto;
            }

            .hero h1 {
                max-width: none;
            }
        }

        /* TRUST */
        .trust {
            padding: 0 0 20px;
        }

        .trust-bar {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            background: var(--line);
            border-radius: var(--radius);
            overflow: hidden;
            border: 1px solid var(--line);
        }

        .trust-item {
            background: var(--surface);
            padding: 36px 32px;
            text-align: center;
        }

        .trust-item h3 {
            font-size: 1.15rem;
            margin-bottom: 8px;
        }

        .trust-item p {
            font-size: 0.88rem;
            color: var(--text-muted);
            font-weight: 300;
            line-height: 1.6;
        }

        @media (max-width: 700px) {
            .trust-bar {
                grid-template-columns: 1fr;
            }
        }

        /* ANNOUNCEMENTS */
        .announcements {
            padding: 100px 0 40px;
        }

        .announcements-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        @media (max-width: 700px) {
            .announcements-grid {
                grid-template-columns: 1fr;
            }
        }

        .announce-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 32px 28px;
            transition: all 0.35s var(--ease);
            position: relative;
            overflow: hidden;
        }

        .announce-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, var(--gold), var(--gold-deep));
        }

        .announce-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        .announce-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }

        .announce-badge {
            font-size: 0.7rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--gold-deep);
            background: color-mix(in srgb, var(--gold) 15%, transparent);
            padding: 4px 10px;
            border-radius: 100px;
        }

        .announce-date {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .announce-card h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: var(--text);
        }

        .announce-card p {
            font-size: 0.95rem;
            color: var(--text-muted);
            font-weight: 300;
            line-height: 1.65;
            margin-bottom: 18px;
        }

        .announce-author {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .announce-author .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--gold-light), var(--gold-deep));
            display: grid;
            place-items: center;
            font-family: 'Cormorant Garamond', serif;
            font-size: 0.9rem;
            font-weight: 500;
            color: #1a1f2e;
        }

        .announce-author strong {
            color: var(--text);
            font-weight: 500;
        }

        /* ABOUT */
        .about {
            padding: 100px 0 120px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 80px;
            align-items: center;
        }

        .about-label {
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--gold-deep);
            margin-bottom: 20px;
            display: block;
        }

        .about h2 {
            font-size: clamp(2.2rem, 4vw, 3rem);
            max-width: 12ch;
        }

        .about-text p {
            font-size: 1.05rem;
            color: var(--text-muted);
            font-weight: 300;
            line-height: 1.75;
            max-width: 48ch;
        }

        .about-text p+p {
            margin-top: 20px;
        }

        @media (max-width: 800px) {
            .about-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }

        /* SERVICES */
        .services {
            padding: 0 0 120px;
        }

        .section-head {
            text-align: center;
            max-width: 520px;
            margin: 0 auto 56px;
        }

        .section-head .about-label {
            text-align: center;
        }

        .section-head h2 {
            font-size: clamp(2.2rem, 4vw, 3rem);
            margin-bottom: 16px;
        }

        .section-head p {
            font-size: 1.05rem;
            color: var(--text-muted);
            font-weight: 300;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        @media (max-width: 900px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 560px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        .svc-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
            transition: all 0.4s var(--ease);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .svc-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-lg);
            border-color: color-mix(in srgb, var(--gold) 30%, var(--line));
        }

        .svc-img-wrap {
            position: relative;
            overflow: hidden;
            height: 180px;
            background: var(--cream-2);
        }

        .svc-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s var(--ease), filter 0.5s var(--ease);
            will-change: transform;
        }

        .svc-img-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(160deg,
                    color-mix(in srgb, var(--gold) 18%, transparent) 0%,
                    transparent 50%,
                    color-mix(in srgb, var(--ink) 12%, transparent) 100%);
            opacity: 0;
            transition: opacity 0.5s var(--ease);
            pointer-events: none;
        }

        .svc-card:hover .svc-img {
            transform: scale(1.08);
            filter: brightness(1.06) contrast(1.03);
        }

        .svc-card:hover .svc-img-wrap::after {
            opacity: 1;
        }

        .svc-img-wrap::before {
            content: '';
            position: absolute;
            top: 0;
            left: -80%;
            width: 60%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent 0%,
                    rgba(255, 255, 255, 0.18) 50%,
                    transparent 100%);
            transform: skewX(-18deg);
            transition: left 0.7s var(--ease);
            pointer-events: none;
            z-index: 1;
        }

        .svc-card:hover .svc-img-wrap::before {
            left: 130%;
        }

        .svc-body {
            padding: 28px 24px 32px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .svc-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 0.9rem;
            color: var(--gold);
            font-style: italic;
            margin-bottom: 12px;
            display: block;
            transition: color 0.3s var(--ease);
        }

        .svc-card:hover .svc-num {
            color: var(--gold-deep);
        }

        .svc-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--text);
            transition: color 0.3s var(--ease);
        }

        .svc-card:hover h3 {
            color: var(--gold-deep);
        }

        .svc-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
            font-weight: 300;
            line-height: 1.65;
            flex: 1;
        }

        /* QUOTE */
        .quote-section {
            padding: 100px 0;
            background: var(--cream-2);
            transition: background 0.35s var(--ease);
        }

        .quote-inner {
            max-width: 720px;
            margin: 0 auto;
            text-align: center;
        }

        .quote-inner blockquote {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.6rem, 3.5vw, 2.4rem);
            font-weight: 400;
            font-style: italic;
            line-height: 1.4;
            color: var(--text);
            margin-bottom: 28px;
        }

        .quote-inner blockquote span {
            color: var(--gold-deep);
            font-style: normal;
        }

        .quote-inner cite {
            font-style: normal;
            font-size: 0.85rem;
            color: var(--text-muted);
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        /* TESTIMONIALS */
        .voices {
            padding: 120px 0;
        }

        .voices-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .voice-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 36px 28px;
            transition: all 0.35s var(--ease);
        }

        .voice-card:hover {
            box-shadow: var(--shadow-md);
        }

        .voice-card .stars {
            color: var(--gold);
            font-size: 0.85rem;
            letter-spacing: 3px;
            margin-bottom: 18px;
        }

        .voice-card blockquote {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-style: italic;
            line-height: 1.5;
            color: var(--text);
            margin-bottom: 20px;
        }

        .voice-card cite {
            font-style: normal;
            font-size: 0.82rem;
            color: var(--text-muted);
        }

        @media (max-width: 800px) {
            .voices-grid {
                grid-template-columns: 1fr;
            }
        }

        /* VISIT */
        .visit {
            padding: 0 0 120px;
        }

        .visit-panel {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 28px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        .visit-info {
            padding: 56px 48px;
        }

        .visit-info h2 {
            font-size: clamp(1.9rem, 3vw, 2.5rem);
            margin-bottom: 32px;
        }

        .visit-row {
            display: flex;
            gap: 16px;
            padding: 18px 0;
            border-top: 1px solid var(--line);
        }

        .visit-row:last-of-type {
            border-bottom: 1px solid var(--line);
        }

        .visit-row .icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: color-mix(in srgb, var(--gold) 12%, transparent);
            color: var(--gold-deep);
            display: grid;
            place-items: center;
            flex-shrink: 0;
        }

        .visit-row .icon svg {
            width: 18px;
            height: 18px;
        }

        .visit-row .label {
            font-size: 0.75rem;
            color: var(--text-muted);
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .visit-row .value {
            font-size: 0.95rem;
            color: var(--text);
        }

        .visit-row .value a:hover {
            color: var(--gold-deep);
        }

        .visit-actions {
            display: flex;
            gap: 12px;
            margin-top: 32px;
            flex-wrap: wrap;
        }

        .visit-visual {
            background: linear-gradient(160deg, #1a1f2e 0%, #2a3142 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 320px;
            position: relative;
        }

        .visit-visual::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 60% 40%, rgba(196, 165, 116, 0.15) 0%, transparent 60%);
        }

        .visit-visual svg {
            width: 100px;
            height: 100px;
            color: var(--gold);
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 800px) {
            .visit-panel {
                grid-template-columns: 1fr;
            }

            .visit-info {
                padding: 40px 28px;
            }
        }

        /* BOOKING FORM */
        .booking {
            padding: 0 0 120px;
        }

        .booking-panel {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 28px;
            padding: 48px;
            box-shadow: var(--shadow-md);
            max-width: 720px;
            margin: 0 auto;
        }

        .booking-panel .section-head {
            margin-bottom: 36px;
            text-align: left;
            max-width: none;
        }

        .booking-panel .section-head h2 {
            margin-bottom: 8px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .booking-panel {
                padding: 32px 24px;
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: var(--text-muted);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-family: 'Outfit', sans-serif;
            font-size: 0.95rem;
            padding: 14px 16px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: var(--bg);
            color: var(--text);
            transition: border-color 0.25s var(--ease), box-shadow 0.25s var(--ease);
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px color-mix(in srgb, var(--gold) 20%, transparent);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-group select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%7a8294' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }

        .form-note {
            font-size: 0.82rem;
            color: var(--text-muted);
            margin-top: 8px;
            font-weight: 300;
        }

        .form-actions {
            margin-top: 28px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
        }

        .form-actions .btn-main {
            cursor: pointer;
        }

        .form-success {
            display: none;
            text-align: center;
            padding: 40px 20px;
        }

        .form-success.show {
            display: block;
        }

        .form-success h3 {
            font-size: 1.6rem;
            margin-bottom: 12px;
            color: var(--gold-deep);
        }

        .form-success p {
            color: var(--text-muted);
            font-weight: 300;
        }

        /* FOOTER */
        footer {
            background: #0e1118;
            color: #a0a8b8;
            padding: 64px 0 28px;
        }

        .foot-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 48px;
            padding-bottom: 48px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        }

        .foot-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .foot-brand .brand-mark {
            width: 32px;
            height: 32px;
        }

        .foot-brand span {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.15rem;
            color: #f0ebe3;
        }

        .foot-grid>div:first-child p {
            font-size: 0.88rem;
            line-height: 1.6;
            max-width: 28ch;
            font-weight: 300;
        }

        .foot-col h4 {
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #e8d5b5;
            margin-bottom: 16px;
            font-family: 'Outfit', sans-serif;
        }

        .foot-col a {
            display: block;
            font-size: 0.9rem;
            padding: 5px 0;
            color: #a0a8b8;
            transition: color 0.25s;
            font-weight: 300;
        }

        .foot-col a:hover {
            color: var(--gold);
        }

        .foot-bottom {
            display: flex;
            justify-content: space-between;
            padding-top: 24px;
            font-size: 0.8rem;
            color: #6a7285;
            flex-wrap: wrap;
            gap: 8px;
        }

        @media (max-width: 700px) {
            .foot-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }
        }
    </style>
</head>

<body>

    <header id="header">
        <div class="wrap nav-row">
            <a href="#top" class="brand">
                <div class="brand-mark">
                    <img src="{{ asset('img/logo1.png') }}" alt="Crown Aesthetic Dental logo" />
                </div>
                <span class="brand-name">Crown <span>Aesthetic</span> Dental </span>
            </a>

            <nav class="links" id="navLinks">
                <a href="#announcements">Announcements</a>
                <a href="#about">About</a>
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
                            <span class="stat-num">996+</span>
                            <span class="stat-label">Patients cared for</span>
                        </div>
                        <div>
                            <span class="stat-num">Purok 5</span>
                            <span class="stat-label">Brgy. Biluso</span>
                        </div>
                        <div>
                            <span class="stat-num">Walk-ins</span>
                            <span class="stat-label">Always welcome</span>
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
                            Walk-ins are still welcome — just come early for the best availability.</p>
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

        <section class="services" id="services">
            <div class="wrap">
                <div class="section-head">
                    <span class="about-label">Treatments</span>
                    <h2>Crafted for your smile</h2>
                    <p>Thoughtfully selected aesthetic and restorative care — each treatment designed to enhance both
                        form and function.</p>
                </div>

                <div class="services-grid">
                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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

                    <article class="svc-card">
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
                                <div class="value"><a href="tel:+639170000000">(0917) 000 0000</a> · <a
                                        href="https://www.facebook.com/CrownAestheticDental/" target="_blank"
                                        rel="noopener">Facebook</a></div>
                            </div>
                        </div>

                        <div class="visit-actions">
                            <a href="https://www.google.com/maps/search/?api=1&query=268+Ambid+Street+Purok+5+Brgy.+Biluso+Silang+Cavite"
                                target="_blank" rel="noopener" class="btn-main">Get directions</a>
                            <a href="tel:+639170000000" class="btn-outline">Call us</a>
                        </div>
                    </div>
                    <div class="visit-visual">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <path d="M12 2L4 6v6c0 5 3.5 8.5 8 10 4.5-1.5 8-5 8-10V6l-8-4z" />
                        </svg>
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

                    <!--
                        FREE EMAIL FORM (FormSubmit.co)
                        1. Replace YOUR-EMAIL@example.com with the real clinic email
                        2. First time you submit, FormSubmit sends an activation email — click the link
                        3. After that, every form submission goes to that email
                    -->
                    <form id="bookingForm" action="https://formsubmit.co/pagawpawjemoyacerenado@gmail.com"
                        method="POST">
                        <input type="hidden" name="_subject" value="New Appointment Request — Crown Aesthetic">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_template" value="table">
                        <input type="text" name="_honey" style="display:none">

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Full name</label>
                                <input type="text" id="name" name="name" placeholder="Juan Dela Cruz"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone / WhatsApp</label>
                                <input type="tel" id="phone" name="phone" placeholder="0917 000 0000"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="you@email.com">
                            </div>
                            <div class="form-group">
                                <label for="service">Preferred treatment</label>
                                <select id="service" name="service">
                                    <option value="">Select a treatment</option>
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
                            <button type="submit" class="btn-main">Send request</button>
                            <span class="form-note">We’ll reply by email or phone. Walk-ins also welcome.</span>
                        </div>
                    </form>

                    <div class="form-success" id="formSuccess">
                        <h3>Request sent ✓</h3>
                        <p>Thank you! We’ll contact you soon to confirm your appointment.</p>
                    </div>
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
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <path d="M12 2L4 6v6c0 5 3.5 8.5 8 10 4.5-1.5 8-5 8-10V6l-8-4z" />
                            </svg>
                        </div>
                        <span>Crown Aesthetic</span>
                    </div>
                    <p>268 Ambid Street, Purok 5, Brgy. Biluso, Silang, Cavite 4118, Philippines.</p>
                </div>
                <div class="foot-col">
                    <h4>Explore</h4>
                    <a href="#announcements">Announcements</a>
                    <a href="#about">About</a>
                    <a href="#services">Treatments</a>
                    <a href="#voices">Stories</a>
                    <a href="#visit">Visit</a>
                    <a href="#book">Book</a>
                </div>
                <div class="foot-col">
                    <h4>Connect</h4>
                    <a href="tel:+639170000000">(0917) 000 0000</a>
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
    </script>
</body>

</html>
