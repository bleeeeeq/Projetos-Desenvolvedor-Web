// Exercício [Sorveteria] de JS

let sabor = window.prompt("Qual sabor de sorvete você deseja? \n M = Morango \n B = Baunilha\n C = Chocolate \n F = Flocos \n N = Napolitano").toUpperCase()

switch(sabor){
    case 'M':
        alert("Valor R$12.00")
        break
    case 'B':
        alert("Valor R$11.00")
        break
    case 'C':
        alert("Valor R$18.00")
        break
    case 'F':
        alert("Valor R$15.00")
        break
    case 'N':
        alert("Valor R$119.00")
        break
    default:
        alert("Opção inválida")
}