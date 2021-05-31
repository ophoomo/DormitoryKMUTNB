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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    </head>
    <style> 
        #container_navbar { background-color: rgb(110, 20, 20) !important; }
        /* #container_navbar { background-color: rgb(80, 20, 0) !important; } */
        /* #container_navbar { background-color: rgb(140, 20, 0) !important; } */
    </style>
<body>

    <!-- Menu  -->
    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="container_fee">
            <div class="areaFee">
                <p class="veryTitle userSelectNone">ค่าธรรมเนียมหอพัก</p>
                <div class="icon fa-8x"> <i class="fas fa-bed"></i> </div>
                
                <div class="room_fee">                    
                    <div id="text" class="title userSelectNone"> <p>ค่าห้องพักภาคเรียนปกติ</p> </div>
                
                    <div id="text" class="man userSelectNone"> <p>หอพักชาย</p> </div>
                    <div id="text" class="women userSelectNone"> <p>หอพักหญิง 1</p> </div>
                    <div id="text" class="women2 userSelectNone"> <p>หอพักหญิง 2</p> </div>
            
                    <div id="text" class="manT1 txt"> <p>3,600 บาท</p> </div>
                    <!-- <div id="text" class="manT2 txt"> <p></p> </div> -->
                    
                    <div id="text" class="womenT1 txt"> <p>3,600 บาท</p> </div>
                    <!-- <div id="text" class="womenT2 txt"> <p></p> </div> -->
                    
                    <div id="text" class="women2T1 txt"> <p>4,600 บาท &nbsp; ชั้น 1-3</p> </div>
                    <div id="text" class="women2T2 txt"> <p>3,600 บาท &nbsp; ชั้น 4-5</p> </div>
                </div>
            </div>
            
            <div class="areaInsurance">
                <div class="insurance">
                <div class="icon fa-4x"> <i class="fas fa-exclamation-circle"></i> </div>
                        <div id="text" class="title userSelectNone"> <p>ประกันทรัพย์สินเสียหาย</p> </div>
                        <div id="text" class="text"> <p>1,000 บาท</p> </div>
                </div>
            </div>
                
            <div class="areaInsuKey">
                <div class="insuKey">
                <div class="icon fa-4x"> <i class="fas fa-key"></i> </div>
                    <div id="text" class="title userSelectNone"> <p>ค่าประกันกุญแจ</p> </div>
                    <div id="text" class="text"> <p>100 บาท</p> </div>
                </div>
            </div>
            
            <div class="areafeeToday">
                <div class="feeToday">
                <div class="icon fa-4x"> <i class="fas fa-sun"></i> </div>
                    <div id="text" class="title userSelectNone"> <p>ค่าห้องพักภาคฤดูร้อน</p> </div>
                    <div id="text" class="text"> <p>40 บาท / วัน</p> </div>
                </div>
            </div>
            
        </div>
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/_dorm_fee.js"></script>
</body>    
</html>
