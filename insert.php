<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bembarato';
$conexao = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $password);

function InserirInformacoes($conexao, $nome, $marca, $quantidade, $peso, $codigo, $validade, $data_emissao, $preco)
{
  // $guardaInformacao = $nome.$marca.$quantidade.$peso.$codigo.$validade.$data_emissao.$preço;

  // $guarda = "INSERT INTO estoque (nome, marca, quantidade, peso, codigo, validade, data_emissao, preço) VALUES ('" .$nome."','".$marca."',".$quantidade.",'".$peso."','".$codigo."','".$validade."','".$data_emissao."',".$preço.")";


  $guarda = "INSERT INTO estoque (nome, marca, quantidade, peso, codigo, validade, data_emissao, preço) VALUES ( :nome, :marca, :quantidade, :peso, :codigo, :validade, :data_emissao, :preco)";

  $preparacao = $conexao->prepare($guarda);

  $preparacao->bindParam(":nome", $nome);
  $preparacao->bindParam(":marca", $marca);
  $preparacao->bindParam(":quantidade", $quantidade);
  $preparacao->bindParam(":peso", $peso);
  $preparacao->bindParam(":codigo", $codigo);
  $preparacao->bindParam(":validade", $validade);
  $preparacao->bindParam(":data_emissao", $data_emissao);
  $preparacao->bindParam(":preco", $preco);

  // $conexao->exec($guarda);
  $preparacao->execute();


}



InserirInformacoes($conexao, "Doritos", "PepsiCo", 1000, "200G", "1436978254628", "2025-05-10", "2023-11-25", 22.50);



?>