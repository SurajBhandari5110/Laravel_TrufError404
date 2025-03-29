<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TurfConnect - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --dark-green: #115e37;
            --medium-green: #10b981;
            --light-green: #6ee7b7;
            --white: #ffffff;
            --off-white: #f8fafc;
            --light-gray: #e2e8f0;
            --dark-gray: #333333;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: var(--off-white);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .background-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            opacity: 0.07;
            border-radius: 50%;
            filter: blur(40px);
        }
        
        .shape-1 {
            background-color: var(--dark-green);
            width: 500px;
            height: 500px;
            top: -250px;
            left: -100px;
        }
        
        .shape-2 {
            background-color: var(--medium-green);
            width: 400px;
            height: 400px;
            bottom: -200px;
            right: -100px;
        }
        
        .shape-3 {
            background-color: var(--light-green);
            width: 300px;
            height: 300px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .shape-4 {
            background-color: var(--dark-green);
            width: 200px;
            height: 200px;
            bottom: 10%;
            left: 10%;
        }
        
        .soccer-ball {
            position: absolute;
            width: 30px;
            height: 30px;
            background-image: radial-gradient(circle, white 10px, #333 12px);
            border-radius: 50%;
            opacity: 0.2;
            animation: float 15s linear infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0) rotate(0deg);
            }
            100% {
                transform: translateY(-100px) translateX(100px) rotate(360deg);
            }
        }
        
        .login-container {
            width: 100%;
            max-width: 420px;
            background-color: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        
        .login-header {
            background: linear-gradient(135deg, var(--dark-green), var(--medium-green));
            padding: 30px 0;
            text-align: center;
            position: relative;
        }
        
        .login-header:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 20px;
            background-color: var(--white);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 50% 0);
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        
        .logo i {
            font-size: 32px;
            color: var(--white);
        }
        
        .logo h1 {
            color: var(--white);
            font-size: 28px;
            font-weight: 700;
        }
        
        .logo span {
            color: var(--light-green);
        }
        
        .welcome-text {
            color: var(--white);
            font-size: 16px;
            opacity: 0.9;
        }
        
        .login-form {
            padding: 30px 40px;
        }
        
        .login-title {
            font-size: 24px;
            color: var(--dark-green);
            margin-bottom: 20px;
            text-align: center;
        }
        
        .error-message {
            color: #e53e3e;
            background-color: #fed7d7;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }
        
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: var(--medium-green);
        }
        
        .input-field {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid var(--light-gray);
            border-radius: 8px;
            background-color: var(--off-white);
            transition: all 0.3s ease;
            font-size: 14px;
        }
        
        .input-field:focus {
            outline: none;
            border-color: var(--medium-green);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
        }
        
        .input-field::placeholder {
            color: #94a3b8;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--dark-gray);
        }
        
        .remember-me input[type="checkbox"] {
            accent-color: var(--medium-green);
            width: 16px;
            height: 16px;
        }
        
        .forgot-password {
            color: var(--medium-green);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .forgot-password:hover {
            color: var(--dark-green);
            text-decoration: underline;
        }
        
        .login-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, var(--medium-green), var(--dark-green));
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .login-button:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }
        
        .login-button:hover:before {
            left: 100%;
        }
        
        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
            color: #94a3b8;
            font-size: 14px;
        }
        
        .divider:before,
        .divider:after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: var(--light-gray);
        }
        
        .divider span {
            padding: 0 15px;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--off-white);
            border: 1px solid var(--light-gray);
            color: var(--dark-gray);
            transition: all 0.3s ease;
        }
        
        .social-button:hover {
            background-color: var(--light-green);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
            color: var(--dark-gray);
            font-size: 14px;
        }
        
        .register-link a {
            color: var(--medium-green);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .register-link a:hover {
            color: var(--dark-green);
            text-decoration: underline;
        }
        
        .user-type-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .user-type-button {
            flex: 1;
            padding: 10px;
            text-align: center;
            color: var(--medium-green);
            background-color: transparent;
            border: 1px solid var(--medium-green);
            border-radius: 5px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .user-type-button:hover {
            background-color: var(--medium-green);
            color: var(--white);
        }
        
        @media (max-width: 500px) {
            .login-container {
                width: 90%;
            }
            
            .login-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="background-animation">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>
    
    <div id="soccer-balls-container"></div>
    
    <div class="login-container">
        <div class="login-header">
            <div class="logo">
                <i class="fas fa-futbol fa-bounce"></i>
                <h1>Turf<span>Connect</span></h1>
            </div>
            <p class="welcome-text">Welcome back! Please login to your account</p>
        </div>
        
        <div class="login-form">
            <h2 class="login-title">Sign In</h2>
            
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> {{ $error }}
                    </div>
                @endforeach
            @endif

            @if(Session::has('error'))
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> {{ Session::get('error') }}
                </div>
            @endif
            
            <form action="{{ route('userLogin') }}" method="POST">
                @csrf
                <div class="input-group">
                    <i class="input-icon fas fa-envelope"></i>
                    <input type="email" class="input-field" name="email" placeholder="Email Address" required>
                </div>
                
                <div class="input-group">
                    <i class="input-icon fas fa-lock"></i>
                    <input type="password" class="input-field" name="password" placeholder="Password" required>
                </div>
                
                <div class="remember-forgot">
                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>
                
                <button type="submit" class="login-button">Login</button>
            </form>
            
            <div class="divider">
                <span>or login with</span>
            </div>
            
            <div class="social-login">
                <a href="#" class="social-button">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-button">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            
            <div class="register-link">
                <p>Don't have an account? <a href="{{ url('/register') }}">Sign up</a></p>
                
                <div class="user-type-buttons">
                    <a href="{{ route('register') }}" class="user-type-button">Register as Player</a>
                    <a href="{{ route('register') }}" class="user-type-button">Register as Manager</a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Create soccer ball background animation
        const backgroundContainer = document.getElementById('soccer-balls-container');
        const numberOfBalls = 10;
        
        for (let i = 0; i < numberOfBalls; i++) {
            const ball = document.createElement('div');
            ball.className = 'soccer-ball';
            
            // Random position and animation duration
            const left = Math.random() * 100;
            const delay = Math.random() * 15;
            const duration = 15 + Math.random() * 20;
            const size = 15 + Math.random() * 20;
            
            ball.style.left = `${left}%`;
            ball.style.width = `${size}px`;
            ball.style.height = `${size}px`;
            ball.style.animationDuration = `${duration}s`;
            ball.style.animationDelay = `${delay}s`;
            
            backgroundContainer.appendChild(ball);
        }
        
        // Move shapes for subtle animation
        const shapes = document.querySelectorAll('.shape');
        
        let positions = shapes.length;
        setInterval(() => {
            shapes.forEach((shape, index) => {
                // Create subtle random movement
                const xMove = (Math.random() * 20) - 10;
                const yMove = (Math.random() * 20) - 10;
                
                shape.style.transform = `translate(${xMove}px, ${yMove}px)`;
            });
        }, 3000);
    </script>
</body>
</html>