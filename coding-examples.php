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

    

   


    <!-- Code snippets section -->
    <section id="coding-examples">
    <h1 class="title-centered">Code Snippets</h1>

    <div class="code-snippet">
        <h3>HTML: Nav bar for portfolio</h3>
        <p>This nav bar allows users to navigate to other pages in the portfolio. I used it because it was easy to make and fun to play with. It is also very useful for going to the other pages without any big issues </p>
        <img src="images/HTML-code-example.png" alt="HTML code example">
    </div>

    <div class="code-snippet">
        <h3>CSS: Styling the hero image</h3>
        <p>This CSS code is used to style the layout of the top image on the portfolio page, it sets the image, making it fit by the nav without overflowing so i can have this hero image fit nicely next to the nav bar </p>
        <img src="images/css-code-snippet.png" alt="CSS code example">
    </div>

    <div class="code-snippet">
        <h3>JavaScript: Image array change image logic</h3>
        <p>This JavaScript code shows that when i press a button for the js-array it shall generate a new image using a API to not have to use saved images which would cost time and memory</p>
        <img src="images/js-array-snippet.png" alt="JavaScript array example">
    </div>

    <div class="code-snippet">
        <h3>PHP: Contact form handling</h3>
        <p>TThis contact section displays a form where users can enter their name, email, subject, and message to get in touch. When the user submits the form, it runs a JavaScript validation function to check the inputs, it goes to process_contact.php where it stores my mailtrap details for email storing. </p>
        <img src="images/php-code-snippet.png" alt="PHP code example">
    </div>
</section>
</div>

<?php 

include ("inc/footer.php");

?>

<script src="java/main.js"></script>

</body>
</html>
