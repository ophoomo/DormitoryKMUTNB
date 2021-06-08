<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>หอพักนักศึกษา มจพ. ปราจีนบุรี</title>
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="icon" href="./assets/img/logoKmutnb.webp">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    </head>
    <style> 
        #container_navbar { background-color: rgb(110, 20, 20) !important; }
    </style>
<body>

    <!-- Menu  -->
    <?php include "navbar.php"; ?>

    <div class="container_forgot">
        <p class="title">รีเช็ตรหัสผ่าน</p>
        
        <div class="areaCheckMail">
            <p>กรอกรหัสที่ได้รัยจากอีเมลล์ : <?php echo 'email@email.com'; ?></p>
            <button class="btnSendMail" onclick="sendMail()">
                ส่งรหัสยืนยันตัวตนไปยัง email
            </button>
            <span class="statusSend deactive">ส่งได้อีกครั้งใน&nbsp;<span class="timeSendMail"></span>&nbsp;วิ</span>
        </div>
        
        <div class="areaInputCheck">
            <p>นำรหัสที่ได้จากอีเมลล์ใส่ในช่องนี้</p>
            <div class="data">
                <input class="input" type="text">
            </div>
            <input type="submit" value="ตรวจสอบรหัส" placeholder="ใส่รหัสที่ได้จากอีเมลล์" onclick="checkStatus(1)">
        </div>

        <form action="">
            <div class="areaInputNewPassword">
                <div class="descript">
                    <p class="textStatus">โปรดทำการยืนยันตัวตนจากรหัสที่ถูกส่งไปยังอีเมลล์ก่อน</p>
                </div>
                <div class="item">
                    <p class="userNameShow deactive">your username : <span><?php echo "samaham44"; ?></span></p>
                </div>
                <div class="item">
                    <p>กรอกรหัสผ่านใหม่</p>
                    <input class="inputPass" type="password" placeholder="new password" disabled>
                </div>   
                <div class="item">
                    <p>กรอกรหัสผ่านใหม่อีกครั้ง</p>
                    <input class="inputPass" type="password" placeholder="new password again" disabled>
                </div>
                <input type="submit" value="เปลี่ยนรหัสผ่าน"  onclick="editData()">
            </div>
        </form>
    
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/_forgot.js"></script>
</body>    
</html>
