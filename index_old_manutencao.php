<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Gravação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/bootstrap-dark.min.css" />-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <!--<link rel="stylesheet" href="css/materialize.css">-->

</head>
<body>
    <div class="container">
        <center>
            <img src="img/logo.png" alt="Logo Casablanca">
            <h2>Relatório gravação</h2>
        </center>

        <form action="mail_enviado.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" name="nome" class="validate form-control" id="" placeholder="" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Sobrenome</label>
                <input type="text" name="sobrenome" class="validate form-control" id="" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">E-mail</label>
                <input type="email" name="mail"  class="validate form-control" id="" placeholder="" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Data de Gravação</label>
                <input type="date" name="datagravacao"  class="validate form-control" id="" required>
            </div>

            <label for="">Frente</label>

            <select  name="frente"  class="form-select frente" required aria-label="Default select example">
                <option selected>Selecione a Frente</option>
                <option value="1">Frente 1</option>
                <option value="2">Frente 2</option>
                <option value="3">Frente 3</option>
            </select>
            
            <label for="">Local</label>

            <select  name="local" required  class="form-select local" aria-label="Default select example">
                <option value="Externa">Externa</option>
                <option value="Estúdio D">Estúdio D</option>
                <option value="Estúdio E">Estúdio E</option>
                <option value="Estúdio F">Estúdio F</option>
                <option value="Estúdio G">Estúdio G</option>
                <option value="Estúdio H">Estúdio H</option>
                <option value="Estúdio I">Estúdio I</option>
                <option value="Estúdio J">Estúdio J</option>
                <option value="G1">G1</option>
                <option value="G2">G2</option>
                <option value="G3">G3</option>

            </select>

            <div class="mb-3">
                <label for="" class="form-label">Cenário</label>
                <input name="cenario" type="text" class="validate form-control" id="" placeholder="" >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Roteiro</label>
                <input name="roteiro" type="text" class="validate form-control" id="" placeholder="" >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Total de Cenas</label>
                <input name="totalcenas" type="number" class="validate form-control" id="" placeholder="" >
            </div>

            <div class="mb-3" >
                <label for="" class="form-label">Total de Cenas Gravadas</label>
                <input name="totalcenasgravadas" type="number" class="validate form-control" id=""  placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Total de Cenas Penduradas</label>
                <input name="totalcenaspenduradas" type="number" class="validate form-control" id=""  placeholder="">
            </div>

            <!--Chegada-->
       <br>
            <h5><i class="fas fa-hourglass-start"></i> Horário Chegada</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto1" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal1" class="validate form-control" id="" >
            </div>

            <!--Montagem-->
            <br>
            <h5><i class="fas fa-hammer"></i> Horário Montagem</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto2" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal2" class="validate form-control" id="" >
            </div>

            <!--Ensaio-->
            <br>
            <h5><i class="fas fa-theater-masks"></i> Horário Ensaio</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto3" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal3" class="validate form-control" id="" >
            </div>

            <!--Gravando-->
            <br>
            <h5><i class="fas fa-video"></i> Horário Gravando</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto4" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal4" class="validate form-control" id="" >
            </div>

            <!--Desmontagem-->
            <br>
            <h5><i class="fas fa-briefcase"></i> Horário Desmontagem</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto5" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time"  name="hrchegadareal5" class="validate form-control" id="" >
            </div>


            <!--Final-->
            <br>
            <h5><i class="fas fa-hourglass-end"></i> Horário Final</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto6"  class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal6" class="validate form-control" id="" >
            </div>

            <!--Saída da Locação-->
            <br>
            <h5><i class="fas fa-sign-out-alt"></i> Saída da Locação</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time" name="hrchegadaprevisto7" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal7" class="validate form-control" id="" >
            </div>

            <!--Chegada na Locação-->
            <br>
            <h5><i class="fas fa-building"></i> Chegada na Locação</h5>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Previsto</label>
                <input type="time"  name="hrchegadaprevisto8" class="validate form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label labelhora">Horário Real</label>
                <input type="time" name="hrchegadareal8" class="validate form-control" id="" >
            </div>

<!-- CHECKLIST EQUIPE -->
            <br>
            <center><h2><i class="fas fa-clipboard-list"></i> Checklist Equipe</h2></center>

            <!-- Diretor -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomediretor" id="first_name" type="text" class="validate form-control" placeholder="Diretor" >
                    
                </div>
                <div class="input-field col s6">
                    <input name="hrdiretor" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Ass. De Direção -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomeassdirecao" id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Ass. De Direção</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrassdirecao" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Fotografia -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomefoto"  id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Fotografia</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrfoto" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Coord. de Produção -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomecoordprod"  id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Coord. de Produção</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrcoordprod" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Ass. de Produção -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomeassprod"  id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Ass. de Produção</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrassprod" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Operações -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomeoperacao"  id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Operações</label>
                </div>
                <div class="input-field col s6">
                    <input name="hroperacao" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Figurino -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomefigurino" id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Figurino</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrfigurino" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Maquiagem -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomemaquiagem" id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Maquiagem</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrmaquiagem" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Continuista -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomecontiuidade"  id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Continuista</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrcontinuidade" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Produção de Efeitos -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomeefeito" id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Produção de Efeitos</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrefeito" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Cenografia -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomecenografia"  id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Cenografia</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrcenografia" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!-- Arte -->
            <div class="row">
                <div class="input-field col s6">
                    <input name="nomearte" id="first_name" type="text" class="validate form-control" >
                    <label for="first_name">Arte</label>
                </div>
                <div class="input-field col s6">
                    <input name="hrarte" id="last_name" type="time" class="validate form-control" >
                    <label for="last_name">Horário de Chegada</label>
                </div>
            </div>

            <!--CHECKLIST PEDIDOS-->
            <br>
            <center><h2><i class="fas fa-clipboard-list"></i> Checklist Pedidos</h2></center>

            <div class="row rowb">
                <div class="input-field">
                <h6>Segurança</h6>
                <input class="form-check-input" type="radio" name="nrseguranca" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrseguranca"  value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>
<br>
            <div class="row rowb">
                <div class="input-field">
                <h6>Limpeza</h6>
                <input class="form-check-input" type="radio" name="nrlimpeza" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrlimpeza"  value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>

            <br>
            <div class="row rowb">
                <div class="input-field">
                <h6>Bombeiro</h6>
                <input class="form-check-input" type="radio" name="nrbombeiro" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrbombeiro"  value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>
            <br>
            <div class="row rowb">
                <div class="input-field">
                <h6>UTI</h6>
                <input class="form-check-input" type="radio" name="nruti" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nruti" value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>
            <br>
            <div class="row rowb">
                <div class="input-field">
                <h6>Fumacê</h6>
                <input class="form-check-input" type="radio" name="nrfumace" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrfumace" value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>
            <br>
            <div class="row rowb">
                <div class="input-field">
                <h6>Fig</h6>
                <input class="form-check-input" type="radio" name="nrfig" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrfig" value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>
            <br>
            <div class="row rowb">
                <div class="input-field">
                <h6>Banheiro Químico</h6>
                <input class="form-check-input" type="radio" name="nrbanheiro" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrbanheiro" value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>
            <br>
            <div class="row rowb">
                <div class="input-field">
                <h6>Refeição</h6>
                <input class="form-check-input" type="radio" name="nrrefeicao" value="Sim">
                <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                </label>
            </div>
            <div class="input-field">
                <input class="form-check-input" type="radio" name="nrrefeicao" value="Não">
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
            </div>


             <!--CHECKLIST Aproveitamento-->
             <br>
            <center><h2><i class="fas fa-user-clock"><br></i> Aproveitamento</h2></center>

            <div class="row">
                <div class="input-field col s6">
                    <input name="cenasgravadas" id="last_name" type="textarea" class="validate form-control" >
                    <label for="last_name">Cenas Gravadas</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input name="cenaspenduradas" id="last_name" type="textarea" class="validate form-control" >
                    <label for="last_name">Cenas Penduradas</label>
                </div>
            </div>

            <!--CHECKLIST OCORRÊNCIAS-->
            <br>
            <center><h2><i class="far fa-clipboard"></i> Ocorrências</h2></center>

            <div class="row">
                <div class="input-field col s6">
                    <input name="ocorrencia" id="last_name" type="textarea" class="validate form-control" >
                    <label for="last_name">Descreva a Ocorrências</label>
                </div>
            </div>


            <br><br>
            <button class="btn btn-dark btenviar" id="btnsend" type="submit" name="action">Enviar
                <i class="fas fa-paper-plane"></i>
            </button>

         </form>

    </div>

    <footer class="rodape">
        <div class="rodape"><p>Desenvolvido por Tecnologia da Informação</p></div>
        <div class="rodape"><p>Versão: 0.0.24</p></div>
    </footer>

    

    <script>
        $(document).ready(function() {
    
    $('.modal').modal();
    //this are my init
    $('#dtp').datepicker();
    $('#dtp').setDate(new Date());
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
    </script>
    
    <!--LightMODE-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--DarkMODE-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/toggle-bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/toggle-bootstrap-dark.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/toggle-bootstrap-print.min.css" />-->

</body>
</html>