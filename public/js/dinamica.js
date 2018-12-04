var contAcertos = 0;
var contErros = 0;
var rodadas = 3;
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
    while (count2 < 3) {
        indiceBotao = Math.floor(Math.random() * 22);
        letraBotao [count2] = alfa[indiceBotao];
            if (letraBotao[count2] == inicial) continue;
        count2 += 1;
    }

    letraBotao[botaoCorreto] = inicial; //sobrescreve um dos botões com a inicial correta

    //verifica se a letra escolhida é a correta


    habilitarBotao();
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
        document.getElementById("result").innerHTML = "Se enganou, tente novamente!";
        contErros += 1;
    }

    document.getElementById("palavraSemIni").innerHTML = inicialIn.toUpperCase() + palavraSemIni;
}

function desabilitarBotao() {
    document.getElementById('b1').style.display = 'none';
    document.getElementById('b2').style.display = 'none';
    document.getElementById('b3').style.display = 'none';
}

function habilitarBotao() {
    document.getElementById('b1').style.display = 'block';
    document.getElementById('b2').style.display = 'inline';
    document.getElementById('b3').style.display = 'inline';
}

function botao(escolha) {
    var numBotao = escolha;
    inicialIn = letraBotao[numBotao];
    verify();
    desabilitarBotao();

    if (contRodadas < rodadas) {
        contRodadas += 1;
    }else {
        document.getElementById("fim").innerHTML = "Parabéns você Terminou clique em voltar para o painel de atividades!!! " + "<br>" + "Acertos = " + contAcertos + "<br>" + "Erros = " + contErros;
        document.getElementById('proximo').onclick = "disabled";
    }
}

