// Exercício [Rendimento mês] de JS

let num = parseFloat(window.prompt("Qual valor você depositou esse mês?"))
const juros = 0.7

let porc = parseFloat(num * juros)/100
alert (porc) 

let total = parseFloat(num+porc)
alert(`Após um mês, seu depósito de ${num} se tornará ${total}!`)

/*
Outro método de resolução]

let num = parseFloat(window.prompt("Qual valor você depositou esse mês?"))
const juros = 0.007

let porc = num*(1 + juros)

alert("Após um mês, seu depósito se tornará R$"+(porc).toFixed(2)+"!")
*/