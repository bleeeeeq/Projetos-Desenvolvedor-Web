// Exercício [Votação] de JS

let idade = parseFloat(window.prompt("Digite sua Idade:"))

if (idade < 16){
    alert("Você não pode votar!")
}

if (idade >= 18 && idade < 80){
    alert("Você deve votar!")
}

else {
    alert("O seu voto é opcional!")
}