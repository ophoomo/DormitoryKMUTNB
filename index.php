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
</head>
<body>

    <div id="loading"></div>
    <div id="loadingNextPage" style="display: none;"></div>

    <div id="container_popup">
        <div id="areaPopup">
            <div id="closeBtn"><i class="fas fa-times fa-2x"></i></div>
            <div id="img">
                <a href="https://www.facebook.com/media/set/?vanity=225226107507988&set=a.4238849449478947" 
                target="_blank"><img src="./assets/img/news/importantNews.jpg" alt="" width="100%" height="100%"></a>
            </div>
        </div>
        <div id="overlayPopup"></div>
    </div>
    
    <div id="indexPage" class="container" style="display: block;">        
        <div class="header">
            <div class="overlayNav"></div>
            <div id="nav" class="navbar">
                <div class="logo">
                    <img src="./assets/img/logoKmutnb.webp" alt="">
                    <div class="text">
                        <a href="main_page.php" id="titleText" class="LargeText">ระบบหอพักนักศึกษา</a>
                        <!-- <p class="smallText">มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ ว.ปราจีนบุรี</p> -->
                    </div>
                </div>
                <div class="menuPhone" style="display: none;">
                    <a href="main_page.php">หน้าหลัก</a>
                </div>
                <div class="menu">
                    <a href="main_page.php" class="btn_firstPage">หน้าหลัก</a>
                    <a href="dorm_plan.php">แผนผังหอพัก</a>
                    <a href="room_sample.php">ตัวอย่างห้องพัก</a>
                    <a href="room_book.php">จองหอพัก</a>
                </div>
                <div class="line"></div>
            </div>
            
            
            <div class="banner">
                <div class="overlay"></div>
                <div id="slide" class="slide" style="background: url('./assets/img/dorm/women_01.webp');"></div>
                <div class="flexCenter">
                    <div class="textArea">
                        <div class="largeText">
                            <p>หอพักนักศึกษามหาวิทยาลัยเทคโนโลยี</p>
                            <p>พระจอมเกล้าพระนครเหนือ วิทยาเขตปราจีนบุรี</p>
                        </div>
                        <div class="smallText">
                            <p>Dormitory king mongkut's university of technology, Prachinburi.</p>
                        </div>
                        <div class="button">
                            <div id="btnLogin" class="btn1"> <a href="login.php">เข้าสู่ระบบ</a> </div>
                            <div class="btn2"> <a href="register.php">สมัครสมาชิก</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./assets/js/index.js"></script>
</body>
</html>
