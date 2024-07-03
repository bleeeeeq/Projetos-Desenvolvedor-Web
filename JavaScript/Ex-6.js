// Exercício [Pacotes de viagem] de JS

let pacote = window.prompt("Qual pacote de viagem você deseja? \n L = 5 dias no Litoral \n G = 5 dias em Gramado \n N = 5 dias em Noronha \n MONTAR = Monte seu Pacote").toUpperCase()

function showalert(message, callback){
    if (confirm(message)){
        callback()
    }
}

function bodyInfo(hotel, checkout){
    let infoDiv = document.getElementById ("info")
    infoDiv.innerHTML = `<p>Hotel: ${hotel}</p> <p>Horário do checkout: ${checkout}</p>`
}

switch (pacote) {
    case 'L':
        showalert("Valor R$850,00", function(){
            bodyInfo("Hotel Habboo", "12:00")
        })      
        break

    case 'G':
        showalert("Valor R$7.850,00", function(){
            bodyInfo("Hotel Grama", "09:45")
        })  
        break

    case 'N':
        showalert("Valor R$11.000,00", function(){
            bodyInfo("Hotel Noraldo", "11:30")
        })  
        break

    case 'MONTAR':
        alert("Certo, você escolheu 'Montar seu pacote'! \nO valor será decidido de acordo com suas escolhas")
        break

    default:
        alert("Nenhum pacote encontrado! \nVocê digitou corretamente o identificador do pacote?")
}