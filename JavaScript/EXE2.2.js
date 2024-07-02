// Exercício de JS

let num1 = parseFloat(window.prompt('Digite um número:'))
let num2 = parseFloat(window.prompt('Digite outro número:'))
let operacao = window.prompt('Qual operação deseja realizar: \n Para ADIÇÃO digite: '+' + \n Para SUBTRAÇÃO digite: - \n Para MULTIPLICAÇÃO digite: *\n Para DIVISÃO digite: /'+' \n Para MÓDULO digite: %')

if(operacao =='+'){
    let result = num1+num2
    alert(result)
}
else if(operacao =='-'){
    let result = num1-num2
    alert(result)
}
else if(operacao =='*'){
    let result = num1*num2
    alert(result)
}
else if(operacao =='/'){
    let result = num1/num2
    alert(result)
}
else if(operacao =='%'){
    let result = num1%num2
    alert(result)
}
else{
    alert('Opção invalida')
}