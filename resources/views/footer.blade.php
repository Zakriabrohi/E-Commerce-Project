<footer class="footer">
    <div class="tech-circle"></div>
    <div class="tech-circle"></div>

    <div class="container footer-content">
        <div class="row">
            <!-- Brand & Description -->
            <div class="col-lg-4 col-md-6 footer-column text-center text-md-start">
                <div class="footer-brand">
                    <i class="fas fa-microchip"></i> ABZ Tech
                </div>
                <p class="footer-description">
                    Your premier destination for cutting-edge technology products and innovative solutions.
                </p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61551885045129" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    {{-- <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a> --}}
                    <a href="https://www.instagram.com/zakria8506" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/abz-zakria-03100abz/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@ABZzakria1635" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 footer-column text-center text-md-start">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="/index"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="product"><i class="fas fa-chevron-right"></i> Products</a></li>
                    <li><a href="/myorder"><i class="fas fa-chevron-right"></i> Orders</a></li>
                    <li><a href="/cartlist"><i class="fas fa-chevron-right"></i> Cart</a></li>
                    {{-- <li><a href="/product"><i class="fas fa-chevron-right"></i> Account</a></li> --}}
                </ul>
            </div>

            <!-- Contact & Newsletter -->
            <div class="col-lg-4 col-md-6 footer-column text-center text-md-start">
                <h5 class="footer-heading">Contact Info</h5>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Gulshan-e-Iqbal , Karachi</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+923100780207</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>abzzakria@gmail.com</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Mon-Fri: 9AM-6PM</span>
                    </li>
                </ul>


            </div>
        </div>
    </div>

    <div class="footer-bottom text-center">
        <div class="container">
            <p>&copy; 2023 <strong>ABZ Tech</strong>. All rights reserved. | Designed with <i class="fas fa-heart text-danger"></i> by <a href="#">Zakria</a></p>
        </div>
    </div>
</footer>

<style>
    /* If the CSS variables are not defined in the header, uncomment the below block */
    /*
    :root {
        --primary: #0072ff;
        --secondary: #00c6ff;
        --accent: #6a11cb;
        --dark: #0a0e17;
        --light: #f8f9fa;
        --text-dark: #1a1d28;
        --text-light: #f8f9fa;
        --gradient: linear-gradient(45deg, var(--primary), var(--secondary), var(--accent));
    }
    */

    /* Footer Styles */
    .footer {
        margin-top: auto;
        background: var(--dark);
        color: var(--text-light);
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            linear-gradient(90deg, transparent 24px, rgba(0, 114, 255, 0.05) 25px, transparent 26px),
            linear-gradient(transparent 24px, rgba(0, 114, 255, 0.05) 25px, transparent 26px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
        pointer-events: none;
        z-index: 1;
    }

    @keyframes gridMove {
        0% { background-position: 0 0; }
        100% { background-position: 50px 50px; }
    }

    .footer-content {
        position: relative;
        z-index: 2;
        padding: 3rem 0 1rem;
    }

    .footer-brand {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.8rem;
        background: var(--gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1rem;
        display: inline-block;
    }

    .footer-brand i {
        color: var(--secondary);
        -webkit-text-fill-color: var(--secondary);
        margin-right: 0.5rem;
    }

    .footer-description {
        color: rgba(255, 255, 255, 0.7);
        max-width: 300px;
        margin: 0 auto 1.5rem;
        font-size: 0.95rem;
    }

    .footer-heading {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1.2rem;
        position: relative;
        display: inline-block;
    }

    .footer-heading::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--gradient);
        border-radius: 3px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 0.7rem;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .footer-links a i {
        margin-right: 0.5rem;
        font-size: 0.9rem;
        transition: transform 0.3s ease;
    }

    .footer-links a:hover {
        color: var(--secondary);
        transform: translateX(5px);
    }

    .footer-links a:hover i {
        transform: translateX(3px);
    }

    .contact-info {
        list-style: none;
        padding: 0;
        color: rgba(255, 255, 255, 0.7);
    }

    .contact-info li {
        margin-bottom: 0.8rem;
        display: flex;
        align-items: flex-start;
    }

    .contact-info i {
        margin-right: 0.8rem;
        color: var(--secondary);
        font-size: 1.1rem;
        margin-top: 0.2rem;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        margin-top: 1.5rem;
    }

    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        margin: 0 0.5rem;
        transition: all 0.3s ease;
        text-decoration: none;
        position: relative;
        overflow: hidden;
    }

    .social-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--gradient);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .social-icon:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .social-icon:hover::before {
        opacity: 1;
    }

    .newsletter-form {
        display: flex;
        margin-top: 1.5rem;
    }

    .newsletter-input {
        flex: 1;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        padding: 0.6rem 1rem;
        border-radius: 50px 0 0 50px;
        outline: none;
    }

    .newsletter-input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .newsletter-btn {
        background: var(--gradient);
        border: none;
        color: white;
        padding: 0 1.2rem;
        border-radius: 0 50px 50px 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .newsletter-btn:hover {
        background: linear-gradient(45deg, var(--accent), var(--primary));
    }

    .footer-bottom {
        position: relative;
        z-index: 2;
        background: rgba(0, 0, 0, 0.3);
        padding: 1.2rem 0;
        margin-top: 2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-bottom p {
        margin: 0;
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
    }

    .footer-bottom a {
        color: var(--secondary);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-bottom a:hover {
        color: var(--primary);
        text-decoration: underline;
    }

    /* Tech elements */
    .tech-circle {
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--primary), var(--secondary));
        opacity: 0.05;
        filter: blur(40px);
        z-index: 1;
        bottom: -150px;
        left: -100px;
    }

    .tech-circle:nth-child(2) {
        background: linear-gradient(45deg, var(--accent), var(--primary));
        top: -150px;
        right: -100px;
        left: auto;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .footer-column {
            margin-bottom: 2rem;
        }

        .footer-heading::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-links {
            text-align: center;
        }

        .contact-info {
            text-align: center;
        }

        .contact-info li {
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .footer-brand {
            font-size: 1.5rem;
        }

        .newsletter-form {
            flex-direction: column;
        }

        .newsletter-input {
            border-radius: 50px;
            margin-bottom: 0.5rem;
        }

        .newsletter-btn {
            border-radius: 50px;
            padding: 0.6rem 1rem;
        }
    }
</style>
