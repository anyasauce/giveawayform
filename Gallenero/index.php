<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giveaway Entry Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="entry-form">
    <h2>Giveaway Entry Form</h2>
    <form id="entryForm" method="post" action="process.php">
        <label>Please fill up below.</label><br>
        <input type="text" name="fn" placeholder="Facebook Name" required><br>

        <input type="submit" name="user_profile" value="Submit">
    </form>
</div>

<script>
    // ...

xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            var response = xhr.responseText.trim(); // Trim the response

            if (response.includes("Data is Inserted")) {
                showMessage("You have joined the entry.");
            } else if (response.includes("Entry with this name already exists")) {
                showMessage("You have already submitted an entry.");
            } else {
                alert("Unexpected response: " + response);
            }
        } else {
            alert("An unexpected error occurred. HTTP status: " + xhr.status);
        }
    }
};

// ...

</script>

</body>
</html>
