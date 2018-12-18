<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lectio</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
    <link rel="icon" href="<?php echo asset('img/favicon.ico')?>" type="imagem/x-ícone">
</head>
<body class="atv">

{{--Recuperando as palavras do DB--}}
@php
    $array = array ();
    $array2 = array ();
    $array3 = array ();
@endphp
@foreach($palavra as $palavras)
    @php
        array_push($array, $palavras->name);
        array_push($array2, $palavras->rima);
        array_push($array3, $palavras->srcimg);
        $palavras_texto = implode("|", $array);
        $palavras_texto_rima = implode("|", $array2);
        $palavras_texto_imagem = implode("|", $array3);
    @endphp
@endforeach
{{--Atribuindo as palavras à uma variavel JS--}}
<script type="text/javascript">
    var palavra_texto = '<?php echo $palavras_texto; ?>';
    var palavra = palavra_texto.split("|");
    var palavra_texto_rima = '<?php echo $palavras_texto_rima; ?>';
    var palavra_rima = palavra_texto_rima.split("|");
    var palavra_texto_imagem = '<?php echo $palavras_texto_imagem; ?>';
    var palavra_imagem = palavra_texto_imagem.split("|");

</script>

<div class="container">
    <div class="jumbotron">
        <center>
            <h1>Olá {{$dependente->name}}!</h1>

            <div class="bgw">

                <p id="p">Com qual palavra esta palavra rima?</p>
                <div class="palavra-imagem">
                    <img id="imagem-palavra" src="" >
                    <br><p id="palavraSemIni"></p>
                </div>

                <br>
                <p id="result"></p>
                <p id="fim"></p>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="button" id="b1" class="botao-grande" onclick="botao(0)"></button>
                    <button type="button" id="b2" class="botao-grande" onclick="botao(1)"></button>
                    <button type="button" id="b3" class="botao-grande" onclick="botao(2)"></button>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <a class="btn btn-info" id="proximo" onclick="carrega_pagina()">próximo</a>
                    <form action="{{route('resultatividades.update', ['id'=> $idresult, 'id_dep'=> $dependente->id])}}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="acertos" id = "acertos" value="0">
                        <input type="hidden" name="erros" id = "erros" value="0">
                        <input type="hidden" name="status" id = "status" value="abandonada">
                        <button type="submit" id="voltar" class="btn btn-info">Voltar</button>
                    </form>
                </div>
            </div>

        </center>
    </div>
</div>


</body>

{{--Os arquivos JS devem ser carregados depois da página ser renderizada--}}
<script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<script src="<?php echo asset('js/dinamica_rima.js')?>"></script>
</html>


