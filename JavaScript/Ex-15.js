// Exercício [Contagem regressiva] de JS

let contador = 10
let resultado = ""

while (contador >=1){
    resultado += contador + "\n"
    contador--
}

resultado += "Contagem finalizada"

// Esperar o DOM estar carregado antes de manipular a textarea
document.addEventListener('DOMContentLoaded', function() {
    let textarea = document.querySelector('textarea');
    if (textarea) {
        textarea.textContent = contador;
    } else {
        console.error('Textarea não encontrada no documento.');
    }
});