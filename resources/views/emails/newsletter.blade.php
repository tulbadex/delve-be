<!-- resources/views/emails/delve-newsletter.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Delve's Newsletter</title>
    <style>
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .logo {
            width: 60px;
            margin-bottom: 10px;
        }
        h1 {
            color: #333333;
            font-size: 22px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #555555;
            margin-bottom: 20px;
            padding: 0 10px;
        }
        .button {
            display: inline-block;
            background-color: #8c38c9;
            color: white !important;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: bold;
            margin: 20px 0;
            border: none;
            width: 80%;
            max-width: 300px;
            text-align: center;
        }
        .app-screenshot {
            max-width: 200px;
            border-radius: 15px;
            margin: 20px 0;
        }
        .feature-section {
            margin: 30px 0;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 30px;
        }
        .feature {
            width: 45%;
            margin-bottom: 20px;
        }
        .feature-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }
        .feature h3 {
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 16px;
        }
        .feature p {
            font-size: 14px;
            margin-top: 0;
        }
        .testimonial-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 30px 0;
            padding: 0 20px;
        }
        .testimonial {
            text-align: left;
            width: 45%;
            position: relative;
        }
        .quote-mark {
            color: #8c38c9;
            font-size: 36px;
            position: absolute;
            top: -20px;
            left: -15px;
        }
        .quote {
            color: #8c38c9;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.4;
        }
        .user {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .phone-screenshot {
            width: 45%;
            max-width: 200px;
            border-radius: 25px;
            overflow: hidden;
        }
        .footer {
            background-color: #f5f0fa;
            padding: 30px 0;
            margin-top: 30px;
        }
        .cta-section {
            margin-bottom: 20px;
        }
        .cta-section h2 {
            margin-bottom: 5px;
        }
        .social-links {
            margin: 20px 0;
        }
        .social-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #8c38c9;
            margin: 0 5px;
            padding: 5px;
            text-align: center;
        }
        .footer-logo {
            width: 80px;
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #8c38c9;
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
        }
        .copyright {
            font-size: 12px;
            color: #888888;
            margin-top: 10px;
        }
        .footer-button {
            display: inline-block;
            background-color: #8c38c9;
            color: white !important;
            text-decoration: none;
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: bold;
            margin: 10px 0;
            border: none;
        }
        .third-feature {
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header with Logo -->
        <img src="{{ $message->embed(public_path('images/delve-logo.png')) }}" alt="Delve" class="logo">
        <h1>You're officially subscribed to Delve's newsletter!</h1>
        
        <!-- Introduction Text -->
        <p>Get ready for exciting updates, language hacks, and exclusive challenges! With fun word-matching games and 3D quests, learning a new language has never been this engaging. Stay tuned—and why not start your first quest now?</p>
        
        <!-- App Download Button -->
        <a href="#" class="button">Download the app</a>
        
        <!-- App Screenshot -->
        <div>
            <img src="{{ $message->embed(public_path('images/app-screenshot.png')) }}" alt="Delve App Screenshot" class="app-screenshot">
        </div>
        
        <!-- Why People Love Delve Section -->
        <div class="feature-section">
            <div class="section-title">Why people love Delve</div>
            
            <div class="features">
                <!-- Feature 1 -->
                <div class="feature">
                    <img src="{{ $message->embed(public_path('images/match-icon.png')) }}" alt="Match Words" class="feature-icon">
                    <h3>Match words, boost fluency</h3>
                    <p>Strengthen your vocabulary through smart word-pairing exercises.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature">
                    <img src="{{ $message->embed(public_path('images/quest-icon.png')) }}" alt="3D Quests" class="feature-icon">
                    <h3>Play interactive 3D quests</h3>
                    <p>Learn by completing fun challenges in an engaging virtual world.</p>
                </div>
                
                <!-- Feature 3 - Center aligned -->
                <div class="third-feature">
                    <img src="{{ $message->embed(public_path('images/languages-icon.png')) }}" alt="Multiple Languages" class="feature-icon">
                    <h3>Multiple languages at your fingertips</h3>
                    <p>Learn Spanish, French, German, and more! Build vocabulary, improve pronunciation, and master grammar.</p>
                </div>
            </div>
        </div>
        
        <!-- Testimonial Section with Phone Screenshot -->
        <div class="testimonial-section">
            <!-- Left side quote -->
            <div class="testimonial">
                <div class="quote-mark">"</div>
                <div class="quote">My favorite way to learn a language right now!</div>
                <div class="user">
                    <img src="{{ $message->embed(public_path('images/user-avatar.png')) }}" alt="User" class="user-avatar">
                    <span>Omar A, Spanish Learner</span>
                </div>
            </div>
            
            <!-- Right side phone screenshot -->
            <div class="phone-screenshot">
                <img src="{{ $message->embed(public_path('images/phone-screenshot.png')) }}" alt="Delve App Interface" style="width: 100%;">
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="cta-section">
                <h2>Start speaking with Delve</h2>
                <p>Don't just learn a language — live it.</p>
                <a href="#" class="footer-button">Start Today</a>
            </div>
            
            <img src="{{ $message->embed(public_path('images/delve-logo.png')) }}" alt="Delve" class="footer-logo">
            
            <div class="footer-links">
                <a href="#">FAQ</a>
                <a href="#">CONTACT US</a>
                <a href="#">DOWNLOAD</a>
            </div>
            
            <div class="social-links">
                <a href="{{ $socialLinks['facebook'] ?? '#' }}" class="social-icon">
                    <img src="{{ $message->embed(public_path('images/facebook-icon.png')) }}" alt="Facebook" width="20">
                </a>
                <a href="{{ $socialLinks['instagram'] ?? '#' }}" class="social-icon">
                    <img src="{{ $message->embed(public_path('images/instagram-icon.png')) }}" alt="Instagram" width="20">
                </a>
                <a href="{{ $socialLinks['twitter'] ?? '#' }}" class="social-icon">
                    <img src="{{ $message->embed(public_path('images/twitter-icon.png')) }}" alt="Twitter" width="20">
                </a>
                <a href="{{ $socialLinks['tiktok'] ?? '#' }}" class="social-icon">
                    <img src="{{ $message->embed(public_path('images/tiktok-icon.png')) }}" alt="TikTok" width="20">
                </a>
            </div>
            
            <div class="copyright">
                &copy; {{ date('Y') }} Delve. All Rights Reserved.<br>
                <a href="#">Privacy Policy</a> | 
                <a href="#">Terms and Conditions</a> | 
                <a href="{{ $unsubscribeUrl ?? route('newsletter.unsubscribe', ['email' => $userEmail ?? 'example@mail.com']) }}">Unsubscribe</a>
            </div>
        </div>
    </div>
</body>
</html>