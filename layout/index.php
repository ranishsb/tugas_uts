<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="website kota kisaran asahan">
    <meta name="author" content="Ranis Hsb">
    <meta name="keywords" content="website,kota,kisaran,asahan ">
    <title>website kota kisaran asahan</title>
    <link rel="stylesheet" href="layout/assets/css/style.css" >
</head>
<body>

    <main>
        <header>
        <img src="<?php echo ASSET; ?>images/header.jpg"width="100%"/>
        <link rel="stylesheet" href="<?php echo ASSET; ?> css/style.css" >
</head>
        </header>
        
        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                
                <li>
                    <a href="index.php?page=login_form" class="active">Login</a>
                </li>
            </ul>
        </nav>


        <div id="runningtext"><marquee behavior="scroll" scrollamount="3" onmouseover="this.stop(); " onmouseout="this.start();" direction="left">Selamat Datang  di website kota kisaran</marquee></div>
        
        

        <section>
            <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "main_index.php";
            }

            ?>

        </section>



        <div id="footer"> & copy 2021, By Ranis Hsb</div>
        <footer>
    </main>
</body>
</html>