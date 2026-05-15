<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background: url('https://www.nisum.com/hubfs/Nisum%20Knows/How%20Will%20Blockchain%20Strengthen%20Cybersecurity%20for%20Your%20Business/How%20Will%20Blockchain%20Strengthen%20Cybersecurity%20for%20Your%20Business.jpg') no-repeat center center;
            background-size: cover;
        }
        .form-container {
            width: 300px;
            margin: 15vh auto;
            text-align: center;
            background: #162447;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin-right: 13%;
        }

        .form-container h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #e43f5a;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #e43f5a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #d72341;
        }

        p a {
            color: #4ea8de;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <form action="backend/access.php" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login" class="btn">Login</button>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>
