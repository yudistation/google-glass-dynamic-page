<section id="corpo-full">
    <article id="main-news">
        <header id="article-header">
            <hgroup>
                <h3>Fale Conosco > Contato</h3>
                <h1>Formulário de Contato</h1>
                <h2>por Yudi Takeda</h2>
                <h3 class="right">Atualizado em 08/Nov/2021</h3>
            </hgroup>
        </header>
        <form method="POST" id="fContato" action="mailto:contato@cursoemvideo.com" oninput="calcTotal();">
            <fieldset id="usuario">
                <legend>Identificação do Usuário</legend>
                <p><label for="cName">Nome: </label><input type="text" name="tName" id="cName" size="20" maxlength="30" placeholder="Nome Completo" /></p>
                <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 dígitos"></p>
                <p><label for="cEmail">E-mail: </label><input type="email" name="tEmail" id="cEmail" size="20" maxlength="40" placeholder="usuario@dominio.com"></p>
                <fieldset id="sexo">
                    <legend>Sexo</legend>
                    <input type="radio" name="tSexo" id="cMasc" checked> <label for="cMasc">Masculino</label><br>
                    <input type="radio" name="tSexo" id="cFem"> <label for="cFem">Feminino</label>
                </fieldset>
                <p><label for="cNasc">Data de Nascimento: </label><input type="date" name="tNasc" id="cNasc" /></p>
            </fieldset>
            <fieldset id="endereco">
                <legend>Endereço do Usuário</legend>
                <p><label for="cRua">Logradouro: </label><input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av., Trav, ..." /></p>
                <p><label for="cNum">Número: </label><input type="number" name="tNum" id="cNum" min="0" max="99999"></p>
                <p><label for="cEst">Estado: </label>
                    <select name="tEst" id="cEst">
                        <optgroup label="Região Sudeste">
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP" selected>São Paulo</option>
                            <option value="MG">Minas Gerais</option>
                        </optgroup>
                        <optgroup label="Região Sul">
                            <option value="PR">Paraná</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="RS">Rio Grande do Sul</option>
                        </optgroup>
                    </select>
                </p>
                <p><label for="cCid">Cidade: </label>
                    <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua cidade" list="cidades">
                </p>
                <datalist id="cidades">
                    <option value="Rio de Janeiro"></option>
                    <option value="Nova Iguaçu"></option>
                    <option value="Niterói"></option>
                    <option value="Belford Roxo"></option>
                </datalist>
            </fieldset>
            <fieldset id="mensagem">
                <legend>Mensagem do Usuário</legend>
                <p><label for="cUrg">Grau de Urgência:</label> Min
                    <input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2">Máx
                </p>
                <p><label for="cMsg">Mensagem:</label>
                    <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem." style="resize: none;"></textarea>

                </p>
            </fieldset>
            <fieldset id="pedido">
                <legend>Quero um Google Glass</legend>
                <p><label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label><input type="checkbox" name="tPed" id="cPed" checked></p>
                <p><label for="cCor">Cor:</label><input type="color" name="cCor" id="cCor" value="#0000ff"></p>
                <p><label for="cQtd">Quantidade:</label>
                    <input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0">
                </p>
                <p><label for="cTot">Preço Total: R$ </label><input type="text" name="tTot" id="cTot" placeholder="Total" readonly></p>
            </fieldset>

            <input type="image" name="tEnviar" id="cEnviar" src="_imagens/botao-enviar.png">
        </form>
    </article>
</section>