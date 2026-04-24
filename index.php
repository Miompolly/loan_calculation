<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Loan App</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            padding: 40px 30px;
            width: 350px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
        }

        a {
            display: block;
            text-decoration: none;
            background: #4facfe;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            transition: 0.3s;
            font-weight: bold;
        }

        a:hover {
            background: #007bff;
            transform: scale(1.05);
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
<div class="container">
    <h2>💰 Loan App</h2>
    
    <a href="register.php">Create Account</a>
    <a href="login.php">Login</a>

    <div class="footer">
        Simple Loan Calculator System
    </div>
</div>
</body>
</html>