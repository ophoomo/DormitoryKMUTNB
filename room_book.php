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
        /* #container_navbar { background-color: rgb(140, 20, 0) !important; } */
        /* #container_navbar { background-color: rgb(80, 20, 0) !important; } */
    </style>
<body>

    <!-- Menu  -->
    <?php include "navbar.php"; ?>
        
    <div class="container">
        <div class="areaBook">
            <div class="titleBook">
                <p>จองห้องพัก</p>
            </div>
            <form action="">
                <div class="areaCard deactive">
                    <div class="dorm">
                        <div class="cardRoom">
                            <div class="roomNumber">
                                <p>418</p>
                            </div>
                            <div class="listPerson">
                                <p>สมชัย กุญเชียงทอง</p>
                                <p>สมชัย กุญเชียงทอง</p>
                                <p>สมชัย กุญเชียงทอง</p>
                                <p>สมชัย กุญเชียงทอง</p>
                                <p>สมชัย กุญเชียงทอง</p>
                            </div>
                            <div class="statusRoom">
                                <p>5/5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="areaBtnBook">
                    <button>
                        <p>จองหอพัก</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
        
    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    
    <script src="./assets/js/room_book.js"></script>    
</body>    
</html>
