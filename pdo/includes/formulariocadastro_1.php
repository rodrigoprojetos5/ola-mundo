 <div class="Resultado"> </div>

    <div class="Formulario">

        <h1 class="Center">Cadastro</h1>

        <form name="FormCadastro" id="FormCadastro" method="post" action="controllers/controllercadastro.php">

            <div class="FormularioInput">
                Nome:<br/>
                <input type="text" id="nome" name="nome"/>            
            </div>

            <div class="FormularioInput">
                Sexo:<br/>
                <select name="sexo" id="sexo">
                    <option value="">Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>      
            </div>

            <div class="FormularioInput">
                Cidade:<br/>
                <input type="text" id="cidade" name="cidade"/>            
            </div>

            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="CADASTRAR"/>            
            </div>

        </form>           

        <script src="includes/zepto.min.js"></script>
        <script src="Javascript.js"></script>

    </div>      