<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framer-inspired E-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6E5DE7;
            --primary-light: #8374FF;
            --secondary: #FF6B6B;
            --accent: #4ECDC4;
            --dark: #2E2E3A;
            --light: #F7F9FC;
            --gray: #E2E8F0;
            --text: #2D3748;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--secondary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        .header-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .header-actions i {
            font-size: 20px;
            color: var(--dark);
            cursor: pointer;
            transition: color 0.3s;
        }

        .header-actions i:hover {
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            padding: 60px 0;
            background: linear-gradient(135deg, rgba(110, 93, 231, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
            border-radius: 0 0 30px 30px;
            margin-bottom: 60px;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--dark);
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: var(--text);
            max-width: 500px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(110, 93, 231, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background: rgba(110, 93, 231, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(110, 93, 231, 0.2);
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            transform: perspective(800px) rotateY(-10deg);
            transition: transform 0.5s;
        }

        .hero-image img:hover {
            transform: perspective(800px) rotateY(0);
        }

        /* Products Section */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--text);
            max-width: 600px;
            margin: 0 auto;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }

        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .product-image {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gray);
        }

        .product-image img {
            max-width: 90%;
            max-height: 180px;
            transition: transform 0.5s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .product-info p {
            color: var(--text);
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.3rem;
        }

        .add-to-cart {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .add-to-cart:hover {
            background: var(--primary-light);
            transform: rotate(90deg);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
            border-radius: 30px 30px 0 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: var(--accent);
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text p {
                margin: 0 auto 30px;
            }

            .hero-image {
                margin-top: 40px;
            }

            nav ul {
                gap: 15px;
            }
        }

        @media (max-width: 600px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-star"></i>
                    <span>StyleShop</span>
                </div>

                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </nav>

                <div class="header-actions">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text animated">
                    <h1>Summer Collection 2023</h1>
                    <p>Discover the latest trends in fashion and accessories with up to 40% discount on selected items.</p>
                    <div class="hero-actions">
                        <a href="#" class="btn">Shop Now</a>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="hero-image animated delay-1">
                    <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Summer Collection">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container">
        <div class="section-title animated delay-2">
            <h2>Featured Products</h2>
            <p>Handpicked selection of our most popular items this season</p>
        </div>

        <div class="products">
            <!-- Product 1 -->
            <div class="product-card animated delay-1">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="Product 1">
                </div>
                <div class="product-info">
                    <h3>Minimalist Watch</h3>
                    <p>Elegant and functional timepiece with leather strap</p>
                    <div class="product-price">
                        <div class="price">$129.99</div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card animated delay-2">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Product 2">
                </div>
                <div class="product-info">
                    <h3>Running Shoes</h3>
                    <p>Lightweight and comfortable for everyday wear</p>
                    <div class="product-price">
                        <div class="price">$89.99</div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card animated delay-3">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1585155770447-2f66e2a397b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="Product 3">
                </div>
                <div class="product-info">
                    <h3>Designer Handbag</h3>
                    <p>Luxurious leather bag with ample storage space</p>
                    <div class="product-price">
                        <div class="price">$199.99</div>
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>StyleShop</h3>
                    <p>Bringing you the latest fashion trends and quality products since 2010.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#">All Products</a></li>
                        <li><a href="#">Men's Fashion</a></li>
                        <li><a href="#">Women's Fashion</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">New Arrivals</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for special offers and updates</p>
                    <form>
                        <input type="email" placeholder="Your email address" style="padding: 10px; width: 100%; margin: 10px 0; border-radius: 5px; border: none;">
                        <button type="submit" class="btn" style="width: 100%;">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 StyleShop. All rights reserved.</p>
            </div>
        </div>
    </footer>


</body>
</html>
