<?php
if ($_GET['randomId'] != "g2347AWH4psNy8uGJ0GcUZmN5NdE6G27dD0LRXQwTM0lMLyR8WHrs1Zb2LLWISru") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
