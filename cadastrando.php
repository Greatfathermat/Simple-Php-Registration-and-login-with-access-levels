<?php
include'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$formacao = $_POST['select_nivel_formacao'];
$unidade = $_POST['select_unidade_educador'];
$setor = $_POST['select_setor_educador'];
$disciplina = $_POST['select_disciplina_educador'];
$consulta = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
$linha = mysql_num_rows($consulta);

if ($linha==0)
{
  $sql = mysql_query("INSERT INTO usuarios(nome, email, senha, nivel_acesso, status,unidade,setor,formacao, disciplina) VALUES('$nome', '$email', '$senha', '4', 'Ativo', '$unidade', '$setor', '$formacao', '$disciplina')");
  echo "<script>alert('Cadastro feito com Sucesso');window.location.href='educador/light_dark/index.php';</script>";
//Educador não existe faça a inserção do mesmo

}

else
{
  echo "<script>alert('Cadastro Inválido');window.location.href='Cadastro.php';</script>";

 //Cadastro inválido

}

?>
