<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>หอพักนักศึกษา มจพ. ปราจีนบุรี</title>
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="icon" href="./assets/img/logoKmutnb.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    
    <div class="container_login">
        
        <form action="#">
            <div class="areaLogin">
                <p>เข้าสู่ระบบ</p>
                <div class="input">
                    <i class="fas fa-user"></i>
                    <i class="fas fa-lock"></i>
                    <input type="text" placeholder="ชื่อผู้ใช้" required>
                    <input type="password" placeholder="รหัสผ่าน" required>
                </div>
                <a href="forgot.php" class="forgotPassword">ลืมรหัสผ่าน</a>
                <input class="btnLogin" type="submit" value="เข้าสู่ระบบ">
                <a href="register.php" class="areaRegister">
                    <p class="btnRegister" href="register.php">สมัครสมาชิก</p>
                </a>
            </div>
        </form>
    </div>
    <div class="overlayLogin"></div>
    
    <script src="./assets/js/_login.js"></script>
</body>    
</html>
