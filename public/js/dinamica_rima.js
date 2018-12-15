var contAcertos = 0;
var contErros = 0;
var rodadas = 5; //delimita a quant de rodadas
var contRodadas = 1;
var letraIn;
var letraBotao = []; //array para armazenar letras nos botões
var palavraSemLetra;
var letra;
var alfa = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "x", "z"];
document.getElementById('form').style.display = 'none';

function carrega_pagina() {

    //array com todas as letras do alfabeto
    letras = []; //array vazio para armazenar letras de uma palavra
    var x = Math.floor(Math.random() * palavra.length); //atribui uma posição aleatórea do array
    var botaoCorreto = Math.floor(Math.random() * 3);//atribui uma posição para a resposta correta
    var palavraSort = palavra[x].trim();
    palavraRimaSort = palavra_rima[x].trim();
    palavraImagemSort = palavra_imagem[x];


    var count1 = 0; //contador
    //cria um array com as letras da palavra
    while (count1 < palavraSort.length) {
        letras.push(palavraSort.charAt(count1));
        count1 += 1;
    }

    // y = Math.floor(Math.random() * letras.length); //atribui uma posição aleatórea do array
    //
    // letra = letras[y]; //atribui a letra da palavra
    // letras[y]='_';


    //sorteia palavras aleatórias aos botões
    var count2 = 0; //zera contador
    var indiceBotao = 0; //contador para botao
    var palavraUsada = [];
    while (count2 < 3) {
        indiceBotao = Math.floor(Math.random() * palavra.length);
        letraBotao [count2] = palavra[indiceBotao];
            if (letraBotao[count2].trim() == palavraRimaSort || letraBotao[count2].trim() == palavraSort || letraBotao[count2].trim().slice(-2) == palavraSort.slice(-2) || palavraUsada.indexOf(letraBotao[count2]) >= 0) {
                continue;
            }
        palavraUsada[count2] =letraBotao[count2];
        count2 += 1;
    }

    letraBotao[botaoCorreto] = palavraRimaSort; //sobrescreve um dos botões com a rima correta

    //verifica se a letra escolhida é a correta


    habilitarBotao();
    document.getElementById("imagem-palavra").src= palavraImagemSort;
    document.getElementById("palavraSemIni-rima").innerHTML = palavraSort;
    document.getElementById('b1').innerHTML = letraBotao[0];
    document.getElementById('b2').innerHTML = letraBotao[1];
    document.getElementById('b3').innerHTML = letraBotao[2];
    document.getElementById("result").innerHTML = "";


}

carrega_pagina();



function verify() {

    // letras[y]=letraIn;

    if (letraIn.toLowerCase() == palavraRimaSort) {
        document.getElementById("result").innerHTML = "Acertou!!!";
        contAcertos += 1;
        } else {
        document.getElementById("result").innerHTML = "Se enganou, tente novamente!";
        contErros += 1;
        }

    document.getElementById("palavraSemIni-rima").innerHTML = letraIn;
}

function desabilitarBotao() {
    document.getElementById('b1').style.display = 'none';
    document.getElementById('b2').style.display = 'none';
    document.getElementById('b3').style.display = 'none';
}

function habilitarBotao() {
    document.getElementById('b1').style.display = 'inline';
    document.getElementById('b2').style.display = 'inline';
    document.getElementById('b3').style.display = 'inline';
}

function botao(escolha) {
    var numBotao = escolha;
    letraIn = letraBotao[numBotao];
    verify();
    desabilitarBotao();

    if (contRodadas < rodadas) {
        contRodadas += 1;
    }else {
        document.getElementById("fim").innerHTML = "Parabéns!!! você Terminou clique em voltar para o painel de atividades!!! " + "<br>" + "Acertos = " + contAcertos + "<br>" + "Erros = " + contErros;
        document.getElementById("form").style.display = "block";
        document.getElementById('proximo').onclick = "disabled";
        document.getElementById("acertos").value = contAcertos;
        document.getElementById("erros").value = contErros;
        document.getElementById('proximo').style.display = 'none';
        document.getElementById('voltar').style.display = 'none';
    }
}

