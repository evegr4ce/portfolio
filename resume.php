<!-- RESUME PAGE, STARTED SEPTEMBER 20TH, 2023 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Resume | Eve Grace ♡</title>
        <link rel="stylesheet" href="PortfolioProject.css" type="text/css">
        <script src='script.js'>
            
        </script>
    </head>
    
    <body>
        <?php
            include "header.php";

            $file = 'CunneenResume2025.pdf';
            if (file_exists($file)) {
                echo "<div class='resumeContainer'>
                        <iframe src='$file'></iframe>
                      </div>";
            } else {
                echo "<p>Sorry, the resume file does not exist.</p>";
            }
        ?>

    </body>
</html>