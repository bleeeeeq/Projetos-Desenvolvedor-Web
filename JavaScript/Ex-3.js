// Exercício [Idade Gratuita] de JS

let idade = parseFloat(window.prompt("Digite sua Idade:"))

if(idade <= 6 || idade > 60){
    alert("Não paga passagem")
    alert("Seja Bem Vindo!!")
}

else if(idade > 6 && idade <= 60){
    alert("Paga passagem")
}

// O uso do "&&" ao invés de apenas "&" se trata do uso "padrão" do "&&" em operações lógicas.
// O "&" geralmente atua em operações bit a bit, avaliando cada bit individualmente.
// Para garantir a avaliação correta de condições booleanas, use sempre "&&".