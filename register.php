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
        /* #container_navbar { background-color: #222 !important; }  */
    </style>
<body>

    <!-- Menu  -->
    <?php include "navbar.php"; ?>
        
    <div class="container">
        <form action="">
            <div class="areaRegister">

                <div class="header">
                    <div class="title userSelectNone">
                        <p>สมัครสมาชิกหอพัก</p>
                    </div>

                    <div class="areaCheckStatus">
                        <div class="checkStatusStd userSelectNone" required>
                            <input name="checkStatus" type="radio" value="stdOld" required><span>นักศึกษาหอพัก</span>
                            <input name="checkStatus" type="radio" value="stdNew" required><span>นักศึกษาใหม่<?php echo "ปี 2" . (date('y')+543) ?></span>
                        </div>
                        <div class="description"> 
                            <p>**กรณีที่เป็นนักศึกษาเก่าย้ายออกจากหอพักแล้วประสงค์จะเข้าพักใหม่กรุณาติดต่าเจ้าหน้าที่</p>
                        </div>
                    </div>
                </div>

                
                <!-- Username for manager system -->
                <div class="session userSelectNone">
                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลสำหรับเข้าใช้งานระบบ</p>
                    </div>
                    <div class="areaInput">
                        <div class="question">
                            <p>ชื่อผู้ใช้งาน</p>
                            <input name="username" type="text" placeholder="Username">
                        </div>
                        <div class="question">
                            <p>รหัสผ่าน</p>
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div class="question">
                            <p>ยืนยันรหัสผ่าน</p>
                            <input name="checkPass" type="password" placeholder="Password again">
                        </div>
                    </div>
                </div>


                <!-- ข้อมูลนักศึกษา -->
                <div class="session userSelectNone">

                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลนักศึกษา</p>
                    </div>

                    <div class="areaInput">

                        <div class="question">
                            <p>คำนำหน้า</p>
                            <select name="sex" id="">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </div>

                        <div class="question">
                            <p>ชื่อ</p>
                            <input name="firstname" type="text" placeholder="ชื่อ">
                        </div>

                        <div class="question">
                            <p>นามสกุล</p>
                            <input name="lastname" type="text" placeholder="นามสกุล">
                        </div>

                        <div class="question">
                            <p>เลขบัตรประจำตัวประชาชน</p>
                            <input name="idCard" type="text" placeholder="เลขบัตรประจำตัวประชาชน">
                        </div>
                        
                        <div class="question">
                            <p>รหัสนักศึกษา</p>
                            <input name="idStd" type="text" placeholder="เลขบัตรประจำตัวประชาชน">
                        </div>

                        <div class="question">
                            <p>ชื่อเล่น</p>
                            <input name="nickname" type="text" placeholder="ชื่อเล่น">
                        </div>

                        <div class="question">
                            <p>หมู่เลือด</p>
                            <select name="blood_type" id="blood_type">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>

                        <div class="question">
                            <p>ศาสนา</p>
                            <select name="religion" id="religion">
                                <option value="พุทธ">พุทธ</option>
                                <option value="คริสต์">คริสต์</option>
                                <option value="อิสลาม">อิสลาม</option>
                                <option value="ฮินดู">ฮินดู</option>
                                <option value="ซิกข์">ซิกข์</option>
                                <option value="ไม่มีศาสนา">ไม่นับถือศาสนา</option>
                            </select>
                        </div>

                        <div class="question">
                            <p>วัดเกิด</p>
                            <input name="birthday" type="date" placeholder="วัดเกิด">
                        </div>

                        <div class="question">
                            <p>คณะ</p>
                            <select onchange="selectFaculty()" name="faculty" id="faculty">
                                <option selected="" value="" disabled selected>- กรุณาเลือกคณะ -</option>
                                <option value="engineer">คณะวิศวกรรมศาสตร์</option>
                                <option value="ai">คณะอุตสาหกรรมเกษตร</option>
                                <option value="fitm">คณะเทคโนโลยีและการจัดการอุตสาหกรรม</option>
                                <option value="bas">คณะบริหารธุรกิจและอุตสาหกรรมบริการ</option>
                            </select>
                        </div>

                        <div class="question">
                            <p>สาขา</p>
                            <div class="branchNonSelect">
                                <select>
                                    <option value="none" disabled selected>- กรุณาเลือกสาขา -</option>
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
                                <select name="fitm">
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
                </div>
    
                
                <!-- ข้อมูลติดต่อ -->
                <div class="session userSelectNone">
                    
                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลติดต่อ</p>
                    </div>
                    
                    <div class="areaInput">
                        
                        <div class="question">
                            <p>เบอร์โทรศัพท์</p>
                            <input name="phone" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        
                        <div class="question">
                            <p>อีเมลล์</p>
                            <input name="email" type="email" placeholder="อีเมลล์">
                        </div>
                        
                        <div class="question">
                            <p>บ้านเลขที่</p>
                            <input name="email" type="text" placeholder="บ้านเลขที่">
                        </div>
                        
                        <div class="question">
                            <p>ชื่อหมู่บ้าน (ถ้ามี)</p>
                            <input name="email" type="text" placeholder="ชื่อหมู่บ้าน">
                        </div>
                        
                        <div class="question">
                            <p>หมู่ที่</p>
                            <input name="email" type="text" placeholder="หมู่ที่">
                        </div>
                        
                        <div class="question">
                            <p>ซอย</p>
                            <input name="email" type="text" placeholder="ซอย">
                        </div>
                        
                        <div class="question">
                            <p>ถนน</p>
                            <input name="email" type="text" placeholder="ถนน">
                        </div>
                        
                        <div class="question">
                            <p>ตำบล / แขวง</p>
                            <input name="nickname" type="text" placeholder="ตำบล / แขวง">
                        </div>

                        <div class="question">
                            <p>อำเภอ / เขต</p>
                            <input name="idCard" type="text" placeholder="อำเภอ / เขต">
                        </div>
                        
                        <div class="question">
                            <p>จังหวัด</p>
                            <input name="province" type="text" placeholder="จังหวัด">
                        </div>
                        <div class="question">
                            <p>รหัสไปรษณี</p>
                            <input name="zipCode" type="text" placeholder="รหัสไปรษณี">
                        </div>
                    </div>
                </div>


                <!-- ประวัติครอบครัวผู้สมัคร : บิดา -->
                <div class="session userSelectNone">
                    
                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลครอบครัวผู้สมัคร : บิดา</p>
                    </div>
                    
                    <div class="areaInput">
                      
                        <div class="question">
                            <p>คำนำหน้า</p>
                            <select name="sexParents1" id="">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </div>
                        
                        <div class="question">
                            <p>ชื่อ</p>
                            <input name="firstnameParents1" type="text" placeholder="ชื่อ">
                        </div>
                        
                        <div class="question">
                            <p>นามสกุล</p>
                            <input name="lastnameParents1" type="text" placeholder="นามสกุล">
                        </div>
                        
                        <div class="question">
                            <p>เบอร์โทรศัพท์ที่ติดต่อได้</p>
                            <input name="telParents1" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        
                        <div class="question">
                            <p>สถานะ</p>
                            <select name="statusParents1" id="blood_type">
                                <option value="ยังมีชิวิตอยู่">ยังมีชีวิตอยู่</option>
                                <option value="ถึงแก่กรรม">ถึงแก่กรรม</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- ประวัติครอบครัวผู้สมัคร : มารดา -->
                <div class="session userSelectNone">
                    
                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลครอบครัวผู้สมัคร : มารดา</p>
                    </div>
                    
                    <div class="areaInput">
                        <div class="question">
                            <p>คำนำหน้า</p>
                            <select name="sexParents2" id="">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </div>
                    
                        <div class="question">
                            <p>ชื่อ</p>
                            <input name="firstnameParents2" type="text" placeholder="ชื่อ">
                        </div>
                    
                        <div class="question">
                            <p>นามสกุล</p>
                            <input name="lastnameParents2" type="text" placeholder="นามสกุล">
                        </div>
                        
                        <div class="question">
                            <p>เบอร์โทรศัพท์ที่ติดต่อได้</p>
                            <input name="telParents2" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        
                        <div class="question">
                            <p>สถานะ</p>
                            <select name="statusParents2" id="blood_type">
                                <option value="ยังมีชิวิตอยู่">ยังมีชีวิตอยู่</option>
                                <option value="ถึงแก่กรรม">ถึงแก่กรรม</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- ข้อมูลผู้ติดต่อฉุกเฉิน 1 -->
                <div class="session userSelectNone">
                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลผู้ติดต่อฉุกเฉิน 1 
                            <span style="font-size: 14px; color: black; font-weight: 400;">
                                <input id="useDataAfter1" type="checkbox">ใช้ข้อมูลเดียวกับบิดา
                            </span> 
                        </p>
                    </div>
                    
                    <div class="areaInput">
                        <div class="question">
                            <p>คำนำหน้า</p>
                            <select name="sexEmergency1" id="">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </div>
                        
                        <div class="question">
                            <p>ชื่อ</p>
                            <input name="firstnameEmergency1" type="text" placeholder="ชื่อ">
                        </div>
                        
                        <div class="question">
                            <p>นามสกุล</p>
                            <input name="lastnameEmergency1" type="text" placeholder="นามสกุล">
                        </div>
                        
                        <div class="question">
                            <p>เบอร์โทรศัพท์ที่ติดต่อได้</p>
                            <input name="telEmergency1" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        
                        <div class="question">
                            <p>ผู้ติดต่อฉุกเฉินคนนี้เป็นใคร</p>
                            <input name="relationshipEmergency1" type="text" placeholder="โปรดระบุ เช่น พ่อ, แม่, พี่, ลุง">
                        </div>
                    </div>
                </div>


                <!-- ข้อมูลผู้ติดต่อฉุกเฉิน 2 -->
                <div class="session userSelectNone">
                    <div class="titleSection userSelectNone">
                        <p>ข้อมูลผู้ติดต่อฉุกเฉิน 2
                            <span style="font-size: 14px; color: black; font-weight: 400;">
                                <input id="useDataAfter2" type="checkbox">ใช้ข้อมูลเดียวกับมารดา
                            </span> 
                        </p>
                    </div>
                    
                    <div class="areaInput">
                        <div class="question">
                            <p>คำนำหน้า</p>
                            <select name="sexEmergency2" id="">
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                            </select>
                        </div>
                        
                        <div class="question">
                            <p>ชื่อ</p>
                            <input name="firstnameEmergency2" type="text" placeholder="ชื่อ">
                        </div>
                        
                        <div class="question">
                            <p>นามสกุล</p>
                            <input name="lastnameEmergency2" type="text" placeholder="นามสกุล">
                        </div>
                        
                        <div class="question">
                            <p>เบอร์โทรศัพท์ที่ติดต่อได้</p>
                            <input name="telEmergency2" type="text" placeholder="เบอร์โทรศัพท์">
                        </div>
                        
                        <div class="question">
                            <p>ผู้ติดต่อฉุกเฉินคนนี้เป็นใคร</p>
                            <input name="relationshipEmergency2" type="text" placeholder="โปรดระบุ เช่น พ่อ, แม่, พี่, ลุง">
                        </div>
                    </div>
                </div>


                <div class="areabutton">
                    
                    <div class="btnRegis">
                            <button class="button">
                                <i class="far fa-plus-square fa-lg"></i>
                                สมัครสมาชิก
                            </button>
                    </div>

                    <div class="btnReset">
                        <button class="button" type="reset" onclick="window.location.href='#'">    
                            <i class="fas fa-ban"></i>
                            ล้างข้อมูล
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
    
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    <script src="./assets/js/_register.js"></script>
</body>    
</html>
