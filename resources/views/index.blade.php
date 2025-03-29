<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TurfConnect - Book Your Game</title>
    <style>
        :root {
            --primary: #10b981;
            --secondary: #1e293b;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #0f172a;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        .background-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .soccer-ball {
            position: absolute;
            width: 40px;
            height: 40px;
            background-image: radial-gradient(circle, white 10px, #333 12px);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 15s linear infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0) rotate(0deg);
            }
            100% {
                transform: translateY(-100px) translateX(100px) rotate(360deg);
            }
        }
        
        header {
            background-color: var(--dark);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            z-index: 100;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo img {
            height: 40px;
        }
        
        .logo h1 {
            color: var(--light);
            font-size: 1.6rem;
            font-weight: 700;
        }
        
        .logo span {
            color: var(--primary);
        }
        
        nav {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        
        nav a {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        nav a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }
        
        nav a:hover {
            color: var(--primary);
        }
        
        nav a:hover:after {
            width: 100%;
        }
        
        .auth-buttons {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 0.5rem 1.2rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: 2px solid var(--primary);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('https://img.freepik.com/premium-photo/dynamic-sports-arena-vibrant-4k-wallpaper-artificial-turf-soccer-field-concept-sports-arena-wallpaper-soccer-artificial-turf_918839-202552.jpg?w=600') no-repeat center center;
            background-size: cover;
            padding: 0 5%;
            position: relative;
        }
        
        .hero-content {
            max-width: 650px;
            color: var(--light);
            margin-top: 60px;
        }
        
        .hero-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .cta-buttons {
            display: flex;
            gap: 15px;
            margin-top: 2rem;
        }
        
        .features {
            padding: 5rem 5%;
            background-color: var(--light);
            text-align: center;
        }
        
        .section-title {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 3rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .feature-card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: left;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .feature-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .feature-desc {
            color: #64748b;
            line-height: 1.6;
        }
        
        .how-it-works {
            padding: 5rem 5%;
            background-color: #f1f5f9;
        }
        
        .steps {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .step {
            display: flex;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .step:last-child {
            margin-bottom: 0;
        }
        
        .step-number {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
            margin-right: 1.5rem;
        }
        
        .step-content {
            padding-top: 0.5rem;
        }
        
        .step-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .step-desc {
            color: #64748b;
            line-height: 1.6;
        }
        
        footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 3rem 5%;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .footer-logo span {
            color: var(--primary);
        }
        
        .footer-desc {
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .footer-heading {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--light);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary);
        }
        
        .copyright {
            text-align: center;
            margin-top: 3rem;
            padding-top: 1.5rem;
            border-top: 1px solid #334155;
            color: #94a3b8;
        }
        
        @media (max-width: 768px) {
            .logo h1 {
                font-size: 1.3rem;
            }
            
            nav {
                display: none;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background-animation" id="background-animation"></div>
    
    <header>
        <div class="logo">
            <i class="fas fa-futbol fa-bounce" style="color: #10b981;"></i>
            <h1>Turf<span>Connect</span></h1>
        </div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="#">Turfs</a>
            <a href="#">Tournaments</a>
            <a href="#">Features</a>
            <a href="#">Contact Us</a>
        </nav>
        <div class="auth-buttons">
            <a href="{{ route('login') }}" class="btn btn-outline">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Find Your Perfect Playing Field Today</h1>
            <p class="hero-subtitle">Book turf facilities, join tournaments, or manage your own turf - all on one platform designed for sports enthusiasts.</p>
            <div class="cta-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary">Register as Player</a>
                <a href="{{ route('register') }}" class="btn btn-outline">Register as Turf Manager</a>
            </div>
        </div>
    </section>
    
    <section class="features">
        <h2 class="section-title">Why Choose TurfConnect?</h2>
        <p class="section-subtitle">The ultimate platform for turf booking and tournament management</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3 class="feature-title">Easy Booking</h3>
                <p class="feature-desc">Book your preferred turf with just a few clicks. Check availability in real-time and secure your spot instantly.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="feature-title">Join Tournaments</h3>
                <p class="feature-desc">Discover and participate in tournaments happening near you. Compete with other teams and show your skills.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="feature-title">Find Nearby Turfs</h3>
                <p class="feature-desc">Locate the best turfs in your area with detailed information about facilities, ratings, and pricing.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="feature-title">Team Management</h3>
                <p class="feature-desc">Create and manage your teams, invite players, and coordinate matches seamlessly.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-store"></i>
                </div>
                <h3 class="feature-title">Turf Management</h3>
                <p class="feature-desc">For turf owners: manage your facility, set pricing, track bookings, and promote tournaments.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="feature-title">Mobile Friendly</h3>
                <p class="feature-desc">Access all features on the go with our responsive design that works on any device.</p>
            </div>
        </div>
    </section>
    
    <section class="how-it-works">
        <h2 class="section-title" style="text-align: center;">How It Works</h2>
        <p class="section-subtitle" style="text-align: center;">Get started in three simple steps</p>
        
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3 class="step-title">Create Your Account</h3>
                    <p class="step-desc">Sign up as a player to book turfs and join tournaments, or as a turf manager to list your facility.</p>
                </div>
            </div>
            
            <div class="step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3 class="step-title">Explore Available Options</h3>
                    <p class="step-desc">Browse through turfs, check their availability, facilities, and pricing. Discover tournaments in your area.</p>
                </div>
            </div>
            
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3 class="step-title">Book and Play</h3>
                    <p class="step-desc">Make your booking, receive instant confirmation, and enjoy your game! Rate and review your experience afterward.</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-content">
            <div>
                <div class="footer-logo">
                    <i class="fas fa-futbol" style="color: #10b981;"></i>
                    Turf<span>Connect</span>
                </div>
                <p class="footer-desc">The ultimate platform for turf booking and tournament management. Join us today and elevate your sports experience.</p>
            </div>
            
            <div>
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Find Turfs</a></li>
                    <li><a href="#">Tournaments</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="footer-heading">Support</h4>
                <ul class="footer-links">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="footer-heading">Contact Us</h4>
                <ul class="footer-links">
                    <li><i class="fas fa-envelope" style="margin-right: 10px; color: #10b981;"></i> info@turfconnect.com</li>
                    <li><i class="fas fa-phone" style="margin-right: 10px; color: #10b981;"></i> +1 234 567 890</li>
                    <li><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #10b981;"></i> 123 Sports Avenue, City</li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            &copy; 2025 TurfConnect. All rights reserved.
        </div>
    </footer>
    
    <script>
        // Create soccer ball background animation
        const backgroundAnimation = document.getElementById('background-animation');
        const numberOfBalls = 15;
        
        for (let i = 0; i < numberOfBalls; i++) {
            const ball = document.createElement('div');
            ball.className = 'soccer-ball';
            
            // Random position and animation duration
            const left = Math.random() * 100;
            const delay = Math.random() * 20;
            const duration = 15 + Math.random() * 20;
            const size = 20 + Math.random() * 30;
            
            ball.style.left = `${left}%`;
            ball.style.width = `${size}px`;
            ball.style.height = `${size}px`;
            ball.style.animationDuration = `${duration}s`;
            ball.style.animationDelay = `${delay}s`;
            
            backgroundAnimation.appendChild(ball);
        }
    </script>
</body>
</html>