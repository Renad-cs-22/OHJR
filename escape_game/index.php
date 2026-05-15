<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Escape Room</title>
    <style>
        /* assets/css/style.css */
        body {
            margin: 0;
            padding: 1px;
            font-family: Arial, sans-serif;
            background: url('https://positivethinking.tech/wp-content/uploads/2022/02/CoverYoutube_MotionCyberSecurity.png') no-repeat center center;
            background-size: cover;
            color:rgb(255, 255, 255);
            min-height: 100vh;
        }

        .landing-container {
            text-align: center;
            margin-top: 41vh;
            background: rgb(37 128 159 / 71%);
            padding: 20px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 10px 20px;
            background: #d72341;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #d72341;
        }

        .btn1
        {
            position: absolute;
            top: 6%;
            right: 18%;
            padding: 10px 20px;
            background: #e43f5a;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

    </style>
</head>
<body>
    <div class="landing-container">
        <h1>Cyber Escape Room</h1>
        <p>Test your cybersecurity knowledge and escape in time!</p>
        
        <?php
        // check if session['login']
        session_start();
        if (isset($_SESSION['login'])) {
        ?>
        <a href="levels.php" class="btn">Start the Game</a>
        <a href="backend/logout.php" class="btn1">Logout</a>
        <?php
        }else{
        ?>
        <a href="login.php" class="btn">Start the Game</a>
        <a href="login.php" class="btn1">Login Now</a>
        <?php
        }
        ?>
    </div>
</body>
</html>
