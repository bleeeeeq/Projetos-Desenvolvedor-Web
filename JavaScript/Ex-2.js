// Exercício [Idade Permitida] de JS

setTimeout(() => {
    let num = parseFloat(window.prompt('Digite sua Idade:'))

    if(num >= 18 & num <=149){
        alert('Entrada permitida!')
    }

    else if(num>150){
        alert('Mais um exemplo de um Cephalon do Warframe ou um ser ancestral.')
    }

    else{
        alert('Entrada negada!')
    }
},100)