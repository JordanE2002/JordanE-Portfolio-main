<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jordan's Portfolio</title>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

  <style>
    /* Optional: tweak Fancybox background or image styling if needed */
    .fancybox__backdrop {
      background-color: rgba(220, 220, 220, 0.95);
    }

    .fancybox__slide {
      background-color: transparent;
    }
  </style>
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

  <!-- GitHub Link (properly closed now) -->
  <a href="https://github.com/JordanE2002" class="sidebar-text sidebar-github" target="_blank">
    <i class="icon-github1"></i> GitHub
  </a>
</nav>

<!-- Menu Toggle Button -->
<div class="menu-toggle">
  <i class="icon-menu"></i> <!-- Hamburger menu icon -->
</div>

<?php include("inc/header.php"); ?>

<!-- Code snippets section -->
<section id="coding-examples">
  <h1 class="title-centered">Code Snippets</h1>

  <div class="code-snippet">
    <h3>HTML: Nav bar for portfolio</h3>
    <p>This nav bar allows users to navigate to other pages in the portfolio...</p>
    <a href="images/HTML-code-example.png" data-fancybox="code-snippets" data-caption="HTML: Nav bar for portfolio">
      <img src="images/HTML-code-example.png" alt="HTML code example">
    </a>
  </div>

  <div class="code-snippet">
    <h3>CSS: Styling the hero image</h3>
    <p>This CSS code is used to style the layout of the top image on the portfolio page...</p>
    <a href="images/css-code-snippet.png" data-fancybox="code-snippets" data-caption="CSS: Styling the hero image">
      <img src="images/css-code-snippet.png" alt="CSS code example">
    </a>
  </div>

  <div class="code-snippet">
    <h3>JavaScript: Image array change image logic</h3>
    <p>This JavaScript code updates an image when a button is pressed...</p>
    <a href="images/js-array-snippet.png" data-fancybox="code-snippets" data-caption="JavaScript: Image array change logic">
      <img src="images/js-array-snippet.png" alt="JavaScript array example">
    </a>
  </div>

  <div class="code-snippet">
    <h3>PHP: Contact form handling</h3>
    <p>This contact form lets users send their name, email, subject, and message...</p>
    <a href="images/php-code-snippet.png" data-fancybox="code-snippets" data-caption="PHP: Contact form handling">
      <img src="images/php-code-snippet.png" alt="PHP code example">
    </a>
  </div>
</section>

<?php include("inc/footer.php"); ?>

<!-- JS scripts -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script src="java/main.js"></script>

</body>
</html>
