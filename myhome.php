<!-- HOME PAGE, STARTED FEBRUARY 23RD, 2023 -->

<!-- Hello! If you thought to read this, good for you! I started this protfolio project in Februrary of 2023, 
then forgot about it until 2025, when I found it at the bottom of my GitHub repositories list. All of the code 
for this was written by me, with some inspiration taken from sources online that I'll link throughout my code as needed. 
Feel free to look through everything, thanks for checking me out! -->

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
            var titles = [" student."," collaborator.", " technologist.", " innovator.", " developer."];
            const taglineChanges = setInterval(taglineChange, 1250);
        </script>

        <div class='container'>
            <h1 class="tagline">Hi! I'm <i>Eve Grace</i>, and I'm a </h1>
            <h1 class="tagline" id="myTitle" onload='taglineChange()'> developer.</h1>

            <a href="projects.php">learn more ></a> 
        </div>
    </body>
</html>