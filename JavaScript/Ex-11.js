// Exercício [Dia da semana] de JS

let num = window.prompt("Digite um número de 1 a 7:")

if (/^[0-9.,]+$/.test(num)) {

    switch(num) {
        case '1':
            alert('Domingo, o primeiro da semana!')
            break

        case '2':
            alert('Segunda-Feira, o segundo da semana!')
            break

        case '3':
            alert('Terça-Feira, o terceiro da semana!')
            break

        case '4':
            alert('Quarta-Feira, quarto da semana!')
            break

        case '5':
            alert('Quinta-feira, o quinto da semana!')
            break

        case '6':
            alert('Sexta-Feira, o sexto da semana!')
            break
            
        case '7':
            alert('Sábado, o sétimo da semana!')
            break

        default:
            alert("O número digitado não está entre 1 e 7! \nTente novamente.")
    }
}

else {
    alert("É necessário que você digite um algarismo! \n~> Exemplo: '4' <~")
}