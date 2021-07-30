<?php session_start(); ?>

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style> 
        #container_navbar { background-color: rgba(0, 0, 0, 0.6); }
    </style>
</head>
<body>

    <!-- <div id="loading"></div> -->
    <!-- <div id="loadingNextPage" style="display: none;"></div> -->
    <?php include './file_link/navbar.php'; ?>

    <?php if(!isset($_SESSION['popupNew'])):
        $_SESSION['popupNew'] = true; 
    ?>
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
    <?php endif; ?>

    <div id="indexPage" class="container" style="display: block;">        
        <div class="header">
            <div class="banner">
                <div class="overlay"></div>
                <div id="slide" class="slide" style="background: url('./assets/img/dorm/women_01.webp');"></div>
                <div class="flexCenter">
                    <div class="textArea" onmouseover="openSubmenu(2)">
                        <div class="largeText">
                            <p>หอพักนักศึกษามหาวิทยาลัยเทคโนโลยี</p>
                            <p>พระจอมเกล้าพระนครเหนือ วิทยาเขตปราจีนบุรี</p>
                        </div>
                        <div class="smallText">
                            <p>Dormitory king mongkut's university of technology, Prachinburi.</p>
                        </div>
                        <div class="button">
                            <?php if (isset($_SESSION['std_id'])): ?>
                                <div id="btnLogin" class="btn2"> <a href="room_book.php" style="border-radius: 50px !important;">จองห้องพัก</a> </div>
                            <?php else: ?>
                                <div id="btnLogin" class="btn1"> <a href="login.php">เข้าสู่ระบบ</a> </div>
                                <div class="btn2"> <a href="register.php">สมัครสมาชิก</a> </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="godown">
            <a href="#sessionArea"><i class="fas fa-chevron-down"></i></a>
        </div>
        
    </div>
    <div class="containerMain">
    
            <div class="container_news" id="sessionArea">
                <div class="announceNews userSelectNone">
                    <p>ประกาศสำคัญ</p>
                    <div class="announceImg">
                        <a href="https://www.facebook.com/media/set/?vanity=225226107507988&set=a.4238849449478947" target="_blank">
                            <img src="./assets/img/news/importantNews.jpg" alt="">
                        </a>
                        <!-- <div class="marquee"></div> -->
                    </div>
                    <div class="container_btnNews">
                        <!-- ลิ้งเดียวกับรูปภาพด้านบน -->
                        <a href="https://www.facebook.com/media/set/?vanity=225226107507988&set=a.4238849449478947" 
                            target="_blank">รายละเอียด</a>
                    </div>
                </div>
                <div class="areaNews">
                    <p class="userSelectNone">ข่าวสารหอพัก</p>
                    <div class="tableNews">
                        <div class="headTable userSelectNone">
                            <span>หัวข้อข่าว</span>
                            <span>วันที่ประกาศ</span>
                        </div>
                        <!-- Limit 8 news !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                        <?php for($i = 0; $i < 8; $i++) { ?>
                        <div class="news">
                            <span>
                                <!--  -->
                                <a href="https://www.facebook.com/media/set/?vanity=225226107507988&set=a.4238849449478947" target="_blank">
                                    จ่ายค่าหอพัก สำหรับนักศึกษาเก่าที่ยืนยันอยู่หอพัก ภาคเรียนที่ 2/2563
                                </a>
                            </span>
                            <span>24/01/12</span>
                        </div>
                        <?php } ?>
                        <!--  -->
                    </div>
                    <div id="popupNews" class="container_btnNews userSelectNone">
                        <a href="##" class="btn">ข่าวทั้งหมด</a>
                    </div>
                </div>
            </div>
            
            <div class="container_contact">
                <p class="textTitle userSelectNone">ช่องทางติดต่อหอพัก</p>
                <div class="areaContact">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.5074666381806!2d101.34320721491846!3d14.165029490081096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311c532b780ce81b%3A0x89d2e263a6dfb9d5!2z4Lir4Lit4Lie4Lix4LiBIOC4oeC4iOC4niDguJvguKPguLLguIjguLXguJk!5e0!3m2!1sth!2sth!4v1621959668593!5m2!1sth!2sth" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="contacts">
                        <div class="fb">
                            <div id="icon">
                                <i class="fab fa-facebook-f"></i>
                                <!-- <i class="fab fa-facebook-square"></i> -->
                                <!-- <i class="fab fa-facebook"></i> -->
                            </div>
                            <p>หอพักนักศึกษา มจพ. ปราจีนบุรี</p>
                            <a href="https://www.facebook.com/%E0%B8%AB%E0%B8%AD%E0%B8%9E%E0%B8%B1%E0%B8%81%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2-%E0%B8%A1%E0%B8%88%E0%B8%9E-%E0%B8%9B%E0%B8%A3%E0%B8%B2%E0%B8%88%E0%B8%B5%E0%B8%99%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5-225226107507988"
                                target="_blank">ไปยังเว็บเพจ</a>
                        </div>
                        <div class="phone">
                            <div id="icon">
                                <i class="fas fa-phone-alt"></i>
                                <!-- <i class="fas fa-phone-square-alt"></i> -->
                            </div>
                            <div class="number">
                                <p>037-217330</p>
                                <p>037-217300 ต่อ 7340</p>
                                <p>037-217300 ต่อ 7341</p>
                                <p>037-217300 ต่อ 7342</p>
                            </div>
                            <div class="text">
                                <p>มจพ. ปราจีน ฯ</p>
                                <p>หอพักนักศึกษาชาย</p>
                                <p>หอพักนักศึกษาหญิง 1</p>
                                <p>หอพักนักศึกษาหญิง 2</p>
                            </div>
                        </div>
                        <div class="location">
                            <div id="icon">
                                <i class="fas fa-thumbtack"></i>
                                <!-- <i class="fas fa-map-marker-alt"></i> -->
                            </div>
                            <div class="areaText">
                                <div class="text">
                                    <p>หอพักนักศึกษา.... มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</p>
                                    <p>เลขที่ 129 หมู่ 21 ต.เนินหอม อ.เมืองปราจีบุรี จ.ปราจีนบุรี 25230</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div id="container_popupNews" class="container_popupNews deactive">
        <div id="closeBtnNews"><i class="fas fa-times fa-2x"></i></div>
        <div class="areaNews">
            <div class="tableNews">
                <div class="headTable userSelectNone">
                    <span>หัวข้อข่าว</span>
                    <span>วันที่ประกาศ</span>
                </div>
                <!-- Limit 8 news !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                <?php for($i = 0; $i < 60; $i++) { ?>
                <div class="news">
                    <span>
                        <!--  -->
                        <a href="https://www.facebook.com/media/set/?vanity=225226107507988&set=a.4238849449478947" target="_blank">
                            จ่ายค่าหอพัก สำหรับนักศึกษาเก่าที่ยืนยันอยู่หอพัก ภาคเรียนที่ 2/2563
                        </a>
                    </span>
                    <span>24/01/12</span>
                </div>
                <?php } ?>
                <!--  -->
            </div>
        </div>
        <div id="overlayPopupNews"></div>
    </div> 
    
    <?php include './file_link/footer.php'; ?>

    <script src="./assets/js/index.js"></script>
</body>
</html>
