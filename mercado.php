<?php
 echo" <h2> Banco de Dados </h2>";
  //Tipo do banco- mysql
  //Host -localhost
  //Banco de dados-aulapdo
  //Senha-
  $conexao = new PDO("mysql:host=localhost;dbname=bembarato","root","");

  //exibe as informações e os tipos dela
  //var_dump($conexao);

  $select = "SELECT * FROM estoque";

  $resultado = $conexao->query($select);

  $consulta = $resultado->fetchAll();

  //echo"<pre>";
  //var_dump($consulta);

    echo '<ul>';
  foreach($consulta as $linha){
    echo '<hr><pre>';
    echo '<li>'.$linha ['nome'].'</li>';
    echo '<p>'.$linha ['marca'].'</p>';
    echo '<p>'.$linha ['quantidade'].'</p>';
    echo '<p>'.$linha ['peso'].'</p>';
    echo '<p>'.$linha ['codigo'].'</p>';
    echo '<p>'.$linha ['validade'].'</p>';
    echo '<p>'.$linha ['preço'].'</p>';
}
echo '</ul>';

  
  

 ?>