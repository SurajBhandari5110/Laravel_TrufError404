<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 350px;
            text-align: center;
        }
        .logo {
            margin: 20px 0;
        }
        .form-container {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
        .form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            background: #fafafa;
        }
        .form-container input:focus, .form-container select:focus {
            outline: none;
            border-color: #a8a8a8;
        }
        .form-container input[type="submit"] {
            background-color: #10b981;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            padding: 12px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #10b981;
        }
        .login-container {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container a {
            color: #10b981;
            text-decoration: none;
            font-weight: bold;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            margin: 10px 0;
        }
        .success-message {
            color: green;
            margin: 10px 0;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            text-align: left;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Instagram_logo.svg" alt="Logo" width="200">
        </div>
        <div class="form-container">
            <h1>Register</h1>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="error-message">{{ $error }}</p>
                @endforeach
            @endif

            @if(Session::has('success'))
                <p class="success-message">{{ Session::get('success') }}</p>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Enter Name" required>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <label for="user_type">Register as:</label>
                <select name="user_type" id="user_type" required>
                    <option value="player">Player</option>
                    <option value="manager">Manager</option>
                </select>
                <input type="submit" value="Register">
            </form>
        </div>
        <div class="login-container">
            <p>Already have an account? <a href="{{ url('/login') }}">Log in</a></p>
        </div>
    </div>
</body>
</html>
