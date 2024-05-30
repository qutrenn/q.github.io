<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color:#ff6699;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .image-container {
            margin: 10px;
        }
        .image-container img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <header>
        <h1>Image Gallery</h1>
    </header>
    <main>
        <div class="image-container">
            <img src="image1.jpg" alt="Image 1">
        </div>
        <div class="image-container">
            <img src="image2.jpg" alt="Image 2">
        </div>
        <div class="image-container">
            <img src="image3.jpg" alt="Image 3">
        </div>
        <!-- Add more image containers as needed -->
    </main>
</body>
</html>
