<?php
include "database/db.php";

$usn = $_POST['usn'];

$sql = "SELECT * FROM results WHERE usn='$usn'";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="center">

<h2>VTU Result</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "<div class='result-box'>";
    echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
    echo "<p><strong>USN:</strong> " . $row['usn'] . "</p>";
    echo "<p><strong>Semester:</strong> " . $row['sem'] . "</p>";
    echo "<p><strong>Total Marks:</strong> " . $row['total'] . "</p>";
    echo "<p><strong>Result:</strong> " . $row['result'] . "</p>";
    echo "</div>";
} else {
    echo "<p class='error'>No record found for USN: $usn</p>";
}
?>

<a href="result.html" class="btn">Search Again</a>
<a href="index.html" class="back-btn">← Back to Home</a>

</body>
</html>
