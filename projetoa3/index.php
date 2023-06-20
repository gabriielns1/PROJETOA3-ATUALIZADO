<?php
session_start();
?>
<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url('https://get.wallhere.com/photo/ai-art-illustration-planet-eyes-nebula-space-2226284.jpg'); 
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
    color: white;
  }
  center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 10px;
  }
  .greeting {
    margin-bottom: 10px;
    font-size: 25px;
    color: white;
  }
  a {
    text-decoration: none;
    color: white;
    display: block;
    margin-bottom: 10px;
  }
  .blue-button {
    background-color: blue;
    padding: 8px 16px;
    border-radius: 4px;
    color: white;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 10px;
  }
  
  .red-button {
    background-color: red;
    padding: 8px 16px;
    border-radius: 4px;
    color: white;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 10px;
  }
</style>
<html>
<body>
<center>
    <div class="greeting">
        Olá, <?php
        if (isset($_SESSION['nome']) == null) {
            echo "visitante";
        } else {
            echo $_SESSION['nome'];
        }
        ?>
    </div>
    <?php if (isset($_SESSION['nome']) == null) { ?>
        <a href="login.php" class="blue-button">Voltar a tela inicial</a>
    <?php } else { ?>
        <?php if ($_SESSION['nome'] === 'admin') { ?>
            <a href="cadastrar.php">Cadastrar</a>
            <a href="listar.php">Lista de Usuários</a>
        <?php } ?>
        <a href="alterarsenha.php">Alterar Senha</a>
        <a href="logout.php" class="red-button">Sair</a>
    <?php } ?>
</center>
</body>
</html>
