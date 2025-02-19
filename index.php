<?php

?>


<!-- HTML -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pet Love</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Add this code at the top of your body tag -->
    <button onclick="emergencyCall()" class="emergency-button"><a href="#">Emergency Call</a></button>


    <!-- Main-Header -->
    <div class="main-header">
        <a href="#" class="logo">Pet<span>Love</span></a>

        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Artikel</a></li>
        </ul>

        <div class="icons">
            <a href="#"><i class='bx bx-search-alt-2'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </div>

    <!-- isi -->
    <section class="main-body">
        <div class="main-text">
            <h5>Welcome!</h5>
            <h1>Clinic for Your <br> <span>Best Friends</span> </h1>
            <br>

            <div class="main-btn">
                <a href="#" class="btn">Masuk</a>
                <a href="#" class="btn btn2">Daftar</a>
            </div>

        </div>
    </section>

    <div class="right">
        <a href="#" class="scroll">Scroll Down<i class='bx bx-chevrons-down'></i></a>
    </div>

    <!----custom js link--->
    <script type="text/javascript" src="js/script.js"></script>

    
</body>

</html>