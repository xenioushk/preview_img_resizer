<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preivew Image Resizer</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>

    <div class="container">

        <?php


        // Read All the files of a folder.
        include_once('php-image-resizer.php');
        $imageSourceDirectory = 'src_images/';
        $allFiles = scandir($imageSourceDirectory);


        if (!empty($allFiles)) {

            echo "<div class='src-img-container'>";

            foreach ($allFiles as $file_index => $file_name) {

                if ($file_name !== '.' & $file_name !== '..') {

                    $source_url = $imageSourceDirectory . '/' . $file_name;
                    echo "<img src='$source_url'>";

                    bwl_resize_preview_img($source_url);
                }
            }

            echo "</div>";
        } else {

            echo "No file found !";
        }

        ?>

    </div>

    <script src="assets/scripts.js"></script>

</body>

</html>