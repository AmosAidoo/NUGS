<?php

// Include the editor SDK.
require 'resources/Froala/php-sdk/lib/FroalaEditor.php';

// Store the image.
try {
    $response = FroalaEditor_Image::upload('/Projects/NUGS UKRAINE/nugs-administrator/images/froala/uploads/');
    echo stripslashes(json_encode($response));
}
catch (Exception $e) {
    http_response_code(404);
}

?>