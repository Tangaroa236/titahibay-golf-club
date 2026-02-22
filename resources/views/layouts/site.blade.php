<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Titahi Bay Golf Club</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.7;
            background: #ffffff;
            color: #1a1a1a;
            overflow-x: hidden;
            font-weight: 400;
        }
        
        /* Header Styles */
        header {
            background: #ffffff;
            color: #1a1a1a;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            border-bottom: 1px solid #e5e5e5;
        }
        
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            height: 65px;
            transition: opacity 0.2s ease;
        }
        
        .logo:hover {
            opacity: 0.8;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            gap: 48px;
            align-items: center;
        }
        
        nav a {
            color: #1a1a1a;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: -0.01em;
            position: relative;
            padding: 8px 0;
            transition: color 0.2s ease;
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #2d5f3f;
            transition: width 0.3s ease;
        }
        
        nav a:hover {
            color: #2d5f3f;
        }
        
        nav a:hover::after {
            width: 100%;
        }

        /* Login Button */
        .login-btn {
            background: #2d5016;
            color: white !important;
            padding: 10px 24px;
            border-radius: 4px;
            margin-left: 20px;
        }

        .login-btn::after {
            display: none;
        }

        .login-btn:hover {
            background: #1e3610;
            color: white !important;
        }
        
        main {
            min-height: 70vh;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), 
                        url('/images/TitahiBay.jpg');
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            color: white;
            padding: 200px 40px 180px;
            text-align: center;
            position: relative;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .hero h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 82px;
            margin-bottom: 24px;
            font-weight: 600;
            letter-spacing: -0.02em;
            line-height: 1.1;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 300;
            letter-spacing: 0.01em;
        }
        
        .hero .tagline {
            font-size: 22px;
            font-style: italic;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 48px;
            font-weight: 300;
        }
        
        /* Card Grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 32px;
            margin-top: 80px;
            padding: 0;
        }
        
        .card {
            background: #ffffff;
            padding: 48px 40px;
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
            border: 1px solid #e8e8e8;
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            border-color: #d0d0d0;
        }
        
        .card h3 {
            color: #1a1a1a;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: -0.02em;
        }
        
        .card h4 {
            color: #1a1a1a;
            margin-bottom: 16px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: -0.01em;
        }
        
        .card p {
            color: #4a4a4a;
            line-height: 1.7;
            font-size: 16px;
            font-weight: 400;
        }
        
        .card ul {
            list-style: none;
            color: #4a4a4a;
            line-height: 1.9;
        }
        
        .card li {
            padding-left: 24px;
            position: relative;
            margin-bottom: 8px;
        }
        
        .card li::before {
            content: '•';
            position: absolute;
            left: 8px;
            color: #2d5f3f;
            font-weight: 600;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            background: #2d5f3f;
            color: white;
            padding: 16px 40px;
            text-decoration: none;
            border-radius: 2px;
            margin-top: 24px;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 0.02em;
            transition: all 0.2s ease;
            border: none;
        }
        
        .btn:hover {
            background: #234a31;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(45, 95, 63, 0.2);
        }
        
        .btn span {
            position: relative;
            z-index: 1;
        }
        
        /* Footer */
        footer {
            background: #1a1a1a;
            color: #d4d4d4;
            text-align: center;
            padding: 64px 40px;
            margin-top: 120px;
            border-top: 1px solid #2a2a2a;
        }
        
        footer p {
            font-size: 15px;
            margin: 10px 0;
            font-weight: 400;
            letter-spacing: 0.01em;
        }
        
        footer strong {
            color: #ffffff;
            font-weight: 600;
        }
        
        /* Page Header */
        .page-header {
            background: #f8f8f8;
            color: #1a1a1a;
            padding: 120px 40px 100px;
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .page-header h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 64px;
            margin-bottom: 16px;
            font-weight: 600;
            letter-spacing: -0.02em;
        }
        
        .page-header p {
            font-size: 19px;
            color: #4a4a4a;
            font-weight: 400;
            letter-spacing: 0.01em;
        }
        
        /* Membership Pricing Cards */
        .pricing-card {
            text-align: center;
            border: 2px solid #e8e8e8;
        }
        
        .pricing-card:hover {
            border-color: #2d5f3f;
        }
        
        .pricing-card .price {
            font-size: 52px;
            font-weight: 300;
            color: #1a1a1a;
            margin: 24px 0;
            letter-spacing: -0.03em;
        }
        
        .pricing-card .price small {
            font-size: 18px;
            color: #6a6a6a;
            font-weight: 400;
        }
        
        /* Section Spacing */
        section {
            padding: 100px 0;
        }
        
        /* Typography Refinements */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 48px;
            }
            
            .page-header h2 {
                font-size: 42px;
            }
            
            nav ul {
                flex-direction: column;
                gap: 20px;
            }
            
            .card-grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 0 24px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="/"><img src="/images/logo.jpg" alt="Titahi Bay Golf Club" class="logo"></a>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/membership">Membership</a></li>
                    <li><a href="/course">The Course</a></li>
                    <li><a href="/socials">Socials</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login" class="login-btn">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p style="font-size: 20px; margin-bottom: 20px;"><strong>Titahi Bay Golf Club</strong></p>
            <p>&copy; 2026 Titahi Bay Golf Club. All rights reserved.</p>
            <p>Wellington, New Zealand | (04) 236 7807</p>
            <p style="margin-top: 24px; color: #999;">Home of 2005 US Open Champion Michael Campbell</p>
        </div>
    </footer>
</body>
</html>