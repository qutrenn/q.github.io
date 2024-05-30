<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Passion</title>
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
            position: fixed; /* Fix the navigation menu at the top */
            top: 0; /* Align the navigation menu to the top of the viewport */
            z-index: 1000; /* Ensure navigation menu is above other content */
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
            margin-top: 120px; /* Adjust main content position to accommodate the fixed navigation menu */
        }
        h1 {
            color: #ff4081;
            text-align: center;
            margin-top: 0; /* Adjust margin to align with navigation menu */
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #333;
            line-height: 1.6;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            color: #333;
        }
    </style>
</head>
<body>

<header>
    <h2>My Passion</h2> <!-- Moved "My Passion" heading here -->
</header>
    
<nav>
    <ul>
        <li><a href="index1.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="comment.php">Comment</a></li>
        <li><a href="calculation.php">Calculation</a></li>
    </ul>
</nav>
    
<main>
    <div class="container">
        <h1>My Passion</h1>
        <p>
            In my free time, I enjoy myself playing games. My favourite games ? Here are my top 2 that I play all the time !!
        </p>
        <ul>
            <li><h3><br>PUBG Mobiles</h3></li>
            <p>I usually play this game whenever I am bored or even when I am taking a break from completing my work. I have been playing this game for more than 5 years already. I really enjoy it !! I usually play this game with random people but don't worry, it is safe !!!</p>
            <p><img height="150" width="300" src="image/pubg.jpg" alt="PUBG Mobiles"></p>

            <li><h4><br>Cooking Madness</h4></li>
            <p>I just downloaded this game less than 3 days and I have reached level 100. Each level needs to play 3 times, so in total I actually have played 300 levels in 3 days !!</p>
            <p><img height="150" width="300" src="image/CM.jpg" alt="Cooking Madness"></p>
        </ul>
    </div>
</main>

</body>
</html>




