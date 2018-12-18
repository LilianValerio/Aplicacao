var contAcertos = 0;
var contErros = 0;
var rodadas = 5; //delimita a quant de rodadas
var status = 'abandonada';
var contRodadas = 1;
var inicialIn;
var letraBotao = []; //array para armazenar letras nos botões
var palavraSemIni;
var inicial;
var alfa = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "x", "z"];

function carrega_pagina() {

    //array com todas as letras do alfabeto
    letras = []; //array vazio para armazenar letras de uma palavra
    var x = Math.floor(Math.random() * palavra.length); //atribui uma posição aleatórea do array
    var botaoCorreto = Math.floor(Math.random() * 3);  //
    palavraSemIni = palavra[x].slice(1); //cria palavra sem inicial
    palavraImagemSort = palavra_imagem[x];

    var count1 = 0; //contador
    //cria um array com as letras da palavra
    while (count1 < palavra[x].length) {
        letras.push(palavra[x].charAt(count1));
        count1 += 1;
    }

    inicial = letras[0]; //atribui a inicial da palavra

    //sorteia letras aleatórias aos botões
    var count2 = 0; //zera contador
    var indiceBotao = 0; //contador para botao
    var letraUsada = []; //armazena letras já usadas nos botões
    while (count2 < 3) {
        indiceBotao = Math.floor(Math.random() * 22);
        letraBotao [count2] = alfa[indiceBotao];
            if (letraBotao[count2] == inicial || letraUsada.indexOf(letraBotao[count2]) >=0) continue;
        letraUsada[count2] =letraBotao[count2];
        count2 += 1;
    }

    letraBotao[botaoCorreto] = inicial; //sobrescreve um dos botões com a inicial correta

    //verifica se a letra escolhida é a correta


    habilitarBotao();
    document.getElementById("imagem-palavra").src= palavraImagemSort;
    document.getElementById("palavraSemIni").innerHTML = '_' + palavraSemIni;
    document.getElementById('b1').innerHTML = letraBotao[0];
    document.getElementById('b2').innerHTML = letraBotao[1];
    document.getElementById('b3').innerHTML = letraBotao[2];
    document.getElementById("result").innerHTML = "";


}

carrega_pagina();



function verify() {

    if (inicialIn.toLowerCase() == letras[0]) {
        document.getElementById("result").innerHTML = "Acertou!!!";
        contAcertos += 1;
        } else {
        document.getElementById("result").innerHTML = "Ah que pena, a letra certa é "+ letras[0].toUpperCase();
        contErros += 1;
        }

    document.getElementById("palavraSemIni").innerHTML = inicialIn.toUpperCase() + palavraSemIni;
    document.getElementById("acertos").value = contAcertos;
    document.getElementById("erros").value = contErros;
}

function desabilitarBotao() {
    document.getElementById('b1').style.display = 'none';
    document.getElementById('b2').style.display = 'none';
    document.getElementById('b3').style.display = 'none';
    document.getElementById('proximo').style.display = 'block';
}

function habilitarBotao() {
    document.getElementById('b1').style.display = 'block';
    document.getElementById('b2').style.display = 'inline';
    document.getElementById('b3').style.display = 'inline';
    document.getElementById('proximo').style.display = 'none';
}

function botao(escolha) {
    var numBotao = escolha;
    inicialIn = letraBotao[numBotao];
    verify();
    desabilitarBotao();

    if (contRodadas < rodadas) {
        contRodadas += 1;
    }else {
        status = 'concluída';
        document.getElementById("fim").innerHTML = "Muito bem! você Terminou clique em voltar para o painel de atividades!!!";
        document.getElementById('proximo').onclick = "disabled";
        document.getElementById('proximo').style.display = 'none';
        document.getElementById("status").value = status;
    }
}

