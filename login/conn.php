<?php 

$conexao = mysqli_connect('localhost', 'username', 'password'); 
if (!$conexao) { 
die('Could not connect: ' . mysqli_error()); 
//echo erro; 
} 
echo 'Connected successfully'; 

/*
while($dados=mysqli_fetch_array($result)) {//O laço vai ocorrer ENQUANTO houver registros da busca realizada. Observe que guardamos os dados na variável $dados

$telefone = $dados[“telefone”];//Pega na variável dados o valor correspondente ao campo telefone na tabela aluno do banco de dados

}//fecha o laço
echo $telefone; */

?>