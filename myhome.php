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
            var titles = [" student.", " developer.", " collaborator.", " tech enthusiast.", " adventure lover."];
            const taglineChanges = setInterval(taglineChange, 1250);
        </script>

        <div class='container'>
            <h1 class="tagline">Hi! I'm <i>Eve Grace</i>, and I'm a </h1>
            <h1 class="tagline" id="myTitle" onload='taglineChange()'> developer.</h1>
            <div class='buttonContainer'>
                <a href='#projects'><button class='learn-more'>Projects</button></a>
                <a href='resume.php'><button class='learn-more'>Resume</button></a>
            </div>
            <img src="assets/mePic1.png" alt="meImg" class="meImage">
        </div>

        <div class='aboutContainer'>
            <h2 id='about'>About Me</h2>
            
        </div>

        <div class='projectContainer' id='projects'>
            <h1>Projects</h1>
            <div class="tiles-container">
                <div class="tile">
                    <h2>Predator-Prey Neural Network</h2>
                    <p>
                        GeeksforGeeks is a leading
                        platform that provides computer
                        science resources and coding
                        challenges for programmers and
                        technology enthusiasts
                    </p>
                </div>

                <div class="tile">
                    <h2>Virtual Reality Headset</h2>
                    <p>
                        GeeksforGeeks is a leading
                        platform that provides computer
                        science resources and coding
                        challenges for programmers and
                        technology enthusiasts
                    </p>
                </div>

                <div class="tile">
                    <h2>ML Image Classification</h2>
                    <p>
                        GeeksforGeeks is a leading
                        platform that provides computer
                        science resources and coding
                        challenges for programmers and
                        technology enthusiasts
                    </p>
                </div>
            </div>
        </div>
        <script>
            const navbar = document.querySelector("#main-nav");
                document.addEventListener("scroll", () => {
                    const scrolled = document.scrollingElement.scrollTop;
                    if (scrolled > 50) { // Adjust scroll threshold as needed
                        navbar.classList.add("scrolled");
                    } else {
                        navbar.classList.remove("scrolled");
                    }
                });
        </script>
    </body>
</html>