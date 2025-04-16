<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$id =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$qt_paginas =  rand(100, 1999);
$host_name = gethostname();

$idiomas = ['Português', 'Espanhol', 'Inglês'];
$idiomaSelecionado = $idiomas[array_rand($idiomas)];

$generos = ['Romance', 'Terror', 'Aventura'];
$generoSelecionado = $generos[array_rand($generos)];

$query = "INSERT INTO livros ( id, titulo, autor, editora, genero, paginas, idioma) VALUES ('$id' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$generoSelecionado', '$qt_paginas', '$idiomaSelecionado')";

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>