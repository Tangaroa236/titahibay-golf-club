@extends('layouts.site')
@section('title', 'Home')
@section('content')

<!-- Hero Section -->
<div class="hero">
    <div class="hero-content">
        <h2>Titahi Bay Golf Club</h2>
        <p class="tagline">Home of 2005 US Open Champion Michael Campbell</p>
        <p>Experience world-class golfing on Wellington's stunning coastline</p>
        <a href="/membership" class="btn"><span>⛳ Become a Member Today</span></a>
    </div>
</div>

<!-- Welcome Section -->
<section style="padding: 120px 40px; background: white;">
    <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h2 style="font-size: 52px; margin-bottom: 32px; color: #1a1a1a; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">Welcome to Our Club</h2>
        <div style="width: 80px; height: 3px; background: #2d5f3f; margin: 0 auto 40px;"></div>
        <p style="font-size: 20px; color: #4a4a4a; line-height: 1.9; margin-bottom: 24px;">
            Nestled on Wellington's spectacular coastline, Titahi Bay Golf Club offers an unforgettable golfing experience with breathtaking ocean views and challenging fairways.
        </p>
        <p style="font-size: 18px; color: #6a6a6a; line-height: 1.9;">
            With over 100 years of history, our 9-hole championship course has welcomed golfers of all abilities, from beginners to champions. Join our vibrant community and experience golf at its finest.
        </p>
    </div>
</section>

<!-- Stats Section -->
<section style="background: #f9fafb; padding: 100px 40px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 60px; text-align: center;">
            <div style="padding: 20px;">
                <h3 style="font-size: 64px; color: #2d5f3f; margin-bottom: 16px; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">1924</h3>
                <p style="color: #1a1a1a; font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Established</p>
            </div>
            <div style="padding: 20px;">
                <h3 style="font-size: 64px; color: #2d5f3f; margin-bottom: 16px; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">9</h3>
                <p style="color: #1a1a1a; font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Holes</p>
            </div>
            <div style="padding: 20px;">
                <h3 style="font-size: 64px; color: #2d5f3f; margin-bottom: 16px; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">Par 35</h3>
                <p style="color: #1a1a1a; font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Course</p>
            </div>
            <div style="padding: 20px;">
                <h3 style="font-size: 64px; color: #2d5f3f; margin-bottom: 16px; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">300+</h3>
                <p style="color: #1a1a1a; font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Members</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section style="padding: 120px 40px; background: white;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 48px; margin-bottom: 24px; text-align: center; color: #1a1a1a; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">Why Choose Titahi Bay</h2>
        <div style="width: 80px; height: 3px; background: #2d5f3f; margin: 0 auto 80px;"></div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 50px;">
            <div style="text-align: center; padding: 40px 30px;">
                <div style="font-size: 56px; margin-bottom: 24px;">🏌️</div>
                <h3 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a; font-weight: 600;">Championship Course</h3>
                <p style="color: #6a6a6a; line-height: 1.8; font-size: 16px;">Our beautifully maintained 9-hole course offers breathtaking challenges with stunning ocean views from every hole.</p>
            </div>

            <div style="text-align: center; padding: 40px 30px;">
                <div style="font-size: 56px; margin-bottom: 24px;">🌊</div>
                <h3 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a; font-weight: 600;">Ocean Views</h3>
                <p style="color: #6a6a6a; line-height: 1.8; font-size: 16px;">Play with the magnificent Tasman Sea as your backdrop on our elevated coastal location.</p>
            </div>

            <div style="text-align: center; padding: 40px 30px;">
                <div style="font-size: 56px; margin-bottom: 24px;">🏆</div>
                <h3 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a; font-weight: 600;">Champion's Legacy</h3>
                <p style="color: #6a6a6a; line-height: 1.8; font-size: 16px;">Home club of Michael Campbell, New Zealand's 2005 U.S. Open Champion.</p>
            </div>

            <div style="text-align: center; padding: 40px 30px;">
                <div style="font-size: 56px; margin-bottom: 24px;">👥</div>
                <h3 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a; font-weight: 600;">Vibrant Community</h3>
                <p style="color: #6a6a6a; line-height: 1.8; font-size: 16px;">Join our welcoming community with regular tournaments, social events, and weekly competitions.</p>
            </div>

            <div style="text-align: center; padding: 40px 30px;">
                <div style="font-size: 56px; margin-bottom: 24px;">🍽️</div>
                <h3 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a; font-weight: 600;">Modern Facilities</h3>
                <p style="color: #6a6a6a; line-height: 1.8; font-size: 16px;">Enjoy our clubhouse with licensed bar, restaurant, pro shop, and practice facilities.</p>
            </div>

            <div style="text-align: center; padding: 40px 30px;">
                <div style="font-size: 56px; margin-bottom: 24px;">⛳</div>
                <h3 style="font-size: 24px; margin-bottom: 20px; color: #1a1a1a; font-weight: 600;">All Levels Welcome</h3>
                <p style="color: #6a6a6a; line-height: 1.8; font-size: 16px;">Professional coaching, beginner programs, and multiple tee options for every skill level.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section style="padding: 100px 40px; background: #2d5f3f; color: white;">
    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
        <div style="font-size: 48px; margin-bottom: 32px;">💬</div>
        <p style="font-size: 26px; font-style: italic; line-height: 1.8; margin-bottom: 40px; font-weight: 300;">
            "Titahi Bay Golf Club is where I developed my game and fell in love with golf. The challenging coastal layout and supportive community shaped me into the player I became."
        </p>
        <div style="width: 60px; height: 2px; background: rgba(255,255,255,0.5); margin: 0 auto 24px;"></div>
        <p style="font-size: 18px; font-weight: 600; letter-spacing: 1px;">MICHAEL CAMPBELL</p>
        <p style="font-size: 15px; margin-top: 8px; opacity: 0.9;">2005 U.S. Open Champion</p>
    </div>
</section>

<!-- CTA Section -->
<section style="padding: 120px 40px; background: white; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 48px; margin-bottom: 32px; color: #1a1a1a; font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 600;">Ready to Join Us?</h2>
        <p style="font-size: 20px; color: #6a6a6a; margin-bottom: 48px; line-height: 1.8;">
            Experience Wellington's premier coastal golf course. Whether you're looking for membership or just a round, we'd love to welcome you.
        </p>
        <div style="display: flex; gap: 24px; justify-content: center; flex-wrap: wrap;">
            <a href="/membership" class="btn" style="margin: 0; padding: 18px 48px; font-size: 16px;"><span>View Membership</span></a>
            <a href="/contact" class="btn" style="margin: 0; padding: 18px 48px; font-size: 16px; background: transparent; color: #2d5f3f; border: 2px solid #2d5f3f;"><span>Get in Touch</span></a>
        </div>
    </div>
</section>

@endsection