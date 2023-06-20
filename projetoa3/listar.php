<?php
session_start();
?>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
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
  div {
    background-color: rgba(0, 0, 0, 0.9);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: white;
  }
  a {
    text-decoration: none;
    color: white;
    display: block;
    margin-top: 20px;
    text-align: center;
  }
  .red-button {
    background-color: red;
    padding: 8px 16px;
    border-radius: 4px;
    color: white;
    text-decoration: none;
    display: inline-block;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    border: 1px solid white;
    padding: 5px 10px;
    border-radius: 4px;
    margin-bottom: 10px;
  }
</style>
<body>
    <div>
        <?php
        include("conexao.php");

        $query = "SELECT nome FROM login";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {
            echo "<h1>Lista de Usuários Cadastrados</h1>";
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<li>" . $row['nome'] . "</li>";
            }
            echo "</ul>"; 
        } else {
            echo "Erro ao recuperar os usuários cadastrados.";
        }

        mysqli_close($conexao);
        ?>
        <a href="index.php" class="red-button">Voltar</a>
    </div>
</body>
