<style>
        body{
            background-image: url('https://get.wallhere.com/photo/ai-art-illustration-planet-eyes-nebula-space-2226284.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        center{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 5px;
            border: none;
            outline: none;
            font-size: 13px;
            border-radius: 10px;
        }
        input[type=submit] {
            background-color: green;
            border: none;
            padding: 10px;
            width: 50%;
            border-radius: 10px;
            font-size: 13px;
            color: white;
        }
        input[type=submit]:hover {
            background-color: darkgreen;
            cursor: pointer;
        }
    </style>       
<html>
<body>
    <center>
      <h1>CADASTRO</h1>
  <form id="cadastro" action="cadastro.php" method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Login: <input type="text" name="login" required><br><br>
    Senha: <input type="password" name="senha" required><br><br>
    <input type="submit" id="cadastrar" value="cadastrar">
  </form>
    </center>
</body>
</html>
