<?php include "config.php"; ?>

<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username,email,password)
            VALUES ('$username','$email','$password')";

    $conn->query($sql);
    header("Location: login.php");
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
        <h2 style="margin-bottom:25px; color:#333;">📝 Register</h2>

        <form method="POST">

            <input type="text" name="username" placeholder="Username" required
            style="width:100%; padding:12px; margin:8px 0; border-radius:8px; border:1px solid #ccc;">

            <input type="email" name="email" placeholder="Email" required
            style="width:100%; padding:12px; margin:8px 0; border-radius:8px; border:1px solid #ccc;">

            <input type="password" name="password" placeholder="Password" required
            style="width:100%; padding:12px; margin:8px 0; border-radius:8px; border:1px solid #ccc;">

            <button name="register"
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
                Register
            </button>

        </form>
    </div>

</div>