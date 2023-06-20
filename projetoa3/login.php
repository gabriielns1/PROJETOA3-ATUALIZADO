<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            background-image: url('https://get.wallhere.com/photo/ai-art-illustration-planet-eyes-nebula-space-2226284.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        #login {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 5px;
            color: white;
        }

        #login input[type="text"],
        #login input[type="password"] {
            padding: 10px;
            border: none;
            border-radius: 10px;
            margin-bottom: 10px;
            color: black;
            background-color: white;
        }

        #login input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            display: block; 
            margin: 0 auto; 
        }

        #login input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <div id="login">
            <h1>LOGIN</h1>
            <form action="logado.php" method="POST">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" required><br>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>
                
                <input type="submit" value="Entrar">
            </form>
        </div>
    </center>
</body>
</html>
