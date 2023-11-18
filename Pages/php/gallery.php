<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Read the gallery data from the JSON file
$galleryData = file_get_contents('../Pages/json/gallery.json');
$images = json_decode($galleryData)->images;

// Generate gallery items dynamically
foreach ($images as $image) {
    $modalId = pathinfo($image, PATHINFO_FILENAME); // Remove file extension for modal ID

    // Adjust the path to your images
    $imagePath = '../Pages/images/' . $image;

    echo '<a href="#' . $modalId . '" class="thumbnail">';
    echo '<img src="' . $imagePath . '" alt="Image">';
    echo '</a>';

    echo '<div id="' . $modalId . '" class="modal">';
    echo '<a href="#" class="close">&times;</a>';
    echo '<div class="modal-content">';
    echo '<img src="' . $imagePath . '" alt="Modal Image">';
    echo '</div>';
    echo '</div>';
}
?>
