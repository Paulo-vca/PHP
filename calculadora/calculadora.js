
function calculadora() {

    var n1 = document.getElementById('namber1');
    var n2 = document.getElementById('namber2');
    var operacao = document.getElementById('op')
    var result;

    if(operacao.value = "+" ){
        soma()
    } 
    else if (operacao.value = "-") {
        subtracao();
    }
    // // } else if (operacao ) {
    // //     multiplicacao();
    // // } else if (operacao ) {
    
    // //
    // //    
    // } 

    
    document.getElementById('resultado').value = result
    
    function soma(){
        result = Number(n1.value) + Number(n2.value);
    }
    function subtracao(){
        result = Number(n1.value) - Number(n2.value);
    }
}
