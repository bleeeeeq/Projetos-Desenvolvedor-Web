// Exercício 15 [Contagem regressiva] de JS

let contador = 10;
let resultado = "";

while (contador >= 1) {
    resultado += contador + "\n";
    contador--;
}

resultado += "Contagem finalizada";

let textarea = document.getElementById('resultado');
if (textarea) {
    textarea.textContent = resultado;
    textarea.style.display = 'block';
} else {
    console.error('Textarea não encontrada no documento.');
}
