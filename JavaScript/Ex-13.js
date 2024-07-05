// Exercício [Loop tabuada] de JS

let num = window.prompt("Digite um número para visualizar sua tabuada:");
let tabuada = "";

for (let i = 1; i <= 10; i++) {
    tabuada += num + " x " + i + " = " + (num * i) + "\n";
}
console.log(tabuada)
tabuada += "-=-=-=-=-=-=-=-=-=-=-\n";

// Esperar o DOM estar carregado antes de manipular a textarea
document.addEventListener('DOMContentLoaded', function() {
    let textarea = document.querySelector('textarea');
    if (textarea) {
        textarea.textContent = tabuada;
    } else {
        console.error('Textarea não encontrada no documento.');
    }
});