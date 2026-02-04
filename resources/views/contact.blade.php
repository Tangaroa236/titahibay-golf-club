@extends('layouts.site')

@section('title', 'Contact')

@section('content')
<div class="page-header">
    <h2>Contact Us</h2>
    <p>Get in Touch with Titahi Bay Golf Club</p>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="card-grid">
        <!-- Contact Information -->
        <div class="card">
            <h3 style="color: #1a1a1a; margin-bottom: 30px;">Get in Touch</h3>
            
            <div style="margin-bottom: 24px;">
                <h4 style="color: #1a1a1a; font-size: 18px; margin-bottom: 8px; font-weight: 600;">Address</h4>
                <p style="color: #4a4a4a;">Gloaming Hill<br>Titahi Bay, Porirua 5022<br>Wellington, New Zealand</p>
            </div>

            <div style="margin-bottom: 24px;">
                <h4 style="color: #1a1a1a; font-size: 18px; margin-bottom: 8px; font-weight: 600;">Phone</h4>
                <p style="color: #4a4a4a;"><a href="tel:042367807" style="color: #2d5f3f; text-decoration: none;">(04) 236 7807</a></p>
            </div>

            <div style="margin-bottom: 24px;">
                <h4 style="color: #1a1a1a; font-size: 18px; margin-bottom: 8px; font-weight: 600;">Email</h4>
                <p style="color: #4a4a4a;"><a href="mailto:info@titahibaygolf.co.nz" style="color: #2d5f3f; text-decoration: none;">info@titahibaygolf.co.nz</a></p>
            </div>
        </div>

        <!-- Opening Hours -->
        <div class="card">
            <h3 style="color: #1a1a1a; margin-bottom: 30px;">Opening Hours</h3>
            
            <div style="margin-bottom: 16px;">
                <h4 style="color: #1a1a1a; font-size: 16px; margin-bottom: 4px; font-weight: 600;">Monday - Friday</h4>
                <p style="color: #4a4a4a;">7:00 AM - 7:00 PM</p>
            </div>

            <div style="margin-bottom: 16px;">
                <h4 style="color: #1a1a1a; font-size: 16px; margin-bottom: 4px; font-weight: 600;">Saturday - Sunday</h4>
                <p style="color: #4a4a4a;">6:30 AM - 8:00 PM</p>
            </div>

            <div style="margin-top: 32px; padding-top: 24px; border-top: 1px solid #e8e8e8;">
                <p style="color: #6a6a6a; font-size: 14px; line-height: 1.6;">
                    <strong>Please note:</strong> Hours may vary on public holidays. 
                    Please call ahead to confirm availability for your visit.
                </p>
            </div>
        </div>
    </div>

    <!-- Map Section with Static Image -->
    <div style="margin-top: 60px; margin-bottom: 40px;">
        <h3 style="text-align: center; color: #1a1a1a; font-size: 32px; margin-bottom: 40px;">Find Us</h3>
        
        <div class="card" style="padding: 0; overflow: hidden;">
            <div style="position: relative; padding-bottom: 40%; height: 0; overflow: hidden;">
                <iframe 
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.5!2d174.835!3d-41.094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38add969c88889%3A0x500ef868479b8e0!2sTitahi%20Bay%20Golf%20Club!5e1!3m2!1sen!2snz!4v1738043500000!5m2!1sen!2snz" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div style="padding: 24px; background: #f8f8f8; text-align: center;">
                <p style="color: #4a4a4a; margin-bottom: 16px;">Gloaming Hill, Titahi Bay, Porirua 5022</p>
                <a href="https://www.google.com/maps/place/Titahi+Bay+Golf+Club/@-41.094,174.835,15z" 
                   target="_blank" 
                   class="btn" 
                   style="margin-top: 0;">
                    <span>Get Directions to Titahi Bay Golf Club</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Additional Info -->
    <div class="card" style="background: #f8f8f8; border: 1px solid #e8e8e8; margin-bottom: 60px;">
        <h3 style="color: #1a1a1a; margin-bottom: 20px; text-align: center;">Visit Us</h3>
        <p style="text-align: center; color: #4a4a4a; line-height: 1.8; max-width: 700px; margin: 0 auto;">
            Whether you're interested in membership, booking a tee time, or just want to learn more about our 
            historic club, we'd love to hear from you. Our friendly staff are always happy to help with any 
            questions you may have.
        </p>
    </div>
</div>
@endsection