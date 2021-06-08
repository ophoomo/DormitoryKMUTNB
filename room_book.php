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
        
    <div class="container">
        <div class="areaBook">
            <div class="titleBook userSelectNone">
                <p>จองห้องพัก</p>
            </div>
            <div class="areaSelect userSelectNone">

                <div class="selectDorm dormMale">
                    <p>เลือกหอพัก</p>
                    <select onchange="selectDorm()" name="" id="selectDormFemale">
                        <option value="dorm_male1">หอพักชาย</option>
                    </select>
                </div>
                <div class="selectDorm dormFamale deactive">
                    <p>เลือกหอพัก</p>
                    <select onchange="selectDorm()" name="" id="selectDormFemale">
                        <option value="dorm_female1">หอพักหญิง 1</option>
                        <option value="dorm_female2">หอพักหญิง 2</option>
                    </select>
                </div>
                <div class="selectFloor">
                    <p>เลือกชั้น</p>
                    <select onchange="selectFloor()" name="" id="selectFloor">
                        <option value="floor_1">ชั้น 1</option>
                        <option value="floor_2">ชั้น 2</option>
                        <option value="floor_3">ชั้น 3</option>
                        <option value="floor_4">ชั้น 4</option>
                        <option value="floor_5">ชั้น 5</option>
                    </select>
                </div>

                <div class="selectBranch zoneFitm">
                    <p>โซนห้องตามสาขา</p>
                    <select onchange="selectBranch()" name="zoneFitm" id="selectBranch">
                        <option value="1143">เทคโนโลยีสารสนเทศ (IT)</option>
                        <option value="1144">เทคโนโลยีสารสนเทศ (ITI)</option>
                        <option value="1145">วิศวกรรมสารสนเทศและเครือข่าย (INE)</option>
                        <option value="1141">การจัดการอุตสาหกรรม (IMT)</option>
                        <option value="1142">การจัดการอุตสาหกรรม (SMIM)</option>
                        <option value="1145">วิทยาการสารสนเทศประยุกต์ (MITM)</option>
                        <option value="1146">วิทยาการสารสนเทศประยุกต์ (SMITM)</option>
                        <option value="1149">เทคโนโลยีเครื่องจักรกลเกษตร (ATM)</option>
                        <option value="1150">เทคโนโลยีเครื่องจักรกลเกษตร (TAM)</option>
                        <option value="1151">เทคโนโลยีเครื่องจักรกลเกษตร (TAT)</option>
                        <option value="1147">คอมพิวเตอร์ช่วยออกแบบและบริหารงานก่อสร้าง (CA)</option>
                        <option value="1148">คอมพิวเตอร์ช่วยออกแบบและบริหารงานก่อสร้าง (CDM)</option>
                    </select>
                </div>
            
                <div class="selectBranch zoneInse deactive">
                    <p>โซนห้องตามสาขา</p>
                    <select onchange="selectBranch()" name="Inse" id="selectBranch">
                        <option value="inse">วิศวกรรมระบบเครื่องมือวัด (InSE)</option>
                    </select>
                </div>

                <div class="selectBranch zoneMajor deactive">
                    <p>โซนห้องตามสาขา</p>
                    <select onchange="selectBranch()" name="major" id="selectBranch">
                        <option value="1136">วิทยาศาสตร์การอาหารและโภชนาการ (FSN)</option>
                        <option value="1137">เทคโนโลยีอุตสาหกรรมเกษตรและการจัดการ (FSM)</option>
                        <option value="1138">พัฒนาผลิตภัณฑ์อุตสาหกรรมเกษตร (APD)</option>
                        <option value="1139">นวัตกรรมและเทคโนโลยีการพัฒนาผลิตภัณฑ์ (IPD)</option>
                    </select>
                </div>

                <div class="selectBranch zoneBusiness deactive">
                    <p>โซนห้องตามสาขา</p>
                    <select onchange="selectBranch()" name="business" id="selectBranch">
                        <option value="1153">บริหารธุรกิจอุตสาหกรรมและการค้า (IBT)</option>
                        <option value="1154">บริหารธุรกิจอุตสาหกรรมและการค้า (IBTT)</option>
                        <option value="1155">บริหารธุรกิจอุตสาหกรรมและการค้า (MIBT)</option>
                        <option value="1156">บริหารธุรกิจอุตสาหกรรมและการค้า (SMIBT)</option>
                    </select>
                </div>
                
            </div>
            <div class="areaCard">
                <div class="dorm">

                    
                        <div class="cardRoom">
                            <div class="numberRoom userSelectNone">
                                <p>-<span><?php echo (418); ?></span>-</p>
                            </div>
                            <div class="memberRoom userSelectNone">
                                <p>สมาชิก</p>
                                <p><?php echo 5; ?><span>/</span><span class="unitPerson"></span></p>
                            </div>
                            <div class="listPerson">
                                <span class="emptyRoom" style="display: none;">ห้องว่าง</span>
                                <li><span class="name">ชิษณุพงศ์ ไชยหงษ์ &nbsp; (<span class="branch">IT<span>)</span></li>
                                <li><span class="name">ธนภูมิ อุ่นจิตร &nbsp; (<span class="branch">IT<span>)</span></li>
                                <li><span class="name">ธนภัทร จีนสำราญ &nbsp; (<span class="branch">IT<span>)</span></li>
                                <li><span class="name">สมชัย กุญเชียงทอง &nbsp; (<span class="branch">INE<span>)</span></li>
                                <li><span class="name">สมชัย กุญเชียงทอง &nbsp; (<span class="branch">INE<span>)</span></li>
                            </div>
                            <div class="bookBtn">
                                <button onclick="alert('HI')">
                                    <p class="clickBtn">จองห้องพัก<p>    
                                </button>
                            </div>
                        </div>

                    <?php for($i = 0; $i < 4; $i++) { ?>
                        <div class="cardRoom">
                            <div class="numberRoom userSelectNone">
                                <p>-<span><?php echo (420 + $i); ?></span>-</p>
                            </div>
                            <div class="memberRoom userSelectNone">
                                <p>สมาชิก</p>
                                <p><?php echo 4; ?><span>/</span><span class="unitPerson"></span></p>
                            </div>
                            <div class="listPerson">
                                <span class="emptyRoom" style="display: none;">ห้องว่าง</span>
                                <li><span class="name">ชิษณุพงศ์ ไชยหงษ์ &nbsp; (<span class="branch">IT<span>)</span></li>
                                <li><span class="name">ธนภูมิ อุ่นจิตร &nbsp; (<span class="branch">IT<span>)</span></li>
                                <li><span class="name">ธนภัทร จีนสำราญ &nbsp; (<span class="branch">IT<span>)</span></li>
                                <li><span class="name">สมชัย กุญเชียงทอง &nbsp; (<span class="branch">INE<span>)</span></li>
                            </div>
                            <div class="bookBtn">
                                <button onclick="alert('HI')">
                                    <p class="clickBtn">จองห้องพัก<p>    
                                </button>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="cardRoom">
                        <div class="numberRoom userSelectNone">
                            <p>-<span><?php echo 417; ?></span>-</p>
                        </div>
                        <div class="memberRoom userSelectNone">
                            <p>สมาชิก</p>
                            <p><?php echo 0; ?><span>/</span><span class="unitPerson"></span></p>
                        </div>
                        <div class="listPerson">
                            <span class="emptyRoom" style="display: none;">ห้องว่าง</span>
                            <!-- <li><span class="name">ชิษณุพงศ์ ไชยหงษ์ &nbsp; (<span class="branch">IT<span>)</span></li>
                            <li><span class="name">ธนภูมิ อุ่นจิตร &nbsp; (<span class="branch">IT<span>)</span></li>
                            <li><span class="name">ธนภัทร จีนสำราญ &nbsp; (<span class="branch">IT<span>)</span></li>
                            <li><span class="name">สมชัย กุญเชียงทอง &nbsp; (<span class="branch">INE<span>)</span></li>
                            <li><span class="name">สมชัย กุญเชียงทอง &nbsp; (<span class="branch">INE<span>)</span></li> -->
                        </div>
                        <div class="bookBtn">
                            <button onclick="alert('HI')">
                                <p class="clickBtn">จองห้องพัก<p>    
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/_room_book.js"></script>    
</body>    
</html>
