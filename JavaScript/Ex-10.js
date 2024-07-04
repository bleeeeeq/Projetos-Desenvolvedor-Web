// Exercício [Rendimento mês] de JS

let deposito = parseFloat(window.prompt("Qual valor você depositou esse mês?"));
const taxa = 0.7;

let juros = deposito * (taxa / 100);
alert(`Valor dos juros: R$${juros.toFixed(2)}`);

let total = deposito + juros;
alert(`Após um mês, seu depósito de R$${deposito.toFixed(2)} se tornará R$${total.toFixed(2)}!`);

/*
Outro método de resolução]

let num = parseFloat(window.prompt("Qual valor você depositou esse mês?"))
const juros = 0.007

let porc = num*(1 + juros)

alert("Após um mês, seu depósito se tornará R$"+(porc).toFixed(2)+"!")
*/