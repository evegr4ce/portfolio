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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
            <h2 class="about-title" id='about'>About Me</h2>
            <div class="about-grid">
                <div class="about-text">
                <p>
                    I’m a tech enthusiast from Chicago, currently based in Colorado Springs. I’m pursuing a B.A. 
                    in Computer Science with a minor in International Relations at Colorado College. <br><br>My current interests lie at 
                    the intersection of technology and global affairs—especially in the field of cybersecurity, where I get to 
                    combine my love of puzzles, algorithms, and problem-solving with real-world impact. I love exploring how emerging 
                    technologies shape global affairs, and I'm interested in discovering how digital security shapes international 
                    policy, privacy, and innovation. <br><br>I'm proficient in Java, C#, and Javascript (among other languages) and 
                    I’m always excited to learn new tools and frameworks. I'm currently seeking opportunities to grow through internships, 
                    mentorship, and collaboration in tech. <br><br>I love building creative projects that combine design and technology.
                    Outside of coding, you can find me training on the ice, exploring the outdoors, or hanging out with friends. 
                    Currently, I'm an active member of Colorado College's local sorority Delta Mu, the Career Center, and our Collegiate Figure Skating team.
                </p>
                <p>
                    My goal is to bring thoughtful design into everything I do — 
                    whether that’s a skating routine, a personal project, or collaborating with a team.
                </p>
                </div>

                <div class="about-images">
                    <img src="assets/skatePic.png" alt="Skating photo of me">
                    <img src="assets/hikePic.jpg" alt="Hiking photo of me">
                    <img src="assets/waterfallPic.jpg" alt="Waterfall photo of me">
                    <img src="assets/friendPic.jpg" alt="Friend photo of me">
                </div>
            </div>
        </div>

        <div class='projectContainer' id='projects'>
            <h1>Projects</h1>
            <div class="tiles-container">
                <div class="tile">
                    <h2>Predator-Prey Neural Network</h2>
                    <p>
                        Built two C# neural networks to model predator-prey dynamics between a lynx and a hare. Applied reinforcement learning strategies to optimize hunting and survival behaviors, achieving top 25% performance in class comparisons.
                    </p>
                </div>

                <div class="tile">
                    <h2>Virtual Reality Headset</h2>
                    <p>
                        Developed a custom SteamVR-compatible VR headset using a Raspberry Pi display and a 3-axis gyroscope/accelerometer. Implemented Arduino-based motion tracking and designed a lightweight housing to deliver immersive, low-latency experiences.
                    </p>
                </div>

                <a href="https://github.com/evegr4ce/imageClassification" target="_blank">
                <div class="tile">
                    <h2>ML Image Classification</h2>
                    <p>
                        Implemented an image classification system using Python, TensorFlow, Pandas, and NumPy. Trained machine-learning models to recognize and categorize images, optimizing accuracy through data preprocessing and model tuning.
                    </p>
                </div>
                </a>
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

        <?php include 'footer.php'; ?>
    </body>
</html>