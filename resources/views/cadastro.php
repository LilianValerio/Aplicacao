<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Cadastro Sinestesi</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="_css/estilodoformulario.css"/>
	<body>
		<form name="signup" method="post" action="cadastrando.php">
			<fieldset id="formulario" >
        		<fieldset class="grupo">
            		<div class="campo">
              	  		<label for="nome">Nome</label>
                		<input type="text" id="nome" name="nome" style="width: 10em" value="">
            		</div>
            		<div class="campo">
                		<label for="snome">Sobrenome</label>
                		<input type="text" id="snome" name="snome" style="width: 10em" value="">
            		</div>
       		 	</fieldset>
       		 	<fieldset>
       		 		<div class="campo">
        	    		<label>Sexo</label>
          		  		<label>
                		<input type="radio" name="sexo" value="masculino"> Masculino
            			</label>
            			<label>
               	 		<input type="radio" name="sexo" value="feminino"> Feminino
            			</label>
        			</div>
        			<div class="campo">
            			<label for="email">E-mail</label>
            			<input type="text" id="email" name="email" style="width: 20em" value="" placeholder="exemplo@dominion.com">
        			</div>
        			<div class="campo">
            			<label for="senha">Senha</label>
            			<input type="password" id="senha" name="senha" style="width: 20em" value="">

        			</div>
        			<div class="campo">
            			<label for="telefone">Telefone</label>
            			<input type="text" id="telefone" name="telefone" style="width: 10em" value="">
        			</div>
        		</fieldset>
       		 	<fieldset class="grupo">
            		<div class="campo">
                		<label for="cidade">Cidade</label>
                		<input type="text" id="cidade" name="cidade" style="width: 10em" value="">
            		</div>
           			<div class="campo">
                		<label for="estado">Estado</label>
                		<select name="estado" id="estado">
                  		  <option value="">--</option>
                   		 <option value="PR">PR</option>
                   		 <option value="PE">PE</option>
                   		 <option value="AP">AP</option>
                   		 <option value="BA">BA</option>
                   		 <option value="DF">DF</option>
                   		 <option value="GO">GO</option>
                   		 <option value="MG">MG</option>
                		</select>
           			 </div>
        		</fieldset>
        			  <div class="campo">
              <button type="submit" name="Login">Cadastrar</button>
              <button type="submit" name="NovoCadastro">Voltar</button>
              </div>
    		</fieldset>
		</form>
	</body>
</html>