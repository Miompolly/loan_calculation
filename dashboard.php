<?php include "config.php"; ?>
<?php if(!isset($_SESSION['user_id'])) header("Location: login.php"); ?>

<!-- <link rel="stylesheet" href="style.css"> -->
<div style="
    margin:0;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
">

    <div style="
        background:#ffffff;
        padding:40px 30px;
        width:350px;
        border-radius:15px;
        text-align:center;
        box-shadow:0 10px 25px rgba(0,0,0,0.2);
    ">
        <h2 style="margin-bottom:25px; color:#333;">📊 Dashboard</h2>

        <a href="calculate.php"
        style="
            display:block;
            text-decoration:none;
            background:#4facfe;
            color:white;
            padding:12px;
            margin:10px 0;
            border-radius:8px;
            font-weight:bold;
            transition:0.3s;
        "
        onmouseover="this.style.background='#007bff'; this.style.transform='scale(1.05)'"
        onmouseout="this.style.background='#4facfe'; this.style.transform='scale(1)'"
        >
            Calculate Loan
        </a>

        <a href="history.php"
        style="
            display:block;
            text-decoration:none;
            background:#28a745;
            color:white;
            padding:12px;
            margin:10px 0;
            border-radius:8px;
            font-weight:bold;
            transition:0.3s;
        "
        onmouseover="this.style.background='#218838'; this.style.transform='scale(1.05)'"
        onmouseout="this.style.background='#28a745'; this.style.transform='scale(1)'"
        >
            View History
        </a>

        <a href="logout.php"
        style="
            display:block;
            text-decoration:none;
            background:#dc3545;
            color:white;
            padding:12px;
            margin:10px 0;
            border-radius:8px;
            font-weight:bold;
            transition:0.3s;
        "
        onmouseover="this.style.background='#c82333'; this.style.transform='scale(1.05)'"
        onmouseout="this.style.background='#dc3545'; this.style.transform='scale(1)'"
        >
            Logout
        </a>
           <a href="index.php"
        style="
            display:inline-block;
            margin-top:20px;
            text-decoration:none;
            background:#28a745;
            color:white;
            padding:12px 20px;
            border-radius:8px;
            font-weight:bold;
            transition:0.3s;
        "
        onmouseover="this.style.background='#218838'; this.style.transform='scale(1.05)'"
        onmouseout="this.style.background='#28a745'; this.style.transform='scale(1)'"
        >
            ⬅ Back to Create account | Login
        </a>

    </div>

</div>