<?php
$door = $_GET['door'] ?? '';

switch($door) {
    case '1':
        $story = "You fall into eternal darkness as the door slams shut behind. The only light beneath reveals a endless abyss. Fear not, you're not alone, for the poor traped souls that shall keep you company...";
        $bg_color = "#1a0505";
        $text_shadow = "2px 2px 4px #ff0000";
        break;
    case '2':
        $story = "There is a ghost behind the door. It's a friendly ghost, but it's still a ghost. It's been waiting for you. It's been waiting for a long time...";
        $bg_color = "#0a0a14";
        $text_shadow = "2px 2px 4px #800080";
        break;
    case '3':
        $story = "Inside, its a abandoned asylum... The walls are covered in blood and the screams of the damned echo through the halls.";
        $bg_color = "#0a1414";
        $text_shadow = "2px 2px 4px #00ffff";
        break;
    default:
        $story = "hi adventurer, you have come to the manor of shadows :D";
        $bg_color = "#0a0a0a";
        $text_shadow = "2px 2px 4px #ff0000";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manor of Shadows</title>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Creepster', cursive;
            background-color: <?php echo $bg_color; ?>;
            color: #ff0000;
            background-image: radial-gradient(circle, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.8) 100%);
            transition: all 0.5s ease;
        }
        .story {
            max-width: 600px;
            padding: 30px;
            text-align: center;
            background-color: rgba(0,0,0,0.7);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255,0,0,0.2);
            border: 2px solid #2a1810;
            animation: pulse 2s infinite;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 30px;
            text-shadow: <?php echo $text_shadow; ?>;
        }
        p {
            font-size: 1.5em;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            background-color: #2a1810;
            color: #ff0000;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .back:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(255,0,0,0.5);
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="story">
        <h1>Manor of Shadows</h1>
        <p><?php echo $story; ?></p>
        <a href="index.html" class="back">Escape</a>
    </div>
</body>
</html>