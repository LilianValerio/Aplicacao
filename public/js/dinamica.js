 var palavra  = ["banana","abacaxi","pera","casa","peixe", "cachorro", "gato","baleia", "mesa", "cadeira"];//array com várias palavras        
    var alfa = ["a","b","c","d","e","f","g","h","i","j","l","m","n","o","p","q","r","s","t","u","v","x","z"];
    //array com todas as letras do alfabeto
    
    var letras = []; //array vazio para armazenar letras de uma palavra
    var letraBotao = []; //array para armazenar letras no botões
     
    var x = Math.floor(Math.random() * palavra.length); 
    var botaoCorreto = Math.floor(Math.random() * 3);  
    var palavraSemIni = palavra[x].slice(1); //cria palavra sem inicial
    var inicialIn;

   var count = 0; //contador
   //cria um array com as letras da palavra
    while (count < palavra[x].length){
        letras.push(palavra[x].charAt(count));
        count += 1;
    }
    
    var inicial = letras[0]; //atribui a inicial da palavra
   
    //sorteia letras aleatórias aos botões
    var count = 0; //zera contador
    var indiceBotao = 0; //contador para botao
    while (count < 3){
        indiceBotao = Math.floor(Math.random() * 22);
        letraBotao [count] = alfa[indiceBotao];
        count += 1;
    }

    letraBotao[botaoCorreto] = inicial; //sobrescreve um dos botões com a inicial correta
    
    //verifica se a letra escolhida é a correta
    function verify(){
        if(inicialIn.toLowerCase() == letras[0] ){
            document.getElementById("result").innerHTML = "Acertou!!!";
        } else {
            document.getElementById("result").innerHTML = "Se enganou, tente novamente!";
        }

        document.getElementById("palavraComIni").innerHTML = inicialIn + palavraSemIni;
    }

    function desabilitarBotao(){
        document.getElementById('b1').disabled = "disabled";
        document.getElementById('b2').disabled = "disabled";
        document.getElementById('b3').disabled = "disabled";
    }

    function botao(x){
        var numBotao = x;
        inicialIn = letraBotao[numBotao];
        verify();
        desabilitarBotao();
    }

    document.getElementById("palavraSemIni").innerHTML = palavraSemIni;
    document.getElementById('b1').innerHTML = letraBotao[0];
    document.getElementById('b2').innerHTML = letraBotao[1];
    document.getElementById('b3').innerHTML = letraBotao[2];
   