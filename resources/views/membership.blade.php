@extends('layouts.site')

@section('title', 'Membership')

@section('content')
<div class="page-header">
    <h2>Membership Options</h2>
    <p>Join New Zealand's Premier Coastal Golf Experience</p>
</div>

<div class="container">
    <div class="card-grid">
        <div class="card pricing-card">
            <h3>⭐ 30+ Full Membership</h3>
            <p>Complete access to all club facilities and competitions</p>
            <div class="price">$570.00<small>/year</small></div>
            <ul style="text-align: left; margin: 20px 0;">
                <li>Unlimited golf access</li>
                <li>Voting rights</li>
                <li>All competitions</li>
                <li>Clubhouse privileges</li>
            </ul>
            <a href="/contact" class="btn"><span>Apply Now</span></a>
        </div>
        <div class="card pricing-card">
            <h3>🌟 21-29 years Full Membership</h3>
            <p>Perfect for young professionals (Ages 21-29)</p>
            <div class="price">$450.00<small>/year</small></div>
            <ul style="text-align: left; margin: 20px 0;">
                <li>Full playing rights</li>
                <li>Competition entry</li>
                <li>Social events</li>
                <li>Coaching programs</li>
            </ul>
            <a href="/contact" class="btn"><span>Apply Now</span></a>
        </div>
        <div class="card pricing-card">
            <h3>🎉 Juniors: 5-17 years</h3>
            <p>Enjoy the club atmosphere </p>
            <div class="price">$50.00<small>/year</small></div>
            <ul style="text-align: left; margin: 20px 0;">
                <li>Clubhouse access</li>
                <li>Social events</li>
                <li>Guest privileges</li>
                <li>Networking opportunities</li>
            </ul>
            <a href="/contact" class="btn"><span>Apply Now</span></a>
        </div>
        <div class="card pricing-card">
            <h3>🌟  Summer Membership (1 October - 31 March)</h3>
            <p>Perfect for summer days</p>
            <div class="price">$285.00<small>/year</small></div>
            <ul style="text-align: left; margin: 20px 0;">
                <li>Full playing rights</li>
                <li>Competition entry</li>
                <li>Social events</li>
                <li>Coaching programs</li>
            </ul>
            <a href="/contact" class="btn"><span>Apply Now</span></a>
    </div>
</div>
@endsection