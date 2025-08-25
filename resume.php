<!-- RESUME PAGE, STARTED SEPTEMBER 20TH, 2023 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Resume | Eve Grace ♡</title>
        <link rel="stylesheet" href="PortfolioProject.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <script src='script.js'>
            
        </script>
    </head>
    
    <body class="resume-page">
        <h2 id='resume'>Resume</h2>
        <?php
            include "header.php";

            $file = 'assets/CunneenResume2025.pdf';
            if (file_exists($file)) {
                echo "<div class='resumeContainer'>
                        <iframe src='$file'></iframe>
                      </div>";
            } else {
                echo "<p>Sorry, the resume file does not exist.</p>";
            }

            include "footer.php";
        ?>
    </body>
</html>