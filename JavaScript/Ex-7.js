// Exercício [Maior, Menor e Igual] de JS

let A = parseFloat(window.prompt("Qual é o valor do número 'A':"))



if (/^[0-9.,]+$/.test(A)) {
    let B = parseFloat(window.prompt("Qual é o valor do número 'B':"))
    
    if (/^[0-9.,]+$/.test(B)) {
        if (A > B){
            alert("B é MENOR que A")
        }
        
        else if (A < B){
            alert("B é MAIOR que A")
        }
        
        else if (A == B){
            alert("B é IGUAL que A")
        }
         
    } 

    else {
        alert("Você digitou uma letra no número B, o que não é permitido nesse código!")
    }
      
} 
else {
    alert("Você digitou uma letra no número A, o que não é permitido nesse código!")
}