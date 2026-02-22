@extends('layouts.site')
@section('title', 'Login')

@section('content')
<div style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background: #f8f8f8; padding: 60px 20px;">
    <div style="background: white; padding: 60px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); max-width: 480px; width: 100%; border: 1px solid #e5e5e5;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <img src="/images/Logo.jpg" alt="Titahi Bay Golf Club" style="height: 80px; margin-bottom: 24px;">
            <h2 style="font-family: 'Cormorant Garamond', Georgia, serif; font-size: 36px; color: #1a1a1a; margin-bottom: 8px; font-weight: 600;">Member Login</h2>
            <p style="color: #6a6a6a; font-size: 15px;">Access your golf club account</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div style="margin-bottom: 24px;">
                <label for="email" style="display: block; margin-bottom: 8px; color: #1a1a1a; font-weight: 500; font-size: 14px;">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                    style="width: 100%; padding: 14px 16px; border: 1px solid #d0d0d0; border-radius: 4px; font-size: 15px; font-family: 'Inter', sans-serif; transition: border-color 0.2s;">
                @error('email')
                    <span style="color: #dc2626; font-size: 13px; margin-top: 6px; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div style="margin-bottom: 24px;">
                <label for="password" style="display: block; margin-bottom: 8px; color: #1a1a1a; font-weight: 500; font-size: 14px;">Password</label>
                <input id="password" type="password" name="password" required 
                    style="width: 100%; padding: 14px 16px; border: 1px solid #d0d0d0; border-radius: 4px; font-size: 15px; font-family: 'Inter', sans-serif; transition: border-color 0.2s;">
                @error('password')
                    <span style="color: #dc2626; font-size: 13px; margin-top: 6px; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div style="margin-bottom: 32px; display: flex; align-items: center;">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                    style="width: 16px; height: 16px; margin-right: 8px; cursor: pointer;">
                <label for="remember" style="color: #4a4a4a; font-size: 14px; cursor: pointer;">Remember me</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" style="width: 100%; background: #2d5016; color: white; padding: 16px; border: none; border-radius: 4px; font-size: 16px; font-weight: 500; cursor: pointer; transition: all 0.2s; font-family: 'Inter', sans-serif;">
                Log In
            </button>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <div style="text-align: center; margin-top: 24px;">
                    <a href="{{ route('password.request') }}" style="color: #2d5f3f; text-decoration: none; font-size: 14px; font-weight: 500;">
                        Forgot your password?
                    </a>
                </div>
            @endif
        </form>

    </div>
</div>

<style>
    input[type="email"]:focus,
    input[type="password"]:focus {
        outline: none;
        border-color: #2d5f3f;
    }
    
    button[type="submit"]:hover {
        background: #1e3610;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(45, 80, 22, 0.2);
    }
</style>
@endsection