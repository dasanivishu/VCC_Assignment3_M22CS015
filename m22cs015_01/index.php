<?php
$servername = "CONM22CS015_02";
$username = "root";
$password = "root";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $roll_no = $_POST["roll_no"];
    $marks = $_POST["marks"];

    $sql = "INSERT INTO mytable (name, class, roll_no, marks) VALUES ('$name', '$class', $roll_no, $marks)";
    $conn->query($sql);
}

// Retrieve data from the database
$result = $conn->query("SELECT * FROM mytable");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
</head>
<body>
    <h1>Insert Data of Students here </h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Enter Name of Student:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <!-- Add new fields to the form -->
        <label for="class">Enter Class:</label>
        <input type="text" id="class" name="class" required>
        <br>

        <label for="roll_no">Enter Roll No:</label>
        <input type="number" id="roll_no" name="roll_no" required>
        <br>

        <label for="marks">Enter Marks:</label>
        <input type="number" id="marks" name="marks" required>
        <br>

        <input type="submit" value="Submit">
    </form>

    <h2>Records in the database:</h2>
    <ul>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<li>Name: " . $row['name'] . ", Class: " . $row['class'] . ", Roll No: " . $row['roll_no'] . ", Marks: " . $row['marks'] . "</li>";
        }
        ?>
    </ul>

    <?php
    // Close the connection
    $conn->close();
    ?>
</body>
</html>

