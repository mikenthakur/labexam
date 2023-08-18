<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Userinfo</title>
</head>

<body>
    
    <main>
        <div id="center_card">
            <div id="cards">
                <table>
                <?php

                require_once "inc/dbconfig.php";

                $sql = "SELECT * FROM userinfo";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                // Loop through the results and display them
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["nationality"] . "</td>";
                    echo "</div>";
                    echo "</tr>";
                }
                } else {
                    echo "No results found";
                }

                // Close the connection
                mysqli_close($conn);

            ?>
            </table>
            </div>
        </div>
</body>

</html>