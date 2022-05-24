<?php 
include_once "conn.php";

$sql="INSERT INTO Cliente3
( Nome_Cliente, Endereço_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente)
VALUES(, ".$_POST["Nome_Cliente"].", ".$_POST["Endereço_Cliente"].",".$_POST["Telefone_Cliente"]." , ".$_POST["Cpf_Cliente"].", ".$_POST["Data_Nascimento_Cliente"].");";
//con.exec ($sql);//
$resultados = mysqli_query($conexao, $sql);//Executa o comando e guarda na variável resultados.
echo "Salvo com sucesso";
//for($i=0;$i < mysql_num_rows($resultados);$i++)
?>