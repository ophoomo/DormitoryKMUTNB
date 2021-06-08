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

    <div class="container_profile">
        <p class="title userSelectNone">ข้อมูลส่วนตัว</p>
        <div class="areaDescript">
            <p class="descript userSelectNone">แก้ไขข้อมูลอื่นใดนอกเหนือนี้ กรุณาแจ้งมายังเพจเฟสบุ๊คของหอพักด้วยการทักแชทมา หรือช่องทางอื่น ๆ ที่อยู่หน้าหลักค่ะ</p>
        </div>
        <form action="">
            <div class="areaProfile">
                <div class="data">
                    <p class="userSelectNone">ชื่อ</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">นามสกุล</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">เลขบัตรประจำตัวประชาชน</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">รหัสนักศึกษา</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">เบอร์โทรศัพท์</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">อีเมลล์</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">หมู่เลือด</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p class="userSelectNone">ศาสนา</p>
                    <input class="input" type="text" disabled>
                </div>
                <div class="data">
                    <p>คณะ</p>
                    <select onchange="selectFaculty()" name="faculty" id="faculty" disabled class="input">
                        <option selected="" value="" disabled selected>- กรุณาเลือกคณะ -</option>
                        <option value="engineer">คณะวิศวกรรมศาสตร์</option>
                        <option value="ai">คณะอุตสาหกรรมเกษตร</option>
                        <option value="fitm">คณะเทคโนโลยีและการจัดการอุตสาหกรรม</option>
                        <option value="bas">คณะบริหารธุรกิจและอุตสาหกรรมบริการ</option>
                    </select>
                </div>
                <div class="data">
                    <p>สาขา</p>
                    <div class="branchNonSelect">
                        <select class="input" disabled>
                            <option value="none" selected>- กรุณาเลือกสาขา -</option>
                        </select>
                    </div>
                    <div class="branch deactive">
                        <select name="Inse">
                            <div class="engineer">
                                <option value="" disabled selected>- กรุณาเลือกสาขา -</option>
                                <option value="inse">วิศวกรรมระบบเครื่องมือวัด (InSE)</option>
                            </div>
                        </select>
                    </div>
                    <div class="branch deactive">
                        <select name="major">
                            <option value="" disabled selected>- กรุณาเลือกสาขา -</option>
                            <option value="1136">วิทยาศาสตร์การอาหารและโภชนาการ (FSN)</option>
                            <option value="1137">เทคโนโลยีอุตสาหกรรมเกษตรและการจัดการ (FSM)</option>
                            <option value="1138">พัฒนาผลิตภัณฑ์อุตสาหกรรมเกษตร (APD)</option>
                            <option value="1139">นวัตกรรมและเทคโนโลยีการพัฒนาผลิตภัณฑ์ (IPD)</option>
                        </select>
                    </div>
                    <div class="branch deactive">
                        <select name="fitm" id="">
                            <option value="" disabled selected>- กรุณาเลือกสาขา -</option>
                            <option value="1141">การจัดการอุตสาหกรรม (IMT)</option>
                            <option value="1142">การจัดการอุตสาหกรรม (SMIM)</option>
                            <option value="1143">เทคโนโลยีสารสนเทศ (IT)</option>
                            <option value="1144">เทคโนโลยีสารสนเทศ (ITI)</option>
                            <option value="1145">วิศวกรรมสารสนเทศและเครือข่าย (INE)</option>
                            <option value="1145">วิทยาการสารสนเทศประยุกต์ (MITM)</option>
                            <option value="1146">วิทยาการสารสนเทศประยุกต์ (SMITM)</option>
                            <option value="1147">คอมพิวเตอร์ช่วยออกแบบและบริหารงานก่อสร้าง (CA)</option>
                            <option value="1148">คอมพิวเตอร์ช่วยออกแบบและบริหารงานก่อสร้าง (CDM)</option>
                            <option value="1149">เทคโนโลยีเครื่องจักรกลเกษตร (ATM)</option>
                            <option value="1150">เทคโนโลยีเครื่องจักรกลเกษตร (TAM)</option>
                            <option value="1151">เทคโนโลยีเครื่องจักรกลเกษตร (TAT)</option>
                        </select>
                    </div>
                    <div class="branch deactive">
                        <select name="business">
                            <option value="none" disabled selected>- กรุณาเลือกสาขา -</option>
                            <option value="1153">บริหารธุรกิจอุตสาหกรรมและการค้า (IBT)</option>
                            <option value="1154">บริหารธุรกิจอุตสาหกรรมและการค้า (IBTT)</option>
                            <option value="1155">บริหารธุรกิจอุตสาหกรรมและการค้า (MIBT)</option>
                            <option value="1156">บริหารธุรกิจอุตสาหกรรมและการค้า (SMIBT)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="btn btnSaveData deactive">
                <input type="submit" value="บันทึกข้อมูล">
            </div>
        </form>
            <div class="areaDescript2">
                <p class="descript2 userSelectNone">ต้องการเปลี่ยนรหัสผ่าน ให้เข้าไปที่หน้าล็อคอินแล้วกด ลืมรหัสผ่าน ค่ะ</p>
            </div>
            <div class="btn btnEditData">
                <input type="submit" value="แก้ไขข้อมูล"  onclick="editData()">
            </div>
            
            <div class="areaLogout">
            <a href="logout.php" class="btnLogout">ออกจากระบบ</a>
        </div>
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/_profile.js"></script>
</body>    
</html>
