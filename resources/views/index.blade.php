@extends('Master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABZ TECH - Innovative Technology Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            background: #0a0e17;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)),
                        url('https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') no-repeat center center/cover;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        /* Animated grid overlay */
        .grid-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(90deg, transparent 24px, rgba(0, 114, 255, 0.05) 25px, transparent 26px),
                linear-gradient(transparent 24px, rgba(0, 114, 255, 0.05) 25px, transparent 26px);
            background-size: 50px 50px;
            z-index: 0;
            pointer-events: none;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { background-position: 0 0; }
            100% { background-position: 50px 50px; }
        }

        /* Overlay for dark effect */
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(10, 14, 23, 0.9) 0%, rgba(6, 13, 34, 0.8) 100%);
            z-index: 1;
        }

        /* Hero Content */
        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 800px;
            padding: 2rem;
            text-align: left;
            margin-left: 5%;
        }

        .company-name {
            font-family: 'Orbitron', sans-serif;
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #00c6ff, #0072ff, #6a11cb, #ff2e63);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 15px rgba(0, 198, 255, 0.5);
            letter-spacing: 1px;
            animation: glow 3s ease-in-out infinite alternate, slideInFromLeft 1.2s ease-out;
        }

        @keyframes glow {
            0% { text-shadow: 0 0 10px rgba(0, 198, 255, 0.7); }
            50% { text-shadow: 0 0 20px rgba(106, 17, 203, 0.7), 0 0 30px rgba(0, 114, 255, 0.7); }
            100% { text-shadow: 0 0 15px rgba(255, 46, 99, 0.7); }
        }

        @keyframes slideInFromLeft {
            0% { transform: translateX(-50px); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }

        .owner-name {
            font-size: 1.5rem;
            color: #a0aec0;
            margin-bottom: 2rem;
            font-weight: 300;
            animation: fadeIn 1.5s ease-out 0.5s both;
        }

        .owner-name span {
            color: #00c6ff;
            font-weight: 500;
        }

        .tagline {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            line-height: 1.4;
            font-weight: 400;
            animation: fadeIn 1.5s ease-out 0.8s both;
        }

        .tagline span {
            color: #00c6ff;
            font-weight: 600;
            position: relative;
        }

        .tagline span::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #0072ff, #00c6ff);
            border-radius: 3px;
            animation: underlinePulse 2s infinite;
        }

        @keyframes underlinePulse {
            0%, 100% { opacity: 0.7; width: 100%; }
            50% { opacity: 1; width: 102%; }
        }

        .features {
            margin-bottom: 2.5rem;
            animation: fadeIn 1.5s ease-out 1.1s both;
        }

        .features p {
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .features p:hover {
            transform: translateX(10px);
        }

        .features i {
            color: #00c6ff;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .cta-button {
            display: inline-block;
            padding: 16px 42px;
            background: linear-gradient(45deg, #0072ff, #00c6ff);
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 114, 255, 0.4);
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: fadeIn 1.5s ease-out 1.4s both;
        }

        .cta-button:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #6a11cb, #0072ff);
            z-index: -1;
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 114, 255, 0.6);
        }

        .cta-button:hover:before {
            opacity: 1;
        }

        /* Front Image with enhanced lighting */
        .hero-front {
            position: absolute;
            bottom: 0;
            right: 10%;
            z-index: 3;
            animation: floatImage 6s ease-in-out infinite;
        }

        @keyframes floatImage {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(1deg); }
        }

        .image-container {
            position: relative;
            width: 380px;
            height: 450px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            transition: all 0.5s ease;
            transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);
        }

        .image-container:hover {
            transform: perspective(1000px) rotateY(0) rotateX(0);
            box-shadow: 0 30px 60px rgba(0, 198, 255, 0.3);
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
            filter: brightness(1.05) contrast(1.1);
        }

        .image-container:hover img {
            filter: brightness(1.15) contrast(1.2);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 114, 255, 0.2) 0%, rgba(106, 17, 203, 0.2) 100%);
            mix-blend-mode: overlay;
            pointer-events: none;
        }

        .image-glow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 60px rgba(0, 198, 255, 0.4);
            border-radius: 15px;
            opacity: 0.7;
            pointer-events: none;
            animation: pulseGlow 3s ease-in-out infinite alternate;
        }

        @keyframes pulseGlow {
            0% { opacity: 0.5; box-shadow: 0 0 50px rgba(0, 198, 255, 0.4); }
            100% { opacity: 0.8; box-shadow: 0 0 70px rgba(106, 17, 203, 0.6); }
        }

        /* Tech elements */
        .tech-circle {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: linear-gradient(45deg, #0072ff, #00c6ff);
            opacity: 0.1;
            filter: blur(50px);
            z-index: 2;
            bottom: -200px;
            left: -100px;
            animation: pulse 8s ease-in-out infinite;
        }

        .tech-circle:nth-child(2) {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            top: -200px;
            right: -100px;
            left: auto;
            animation: pulse 10s ease-in-out infinite reverse;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.1; transform: scale(1); }
            50% { opacity: 0.15; transform: scale(1.1); }
        }

        .floating-tech {
            position: absolute;
            z-index: 2;
            color: rgba(0, 198, 255, 0.5);
            font-size: 2.5rem;
            text-shadow: 0 0 10px rgba(0, 198, 255, 0.5);
            animation: float 8s ease-in-out infinite;
        }

        .floating-tech:nth-child(1) {
            top: 20%;
            left: 10%;
        }

        .floating-tech:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 1s;
        }

        .floating-tech:nth-child(3) {
            bottom: 30%;
            left: 15%;
            animation-delay: 2s;
        }

        .floating-tech:nth-child(4) {
            top: 15%;
            right: 20%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg) scale(1); }
            33% { transform: translateY(-20px) rotate(5deg) scale(1.05); }
            66% { transform: translateY(10px) rotate(-5deg) scale(0.95); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* New Sections */
        .section {
            padding: 5rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .section-dark {
            background: #0a0e17;
        }

        .section-darker {
            background: #070a12;
        }

        .section-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Leadership Section */
        .leadership-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .leader-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            width: 300px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .leader-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .leader-img {
            width: 250px;
            height: 350px;
            border-radius: 10%;
            object-fit: cover;
            margin: 0 auto 1.5rem;
            border: 3px solid #00c6ff;
            box-shadow:  10px 20px rgba(0, 198, 255, 0.5);
        }

        .leader-name {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #fff;
        }

        .leader-role {
            color: #00c6ff;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .leader-desc {
            color: #a0aec0;
            line-height: 1.6;
        }

        /* Features Section */
        .features-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #00c6ff;
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        .feature-desc {
            color: #a0aec0;
            line-height: 1.6;
        }

        /* Stats Section */
        .stats-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #a0aec0;
            font-size: 1.2rem;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            padding: 6rem 2rem;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') no-repeat center center/cover;
        }

        .cta-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cta-text {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2.5rem;
            color: #a0aec0;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .hero-front {
                right: 5%;
            }
            .image-container {
                width: 320px;
                height: 400px;
            }
        }

        @media (max-width: 992px) {
            .hero-content {
                margin-left: 0;
                text-align: center;
            }

            .company-name {
                font-size: 3rem;
            }

            .hero-front {
                position: relative;
                right: 0;
                margin-top: 2rem;
                text-align: center;
            }

            .image-container {
                width: 280px;
                height: 350px;
                transform: none;
            }

            .hero-section {
                flex-direction: column;
                padding: 2rem 1rem;
                height: auto;
                min-height: 100vh;
            }

            .floating-tech {
                display: none;
            }

            .section {
                padding: 4rem 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .company-name {
                font-size: 2.5rem;
            }

            .tagline {
                font-size: 1.4rem;
            }

            .image-container {
                width: 240px;
                height: 300px;
            }

            .owner-name {
                font-size: 1.2rem;
            }

            .cta-button {
                padding: 14px 30px;
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .leader-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="grid-overlay"></div>
        <div class="tech-circle"></div>
        <div class="tech-circle"></div>

        <div class="floating-tech"><i class="fas fa-microchip"></i></div>
        <div class="floating-tech"><i class="fas fa-laptop"></i></div>
        <div class="floating-tech"><i class="fas fa-server"></i></div>
        <div class="floating-tech"><i class="fas fa-robot"></i></div>

        <div class="hero-content">
            <h1 class="company-name">ABZ TECH</h1>
            <p class="owner-name">Founded by <span>Zakria</span></p>
            <p class="tagline">Cutting-edge <span>technology products</span> for the digital age</p>
            <div class="features">
                <p><i class="fas fa-bolt"></i> High-performance gadgets and devices</p>
                <p><i class="fas fa-shield-alt"></i> Reliable and secure technology solutions</p>
                <p><i class="fas fa-truck"></i> Fast shipping and easy returns</p>
            </div>
            <a href="/product" class="cta-button">Explore Products <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="hero-front">
            <div class="image-container">
                <div class="image-glow"></div>
                 <img src="{{ asset('images/hero-bg.jpg') }}" alt="Zakria - Founder of ABZ TECH">
                <div class="image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="section section-darker">
        <h2 class="section-title">Our Leadership</h2>
        <div class="leadership-container">
            <div class="leader-card">
                <img src="{{ asset('images/zakria.jpeg') }}" alt="Zakria - Owner" class="leader-img">
                <h3 class="leader-name">Zakria</h3>
                <p class="leader-role">Founder & CEO</p>
                <p class="leader-desc">Visionary leader with a passion for technology and innovation. Founded ABZ TECH with a mission to bring cutting-edge technology to everyone.</p>
            </div>

            <div class="leader-card">
                <img src="{{ asset('images/abio.jpg') }}" alt="Father - Chairman" class="leader-img">
                <h3 class="leader-name">Abdull Basit</h3>
                <p class="leader-role">Founder</p>
                <p class="leader-desc">Seasoned business leader with decades of experience in technology and management. Provides strategic direction and guidance to ABZ TECH.</p>
            </div>

            <div class="leader-card">
                <img src="{{ asset('images/mamio.jpeg') }}" alt="CEO" class="leader-img">
                <h3 class="leader-name">Abdul Khaliqu</h3>
                <p class="leader-role">Chief Executive Officer</p>
                <p class="leader-desc">Drives the company's vision and leads the executive team in delivering exceptional technology products and services to our customers.</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section section-dark">
        <h2 class="section-title">Why Choose ABZ TECH</h2>
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 class="feature-title">Fast Delivery</h3>
                <p class="feature-desc">We deliver products anywhere in the country within 2-3 business days with our premium shipping partners.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="feature-title">Secure Payment</h3>
                <p class="feature-desc">All transactions are encrypted and secure. We support multiple payment methods for your convenience.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="feature-title">24/7 Support</h3>
                <p class="feature-desc">Our customer support team is available round the clock to assist you with any queries or issues.</p>
            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section class="section section-darker">
        <h2 class="section-title">Our Achievements</h2>
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number">5000+</div>
                <div class="stat-label">Happy Customers</div>
            </div>

            <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Products</div>
            </div>

            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Awards</div>
            </div>

            <div class="stat-item">
                <div class="stat-number">5+</div>
                <div class="stat-label">Years Experience</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2 class="cta-title">Ready to Experience the Future?</h2>
        <p class="cta-text">Join thousands of satisfied customers who have transformed their digital experience with ABZ TECH products.</p>
        <a href="/product" class="cta-button">Shop Now <i class="fas fa-arrow-right"></i></a>
    </section>
</body>
</html>

@endsection
