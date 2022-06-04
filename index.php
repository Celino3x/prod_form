<?php
    include ('cabecalho.php');
?>


<header class="container">
    <img src="./img/logo.png" class="imgLogo" alt="">
    <h3>Relatório de Gravação | Casablanca</h3>
    <img src="./img/under.png" class="imgLogo under" alt="">
</header>


<section class="container">

    <form action="mail_enviado.php" method="POST">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input name="nome" type="text" class="form-control" placeholder="Nome" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input name="sobrenome" type="text" class="form-control" placeholder="Sobrenome">
                </div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input name="mail"  type="mail" class="form-control" placeholder="E-mail"/>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Data de Gravação</label>
                    <input name="datagravacao"   type="date" class="form-control" placeholder="Data de Gravação" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Frente</label>
                        <select  name="frente"  class="form-select frente" required aria-label="Default select example">
                            <option selected>Selecione a Frente</option>
                            <option value="1">Frente 1</option>
                            <option value="2">Frente 2</option>
                            <option value="3">Frente 3</option>
                        </select>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Local</label>
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
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Cenário</label>
                    <input name="cenario"  type="text" class="form-control" placeholder="Digite o Cenário" />
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Roteiro</label>
                    <input  name="roteiro"  type="text" class="form-control" placeholder="Roteiro" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Total de Cenas</label>
                    <input name="totalcenas"  type="number" class="form-control" placeholder="Total de Cenas">
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Total de Cenas Gravadas</label>
                    <input name="totalcenasgravadas"  type="number" class="form-control" placeholder="Total de Cenas Gravadas" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Total de Cenas Penduradas</label>
                    <input name="totalcenaspenduradas"  type="number" class="form-control" placeholder="Total de Cenas Penduradas">
                </div>
            </div>
        </div>

        <hr />

        <h4><i class="bi bi-alarm"></i> Horário Chegada</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto1"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input name="hrchegadareal1"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-alarm-fill"></i> Horário Montagem</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input  name="hrchegadaprevisto2"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input  name="hrchegadareal2"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-chat-right-dots"></i> Horário Ensaio</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto3"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input name="hrchegadareal3" type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-camera-reels-fill"></i> Horário Gravando</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto4"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input name="hrchegadareal4"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-hammer"></i> Horário Desmontagem</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto5"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input  name="hrchegadareal5"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-clock-history"></i> Horário Final</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto6"   type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input name="hrchegadareal6"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-box-arrow-right"></i> Saída da Locação</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto7"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input name="hrchegadareal7"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <h4><i class="bi bi-building"></i> Chagada na Locação</h4>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Previsto</label>
                    <input name="hrchegadaprevisto8"  type="time" class="form-control" />
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label">Horário Real</label>
                    <input name="hrchegadareal8"  type="time" class="form-control" >
                </div>
            </div>
        </div>

        <!-- CHECKLIST EQUIPE -->
        <br>
            <center><h2><i class="fas fa-clipboard-list"></i> Checklist Equipe</h2></center>

            <!-- Diretor -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="last_name">Diretor</label>
                    <input name="nomediretor" id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrdiretor" id="last_name" type="time" class="validate form-control" >
                </div>
            </div>

            <!-- Ass. De Direção -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Ass. De Direção</label>
                    <input name="nomeassdirecao" id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrassdirecao" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Fotografia -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Fotografia</label>
                    <input name="nomefoto"  id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrfoto" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Coord. de Produção -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Coord. de Produção</label>
                    <input name="nomecoordprod"  id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrcoordprod" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Ass. de Produção -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Ass. de Produção</label>
                    <input name="nomeassprod"  id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrassprod" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Operações -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Operações</label>
                    <input name="nomeoperacao"  id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>   
                    <input name="hroperacao" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Figurino -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Figurino</label>
                    <input name="nomefigurino" id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrfigurino" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Maquiagem -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Maquiagem</label>
                    <input name="nomemaquiagem" id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrmaquiagem" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Continuista -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Continuista</label>
                    <input name="nomecontiuidade"  id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrcontinuidade" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Produção de Efeitos -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Produção de Efeitos</label>
                    <input name="nomeefeito" id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrefeito" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Cenografia -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Cenografia</label>
                    <input name="nomecenografia"  id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrcenografia" id="last_name" type="time" class="validate form-control" >
                    
                </div>
            </div>

            <!-- Arte -->
            <div class="row">
                <div class="input-field col s6">
                    <label for="first_name">Arte</label>
                    <input name="nomearte" id="first_name" type="text" class="validate form-control" >
                    
                </div>
                <div class="input-field col s6">
                    <label for="last_name">Horário de Chegada</label>
                    <input name="hrarte" id="last_name" type="time" class="validate form-control" >
                    
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
<hr />
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
<hr />
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
<hr />
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
<hr />
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
<hr />
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
<hr />
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
<hr />
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
                    <label for="last_name">Cenas Gravadas</label>
                    <input name="cenasgravadas" id="last_name" type="textarea" class="validate form-control" >
                    
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <label for="last_name">Cenas Penduradas</label>
                    <input name="cenaspenduradas" id="last_name" type="textarea" class="validate form-control" >
                    
                </div>
            </div>

            <!--CHECKLIST OCORRÊNCIAS-->
            <br>
            <center><h2><i class="far fa-clipboard"></i> Ocorrências</h2></center>

            <div class="row">
                <div class="input-field col s6">
                    <label for="last_name">Descreva a Ocorrências</label>
                    <input name="ocorrencia" id="last_name" type="textarea" class="validate form-control" >
                    
                </div>
            </div>

            <br><br>
            <button class="btn btn-dark btenviar" id="btnsend" type="submit" name="action">Enviar
                <i class="fas fa-paper-plane"></i>
            </button>
    </form>
</section>
 

<?php
    include ('rodape.php');
?>