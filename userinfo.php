<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
</head>
<body>

    <main>
        <h1>Add Blog</h1>
        <form action="inc/userinfo.inc.php" method="post" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" required><br><br>

            <label for="email">Image</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required><br><br>

            <label for="phone">Phone</label><br>
            <input type="tel" name="phone" id="phone" placeholder="Enter phone no." required><br><br>

            <label for="nationality">Nationality</label><br>
            <input type="text" name="nationality" id="nationality" placeholder="Enter nationality" required><br><br>

            <input type="submit" name="submit" value="Submit">

        </form>
    </main>
</body>
</html>