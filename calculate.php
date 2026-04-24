<?php include "config.php"; ?>

<?php
if(isset($_POST['calculate'])){
    $amount = $_POST['amount'];
    $time = $_POST['time'];
    $rate = 5;

    $interest = ($amount * $rate * $time) / 100;
    $total = $amount + $interest;

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO loans (user_id, amount, rate, time, interest, total)
            VALUES ('$user_id','$amount','$rate','$time','$interest','$total')";
    $conn->query($sql);
}
?>

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
        <h2 style="margin-bottom:25px; color:#333;">🧮 Loan Calculator</h2>

        <form method="POST">

            <input type="number" name="amount" placeholder="Loan Amount" required
            style="width:100%; padding:12px; margin:8px 0; border-radius:8px; border:1px solid #ccc;">

            <input type="number" name="time" placeholder="Time (years)" required
            style="width:100%; padding:12px; margin:8px 0; border-radius:8px; border:1px solid #ccc;">

            <button name="calculate"
            style="
                width:100%;
                padding:12px;
                margin-top:10px;
                background:#4facfe;
                color:white;
                border:none;
                border-radius:8px;
                font-weight:bold;
                cursor:pointer;
                transition:0.3s;
            "
            onmouseover="this.style.background='#007bff'; this.style.transform='scale(1.05)'"
            onmouseout="this.style.background='#4facfe'; this.style.transform='scale(1)'"
            >
                Calculate
            </button>

        </form>
           <a href="dashboard.php"
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
            ⬅ Back to Dashboard
        </a>

        <?php if(isset($interest)){ ?>
            <div style="
                margin-top:20px;
                padding:15px;
                background:#f8f9fa;
                border-radius:10px;
                box-shadow: inset 0 0 5px rgba(0,0,0,0.1);
            ">
                <h3 style="color:#28a745;">Interest: <?php echo $interest; ?></h3>
                <h3 style="color:#007bff;">Total: <?php echo $total; ?></h3>
            </div>
        <?php } ?>

    </div>
    

</div>