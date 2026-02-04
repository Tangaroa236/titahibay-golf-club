@extends('layouts.site')

@section('title', 'About Us')

@section('content')
<div class="page-header">
    <h2>About Us</h2>
    <p>Over a Century of Golfing Excellence</p>
</div>

<div class="container">
    <!-- Introduction -->
    <div class="card" style="margin-bottom: 60px; margin-top: 60px;">
        <h3 style="color: #1a1a1a; margin-bottom: 20px;">A Rich Heritage Since 1910</h3>
        <p style="font-size: 18px; line-height: 1.8; color: #4a4a4a;">
            Founded in 1910, Titahi Bay Golf Club has been a cornerstone of Wellington's golfing community for over a century. 
            Our club has a proud tradition of excellence, having produced numerous champions and provided a welcoming home for 
            golfers of all skill levels throughout the years. With our stunning coastal location and championship course, we continue 
            to offer an unparalleled golfing experience.
        </p>
    </div>

    <!-- Michael Campbell Feature -->
    <div style="margin-bottom: 60px;">
        <div class="card" style="background: linear-gradient(135deg, #2d5f3f 0%, #1a4a2e 100%); color: white; padding: 50px;">
            <h3 style="color: white; text-align: center; font-size: 36px; margin-bottom: 20px;">🏆 2005 US Open Champion</h3>
            <p style="text-align: center; font-size: 20px; color: #c8e6c9; margin-bottom: 40px;">Michael Campbell - Titahi Bay's Pride</p>
            
            <div style="max-width: 900px; margin: 0 auto;">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 2px; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                    <iframe 
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                        src="https://www.youtube.com/embed/ZPh7p-kFJKM" 
                        title="Michael Campbell - US Open Champion" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <p style="text-align: center; margin-top: 30px; font-size: 18px; line-height: 1.8; color: white;">
                    Titahi Bay Golf Club was the home course of Michael Campbell, winner of the 2005 US Open Championship. 
                    Watch his incredible journey and connection to our club.
                </p>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div style="margin-bottom: 60px;">
        <h3 style="text-align: center; color: #1a1a1a; font-size: 36px; margin-bottom: 40px;">Our Journey Through Time</h3>
        
        <div class="card-grid">
            <div class="card">
                <h4 style="color: #1a1a1a; font-size: 24px; margin-bottom: 15px;">1910 - Foundation</h4>
                <p style="color: #4a4a4a; line-height: 1.8;">
                    Titahi Bay Golf Club was officially established, beginning our proud tradition of championship golf 
                    on Wellington's stunning coastline.
                </p>
            </div>

            <div class="card">
                <h4 style="color: #1a1a1a; font-size: 24px; margin-bottom: 15px;">2005 - US Open Glory</h4>
                <p style="color: #4a4a4a; line-height: 1.8;">
                    Michael Campbell, a product of our club, won the US Open Championship at Pinehurst, putting 
                    Titahi Bay on the world stage.
                </p>
            </div>

            <div class="card">
                <h4 style="color: #1a1a1a; font-size: 24px; margin-bottom: 15px;">Today - Continuing Excellence</h4>
                <p style="color: #4a4a4a; line-height: 1.8;">
                    We continue to nurture talent, host competitions, and provide a welcoming home for golfers 
                    throughout the Wellington region.
                </p>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->
    <div class="card" style="margin-bottom: 60px;">
        <h3 style="color: #1a1a1a; margin-bottom: 30px; text-align: center; font-size: 32px;">Our Facilities</h3>
        <div class="card-grid" style="margin-top: 40px;">
            <div style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 15px;">🏌️</div>
                <h4 style="color: #1a1a1a; margin-bottom: 10px;">Championship Course</h4>
                <p style="color: #4a4a4a;">9-hole, Par 70 coastal links-style layout with stunning sea views and immaculate greens.</p>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 15px;">🏛️</div>
                <h4 style="color: #1a1a1a; margin-bottom: 10px;">Modern Clubhouse</h4>
                <p style="color: #4a4a4a;">Comfortable facilities, pro shop, and dining area with panoramic coastal views.</p>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 15px;">⛳</div>
                <h4 style="color: #1a1a1a; margin-bottom: 10px;">Practice Facilities</h4>
                <p style="color: #4a4a4a;">Driving range, putting greens, and practice areas to perfect your game.</p>
            </div>
        </div>
    </div>

    <!-- Notable Achievements -->
    <div class="card" style="background: #f8f8f8; border: 1px solid #e8e8e8;">
        <h3 style="color: #1a1a1a; text-align: center; margin-bottom: 30px; font-size: 32px;">Notable Achievements</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 30px;">
            <div style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 15px;">🌟</div>
                <h4 style="color: #1a1a1a; margin-bottom: 10px;">US Open Champion</h4>
                <p style="color: #4a4a4a;">Michael Campbell (2005)</p>
            </div>

            <div style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 15px;">🌿</div>
                <h4 style="color: #1a1a1a; margin-bottom: 10px;">Greenskeeper</h4>
                <p style="color: #4a4a4a;">Jacob Aldridge</p>
            </div>

            <div style="text-align: center;">
                <div style="font-size: 48px; margin-bottom: 15px;">🏅</div>
                <h4 style="color: #1a1a1a; margin-bottom: 10px;">Over 100 Years</h4>
                <p style="color: #4a4a4a;">Of championship golf and community</p>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div style="text-align: center; margin-top: 80px; margin-bottom: 40px;">
        <h3 style="font-size: 32px; color: #1a1a1a; margin-bottom: 20px;">Become Part of Our Story</h3>
        <p style="font-size: 18px; color: #4a4a4a; margin-bottom: 30px;">Join our historic club and create your own legacy at Titahi Bay</p>
        <a href="/membership" class="btn"><span>Explore Membership</span></a>
        <a href="/contact" class="btn" style="margin-left: 20px;"><span>Contact Us</span></a>
    </div>
</div>
@endsection