<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Data Form</title>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
  }
  
</style>
</head>
<body>

<h1>Student Data</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  Roll No:<input type="text" name="rno" required><br><br>
  Student Name: <input type="text" name="sname" required><br><br>
  Subject 1 Marks: <input type="number" name="sub1" required><br><br>
  Subject 2 Marks: <input type="number" name="sub2" required><br><br>
  Subject 3 Marks: <input type="number" name="sub3" required><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset"> <br><br>  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rno = $_POST["rno"];
  $sname = $_POST["sname"];
  $sub1 = $_POST["sub1"];
  $sub2 = $_POST["sub2"];
  $sub3 = $_POST["sub3"];

  $total = $sub1 + $sub2 + $sub3;
  $percentage = ($total / 300) * 100;

  if ($percentage >= 70) {
    $result = "First Class";
  } elseif ($percentage >= 60) {
    $result = "Second Class";
  } elseif ($percentage >= 50) {
    $result = "Third Class";
  } else {
    $result = "Fail";
  }

  echo "<h2>Student Result</h2>"; // Added a heading for clarity
  echo "<table border='1'>";
  echo "<tr><th>RNo</th><th>SName</th><th>Total</th><th>Percentage</th><th>Result</th></tr>";
  echo "<tr><td>$rno</td><td>$sname</td><td>$total</td><td>$percentage</td><td>$result</td></tr>";
  echo "</table>";
}
?>

</body>
</html>