// Exercício [Par ou Ímpar] de JS

let num = parseFloat(window.prompt("Digite um número aqui, e irei dizer se é 'PAR' ou 'ÍMPAR'!"))

if (/^[0-9.,]+$/.test(num)) {
    let ultnum = num % 10;

    if (ultnum == 1 || ultnum == 3 || ultnum == 5 || ultnum == 7 || ultnum == 9){
        alert(`O número digitado é um número ÍMPAR! \n\nVocê digitou '${num}', e como o digito final é '${ultnum}', podemos saber que o número é ÍMPAR!`)
    }
    
    else{
        alert(`O número digitado é um número PAR! \n\nVocê digitou '${num}', e como o digito final é '${ultnum}', podemos saber que o número é PAR!`)
    }
}

else{
    alert("Você não digitou um número, o que no fim do dia, acredito que não seja nem par, nem ímpar KKKKKK")
}