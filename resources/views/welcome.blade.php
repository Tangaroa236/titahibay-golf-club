@extends('layouts.site')

@section('title', 'Dashboard')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h2>Titahi Bay Golf Club</h2>
        <p class="tagline">Dashboard of 2005 US Open Champion Michael Campbell</p>
        <p>Experience world-class golfing on Wellington's stunning coastline</p>
        <a href="/membership" class="btn"><span>⛳ Become a Member Today</span></a>
    </div>
</div>

<div class="container">
    <div class="card-grid">
        <div class="card">
            <h3>🏌️ Championship Course</h3>
            <p>Our beautifully maintained 18-hole course offers breathtaking challenges for golfers of all skill levels, with panoramic views of the Tasman Sea that will take your breath away.</p>
        </div>
        <div class="card">
            <h3>👥 Join Our Community</h3>
            <p>Become part of our vibrant golfing family! We offer flexible membership options including Full, Intermediate, and Social memberships to suit your lifestyle and passion for the game.</p>
        </div>
        <div class="card">
            <h3>🏆 Tournaments & Events</h3>
            <p>Exciting year-round tournaments, social gatherings, and club championships. From casual weekend competitions to prestigious annual events - there's always something happening!</p>
        </div>
    </div>
</div>
@endsection