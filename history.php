<?php include "config.php"; ?>
<?php if(!isset($_SESSION['user_id'])) header("Location: login.php"); ?>

<div style="
    margin:0;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
">

    <div style="
        background:#ffffff;
        padding:30px 20px;
        width:600px;
        border-radius:15px;
        text-align:center;
        box-shadow:0 10px 25px rgba(0,0,0,0.2);
    ">
        <h2 style="margin-bottom:20px; color:#333;">📜 Loan History</h2>

        <table style="
            width:100%;
            border-collapse:collapse;
            margin-top:15px;
        ">
            <tr style="background:#4facfe; color:white;">
                <th style="padding:10px; border:1px solid #ddd;">Amount</th>
                <th style="padding:10px; border:1px solid #ddd;">Rate</th>
                <th style="padding:10px; border:1px solid #ddd;">Time</th>
                <th style="padding:10px; border:1px solid #ddd;">Interest</th>
                <th style="padding:10px; border:1px solid #ddd;">Total</th>
            </tr>

            <?php
            $user_id = $_SESSION['user_id'];
            $result = $conn->query("SELECT * FROM loans WHERE user_id='$user_id'");

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr style='background:#f9f9f9;'>
                        <td style='padding:8px; border:1px solid #ddd;'>{$row['amount']}</td>
                        <td style='padding:8px; border:1px solid #ddd;'>{$row['rate']}</td>
                        <td style='padding:8px; border:1px solid #ddd;'>{$row['time']}</td>
                        <td style='padding:8px; border:1px solid #ddd;'>{$row['interest']}</td>
                        <td style='padding:8px; border:1px solid #ddd;'>{$row['total']}</td>
                    </tr>";
                }
            } else {
                echo "<tr>
                        <td colspan='5' style='padding:10px;'>No records found</td>
                      </tr>";
            }
            ?>

        </table>

        <!-- Back Button -->
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

    </div>

</div>