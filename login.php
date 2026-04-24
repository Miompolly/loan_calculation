<?php include "config.php"; ?>
<?php if(!isset($_SESSION['user_id'])) header("Location: login.php"); ?>

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

        <h2 style="color:#333;">📊 Dashboard</h2>

        <!-- SUCCESS MESSAGE -->
        <?php
        if(isset($_SESSION['success'])){
            echo "<p style='color:white;background:green;padding:10px;border-radius:5px;font-weight:bold;'>
                    " . $_SESSION['success'] . "
                  </p>";
            unset($_SESSION['success']);
        }
        ?>

        <h3>Welcome, <?php echo $_SESSION['name']; ?> 👋</h3>

        <a href="calculate.php"
        style="display:block;background:#4facfe;color:white;padding:12px;margin:10px 0;border-radius:8px;text-decoration:none;"
        >Calculate Loan</a>

        <a href="history.php"
        style="display:block;background:#28a745;color:white;padding:12px;margin:10px 0;border-radius:8px;text-decoration:none;"
        >View History</a>

        <a href="logout.php"
        style="display:block;background:#dc3545;color:white;padding:12px;margin:10px 0;border-radius:8px;text-decoration:none;"
        >Logout</a>

    </div>
</div>