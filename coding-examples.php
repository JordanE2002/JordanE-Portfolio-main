<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jordan's Portfolio</title>
    <link rel="stylesheet" href="css/main.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<body>

    
    <!-- Sidebar -->
    <nav class="sidebar">
        <div>
            <a href="index.php" class="sidebar-text">
                <h1>JE <i class="icon-star-full"></i></h1>
            </a>
        </div>
        <a href="index.php#projects" class="sidebar-text"> My Projects</a>
        <a href="index.php#contact" class="sidebar-text">Contact Me</a>
        <div>
            <a href="about-me.php#about" class="sidebar-text">About Me</a>
        </div>
        <div>
            <a href="coding-examples.php#coding-examples" class="sidebar-present">Coding Examples</a>
        </div>
        <a href="scheme.php#scheme" class="sidebar-text"></i>SCS Scheme</a>
        


    </nav>
    

    <?php

include("inc/header.php");

?>

    

     <!-- Page Content -->
     <div id="main-content">
        <!-- Header -->
        <section id="home" class="header">
            <div class="header-content">
                <h1 id="greeting-text"></h1> <!-- This will display "Hello, I am Jordan English." -->
                <p id="portfolio-text"></p> <!-- This will display "This is my Portfolio." -->
            </div>
            <img src="images/sausage-dog.webp" alt="sausage-dog" class="banner-img">
        </section>



    <!-- Code snippets section -->
    <section>
        <h1 id="coding-examples" class="title-centered">Code Snippets</h1>

        <div class="HTML"><h3>HTML: TBC</h3></div>
        <div class="CSS"><h3>CSS: TBC</h3></div>
        <div class="JAVA"><h3>JAVA: TBC</h3></div>
        <div class="PHP"><h3>PHP: TBC</h3></div>
    </section>
</div>

<?php 

include ("inc/footer.php");

?>

<script src="java/main.js"></script>

</body>
</html>
