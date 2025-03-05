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
            <a href="about-me.php#about" class="sidebar-present">About Me</a>
        </div>
        <div>
            <a href="coding-examples.php#coding-examples" class="sidebar-text">Coding Examples</a>
        </div>
        <a href="scheme.php#scheme" class="sidebar-text"></i>SCS Scheme</a>
        


    </nav>
    

 <!-- Menu Toggle Button -->
 <div class="menu-toggle">
    <i class="icon-menu"></i> <!-- Hamburger menu icon -->
</div>

    
<?php

include("inc/header.php");

?>



    <section>
        <h1 id="about" class="title-centered">About me</h1>

    
        <div class="about-container">
            <!-- About me box image -->
         <div class="about-item">
            <img src="images/job-seeking.png" alt="sausage-dog" class="about-image">
         
         </div>
     
 
         <!-- About me box txt -->
         <div class="about-item">
            <h3>About me</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut excepturi, quibusdam possimus dolores at fuga dignissimos, atque id quam velit, commodi perspiciatis nihil natus reprehenderit ipsa nesciunt voluptates recusandae cum unde molestias nobis sed dolore deserunt. Natus eum molestias voluptatum, possimus ea ullam sed quo vitae deleniti cum doloribus cupiditate quae ut eos error! Iusto nesciunt dignissimos, excepturi repudiandae perferendis molestias vel recusandae consequatur corporis, assumenda natus! Blanditiis provident rem distinctio error temporibus. Aspernatur veniam quo consequuntur esse incidunt necessitatibus est, quia ut nesciunt optio dolorem eveniet porro blanditiis voluptatem reprehenderit officiis quidem enim! Accusantium magnam iusto blanditiis consequuntur tempore.</p>
          
 
         
         </div>
             
         </div>
        </div>

    </section>

      <!-- Footer -->
      <?php 

include ("inc/footer.php");

?>
    <script src="java/main.js"></script>

</body>
</html>