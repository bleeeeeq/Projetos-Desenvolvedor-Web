<?php

if(isset(&_GET['sorteio'])){
    &num = rand(0,100);
    //echo"$num"
    echo "<script>
        if(confirm("O número sorteado é: $num, deseja um novo número?"){
            location.reload()
        }
        else{
            window.location.href = '../index.html'
        }
    </script>";
}

?>