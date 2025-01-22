<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acolytes of Ash - Trailer Portal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <p class="text-center">Acolytes of Ash Trailer Portal</p>
    
    <div class="container">
        
        <div class="row">
            <?php 
                require 'YouTubeVideo.php';   
                require 'VimeoVideo.php';    

                $videos = [
                    new YouTubeVideo("Smile - Siehst du es auch?", "VverKvO3CCM?si=TmKdHIuueMKfO2ZP"), 
                    new YouTubeVideo("Terrifier 2", "mXWZQBVc1V4?si=RBADczH0aNVRd-Cc"),
                    new YouTubeVideo("Smile 2", "KjRvLYWLP0A?si=f4SDxC5ikeIXgX-A"),
                    new YouTubeVideo("M3GAN", "BRb4U99OU80?si=xzqhAIbyxu6CpZvW"),
                    new YouTubeVideo("The Visit", "YfQnRjkuvaY?si=hs7tsDIhOR_HTI-k"),
                    new VimeoVideo("The Night Visitor 2: Heather's Story", "1008966783?h=89e2879570"), 
                    new VimeoVideo("Rose's Last Session", "988674459?h=7ca1393522"),
                    new VimeoVideo("The Witch on Bridge Street", "1009290632?h=444d07a477"),
                    new VimeoVideo("Man in the Fields", "988668408?h=62dcd162e7"),
                    new VimeoVideo("The Longest Night", "995857996?h=96a3d8b943")
                ];

                foreach ($videos as $video) {
                    echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">';
                    echo '<div class="vidcontainer">';
                    echo '<h3>' . $video->getName() . '</h3>';
                    echo '<p>Source: ' . $video->getVideoSource() . '</p>';
                    echo '<div>' . $video->getHTMLCode() . '</div>'; 
                    echo '</div>'; 
                    echo '</div>'; 
                    
                } 
            ?>
        </div>
    </div>
</body>
</html>
