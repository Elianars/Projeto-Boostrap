<?php
$servername =  "localhost";
$username = "root";
$password = "";
$database = "fseletro";
// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$conn) {
    die("A conexão ao Banco de Dados falhou: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="./js/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Produtos - Full Stack Eletro</title>
</head>
<body>
  <!-- Menu -->
  <?php 
    include_once('menu.html') 
  ?>
  <header class="d-flex justify-content-center">
  <h1>Produtos</h1>
</header>

  <!--Iniciando os Produtos-->
  <main class=" container-fluid">
    <div class="dropdown d-flex justify-content-center p-5">
        <a class="btn dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu border-0 rounded" aria-labelledby="dropdownMenuLink">
          <ul>
            <li  class="dropdown-item" onclick="exibirTodos('todos')">Todos(12)</li>
            <li  class="dropdown-item" onclick="exibirCategoria('geladeira')">Geladeiras(3)</li>
            <li  class="dropdown-item" onclick="exibirCategoria('fogao')">Fogões(2)</li>
            <li  class="dropdown-item" onclick="exibirCategoria('microondas')">Microondas(3)</li>
            <li  class="dropdown-item" onclick="exibirCategoria('lavadora')">Lavadora de Roupas(2)</li>
            <li  class="dropdown-item" onclick="exibirCategoria('lavalouca')">Lava Louças(2)</li>
          </ul>
      </div>
    </div>
    <section class="row d-flex justify-content-center mx-1">
      <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
          while($rows = $result->fetch_assoc()){
      ?>
            <div class="text-center boxProduto col-lg-3 col-md-4 col-sm-6 mx-auto" style="display: block;" id="<?php echo $rows["categoria"]; ?>" >
              <div class="box_img">
                <img src="<?php echo $rows["imagem"]; ?>" alt="imagens" width="150px" onclick="destaque(this)">
              </div>
              <br/>
              <p><?php echo $rows["descricao"]; ?></p>
              <hr/>
              <p> <del>R$ <?php echo $rows["preco"]; ?></del></p>
              <p style="color: red;">R$ <?php echo $rows["precofinal"]; ?></p>
            </div>
        <?php
          }
        }else{
          echo "Nenhum produto cadastrado!!!";
        }
        ?>            
           
    </section>
  </main>
 
  <?php 
    include('rodape.html');
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

