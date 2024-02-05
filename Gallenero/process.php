<?php
include("conn.php");

if (isset($_POST["user_profile"])) {
    $fn = $_POST["fn"];

    $checkDuplicate = mysqli_query($conn, "SELECT id FROM profile WHERE fn = '$fn'");

    if (mysqli_num_rows($checkDuplicate) > 0) {
        echo "Entry with this name already exists. Please use a different name.";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO profile (id, fn) VALUES (NULL, '$fn')");

        if ($insert) {
            echo "Data is Inserted";
        } else {
            echo "Error in inserting: " . mysqli_error($conn);
        }
    }
}
?>
