<form action="controller.php" method="POST">

    <h1>Atividade Agenda de Contatos</h1>

    <div class="campo">

        <div class="label">
            <label>NOME</label>
        </div>

        <div class="input">
            <input type="text" name="nome" placeholder="Exemplo: João da Silva">
        </div>

    </div><br>

    <div class="campo">
        <div class="label">
            <label>EMAIL</label>
        </div>

        <div class="input">
            <input type="text" name="email" placeholder="Exemplo: joao@gmail.com">
        </div>

    </div><br>

    <div class="campo">
        <div class="label">
            <label>TELEFONE (OPCIONAL)</label>
        </div>

        <div class="input">
            <input type="text" name="telefone" placeholder="Exemplo: 11987654321">
        </div>

    </div><br>

    <div class="submit">
        <input type="submit" name="botao" value="CADASTRAR">
    </div><br>

    <div class="submit">
        <input type="submit" name="botao" value="CONSULTAR">
    </div><br>

    <div class="submit">
        <input type="submit" name="botao" value="ATUALIZAR">
    </div><br>

    <div class="submit">
        <input type="submit" name="botao" value="EXCLUIR">
    </div><br>

</form>