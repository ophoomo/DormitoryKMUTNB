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
        <p class="title">ข้อมูลส่วนตัว</p>
        <form action="">
            <div class="areaForgot">
                <div class="data">
                    <p>ชื่อ</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>นามสกุล</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>นามสกุล</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>เลขบัตรประจำตัวประชาชน</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>รหัสนักศึกษา</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>เบอร์โทรศัพท์</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>อีเมลล์</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>หมู่เลือด</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>ศาสนา</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>คณะ</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>สาขา</p>
                    <input class="input" type="text" disabled>
                </div>
            </div>
            <div class="btn btnSaveData deactive">
                <input type="submit" value="บันทึกข้อมูล">
            </div>
        </form>
            <div class="btn btnEditData">
                <input type="submit" value="แก้ไขข้อมูล"  onclick="editData()">
            </div>
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/_forgot.js"></script>
</body>    
</html>
