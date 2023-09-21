<!-- HOME PAGE, STARTED FEBRUARY 23RD, 2023 -->

<!-- Hello! If you thought to read this, good for you! I started this protfolio project back in Februrary, 
but it took until September to really get off the ground. All of the code for this was written by me, with some
inspiration taken from sources online that I'll link throughout my code as needed. Feel free to look through
everything if you'd like, but please keep in mind that this is one of my first major web development projects!
I've spent a fair amount of time on it, but it's definetly not perfect, and I am still learning. Thank you for checking
me out! -->

<!DOCTYPE html>
<html>
    <head>
        <title>Home | Eve Grace ♡</title>
        <link rel="stylesheet" href="PortfolioProject.css" type="text/css">
        <script src='script.js'>
            
        </script>
    </head>
    
    <body>
        <?php
            include "header.php";
        ?>

        <script>
            var titles = [" student."," graphic designer.", " photographer.", " creative.", " developer."];
            const taglineChanges = setInterval(taglineChange, 1250);
        </script>

        <div class='container'>
            <h1 class="tagline">Hi! I'm <i>Eve Grace</i>, and I'm a </h1>
            <h1 class="tagline" id="myTitle" onload='taglineChange()'> developer.</h1>

            <a href="projects.php">learn more ></a> 
        </div>

        <div class="imgCarousel">
            <img src="./portfolioImages/clash/138A3972.jpg">
        </div>
    </body>
</html>