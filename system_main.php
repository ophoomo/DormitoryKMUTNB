<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบหอพักนักศึกษา</title>
    <link rel="icon" href="./assets/img/logoKmutnb.webp">
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/style_x_tailwind.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    

    <?php include('./file_link/system_sidebar.php') ?>

    <div id="container"     class="flex flex-col lg:w-9\/12 lg:ml-64 transition-all">
        
        <div id="navbar"    class="z-20 fixed flex flex-row items-center bg-white h-14 w-full border-b-2 shadow-sm
                                            delay-400 transition-all">
                <div id="menu"  class="lg:hidden absolute menuBar ml-4 cursor-pointer z-20">
                    <i class="fas fa-bars"></i>
                </div>
                <div id="title_nav"     class="w-full text-center ml-6 lg:-ml-36">
                    <p id="text_nav"    class="tracking-widest mt-0.5 text-lg defocus">
                        <span class="text-sm sm:text-lg">หอพักนักศึกษา</span>
                        <span class="sm:hidden text-sm">มจพ.</span>
                        <span class="sm_hidden text-sm sm:text-lg">มจพ.</span>
                        <span class="sm_hidden text-sm sm:text-lg">ปราจีน ฯ</span>
                        <span class="md_hidden">&nbsp;ยินดีต้อนรับ 🙏</span>
                    </p>
                </div>
        </div>

        <section    class="min-h-screen bg-gray-100 pl-2 pr-2 pt-24 md:pl-10 sm:pl-8 md:pr-10 sm:pr-8 pb-14">
            <div id="content" class="bg-white rounded-2xl p-10 pt-10 pb-20 shadow-md">
                <p class="text-center mb-10 text-3xl defocus font-light">ข้อมูลภายในหอพัก</p>

                <p class="text-left lg:ml-24 mt-14 mb-6 text-xl defocus">เตียงนอน</p>
                <div class="flex  flex-col xl:flex-row justify-evenly sm:ml-10 xl:ml-0">
                        <div>
                            <div>
                                <i class="fas fa-bed text-indigo-800"></i>
                                <span class="text-xs md:text-base">เปิดให้บริการเตียงชาย ทั้งหมด &nbsp; 
                                    <span class="text-red-900 sm:text-2xl">156</span> &nbsp; เตียง
                                </span>
                            </div>
                            <div>
                                <i class="fas fa-bed text-pink-800"></i>
                                <span class="text-xs md:text-base">เปิดให้บริการเตียงหญิง ทั้งหมด &nbsp; 
                                    <span class="text-red-900 sm:text-2xl">134</span> &nbsp; เตียง
                                </span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <i class="fas fa-bed text-indigo-800"></i>
                                <span class="text-xs md:text-base">คงเหลือเตียงชาย ทั้งหมด &nbsp; 
                                    <span class="text-red-900 sm:text-2xl">16</span> &nbsp; เตียง
                                </span>
                            </div>
                            <div>
                                <i class="fas fa-bed text-pink-800"></i>
                                <span class="text-xs md:text-base">คงเหลือเตียงหญิง ทั้งหมด &nbsp; <span class="text-red-900 sm:text-2xl">34</span> &nbsp; เตียง</span>
                            </div>
                        </div>
                </div>

                <p class="md:text-center mt-20 mb-8 text-xl defocus">จำนวนประชากรหอพัก</p>
                <div class="flex flex-col xl:flex-row gap-x-12 gap-y-2 justify-center ml-4 sm:ml-10 xl:ml-0">
                    <div>
                        <i class="fas fa-male"></i>
                        <span class="ml-2 text-xs md:text-base">จำนวนทั้งหมด &nbsp; <span class="text-red-900 sm:text-2xl">1266</span> คน</span>
                    </div>
                    <div>
                        <i class="fas fa-male text-blue-700"></i>
                        <span class="ml-2 text-xs md:text-base">หอพักชาย &nbsp; <span class="text-red-900 sm:text-2xl">456</span> คน</span>
                    </div>
                    <div>
                        <i class="fas fa-female text-pink-700"></i>
                        <span class="ml-2 text-xs md:text-base">หอพักหญิง 1 &nbsp; <span class="text-red-900 sm:text-2xl">386</span> คน</span>
                    </div>
                    <div>
                        <i class="fas fa-female text-pink-700"></i>
                        <span class="ml-2 text-xs md:text-base">หอพักหญิง 2 &nbsp; <span class="text-red-900 sm:text-2xl">224</span> คน</span>
                    </div>
                </div>
            </div>
            <div id="content" class="bg-white rounded-2xl p-3 text-center shadow-md mt-6">
                <a href="index.php" 
                    class="mt-16 mb-6 text-sm sm:text-md text-black-600 defocus hover:underline hover:text-blue-900">
                    <i class="fas fa-door-open text-red-900 text-sm mr-2"></i>กลับเว็บหอพักหลัก (หน้าแรกสุด) 
                </a>
            </div>
        </section> <!-- End section -->
        
        <?php include('./file_link/system_footer.php'); ?>
            
    </div>

    <script src="./assets/js/_system_sidebar.js"></script>

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
    
        // if(!isset($_SESSION['popupNew'])) { 
        //     $_SESSION['popupNew'] = true; 
        //     echo "<script>
        //             hiddenLogo();
        //         </script>";
        // }
    ?>

</body>
</html>
 