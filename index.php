<?php

// Read All the files of a folder.
include_once('php-image-resizer.php');
$img_source_dir = 'src_images/';
$files1 = scandir($img_source_dir);

echo "<pre>";
print_r($files1);
echo "</pre>";

if (!empty($files1)) {

    foreach ($files1 as $file_index => $file_name) {

        if ($file_name !== '.' & $file_name !== '..') {

            $source_url = $img_source_dir . '/' . $file_name;
            echo '<img src="' . $source_url . '" width="30px;"></img>';
            echo "</br>";

            bwl_resize_preview_img($source_url);
        }
    }
} else {

    echo "No file found !";
}
