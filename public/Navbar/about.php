<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        p {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            line-height: 1.6;
            max-width: 600px;
            text-align: justify;
            letter-spacing: 0.5px;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        p::first-letter {
            font-size: 32px;
            font-weight: bold;
            color: #007bff;
        }

        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        .dark-mode p {
            background-color: #444;
            color: #ddd;
        }

        button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <button onclick="toggleMode()">Toggle Dark/Light Mode</button>

    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod laudantium consectetur molestiae, 
        corrupti nihil vitae veritatis unde cupiditate tenetur perspiciatis harum eligendi, in aliquid libero 
        a magni officiis iure ipsam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod laudantium 
        consectetur molestiae, corrupti nihil vitae veritatis unde cupiditate tenetur perspiciatis harum eligendi, 
        in aliquid libero a magni officiis iure ipsam.
    </p>

    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>

</body>
</html>
