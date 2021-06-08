<!-- Menu  -->
<div id="container_navbar">
    <div class="areaNav">
        <div class="textTitle"> 
            <a href="main_page.php">หอพักนึกศึกษา มจพ. ปราจีนฯ</a>
        </div>
        <div class="menu">
            <div class="item">
                <a href="main_page.php">หน้าหลัก</a>
            </div>
            <div class="item">
                <a class="sub-MenuMain" href="##">เกี่ยวกับหอพัก<i class="fas fa-angle-down dropdown"></i></a>
                <div class="verSubMenuMain">
                    <a href="room_sample.php" class="sub-item">ตัวอย่างห้องพัก</a>
                    <a href="dorm_plan.php" class="sub-item">แผนผังหอพัก</a>
                    <a href="dorm_fee.php" class="sub-item">ค่าธรรมเนียมหอพัก</a>
                </div>
            </div>
            <div class="item destroyAdminLogin">
                <a href="room_book.php">จองห้องพัก</a>
            </div>
            <div class="item adminLogin deactive">
                <a href="./admin/admin.php" style="color: rgb(255, 230, 0);">จัดการระบบแอดมิน</a>
            </div>
            <div id="popupLogin" class="item destroyUserLogin">
                <a href="login.php">เข้าสู่ระบบ/สมัครสมาชิก</a>
            </div>
            <div class="item userLogin deactive">
                <a href="profile.php"><span>สวัสดี</span>ชิษณุพงศ์</a>
            </div>
        </div>
        <div class="menu-btn" style="display: none;">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</div>

<!-- Menu Responsive -->
<div class="overlay"></div>
<div id="sidebarNav" class="side-bar">
    <div class="close-btn-sidebar">
        <i class="fas fa-times"></i>
    </div>
    <div class="menu">
        <div class="item userLogin deactive">
            <a href="profile.php"><span>สวัสดี </span>ชิษณุพงศ์</a>
        </div>
        <div class="item">
            <a href="main_page.php">หน้าหลัก</a>
        </div>
        <div class="item">
            <a class="sub-btn" href="##">เกี่ยวกับหอพัก<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="room_sample.php" class="sub-item">ตัวอย่างห้องพัก</a>
                    <a href="dorm_plan.php" class="sub-item">แผนผังหอพัก</a>
                    <a href="dorm_fee.php" class="sub-item">ค่าธรรมเนียมหอพัก</a>
                </div>
        </div>
        <div class="item destroyAdminLogin">
            <a href="room_book.php">จองห้องพัก</a>
        </div>
        <div class="item adminLogin deactive">
            <a href="admin.php" style="color: rgb(255, 230, 0);">จัดการระบบแอดมิน</a>
        </div>
        <div class="item userLogin">
            <a href="logout.php" style="font-size: 14px !important; transition: 0.2s !important;">ออกจากระบบ</a>
        </div>
        <div id="popupLogin" class="item destroyUserLogin">
            <a href="login.php">เข้าสู่ระบบ/สมัครสมาชิก</a>
        </div>
    </div>
</div>
<script src="./assets/js/_navbar.js"></script>
