
function calculadora() {

    var n1 = document.getElementById('namber1');
    var n2 = document.getElementById('namber2');
    var operacao = document.getElementById('op')
    var result;

    if(operacao.value == "somar" ){
        soma();
    } 
    else if (operacao.value == "subtracao") {
        subtracao();
    }
    else if (operacao.value == "multiplicacao") {
        multiplicacao();
    } 
    else{
        divisao();
    }

    //Funções para chamar a operação
    function soma(){
        result = Number(n1.value) + Number(n2.value);
    }
    function subtracao(){
        result = Number(n1.value) - Number(n2.value);
    }
    function multiplicacao(){
        result = Number(n1.value) * Number(n2.value);
    }
    function divisao(){
        result = Number(n1.value) / Number(n2.value);
    }
    document.getElementById('resultado').value = result;
}

function zoom(){
    var font = document.getElementById('resultado').style.fontSize;
    font = font.replace("px","");
    
    if(font == ""){		 
        document.getElementById('resultado').style.fontSize = "15px";
    }else{
        document.getElementById('resultado').style.fontSize = (parseInt(font)+1)+"px";
    }
}

function reduzir(){
    var font = document.getElementById('resultado').style.fontSize;
    font = font.replace("px","");
    
    if(font == ""){		 
        document.getElementById('resultado').style.fontSize = "11px";
    }else{
    document.getElementById('resultado').style.fontSize = (parseInt(font)-1)+"px";
    }
}   

function alterar(){
    const cores = ['#40e0d0', '#ee82ee', '#adff2f','#00ced1'];
    var element = document.getElementById('card');
    element.style.backgroundColor = cores[Math.floor(Math.random() * cores.length)];
    
}