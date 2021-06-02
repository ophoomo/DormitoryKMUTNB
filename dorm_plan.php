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
        /* #container_navbar { background-color: rgb(80, 20, 0) !important; } */
    </style>
<body>
    <!-- Menu  -->
    <?php include "navbar.php"; ?>
        
    <div class="container">
        <div class="areaPlan">
            <div class="session1 userSelectNone">
                <div class="titleText">
                    <p id="txtStatus">แผนผังหอพัก</p>
                </div>
                <div class="textSelect">
                    <p>เลือกแผนผังหอพักที่ต้องการดู</p>
                </div>
                <div class="btnSelect">
                    <div class="btn btn1"><p>หอชาย</p></div>
                    <div class="btn btn2"><p>หอหญิง 1</p></div>
                    <div class="btn btn3"><p>หอหญิง 2</p></div>
                </div>
            </div>
            <div class="session2">
                <div class="plan">
                    <div class="item">
                        <p>ชั้น 1</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_male_01.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 2</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_male_02.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 3</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_male_03.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 4</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_male_04.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 5</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_male_05.webp" alt="">
                    </div>
                </div>
                <div class="plan deactive">
                    <div class="item">
                        <p>ชั้น 1</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_1_01.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 2</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_1_02.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 3</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_1_03.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 4</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_1_04.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 5</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_1_05.webp" alt="">
                    </div>
                </div>
                <div class="plan deactive">
                    <div class="item">
                        <p>ชั้น 1</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_2_01.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 2</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_2_02.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 3</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_2_03.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 4</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_2_04.webp" alt="">
                    </div>
                    <div class="item">
                        <p>ชั้น 5</p>
                        <img class="zoomImg" src="./assets/img/dorm/plan_famale_2_05.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    <script src="./assets/js/_dorm_plan.js"></script>    
</body>    
</html>