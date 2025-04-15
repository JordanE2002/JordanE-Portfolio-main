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
            <img src="images/coder.jpg" alt="sausage-dog" class="about-image">
            
         
         </div>
     
 
         <!-- About me box txt -->
         <div class="about-item">
            <h3>About me</h3>
            <p>My journey in tech began back in 2018 with my first IT degree in college, and ever since, I’ve been drawn to the behind-the-scenes side of web development. I developed a strong interest in backend technologies, especially server-side programming with PHP and working with databases like SQL. Over time, I’ve built up a well-rounded skill set that now extends into full stack development—and I’m excited to keep growing and applying these skills in real-world projects.</p>

<p>In my spare time, I enjoy creating little coding challenges for myself. One project I’m proud of is a simple Akinator-style web app that guesses the character someone’s thinking of. Getting it to handle hundreds of database entries without slowing down was a rewarding challenge—and problem-solving like that is exactly what keeps me passionate about development.</p>

<p>I’ve always been drawn to logical puzzles and building things with purpose, whether it’s through coding or games. Story-driven titles like Assassin’s Creed and Uncharted have influenced how I think—strategic planning, adaptability, and immersion. I bring that same mindset to programming: breaking down complex problems, designing clean solutions, and building intuitive user experiences.</p>
 
         
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