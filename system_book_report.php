<?php 
    session_start();
    require_once './classes/Student.php';
    require_once './classes/Branch.php';
    require_once './classes/Building.php';
    require_once './classes/Floor.php';
    require_once './classes/Room.php';

    $branchClass = new Branch();
    $stdClass = new Student();
    $RoomClass = new Room();

    $findUser = $stdClass->Find('std_sex', 'std_id', $_SESSION['std_id']);
    $sex_std = $findUser->fetch(PDO::FETCH_ASSOC);

    $selectStudent = $stdClass->Select_All('std_firstname, std_lastname, branch_id, room_id');
    $dataStd = $selectStudent->fetch(PDO::FETCH_ASSOC);

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

    <style>
        .dorpdown-room {
            display: none;
            color: #002858;
            background-color: #EFF6FF;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 5px;
        }

        .room:hover .dorpdown-room {
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
            <section class="pl-2 pr-2 pt-20 md:pl-10 sm:pl-8 md:pr-10 sm:pr-8">
            
                <div class="area_report_book flex justify-center bg-white rounded-2xl p-6 shadow-md transition-all">
                    <div class="title text-center">
                        <p>หมายเลขห้องพักของคุณ</p>
                        <p>418</p>
                    </div>
                </div>
                
            </section> <!-- End section -->
        </content>

        <?php include('./file_link/system_footer.php') ?>
    
    </div>

    <script src="./assets/js/_title_change.js" onload="switchTitle('รายงานการจองห้องพัก');"></script>
    <script src="./assets/js/_system_sidebar.js"></script>
    <script src="./assets/js/_system_book_report.js"></script>

    <?php 
        
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
        }

        ?> 

</body>
</html>
 