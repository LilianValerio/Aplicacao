 <!DOCTYPE html>
 <html lang="pt-br">
     <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Lectio</title>
         <link rel="stylesheet" href="<?php echo asset ('css/bootstrap.min.css')?>">
         <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
         <link rel="icon" href="<?php echo asset ('img/favicon.ico')?>" type="imagem/x-ícone">
     </head>
 <body class="atv">

  <div class="container">
   <div class="jumbotron">
    
<center>

    <h1>Olá {{$dependente->name}}!</h1>

    <div class="bgw">

        {{--Recuperando as palavras do DB--}}
        @php
            $array = array ();
        @endphp
        @foreach($palavra as $palavras)
            @php
              array_push($array, $palavras->name);
              $palavras_texto = implode("|", $array);
            @endphp
        @endforeach
        {{--Atribuindo as palavras à uma variavel JS--}}
        <script type="text/javascript">
            var palavra_texto = '<?php echo $palavras_texto; ?>';
            var palavra = palavra_texto.split("|");

        </script>

      <p id = "p">Descubra a inicial das palavras</p>

    <p id="palavraSemIni"></p>

    <p id="palavraComIni"></p>
    <p id="result"></p>
    <p id="fim"></p>

    </div>
  <div class="row">
  <div class="col-xs-12">
    <button type="button" id="b1" class=" btn-default btn-lg" onclick="botao(0)"></button>
    <button type="button" id="b2" class=" btn-default btn-lg" onclick="botao(1)"></button>
    <button type="button" id="b3" class=" btn-default btn-lg" onclick="botao(2)"></button>
 </div>
  </div>

  <div class="row"> 
    <div class="col-xs-12">
    <a class="btn btn-info" id="proximo" onclick="carrega_pagina()">próximo</a>
    <a class="btn btn-info" href="/atividades/index/{{ $dependente->id }}">voltar</a>
    </div>
    </div>
  
</center>

   </div>
  </div>



</body>

     {{--Os arquivos JS devem ser carregados depois da página ser renderizada--}}
     <script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
     <script src="<?php echo asset('js/dinamica.js')?>"></script>
</html>


