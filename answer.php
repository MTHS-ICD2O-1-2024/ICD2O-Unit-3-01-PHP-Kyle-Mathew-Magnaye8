<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a_base = isset($_POST['a_base']) ? floatval($_POST['a_base']) : null;
  $b_base = isset($_POST['b_base']) ? floatval($_POST['b_base']) : null;
  $height = isset($_POST['height']) ? floatval($_POST['height']) : null;

  if ($a_base === null || $b_base === null || $height === null || $a_base <= 0 || $b_base <= 0 || $height <= 0) {
    echo "<p>Please enter valid positive numbers.</p>";
  } else {
    $area = (($a_base + $b_base) / 2) * $height;
    echo "<p>Area: " . number_format($area, 2) . " mm²</p>";
  }
} else {
  echo "<p>Invalid request.</p>";
}

// Add a return link or button
echo '<p><a href="index.php" style="color: rgb(255, 64, 129); ">return</a></p>';
