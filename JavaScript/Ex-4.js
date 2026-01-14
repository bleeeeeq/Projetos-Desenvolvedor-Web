// Exercício [Votação] de JS

let idade = parseFloat(window.prompt("Digite sua Idade:"))

if (idade < 16){
    alert("Você não pode votar!")
}

else if (idade >= 18 && idade < 80){
    alert("Você deve votar!")
}

else if (idade >150){
    alert("Ou você um Cephalon do Warframe ou um ser ancestral.")
}

else {
    alert("O seu voto é opcional!")
}