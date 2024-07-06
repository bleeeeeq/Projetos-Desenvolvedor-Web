// Exercício [Loop maior/menor idade] de JS

for (let i = 1; i <= 10; i++) {
    let idade = window.prompt("Digite quantos anos você tem");

    if (idade < 18){
        alert("Você é menor de idade!")
    }
    else{
        alert("Você é maior de idade!")
    }
}