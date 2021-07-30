<?php 
    session_start();
    require_once './classes/Student.php';
    require_once './classes/Branch.php';
    require_once './classes/Building.php';
    require_once './classes/Floor.php';
    require_once './classes/Room.php';

    $stdClass = new Student();
    $buildingClass = new Building();
    $branchClass = new Branch();
    $floorClass = new Floor();
    $roomClass = new Room();

    $dataStd = $stdClass->Find('std_sex, std_firstname, std_lastname, branch_id, room_id', 'std_id', $_SESSION['std_id']);
    $dataStd = $dataStd->fetch(PDO::FETCH_ASSOC);
    // if ($dataStd['room_id'] !== NULL) echo "<script> window.location = 'system_book_report.php'; </script>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้องพัก</title>
    <link rel="icon" href="./assets/img/logoKmutnb.webp">
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/style_x_tailwind.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/_system_book.js"></script>

    <style>
        .dropdown-room {
            color: #002858;
            background-color: #EFF6FF;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 5px;
        }

        .room:hover .dropdown-room {
            display: block;
        }

    </style>

</head>
<body>

    <?php include('./file_link/system_sidebar.php'); ?>

    <div id="container"     class="flex flex-col lg:w-9\/12 lg:ml-64 transition-all bg-gray-100">
        
        <div id="navbar"    class="z-20 fixed flex flex-row items-center bg-white h-14 w-full border-b-2 shadow-sm
                                            delay-400 transition-all">
                <div id="menu"  class="lg:hidden absolute menuBar ml-4 cursor-pointer z-20">
                    <i class="fas fa-bars"></i>
                </div>
                <div id="title_nav"     class="w-full text-center ml-6 lg:-ml-36">
                    <p class="tracking-widest mt-0.5 sm:ml-4 text-lg defocus">
                        <span id="txtNav">จองห้องพัก</span>
                    </p>
                </div>
        </div>

        <content class="min-h-screen">
            <section  class="pl-2 pr-2 pt-20 md:pl-10 sm:pl-8 md:pr-10 sm:pr-8">
            
                <div class="bg-white rounded-2xl pt-8 pb-4 shadow-md transition-all">

                    <div id="selects" class="grid gap-y-4 sm:-ml-20 -ml-16">
                        <div class="flex items-center 
                                    grid grid-cols-5">
                            <p class="mr-4 defocus text-sm sm:text-md text-right 
                                    col-start-2">
                                โซนห้องตามสาขา
                            </p>
                            <select name="select_branch" id="select_branch" 
                                    class="sm:pl-6 text-indigo-900 text-sm w-52 sm:w-full h-8 pl-2 text-black border border-gray-400
                                            col-start-3 col-span-2" onchange="get_select_option_book(0);">
                                <option value="0" disabled>- เลือกสาขา -</option>
                                <?php 
                                    $findFac = $branchClass->Find('fac_id', 'branch_id', $dataStd['branch_id']);
                                    $facStd = $findFac->fetch(PDO::FETCH_ASSOC);
                                    $select_branch = $branchClass->Select_All('branch_id, branch_name, fac_id');
                                    while ($value = $select_branch->fetch(PDO::FETCH_ASSOC)) {
                                        if ($value['fac_id'] == $facStd['fac_id'])
                                            echo "<option value=".$value['branch_id'].">".$value['branch_name']."</option>";
                                    }
                                ?>
                                <option value="99">- ภาพรวมทุกสาขา -</option>
                            </select>
                        </div>
                        <div class="flex items-center
                                    grid grid-cols-5">
                            <p class="defocus text-sm sm:text text-right mr-4
                                    col-start-2">
                                เลือกหอพัก
                            </p>
                            <select name="select_building" id="select_building" onchange="get_select_option_book(1);" 
                                    class="sm:pl-6 text-indigo-900 text-sm w-52 sm:w-full h-8 pl-2 text-black border border-gray-400
                                            col-span-2">
                                <option value="0">- เลือกหอ -</option>
                                <?php 
                                    $selectBuilding = $buildingClass->Select_All('building_id, building_name');
                                    while ($value = $selectBuilding->fetch(PDO::FETCH_ASSOC)) {
                                        if($dataStd['std_sex'] == 0 && $value['building_id'] == 1)
                                            echo "<option value=".$value['building_id'].">".$value['building_name']."</option>";
                                        else if ($dataStd['std_sex'] > 0 && $value['building_id'] != 1)
                                            echo "<option value=".$value['building_id'].">".$value['building_name']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="flex items-center 
                                    grid grid-cols-5">
                            <p class="mr-4 defocus text-sm sm:text text-right
                                        col-start-2">
                                เลือกชั้น
                            </p>
                            <select name="select_floor" id="select_floor" class="sm:pl-6 text-indigo-900 text-sm w-52 sm:w-full h-8 pl-2 text-black border border-gray-400 col-span-2" 
                                    onchange="get_select_option_book(2);">
                                <option value="0">- เลือกชั้น -</option>
                                <?php 
                                    $actual_link = "$_SERVER[REQUEST_URI]";
                                    $components = parse_url($actual_link);
                                    parse_str($components['query'], $parameter);

                                    $selectFloor = $floorClass->Select_All('building_id, floor_id, floor_name');
                                    while ($value = $selectFloor->fetch(PDO::FETCH_ASSOC)) {
                                        if($value['building_id'] == strval($parameter['building']))
                                            echo "<option value=".$value['floor_id'].">".$value['floor_name']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    <div>

                </div>
                
            </section> <!-- End section -->


            <section id="section_room" class="hidden pl-2 pr-2 md:pl-10 sm:pl-8 md:pr-10 sm:pr-8 mt-4 mb-20">
        
                <div class="bg-white rounded-2xl pt-12 pb-12 shadow-md transition-all pl-14 pr-14 text-white
                            grid xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-y-4 gap-x-4">
                        
                    <?php
                        $selectRoom = $roomClass->Select_All('floor_id, room_id, room_name, room_member, room_status');
                        $nRoom = 0;
                        while ($value = $selectRoom->fetch(PDO::FETCH_ASSOC)):
                            if (($value['floor_id'] == $parameter['floor']) || 
                                ($parameter['branch'] == '99' && $value['floor_id'] == $parameter['floor'])):
                                $nUnitPerson = 0;
                    ?>  
                                <div class="room w-full h-20 text-right rounded-lg cursor-pointer transition-all duration-400"
                                        onclick="showRoomBook(this,<?php echo $value['room_id']; ?>)">
                                    <p class="defocus tracking-tighter mr-2 mt-2 text-sm font_kanit font-light">
                                        <span class="unitPerson"></span>
                                        <span class="">/</span>
                                        <span class="limitMember"><?php echo $value['room_member']; ?></span>
                                    </p>
                                    <p class="numberRoom flex w-full justify-center items-center -mt-1 text-3xl font_kanit tracking-widest">
                                        <?php echo $value['room_name']; ?>
                                    </p>

                                    <div class="dropdown-room hidden font-medium absolute -ml-4 w-60 text-sm mt-5 pt-3 pb-1 shadow-2xl">
                                        <ul>
                                            <?php 
                                                $selectDataStd = $stdClass->Find('std_id, std_firstname, std_lastname, branch_id', 'room_id', $value['room_id']);
                                                while ($valueStd = $selectDataStd->fetch(PDO::FETCH_ASSOC)):
                                                    $findBranch = $branchClass->Find('branch_name', 'branch_id', $valueStd['branch_id']);
                                                    $findBranch = $findBranch->fetch(PDO::FETCH_ASSOC);
                                                    $nUnitPerson++;
                                            ?>
                                                    <li class="flex items-center justify-between ml-4 mr-4 mb-2">
                                                        <span class="text_fullname"><?php echo $valueStd['std_firstname'].' '.$valueStd['std_lastname']; ?></span>
                                                        <span class="text_branch"><?php echo str_replace(array('(',')'), "", explode(" ", $findBranch['branch_name'])[1]); ?></span>
                                                    </li>
                                            <?php 
                                                endwhile; 
                                            ?>
                                        </ul>
                                    </div>

                                </div>
                    <?php
                                echo "<script type='text/javascript'>setStatusRoom('".$nRoom."','".$nUnitPerson."')</script>";
                                $nRoom++;
                            endif;
                        endwhile;
                    ?>

                </div>

            </section> <!-- End section -->
        </content>

        <?php include('./file_link/system_footer.php') ?>
    
    </div>

    <form action="#" name="frm_room_book" method="POST" class="hidden absolute flex w-full justify-center">
        <input name="txt_idRoom" id="id_room" type="text" value="" class="">
        <input id="number_room" type="text" value="" class="">
        <input name="btn_submitBook" type="submit" id="submitBook" value="BtnSubmitBook">
    </form>

    <script src="./assets/js/_title_change.js" onload="switchTitle('จองห้องพัก');"></script>
    <script src="./assets/js/_system_sidebar.js"></script>
    <script src="./assets/js/_system_book.js"></script>

    <?php 

        // Set default standata php control
        if (!isset($_SESSION['std_id'])) {
            echo "<script>  
                Swal.fire({
                    title: 'กรุณาเข้าสู่ระบบก่อน',
                    text: 'ระบบกำลังพาท่านไปยังหน้าเข้าสู่ระบบ',
                    icon: 'error',
                    showConfirmButton: false,
                    showCancelButton: false,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6'
                }).then(setTimeout(() => {
                    window.location.href='login.php'
                }, 3000));
            </script>";
        } else {
            $findBranchStd = $branchClass->Find('branch_name', 'branch_id', $dataStd['branch_id']);
            $branchStd = $findBranchStd->fetch(PDO::FETCH_ASSOC);

            $select_branch = $branchClass->Select_All('branch_id, branch_name');
            while ($value = $select_branch->fetch(PDO::FETCH_ASSOC)) {
                if ($branchStd['branch_name'] == $value['branch_name'])
                    echo "<script>document.getElementById('select_branch').value = '".$value['branch_id']."';</script>";
            }

            if(!isset($_SESSION['firstSelectBook'])) {
                $_SESSION['firstSelectBook'] = False;
                echo "<script>
                        document.getElementById('select_building').value = '0';
                        document.getElementById('select_floor').value = '0';
                        get_select_option_book(0);
                    </script>";
            } else {
                echo "<script>
                        document.getElementById('select_branch').value = {$parameter['branch']};
                        document.getElementById('select_building').value = {$parameter['building']};
                        document.getElementById('select_floor').value = {$parameter['floor']};
                    </script>";
            }
        }

        // System_book_php_control
        if (isset($_POST['btn_submitBook'])) {

            $bookRoom = $stdClass->Update_Select(array('room_id'), array($_POST['txt_idRoom']), 'std_id', $_SESSION['std_id']);
            
            if ($bookRoom) {
                echo "<script>
                    Swal.fire({
                        title: 'จองห้องพักสำเร็จ',
                        text: 'ระบบกำลังพาท่านไปยังขั้นตอนต่อไป',
                        icon: 'success',
                        showConfirmButton: false,
                        showCancelButton: false
                    }).then(setTimeout(() => {
                        window.location.href='system_book_report.php';
                    }, 3000)); 
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        title: 'เกิดข้อผิดพลาดในการจอง',
                        text: 'โปรดลองใหม่! หรือติดต่อเจ้าหน้าที่',
                        icon: 'error',
                        showCancelButton: false,
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'ปิด'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'system_book_report.php';
                        }
                    })
                </script>";
            }
            
        }

    ?> 

</body>
</html>
 