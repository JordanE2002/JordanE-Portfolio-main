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
  

<nav class="sidebar">
    <div>
        <a href="index.php" class="sidebar-present sidebar-je"> <!-- Updated with class sidebar-je -->
            <h1>JE <i class="icon-star-full"></i></h1>
        </a>
    </div>
    <a href="index.php#projects" class="sidebar-text sidebar-projects">My Projects</a> <!-- Updated with class sidebar-projects -->
    <a href="index.php#contact" class="sidebar-text sidebar-contact">Contact Me</a> <!-- Updated with class sidebar-contact -->
    <div>
        <a href="about-me.php#about" class="sidebar-text sidebar-about">About Me</a>
    </div>
    <div>
        <a href="coding-examples.php#coding-examples" class="sidebar-text sidebar-coding">Coding Examples</a> <!-- Updated with class sidebar-coding -->
    </div>
    <a href="scheme.php#scheme" class="sidebar-text sidebar-scheme">SCS Scheme</a> <!-- Updated with class sidebar-scheme -->


     <!-- GitHub Link -->
     <a href="https://github.com/yourusername" class="sidebar-text sidebar-github" target="_blank">
        <i class="icon-github1"></i> GitHub </a>
</nav>


    

 <!-- Menu Toggle Button -->
 <div class="menu-toggle">
    <i class="icon-menu"></i> <!-- Hamburger menu icon -->
</div>

    
<?php

include("inc/header.php");

?>





      <!-- Footer -->
      <?php 

include ("inc/footer.php");

?>
    <script src="java/main.js"></script>

</body>
</html>