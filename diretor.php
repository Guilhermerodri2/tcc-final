<!DOCTYPE html>
<html>
  <head>
    <title>Sistema Acadêmico</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
  </head>
  <body>
    <div class="container">
      <h1>Sistema Acadêmico</h1>
      <h2>Diretor</h2>
      <form action="add_grades.php" method="post">
        <label for="aluno">Aluno:</label>
        <select name="aluno" id="aluno">
          <option value="1">João da Silva</option>
          <option value="2">Maria Santos</option>
          <option value="3">Pedro Alves</option></select
        ><br /><br />
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" /><br /><br />
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" /><br /><br />
        <input type="number" name="nota3" id="nota3" /><br /><br />
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota4" id="nota4" /><br /><br />
        <label for="freq">Frequência:</label>
        <input type="number" name="freq" id="freq" /><br /><br />
        <input type="submit" value="Adicionar Notas" />
        <div class="footer">

<div class="col-md-4">
    <h3>Contato</h3>
    <p>Telefone: (22) 2723-1104</p>
    <p>Email: contato@iepa.com</p>
    <p>Endereço: Rua Avenida pelinca, 338 - Campos dos Goytacazes/Rj</p>
</div>
<div class="col-md-4">
    <h3>Redes Sociais</h3>
    <a href="#"><img src="imagens/face.jpg" width=50><i class="fab fa-facebook-square"></i></a>
    <a href="#"><img src="imagens/twi.jpg" width=50><i class="fab fa-twitter-square"></i></a>
    <a href="#"><img src="imagens/insta.jpg" width=50><i class="fab fa-instagram-square"></i></a>
</div>
<div class="col-md-4">
    <h3>Links Úteis</h3>
    <ul class="links-uteis">
        <li><a href="#">Política de Privacidade</a></li>
        <li><a href="#">Termos de Uso</a></li>
        <li><a href="#">FAQ</a></li>
    </ul>
</div>

</div>
</footer>
      </form>
    </div>
  </body>
  <?php
// Conexão com o banco de dados
$conn = mysqli_connect('localhost', 'usuario', 'senha', 'sistema_academico');

// Verifica se a conexão foi bem sucedida
if (!$conn) {
	die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

// Obtém os valores enviados pelo formulário
$aluno = $_POST['aluno'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];
$freq = $_POST['freq'];

// Insere os dados no banco de dados
$sql = "INSERT INTO notas (aluno, nota1, nota2, freq) VALUES ('$aluno', '$nota1', '$nota2', '$nota3, '$nota4, '$freq')";
if (mysqli_query($conn, $sql)) {
	echo "Notas adicionadas com sucesso!";
} 
else {
	echo "Erro ao adicionar notas: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
</html>
