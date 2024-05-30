<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Background</title>
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
            max-width: 800px;
            margin: auto;
            flex: 1;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2{
			color: #f0f0f0;
		}			
		
		h1 {
            color: #ff4081;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<header>
    <h2>Education Background</h2>
</header>

<nav>
    <ul>
        <li><a href="index1.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="passion.php">Passion</a></li>
        <li><a href="comment.php">Comment</a></li>
		<li><a href="calculation.php">Calculation</a></li>
    </ul>
</nav>

<main>
    <h1>My Education Background</h1>
    <table>
        <thead>
            <tr>
                <th>Level</th>
                <th>School</th>
                <th>Location</th>
                <th>Details</th>
                <th>Year of Graduation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Preschool</td>
                <td>Tadika Pintar Cahaya Cemerlang</td>
                <td>Kuala Lumpur</td>
                <td></td>
                <td>2009</td>
            </tr>
            <tr>
                <td>Primary School</td>
                <td>SK Taman Midah 1</td>
                <td>Kuala Lumpur</td>
                <td>UPSR: 5A</td>
                <td>2015</td>
            </tr>
            <tr>
                <td>Secondary School</td>
                <td>SMK Sri Permaisuri</td>
                <td>Kuala Lumpur</td>
                <td>PT3: 7A 1B 1C</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Secondary School</td>
                <td>MRSM Merbok</td>
                <td>Kedah</td>
                <td>SPM: 1A+ 4A 4B</td>
                <td>2021</td>
            </tr>
            <tr>
                <td>Foundation in Engineering</td>
                <td>UiTM Dengkil</td>
                <td>Selangor</td>
                <td>Graduated with CGPA 3.51</td>
                <td>2022</td>
            </tr>
        </tbody>
    </table>
</main>

</body>
</html>
