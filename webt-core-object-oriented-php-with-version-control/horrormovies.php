<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acolytes of Ash - Trailer Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h1>Acolytes of Ash Trailer Portal</h1>
    <section>

    
    <?php
        require 'YouTubeVideo.php';

        $videos = [
            new YouTubeVideo("Smile - Siehst du es auch?", "VverKvO3CCM?si=TmKdHIuueMKfO2ZP"), 
            new YouTubeVideo("Terrifier 2", "mXWZQBVc1V4?si=RBADczH0aNVRd-Cc"),
            new YouTubeVideo("Smile 2", "KjRvLYWLP0A?si=f4SDxC5ikeIXgX-A"),
            new YouTubeVideo("M3GAN", "BRb4U99OU80?si=xzqhAIbyxu6CpZvW"),
            new YouTubeVideo("The Visit", "YfQnRjkuvaY?si=hs7tsDIhOR_HTI-k")
        ];

        foreach ($videos as $video) {
            echo '<article>';
            echo '<h2>' . $video->getName() . '</h2>';
            echo  '<p>Source: YouTube</p>';
            echo $video->getHTMLCode();
            echo '</article>';
        }

    ?>
    </section>
</body>
</html>
