

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fce4ec;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }
    
    header {
      background-color: #ff6699;
      color: #fff;
      padding: 20px;
      text-align: center;
      width: 100%;
    }
    
    nav {
      background-color: hotpink;
      padding: 10px;
      width: 100%;
      text-align: center;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline;
      margin-right: 20px;
    }
    
    nav ul li a {
      color: #fff;
      text-decoration: none;
    }
    
    main {
      padding: 20px;
      width: 100%;
      max-width: 500px;
	  margin: auto;
    }
    
    h1 {
      color: #ff4081;
      text-align: center;
    }
    
    .calculator {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 20px;
    }
    
    label {
      font-weight: bold;
      color: #ff4081;
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #ff4081;
      border-radius: 5px;
      font-size: 16px;
    }
    
    button[type="submit"] {
      background-color: #ff4081;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
    }
    
    button[type="submit"]:hover {
      background-color: #ff80ab;
    }
    
    h2 {
      color: #f0f0f0;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<header>
  <h2>BMI</h2>
</header>
	
<nav>
  <ul>
    <li><a href="index1.php">Home</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="education.php">Education</a></li>
    <li><a href="passion.php">Passion</a></li>
    <li><a href="comment.php">Comment</a></li>
  </ul>
</nav>
	
<main>
  <h1>BMI Calculator</h1>
  <div class="calculator">
    <form action="" method="post">
      <label for="weight">Weight (kg):</label>
      <input type="number" id="weight" name="weight" step="0.01" required><br><br>
      <label for="height">Height (m):</label>
      <input type="number" id="height" name="height" step="0.01" required><br><br>
      <button type="submit">Calculate BMI</button>
    </form>
  </div>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    
    // Calculate BMI
    $bmi = $weight / ($height * $height);
    
    // Display BMI
    echo "<h2>Your BMI is: " . round($bmi, 2) . "</h2>";
}
?>

</body>
</html>

