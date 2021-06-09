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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>
    <style> 
        #container_navbar { background-color: rgb(110, 20, 20) !important; }
    </style>
<body>
    <!-- Menu  -->
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="areaReportBookroom">
            <div class="card">
                <div class="title userSelectNone">
                    <p>คุณจองห้องพักแล้ว</p>
                </div> 
                <div class="numberRoom">
                    <p>เลขห้องที่คุณจอง : <?php echo 420; ?></p>
                </div>
                <div class="listPerson">
                    <p>สมาชิกในห้องของคุณ</p>
                    <li>นายชิษณุพงศ์ เทส</li>
                    <li>นายชิษณุพงศ์ ไชยหงษ์ เทส</li>
                    <li>นายชิษณุพงศ์ โย่ว</li>
                    <li>นายชิษเทสเทส ไชยหงษ์</li>
                </div>
                <div class="btnPrint">
                    <input type="submit" value="ปริ้นใบยืนยันการเข้าอยู่หอพัก" onclick="location.href = './print_reportBook.php';">   
                </div>
            </div>
            <div class="descript">
                <p>ปริ้นเอกสารเพื่อยื่นยืนยันการเข้าอยู่หอพักที่ธุรการหอพัก</p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    <!-- <script src="./assets/js/_room_book_report.js"></script>     -->
</body>    
</html>
