<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of a Trapezoid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Kyle Matthew" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <title>Area of a Trapezoid, in PHP</title>
</head>

<body>
  
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a Trapezoid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <br>
      <div class="page-content">Formula:</div>
      <br>
      <p>
        A = [(a + b) / 2] * h
      </p>
      <div class="page-content">
        <img src="./images/Screenshot 2025-03-30 4.26.13 PM.png" alt="Trapezoid diagram" width="300">
      </div>

      <div class="page-content">Please enter integers for dimensions:</div>
      <br />
      <form action="answer.php" method="post">
        <p>a base:</p>
        <input type="text" name="a_base" required /> mm
        <p>b base:</p>
        <input type="text" name="b_base" required /> mm
        <p>height:</p>
        <input type="text" name="height" required /> mm
        <br /><br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate Area
        </button>
      </form>

    </main>
  </div>
</body>

</html>