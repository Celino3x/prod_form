<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Gravação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/materialize.css">
 </head>

<?php
  //Variáveis
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $mail = $_POST['mail'];

  //Tratamento Data da Gravação
  $capturaData = $_POST['datagravacao'];
  $explodeData = (explode("-", $capturaData));
  $datagravacao = "$explodeData[2]/$explodeData[1]/$explodeData[0]";

  $frente = $_POST['frente'];
  $local = $_POST['local'];
  $cenario = $_POST['cenario'];
  $roteiro = $_POST['roteiro'];
  $totalcenas = $_POST['totalcenas'];
  $totalcenasgravadas = $_POST['totalcenasgravadas'];
  $totalcenaspenduradas = $_POST['totalcenaspenduradas'];

  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //QUADRO DE HORÁRIO

  $hrchegadaprevisto1 = $_POST['hrchegadaprevisto1'];
  $hrchegadareal1 = $_POST['hrchegadareal1'];
  $hrchegadaprevisto2 = $_POST['hrchegadaprevisto2'];
  $hrchegadareal2 = $_POST['hrchegadareal2'];
  $hrchegadaprevisto3 = $_POST['hrchegadaprevisto3'];
  $hrchegadareal3 = $_POST['hrchegadareal3'];
  $hrchegadaprevisto4 = $_POST['hrchegadaprevisto4'];
  $hrchegadareal4 = $_POST['hrchegadareal4'];
  $hrchegadaprevisto5 = $_POST['hrchegadaprevisto5'];
  $hrchegadareal5 = $_POST['hrchegadareal5'];
  $hrchegadaprevisto6 = $_POST['hrchegadaprevisto6'];
  $hrchegadareal6 = $_POST['hrchegadareal6'];
  $hrchegadaprevisto7 = $_POST['hrchegadaprevisto7'];
  $hrchegadareal7 = $_POST['hrchegadareal7'];
  $hrchegadaprevisto8 = $_POST['hrchegadaprevisto8'];
  $hrchegadareal8 = $_POST['hrchegadareal8'];

  //CHECKLIST EQUIPE

  $nomediretor = $_POST['nomediretor'];
  $hrdiretor = $_POST['hrdiretor'];
  $nomeassdirecao = $_POST['nomeassdirecao'];
  $hrassdirecao = $_POST['hrassdirecao'];
  $nomefoto = $_POST['nomefoto'];
  $hrfoto = $_POST['hrfoto'];
  $nomecoordprod = $_POST['nomecoordprod'];
  $hrcoordprod = $_POST['hrcoordprod'];
  $nomeassprod = $_POST['nomeassprod'];
  $hrassprod = $_POST['hrassprod'];
  $nomeoperacao = $_POST['nomeoperacao'];
  $hroperacao = $_POST['hroperacao'];
  $nomefigurino = $_POST['nomefigurino'];
  $hrfigurino = $_POST['hrfigurino'];
  $nomemaquiagem = $_POST['nomemaquiagem'];
  $hrmaquiagem = $_POST['hrmaquiagem'];
  $nomecontiuidade = $_POST['nomecontiuidade'];
  $hrcontinuidade = $_POST['hrcontinuidade'];
  $nomeefeito = $_POST['nomeefeito'];
  $hrefeito = $_POST['hrefeito'];
  $nomecenografia = $_POST['nomecenografia'];
  $hrcenografia = $_POST['hrcenografia'];
  $nomearte = $_POST['nomearte'];
  $hrarte = $_POST['hrarte'];

  //CHECKLIST PEDIDO

  $nrseguranca = $_POST['nrseguranca'];
  $nrlimpeza = $_POST['nrlimpeza'];
  $nrbombeiro = $_POST['nrbombeiro'];
  $nruti = $_POST['nruti'];
  $nrfumace = $_POST['nrfumace'];
  $nrfig = $_POST['nrfig'];
  $nrbanheiro = $_POST['nrbanheiro'];
  $nrrefeicao = $_POST['nrrefeicao'];

  if($_POST[$nrseguranca] == "Sim"){
    $nrsegurancamsg ="Sim";
  } else{
    $nrsegurancamsg ="Não";
  }

  //APROVEITAMENTO

  $cenasgravadas = $_POST['cenasgravadas'];
  $cenaspenduradas = $_POST['cenaspenduradas'];

  //OCORRÊNCIAS

  $ocorrencia = $_POST['ocorrencia'];

  //Compo E-mail
  $arquivo = "
    <html>
   
    
     
    <center><img src='http://cbrj.ddns.net/form-prod/img/logo.png' alt='Logo Casablanca'></center>
    <center><h2>Relatório de Gravação | Casablanca</h2></center>
    <p><b>Nome: </b>$nome</p>
    <p><b>E-mail: </b>$mail</p>
    <p><b>Data de Gravação: </b>$datagravacao</p>
    <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>

      <table style=\"border:1px solid; border-collapse: collapse; \"  width='100%' table-layout='fixed'>

     
      <thead>
        <tr>
          <th style=\"background-color: #474545; color: #FFF;\">Nome</th>
          <th style=\"background-color: #474545; color: #FFF;\">Frente</th>
          <th style=\"background-color: #474545; color: #FFF;\">Local</th>
        </tr>
      </thead>

      <tbody>
        <tr style=\"border:1px solid #CCC;\">
          <td style=\"border:1px solid #CCC;\">$nome $sobrenome</td>
          <td style=\"border:1px solid #CCC;\">$frente</td>
          <td style=\"border:1px solid #CCC;\">$local</td>
        </tr>
      </tbody>

    <thead>
      <tr>
        <th style=\"background-color: #474545; color: #FFF;\">Cenário</th>
        <th style=\"background-color: #474545; color: #FFF;\">Roteiro</th>
        <th style=\"background-color: #474545; color: #FFF;\">Data de Gravação</th>
      </tr>
    </thead>

    <tbody>
      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">$cenario</td>
        <td style=\"border:1px solid #CCC;\">$roteiro</td>
        <td style=\"border:1px solid #CCC;\">$datagravacao</td>
      </tr>
    </tbody>

    <thead>
      <tr style=\"border:1px solid #CCC;\">
        <th style=\"background-color: #474545; color: #FFF;\">Total de Cenas</th>
        <th style=\"background-color: #474545; color: #FFF;\">Cenas Gravadas</th>
        <th style=\"background-color: #474545; color: #FFF;\">Cenas Penduradas</th>
      </tr>
    </thead>

    <tbody>
    <tr style=\"border:1px solid #CCC;\">
      <td style=\"border:1px solid #CCC;\">$totalcenas</td>
      <td style=\"border:1px solid #CCC;\">$totalcenasgravadas</td>
      <td style=\"border:1px solid #CCC;\">$totalcenaspenduradas</td>
    </tr>
    </tbody>

      <thead>
        <tr>
          <th style=\"background-color: #474545; color: #FFF;\">Quadro de Horários</th>
          <th style=\"background-color: #474545; color: #FFF;\">Horário Previsto</th>
          <th style=\"background-color: #474545; color: #FFF;\">Horário Real</th>
        </tr>
      </thead>
      <tbody>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Horário de Chegada</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto1</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal1</td>
       </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Horário de Montagem</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto2</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal2</td>
      </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Horário de Ensaio</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto3</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal3</td>
      </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Horário de Gravando</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto4</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal4</td>
      </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Horário de Desmontagem</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto5</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal5</td>
      </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Horário Final</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto6</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal6</td>
      </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Saída da Locação</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto7</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal7</td>
      </tr>

      <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Chegada na Locação</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadaprevisto8</td>
        <td style=\"border:1px solid #CCC;\">$hrchegadareal8</td>
      </tr>

      </tbody>

      <thead>
        <tr>
          <th colspan='3' style=\"background-color:#2b2003; color: #FFF;\">CHECKLIST EQUIPE</th>
        </tr>
        <tr>
          <th style=\"background-color: #474545; color: #FFF;\">Função</th>
          <th style=\"background-color: #474545; color: #FFF;\">Nome</th>
          <th style=\"background-color: #474545; color: #FFF;\">Hora de Chegada</th>
       </tr>
      </thead>

      <tbody>
       <tr style=\"border:1px solid #CCC;\">
          <td style=\"border:1px solid #CCC;\">Diretor</td>
          <td style=\"border:1px solid #CCC;\">$nomediretor</td>
          <td style=\"border:1px solid #CCC;\">$hrdiretor</td>
        </tr>
      </tbody>

      <tbody>
      <tr style=\"border:1px solid #CCC;\">
         <td style=\"border:1px solid #CCC;\">Ass. Direção</td>
         <td style=\"border:1px solid #CCC;\">$nomeassdirecao</td>
         <td style=\"border:1px solid #CCC;\">$hrassdirecao</td>
       </tr>
     </tbody>

     <tbody>
     <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Fotografia</td>
        <td style=\"border:1px solid #CCC;\">$nomefoto</td>
        <td style=\"border:1px solid #CCC;\">$hrfoto</td>
      </tr>
    </tbody>

    <tbody>
    <tr style=\"border:1px solid #CCC;\">
       <td style=\"border:1px solid #CCC;\">Coord. de Produção</td>
       <td style=\"border:1px solid #CCC;\">$nomecoordprod</td>
       <td style=\"border:1px solid #CCC;\">$hrcoordprod</td>
     </tr>
   </tbody>

   <tbody>
   <tr style=\"border:1px solid #CCC;\">
      <td style=\"border:1px solid #CCC;\">Ass. de Produção</td>
      <td style=\"border:1px solid #CCC;\">$nomeassprod</td>
      <td style=\"border:1px solid #CCC;\">$hrassprod</td>
    </tr>
  </tbody>

  <tbody>
  <tr style=\"border:1px solid #CCC;\">
     <td style=\"border:1px solid #CCC;\">Operações</td>
     <td style=\"border:1px solid #CCC;\">$nomeoperacao</td>
     <td style=\"border:1px solid #CCC;\">$hroperacao</td>
   </tr>
 </tbody>

 <tbody>
 <tr style=\"border:1px solid #CCC;\">
    <td style=\"border:1px solid #CCC;\">Figurino</td>
    <td style=\"border:1px solid #CCC;\">$nomefigurino</td>
    <td style=\"border:1px solid #CCC;\">$hrfigurino</td>
  </tr>
</tbody>

<tbody>
<tr style=\"border:1px solid #CCC;\">
   <td style=\"border:1px solid #CCC;\">Maquiagem</td>
   <td style=\"border:1px solid #CCC;\">$nomemaquiagem</td>
   <td style=\"border:1px solid #CCC;\">$hrmaquiagem</td>
 </tr>
</tbody>

<tbody>
<tr style=\"border:1px solid #CCC;\">
   <td style=\"border:1px solid #CCC;\">Continuista</td>
   <td style=\"border:1px solid #CCC;\">$nomecontiuidade</td>
   <td style=\"border:1px solid #CCC;\">$hrcontinuidade</td>
 </tr>
</tbody>

<tbody>
<tr style=\"border:1px solid #CCC;\">
   <td style=\"border:1px solid #CCC;\">Produção de Efeitos</td>
   <td style=\"border:1px solid #CCC;\">$nomeefeito</td>
   <td style=\"border:1px solid #CCC;\">$hrefeito</td>
 </tr>
</tbody>

<tbody>
<tr style=\"border:1px solid #CCC;\">
   <td style=\"border:1px solid #CCC;\">Cenografia</td>
   <td style=\"border:1px solid #CCC;\">$nomecenografia</td>
   <td style=\"border:1px solid #CCC;\">$hrcenografia</td>
 </tr>
</tbody>

<tbody>
<tr style=\"border:1px solid #CCC;\">
   <td style=\"border:1px solid #CCC;\">Arte</td>
   <td style=\"border:1px solid #CCC;\">$nomearte</td>
   <td style=\"border:1px solid #CCC;\">$hrarte</td>
 </tr>
</tbody>

<thead>
    <tr>
    <th colspan='3' style=\"background-color:#2b2003; color: #FFF;\">CHECKLIST PEDIDOS</th>
    </tr>
</thead>
      
<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Segurança</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrseguranca</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Limpeza</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrlimpeza</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Bombeiro</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrbombeiro</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">UTI</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nruti</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Fumacê</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrfumace</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">FIG</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrfig</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Banheiro Químico</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrbanheiro</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC;\">Refeição</td>
        <td colspan='2' style=\"border:1px solid #CCC;\">$nrrefeicao</td>
    </tr>
</tbody>

<thead>
    <tr>
    <th colspan='3' style=\"background-color:#2b2003; color: #FFF;\">CHECKLIST APROVEITAMENTO</th>
    </tr>
</thead>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC; font-weight: bold;\">CENAS GRAVADAS</td>
        <td colspan='2'  style=\"border:1px solid #CCC;\">$cenasgravadas</td>
    </tr>
</tbody>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td style=\"border:1px solid #CCC; font-weight: bold;\">CENAS PENDURADAS</td>
        <td colspan='2'  style=\"border:1px solid #CCC;\">$cenaspenduradas</td>
    </tr>
</tbody>

<thead>
    <tr>
    <th colspan='3' style=\"background-color:#2b2003; color: #FFF;\">OCORRÊNCIAS</th>
    </tr>
</thead>

<tbody>
    <tr style=\"border:1px solid #CCC;\">
        <td colspan='3'  style=\"border:1px solid #CCC;\">$ocorrencia</td>
    </tr>
</tbody>

      </table>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "p.correia@hotmail.com, pedro.correia@lynxfilmes.com.br, cbrjtecnologia@gmail.com, octavio.santos@lynxfilmes.com.br, $mail";
  //$destino = "fabiola26prod@gmail.com, ari@teleimage.com.br, fabiotavora@cbsp.com.br, mayra@cbsp.com.br, newtonambar@cbsp.com.br, cbrjtecnologia@gmail.com, renataprodcb@gmail.com, patriciaiglesias.cb@gmail.com, $mail";
  $assunto = "Relatório de Gravação de $nome $sobrenome | Casablanca";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
  $headers .= "From: $nome <$mail>";
  /* Outra alternativa é adicionar através do header como cópia */
  /* $headers .= "\r\n" . 'Cc: segundo-email@provedor.com' . "\r\n"; */


  $messagemail = "Formulário enviado com Sucesso!";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";


  if(mail($destino, $assunto, $arquivo, $headers)){
    echo "<script type='text/javascript'>alert('$messagemail');</script>";
   header('Location: email_enviado.php');
    
  }else{
    echo "<script type='text/javascript'>alert('teste');</script>";
    echo "<center><h2>Falha ao enviar formulário!</h2><center>";
    header('Location: index.php');
  }

  //mail($destino, $assunto, $arquivo, $headers);
  
?>