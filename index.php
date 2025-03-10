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
            <a href="index.php" class="sidebar-present">
                <h1>JE <i class="icon-star-full"></i></h1>
            </a>
        </div>
        <a href="index.php#projects" class="sidebar-text"> My Projects</a>
        <a href="index.php#contact" class="sidebar-text">Contact Me</a>
        <div>
            <a href="about-me.php#about" class="sidebar-text">About Me</a>
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


 <!-- Projects Section -->
 <section>
    <h1 id="projects" class="title-centered">My Projects</h1>
    <div class="projects-container">
        
        <!-- Project 1 -->
        <div class="projects-item">
            <a href="https://jordan-english.netmatters-scs.co.uk/" target="_blank" class="projects-link"></a>
            <img src="images/project-1.png" alt="Project 1">
            <h3>Netmatters hompage: Please view my work</h3>
            <p><b>Language used: </b>I used HTM/CSS, PHP and Java</p> 
            <p><b>What it does:</b>It is a clone of te netmatters homepage which ks a task given to me by netmatters themselfs</p>
            
        </div>
        
        <!-- Project 2 -->
        <div class="projects-item">
            <a href="https://www.google.co.uk/" target="_blank" class="projects-link"></a>
            <img src="images/sausage-dog.webp" alt="Project 2">
            <h3>Project 2: Please view my work</h3>
        </div>
        
        <!-- Project 3 -->
        <div class="projects-item">
            <a href="https://www.google.co.uk/" target="_blank" class="projects-link"></a>
            <img src="images/Testimg.webp" target="_blank" alt="Project 3">
            <h3>Project 3: Please view my work</h3>
        </div>

        <div class="projects-item">
            <a href="https://www.google.co.uk/" target="_blank" class="projects-link"></a>
            <img src="images/Testimg.webp" alt="Project 3">
            <h3>Project 4: Please view my work</h3>
        </div>

        <div class="projects-item">
            <a href="https://www.google.co.uk/" target="_blank" class="projects-link"></a>
            <img src="images/Testimg.webp" alt="Project 3">
            <h3>Project 5: Please view my work</h3>
        </div>

        <div class="projects-item">
            <a href="https://www.google.co.uk/" target="_blank" class="projects-link"></a>
            <img src="images/Testimg.webp" alt="Project 3">
            <h3>Project 6: Please view my work</h3>
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
