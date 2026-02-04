@extends('layouts.site')

@section('title', 'The Course')

@section('content')
<div class="page-header">
    <h2>The Course</h2>
    <p>A Coastal Masterpiece Awaiting Your Challenge</p>
</div>

<div class="card" style="text-align: center; margin-bottom: 60px;">
    <h3 style="color: #1a4d2e; margin-bottom: 20px;">🗺️ Bird's Eye View of the course</h3>
    <img src="/images/course-aerial.jpg" 
         alt="Aerial View of Titahi Bay Golf Course" 
         style="max-width: 600px; width: 100%; height: auto; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
    <p style="color: #555; margin-top: 20px;">Explore our spectacular coastal layout from above</p>
</div>
        </div>
    </div>

    <div class="card-grid">
        <div class="card">
            <h3>🏌️ Course Overview</h3>
            <p>Our stunning 9-hole championship course offers an unforgettable golfing experience with breathtaking coastal views and meticulously maintained fairways.</p>
        </div>
        <div class="card">
            <h3>📊 Course Statistics</h3>
            <ul>
                <li>9 holes, Par 70</li>
                <li>Total Length: 6,200 metres</li>
                <li>Coastal links-style layout</li>
                <li>Championship-level challenge</li>
                <li>Stunning sea views</li>
            </ul>
        </div>
        <div class="card">
            <h3>🌊 Scenic Beauty</h3>
            <p>Experience golf as it was meant to be played - with the Tasman Sea as your backdrop. Every hole offers spectacular views and a unique coastal golfing challenge.</p>
        </div>
    </div>

    <div style="margin-top: 60px;">
        <div class="card">
            <h3>⛳ Course Features</h3>
            <div class="card-grid" style="margin-top: 30px;">
                <div>
                    <h4 style="color: #1a4d2e; margin-bottom: 10px;">🌿 Pristine Greens</h4>
                    <p>Immaculately maintained putting surfaces that provide consistent, true rolls year-round.</p>
                </div>
                <div>
                    <h4 style="color: #1a4d2e; margin-bottom: 10px;">🏖️ Coastal Challenges</h4>
                    <p>Natural bunkers and coastal winds create an authentic links experience unique to our location.</p>
                </div>
                <div>
                    <h4 style="color: #1a4d2e; margin-bottom: 10px;">🌳 Natural Beauty</h4>
                    <p>Native vegetation and mature trees frame each hole, creating a picturesque golfing environment.</p>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 60px;">
        <h3 style="font-size: 32px; color: #1a4d2e; margin-bottom: 20px;">Ready to Experience the Course?</h3>
        <p style="font-size: 18px; color: #555; margin-bottom: 30px;">Book your tee time or learn about membership options</p>
        <a href="/membership" class="btn"><span>⛳ Explore Membership</span></a>
        <a href="/contact" class="btn" style="margin-left: 20px;"><span>📞 Contact Us</span></a>
    </div>
</div>
@endsection