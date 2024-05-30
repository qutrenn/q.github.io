<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comments Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fce4ec;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
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
      max-width: 600px;
      margin: auto;
      flex: 1;
    }
    
    h1{
      color: #ff4081;
      text-align: center;
    }
	
	h2 {
		color: #f0f0f0
		text-align: center;
	}
    
    .comment-form, .comments-section, .contact-section {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    
    label {
      font-weight: bold;
      color: #ff4081;
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="text"], textarea {
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
    
    .comment {
      border-bottom: 1px solid #ff4081;
      padding-bottom: 10px;
      margin-bottom: 10px;
    }
    
    .comment:last-child {
      border-bottom: none;
    }
    
    .contact-section p {
      margin: 10px 0;
    }
    
    .contact-section a {
      color: #ff4081;
      text-decoration: none;
    }
    
    .contact-section a:hover {
      text-decoration: underline;
    }
    
    .social-media a {
      margin: 0 10px;
      color: #ff4081;
      text-decoration: none;
    }
    
    .social-media a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<header>
  <h2>Comments</h2>
</header>
  
<nav>
  <ul>
    <li><a href="index1.php">Home</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="education.php">Education</a></li>
    <li><a href="passion.php">Passion</a></li>
    <li><a href="calculation.php">Calculation</a></li>
  </ul>
</nav>
  
<main>
  <h1>Leave a Comment</h1>
  <div class="comment-form">
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" rows="4" required></textarea>
      
      <button type="submit">Submit Comment</button>
    </form>
  </div>

  <div class="comments-section">
    <h2>Comments</h2>
    <?php
    $commentsFile = 'comments.txt';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        
        $newComment = "Name: $name\nComment: $comment\n---\n";
        
        file_put_contents($commentsFile, $newComment, FILE_APPEND);
    }
    
    if (file_exists($commentsFile)) {
        $comments = file($commentsFile, FILE_IGNORE_NEW_LINES);
        $comments = array_reverse($comments);
        foreach ($comments as $line) {
            if ($line === "---") {
                echo "<hr>";
            } else {
                echo "<p class='comment'>$line</p>";
            }
        }
    } else {
        echo "<p>No comments yet.</p>";
    }
    ?>
  </div>

  <div class="contact-section">
    <h2>Contact Me</h2>
    <p>Email: <a href="mailto:your.email@example.com">qkhairulnizam@gmail.com</a></p>
    <p>Phone: <a href="tel:+1234567890">0122996471</a></p>
    <div class="social-media">
      <h3>Follow Me</h3>
      <a href="https://www.instagram.com/qutrenn?igsh=MTl3bG5jOHNuczV6eQ%3D%3D&utm_source=qr" target="_blank">Instagram</a>
    </div>
  </div>
</main>

</body>
</html>

