@extends('layouts.site')

@section('title', 'Social Media')

@section('content')
<div class="page-header">
    <h2>Stay Connected</h2>
    <p>Follow our journey and connect with our community</p>
</div>

<div class="container">
    <!-- Featured Members Section -->
    <div style="margin-bottom: 60px;">
        <h3 style="text-align: center; color: #1a4d2e; font-size: 36px; margin-bottom: 40px;">🌟 Featured Members & Community</h3>
        
        <div class="card-grid">
            <!-- Fairway Finesse -->
            <div class="card" style="text-align: center;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #833AB4, #E1306C); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 36px;">
                    ⭐
                </div>
                <h4 style="color: #1a4d2e; margin-bottom: 10px;">Fairway Finesse</h4>
                <p style="color: #666; margin-bottom: 15px;">Trey Shedlock - 2x Strokeplay Champion</p>
                <p style="font-style: italic; color: #555; margin-bottom: 15px;">"Precision, skill, and dedication on every fairway"</p>
                <a href="https://www.instagram.com/fairway.finesse/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4, #E1306C); padding: 10px 25px; font-size: 14px;">
                    <span>📸 @fairway.finesse</span>
                </a>
            </div>

            <!-- Greensman Jake -->
            <div class="card" style="text-align: center;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #833AB4, #E1306C); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 36px;">
                    🌿
                </div>
                <h4 style="color: #1a4d2e; margin-bottom: 10px;">Greensman Jake</h4>
                <p style="color: #666; margin-bottom: 15px;">Jacob Aldridge - Greenskeeper & Junior Matchplay Champion</p>
                <p style="font-style: italic; color: #555; margin-bottom: 15px;">"Keeping our course pristine while dominating on the greens"</p>
                <a href="https://www.instagram.com/greensmanjake/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4, #E1306C); padding: 10px 25px; font-size: 14px;">
                    <span>📸 @greensmanjake</span>
                </a>
            </div>

            <!-- PGA Toa -->
            <div class="card" style="text-align: center;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #833AB4, #E1306C); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 36px;">
                    🏆
                </div>
                <h4 style="color: #1a4d2e; margin-bottom: 10px;">PGA Toa</h4>
                <p style="color: #666; margin-bottom: 15px;">The Ngāti Toa boys representing our club</p>
                <p style="font-style: italic; color: #555; margin-bottom: 15px;">"Bringing pride and skill to every round at Titahi Bay"</p>
                <a href="https://www.instagram.com/pgatoa.nz/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4, #E1306C); padding: 10px 25px; font-size: 14px;">
                    <span>📸 @pgatoa.nz</span>
                </a>
            </div>

            <!-- Hit and Hope -->
            <div class="card" style="text-align: center;">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #833AB4, #E1306C); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 36px;">
                    ⛳
                </div>
                <h4 style="color: #1a4d2e; margin-bottom: 10px;">Hit and Hope 2024</h4>
                <p style="color: #666; margin-bottom: 15px;">Featuring Trent Fearon, Chas Lawrence & crew</p>
                <p style="font-style: italic; color: #555; margin-bottom: 15px;">"Follow our golfing adventures and epic shots from Titahi Bay!"</p>
                <a href="https://www.instagram.com/hit_and_hope_2024/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4, #E1306C); padding: 10px 25px; font-size: 14px;">
                    <span>📸 @hit_and_hope_2024</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Club Achievements Banner -->
    <div class="card" style="background: #f8f9fa; border: 3px solid #1a4d2e; text-align: center;">
        <h3 style="color: #1a4d2e; margin-bottom: 30px; font-size: 32px;">⛳ Club Records & Staff</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 30px;">
            <div>
                <div style="font-size: 36px; margin-bottom: 10px;">🌿</div>
                <p style="font-weight: 700; color: #1a4d2e; font-size: 18px;">Greenskeeper</p>
                <p style="font-size: 16px; color: #555; margin-top: 10px;">Jacob Aldridge</p>
            </div>
            <div>
                <div style="font-size: 36px; margin-bottom: 10px;">🏆</div>
                <p style="font-weight: 700; color: #1a4d2e; font-size: 18px;">Course Record Holders</p>
                <p style="font-size: 16px; color: #555; margin-top: 10px;">Trey Shedlock</p>
                <p style="font-size: 16px; color: #555;">Corey Clark</p>
                <p style="font-size: 16px; color: #555;">Reishan Tamihana (Bull)</p>
                <p style="font-size: 16px; color: #555;">Adam Church</p>
            </div>
        </div>
    </div>

    <!-- Share Your Experience -->
    <div class="card" style="text-align: center; background: linear-gradient(135deg, #1a4d2e 0%, #2d6a4f 100%); color: white; margin-top: 60px;">
        <h3 style="color: white; margin-bottom: 20px; font-size: 32px;">📸 Share Your Experience!</h3>
        <p style="font-size: 18px; margin-bottom: 25px; color: #95d5b2;">Tag our members in your photos and use our hashtags!</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <span style="background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 25px; font-weight: 600;">#TitahiBayGolf</span>
            <span style="background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 25px; font-weight: 600;">#WellingtonGolf</span>
            <span style="background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 25px; font-weight: 600;">#NZGolf</span>
            <span style="background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 25px; font-weight: 600;">#HitAndHope</span>
        </div>
    </div>

    <!-- Instagram Feed -->
    <div style="margin-top: 60px;">
        <h3 style="text-align: center; color: #1a4d2e; font-size: 36px; margin-bottom: 40px;">📷 Follow Our Community</h3>
        <div class="card" style="text-align: center; padding: 60px;">
            <p style="color: #666; font-size: 18px; margin-bottom: 30px;">Connect with our amazing members and see the latest from Titahi Bay Golf Club!</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://www.instagram.com/fairway.finesse/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4 0%, #E1306C 50%, #FD1D1D 100%);">
                    <span>⭐ @fairway.finesse</span>
                </a>
                <a href="https://www.instagram.com/greensmanjake/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4 0%, #E1306C 50%, #FD1D1D 100%);">
                    <span>🌿 @greensmanjake</span>
                </a>
                <a href="https://www.instagram.com/pgatoa.nz/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4 0%, #E1306C 50%, #FD1D1D 100%);">
                    <span>🏆 @pgatoa.nz</span>
                </a>
                <a href="https://www.instagram.com/hit_and_hope_2024/" target="_blank" class="btn" style="background: linear-gradient(135deg, #833AB4 0%, #E1306C 50%, #FD1D1D 100%);">
                    <span>⛳ @hit_and_hope_2024</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection