// Exercício [Variáveis Iguais] de JS

alert("Você irá digitar duas coisas, não importa o que seja, \n E nós iremos descobrir se é a mesma coisa que digitou!")

let Escolha = window.prompt("Antes, gostariamos de saber \nVocê gostaria de usar apenas textos, apenas números, ou ambos? \n\n[1] Apenas texto \n[2] Apenas números \n[3] Ambos")

if (Escolha == 1) {
    let A = window.prompt("[1] Digite o que quiser abaixo!")
    let B = window.prompt("[2] Digite o que quiser abaixo!")

    if (/^[a-z]+$/.test(A)) {
        if (A === B) {
            alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas IDÊNTICAS na lógica!`)
        }

        else {
            if (A == B) {
                alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas IGUAIS na lógica!`)
            }

            else {
                alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas DIFERENTES na lógica!`)
            }
        }
    }

    else {
        alert("Nesse caso, você digitou algum número, recomendaria que testasse outra opção.")
    }
}

if (Escolha == 2) {
    let A = window.prompt("[1] Digite o que quiser abaixo!")
    let B = window.prompt("[2] Digite o que quiser abaixo!")

    if (/^[0-9.,]+$/.test(A)) {
        if (A === B) {
            alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas IDÊNTICAS na lógica!`)
        }

        else {
            if (A == B) {
                alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas IGUAIS na lógica!`)
            }

            else {
                alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas DIFERENTES na lógica!`)
            }
        }
    }

    else {
        alert("Nesse caso, você digitou algum caractere que não é um número em alguma das duas opções.")
    }

}

if (Escolha == 3) {
    let A = parseFloat(window.prompt("[1] Digite o que quiser abaixo!"))
    let B = window.prompt("[2] Digite o que quiser abaixo!")

    if (A === B) {
        alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas IDÊNTICAS na lógica!`)
    }

    else {
        if (A == B) {
            alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas IGUAIS na lógica!`)
        }

        else {
            alert(`Vamos lá, você digitou ${A} e ${B}, o que são coisas DIFERENTES na lógica!`)
        }
    }
}

