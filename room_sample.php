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
    </style>
<body>

    <!-- Menu  -->
    <?php include "navbar.php"; ?>
        
    <div class="container">
        <div class="areaSample">
            <div class="areaSection">
                <div class="session1">
                    <div class="title">
                        <p class="txtSample">ตัวอย่างหอพัก</p>
                    </div>
                          
                    <div class="txtSelect">
                        <p>เลือกหอพักที่ต้องการดู</p>
                    </div>
                
                    <div class="select userSelectNone">
                        <div class="btn btn1"><p>หอชาย</p></div>
                        <div class="btn btn2"><p>หอหญิง 1</p></div>
                        <div class="btn btn3"><p>หอหญิง 2</p></div>
                    </div>
                          
                </div>
                <div class="session2">
                    <div class="status userSelectNone">
                        <span class="statusTxt">หอพักชาย</span>       
                    </div>
                    <div class="description">
                    <p class="userSelectNone">คำอธิบาย</p>
                    <div id="txt" class="textDescript deactive">
                        <ul>
                            <li>หอพักชาย ห้องละ 5 คน</li>
                            <li>เตียงเดี่ยว 5 เตียง</li>
                            <li>ตู้เสื้อผ้า โต๊ะเขียนหนังสือและเก้าอี้ คนละ 1 ชุด</li>
                            <li>พัดลมติดผนัง 4 ตัว</li>
                            <li>ระเบียงหลังห้องพร้อมราวตากผ้า</li>
                        </ul>
                    </div>
                    <div id="txt" class="textDescript deactive">
                        <ul>
                            <li>หอพักหญิง 1 ห้องละ 4 คน</li>
                            <li>เตียง 2 ชั้น 2 เตียง</li>
                            <li>ตู้เสื้อผ้า โต๊ะเขียนหนังสือและเก้าอี้ คนละ 1 ชุด</li>
                            <li>พัดลมเพดาล 1 ตัว</li>
                            <li>ระเบียงหลังห้องพร้อมราวตากผ้า</li>
                        </ul>
                    </div>
                    <div id="txt" class="textDescript deactive">
                        <ul>
                            <li>หอพักหญิง 2 ห้องละ 3-4 คน</li>
                            <li>เตียง 2 ชั้น 2 เตียง หรือ เตียงเดียว 3 เตียง</li>
                            <li>ตู้เสื้อผ้า โต๊ะเขียนหนังสือและเก้าอี้ คนละ 1 ชุด</li>
                            <li>พัดลมเพดาล 1 ตัว</li>
                            <li>ระเบียงหลังห้องพร้อมราวตากผ้า</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="areaImage">
            <div class="dorm deactive">
                <img class="zoom" src="./assets/img/dorm/rorm_male_01.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_male_02.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_male_03.jpg" alt="">
                <!-- <img class="zoom" src="./assets/img/dorm/rorm_male_04.jpg" alt=""> -->
                <img class="zoom" src="./assets/img/dorm/rorm_male_05.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_male_06.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_male_07.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_male_08.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_male_09.jpg" alt="">
            </div>
            <div class="dorm deactive">
                <img class="zoom" src="./assets/img/dorm/rorm_female_1_01.jpg" alt="">                 
                <img class="zoom" src="./assets/img/dorm/rorm_female_1_02.jpg" alt="">                 
                <img class="zoom" src="./assets/img/dorm/rorm_female_1_03.jpg" alt="">
                <!-- <img class="zoom" src="./assets/img/dorm/rorm_female_1_04.jpg" alt=""> -->
                <!-- <img class="zoom" src="./assets/img/dorm/rorm_female_1_05.jpg" alt=""> -->
                <!-- <img class="zoom" src="./assets/img/dorm/room_famele_1_06.jpg" alt=""> -->
                <!-- <img class="zoom" src="./assets/img/dorm/room_famele_1_07.jpg" alt=""> -->
                <!-- <img class="zoom" src="./assets/img/dorm/room_famele_1_08.jpg" alt=""> -->
                <!-- <img class="zoom" src="./assets/img/dorm/room_famele_1_09.jpg" alt=""> -->
                <!-- <img class="zoom" src="./assets/img/dorm/room_famele_1_10.jpg" alt=""> -->
            
            </div>
            <div class="dorm deactive">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_01.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_02.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_03.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_04.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_05.jpg" alt="">
                <!-- <img class="zoom" src="./assets/img/dorm/rorm_female_2_06.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_07.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_08.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_09.jpg" alt="">
                <img class="zoom" src="./assets/img/dorm/rorm_female_2_10.jpg" alt=""> -->
            </div>
        </div>
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/_room_sample.js"></script>    
    <!-- <script src="./assets/js/medium-zoom.min.js"></script> -->
</body>    
</html>
