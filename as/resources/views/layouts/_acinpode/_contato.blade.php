<div class ="row section">
    <h3 align ="center"> Formulário para contato</h3>
    <div class = "divider"></div>
</div>

<div class="row">
    <form class="col s12" action="contatoAcinpode.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input  id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="" id="data" type="date" class="validate">
          <label for="nome"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="text" class="validate">
          <label for="email">E-mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mensagem" type="text" class="validate">
          <label for="mensagem">Mensagem</label>
        </div>
      </div>
      <button class="btn green">Enviar</button>
    </form>
  </div>