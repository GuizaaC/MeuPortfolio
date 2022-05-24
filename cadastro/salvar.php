<?php 

$sql="INSERT INTO Cliente
( Nome_Cliente, Endereço_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente)
VALUES(, ".$_POST["Nome_Cliente"].", ".$_POST["Endereço_Cliente"].",".$_POST["Telefone_Cliente"]." , ".$_POST["Cpf_Cliente"].", ".$_POST["Data_Nascimento_Cliente"].");";
con.exec ($sql);
$resultados = mysql_query($conexao, $sql);//executa o comando e guarda na variavel resultado.. 

?>







<?php 

$sql="INSERT INTO Cliente
( Nome_Cliente, Endereço_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente)
VALUES(, ".$_POST["Nome_Cliente"].", ".$_POST["Endereço_Cliente"].",".$_POST["Telefone_Cliente"]." , ".$_POST["Cpf_Cliente"].", ".$_POST["Data_Nascimento_Cliente"].");";
con.exec ($sql);
?>
