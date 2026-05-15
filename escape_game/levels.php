<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Level</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('../assets/images/level-background.jpg') no-repeat center center/cover;
            font-family: 'Arial', sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .level-container {
            display: flex;
            gap: 20px;
        }

        .level-box {
            background: rgba(0, 0, 0, 0.8);
            border: 2px solid #444;
            border-radius: 15px;
            width: 250px;
            height: 350px;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            transition: transform 0.3s, background 0.3s;
            position: relative;
            overflow: hidden;
        }

        .level-box:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ff6b6b, #f7b733);
        }

        .level-box h2 {
            font-size: 2rem;
            margin: 20px 0;
            letter-spacing: 2px;
        }

        .level-box p {
            font-size: 1rem;
            margin: 10px 0;
            color: #ddd;
        }

        .level-box .icon {
            font-size: 5rem;
            margin-top: 30px;
            color: #f7b733;
        }

        .level-box .difficulty {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
        }

        .level-box.easy {
            border-color: #4caf50;
        }

        .level-box.easy:hover {
            background: linear-gradient(135deg, #4caf50, #8bc34a);
        }

        .level-box.medium {
            border-color: #ff9800;
        }

        .level-box.medium:hover {
            background: linear-gradient(135deg, #ff9800, #ffc107);
        }

        .level-box.hard {
            border-color: #f44336;
        }

        .level-box.hard:hover {
            background: linear-gradient(135deg, #f44336, #e57373);
        }

        .start-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 1rem;
            background: #f7b733;
            color: black;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .start-button:hover {
            background: #ff6b6b;
            color: white;
        }
    </style>
</head>
<body>
    <div class="level-container">
        <!-- Easy Level -->
        <div class="level-box easy" onclick="startLevel('room1')">
            <h2>Easy</h2>
            <div class="icon">😄</div>
            <p>Perfect for beginners. Start simple and have fun!</p>
            <div class="difficulty">Difficulty: Easy</div>
        </div>

        <!-- Medium Level -->
        <div class="level-box medium" onclick="startLevel('room2')">
            <h2>Medium</h2>
            <div class="icon">🤔</div>
            <p>Step up your game with intermediate challenges.</p>
            <div class="difficulty">Difficulty: Medium</div>
        </div>

        <!-- Hard Level -->
        <div class="level-box hard" onclick="startLevel('room3')">
            <h2>Hard</h2>
            <div class="icon">🔥</div>
            <p>Ready for a real challenge? Test your skills!</p>
            <div class="difficulty">Difficulty: Hard</div>
        </div>
    </div>

    <script>
        function startLevel(level) {
            // Redirect to the respective level's page
            window.location.href = `${level}.php`;
        }
    </script>
</body>
</html>
