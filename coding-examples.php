<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jordan's Portfolio</title>
    <link rel="stylesheet" href="css/main.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
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

    

    <?php

include("inc/header.php");

?>

    

   


    <!-- Code snippets section -->

    <section id="coding-examples">
    <h1 class="title-centered">Code Snippets</h1>

    <div class="code-snippet container">
        <h3>HTML: Nav bar for portfolio</h3>
        <p>This nav bar allows users to navigate to other pages in the portfolio. I used it because it was easy to make and fun to play with. It is also very useful for going to the other pages without any big issues </p>
    
         <!-- Fancybox added for the first image -->
         <a href="images/HTML-code-example.png" data-fancybox="coding-gallery" data-caption="HTML Code Example">
            <img src="images/HTML-code-example.png" alt="HTML code example">
        </a>
        
    </div>

    <div class="code-snippet container">
    <h3>CSS: Styling the hero image</h3>
    <p>This CSS code is used to style the layout of the top image on the portfolio page, it sets the image, making it fit by the nav without overflowing so I can have this hero image fit nicely next to the nav bar.</p>
    <!-- Fancybox added for the CSS image -->
    <a href="images/css-code-snippet.png" data-fancybox="coding-gallery" data-caption="CSS Code Example">
        <img src="images/css-code-snippet.png" alt="CSS code example">
    </a>
</div>

<div class="code-snippet container">
    <h3>JavaScript: Image array change image logic</h3>
    <p>This JavaScript code shows that when I press a button for the JS array, it generates a new image using an API to avoid using stored images.</p>
    <!-- Fancybox added for the JavaScript image -->
    <a href="images/js-array-snippet.png" data-fancybox="coding-gallery" data-caption="JavaScript Array Example">
        <img src="images/js-array-snippet.png" alt="JavaScript array example">
    </a>
</div>


<div class="code-snippet container">
    <h3>PHP: Contact form handling</h3>
    <p>This contact section displays a form where users can enter their name, email, subject, and message to get in touch. When the user submits the form, it runs a JavaScript validation function to check the inputs. It goes to process_contact.php where it stores my mailtrap details for email storing.</p>
    <!-- Fancybox added for the PHP image -->
    <a href="images/php-code-snippet.png" data-fancybox="coding-gallery" data-caption="PHP Code Example">
        <img src="images/php-code-snippet.png" alt="PHP code example">
    </a>
</div>
</section>
</div>

<?php 

include ("inc/footer.php");

?>

<script src="java/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

</body>
</html>