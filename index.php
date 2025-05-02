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
        <a href="index.php" class="sidebar-present sidebar-je">
            <h1>JE <i class="icon-star-full"></i></h1>
        </a>
    </div>
    <a href="index.php#projects" class="sidebar-text sidebar-projects">My Projects</a>
    <a href="index.php#contact" class="sidebar-text sidebar-contact">Contact Me</a>
    <div>
        <a href="about-me.php#about" class="sidebar-text sidebar-about">About Me</a>
    </div>
    <div>
        <a href="coding-examples.php#coding-examples" class="sidebar-text sidebar-coding">Coding Examples</a>
    </div>
    <a href="scheme.php#scheme" class="sidebar-text sidebar-scheme">SCS Scheme</a>
    
</nav>
    

 <!-- Menu Toggle Button -->
 <div class="menu-toggle">
    <i class="icon-menu"></i> <!-- Hamburger menu icon -->
</div>

    

<?php

include("inc/header.php");

?>

<section id="projects">
    <h1 class="title-centered">My Projects</h1>
    <div class="projects-container">
        
        <!-- Project 1 -->
        <div class="projects-item">
            <a href="https://jordan-english.netmatters-scs.co.uk/" target="_blank">
                <img src="images/project-1.png" alt="Project 1">
            </a>
            <h3>Netmatters Homepage</h3>
            <p><strong>Languages:</strong> HTML, CSS, PHP, Java</p>
            <p><strong>Description:</strong> Clone of the Netmatters homepage created as a task from Netmatters.</p>
            <a href="https://jordan-english.netmatters-scs.co.uk/" target="_blank" class="projects-button">View Project</a>
            <div class="horizontial-line"></div>
        </div>

        <!-- Project 2 -->
        <div class="projects-item">
            <a href="http://js-array.jordan-english.netmatters-scs.co.uk/" target="_blank">
                <img src="images/JS-array.png" alt="JS Array">
            </a>
            <h3>JS Array Generator</h3>
            <p><strong>Languages:</strong> HTML, CSS, Java, JQuery</p>
            <p><strong>Description:</strong> Email-image generator with save/delete functionality.</p>
            <a href="http://js-array.jordan-english.netmatters-scs.co.uk/" target="_blank" class="projects-button">View Project</a>
            <div class="horizontial-line"></div>
        </div>

        <!-- Project 3 -->
        <div class="projects-item">
            <a href="http://laravel.jordan-english.netmatters-scs.co.uk/login" target="_blank">
                <img src="images/Laravel-code.png" alt="Laravel Assignment">
            </a>
            <h3>Laravel Admin Panel</h3>
            <p><strong>Languages:</strong> Laravel 12, Bootstrap</p>
            <p><strong>Description:</strong> Admin panel for managing companies and employees (CRUD operations).</p>
            <a href="http://laravel.jordan-english.netmatters-scs.co.uk/login" target="_blank" class="projects-button">View Project</a>
            <div class="horizontial-line"></div>
        </div>

    </div>
</section>







<!-- Contact Section -->
<section>
    <h1 id="contact" class="title-centered">Contact Form</h1>
    <div class="contact-container">
        <div class="contact-box">
        <div id="success-banner" class="success-banner">Your message has been sent successfully!</div>
            <div class="contact-text">
                <h3>Fill out your details</h3>
                <form name="contactForm" action="/inc/process_contact.php" method="POST" onsubmit="return validateForm()">

                    <div class="input-row">
                        <div class="input-group">
                            <input type="text" name="firstName" placeholder="First name">
                        </div>
                        <div class="input-group">
                            <input type="text" name="lastName" placeholder="Last name">
                        </div>

                        <div class="input-group">
                            <input type="email" name = "email" placeholder="Email">
                        </div>



                        <div class="input-group">
                            <input type="text" name = "subject" placeholder="Subject">
                        </div>


                        
                        <textarea rows="5" name = "message" placeholder="Message"></textarea>


                        <button type="submit" name ="formButton">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>   

</section>






    






</div>

<?php 

include ("inc/footer.php");

?>



<script src="java/main.js"></script>

</body>
</html>
