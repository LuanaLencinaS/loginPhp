<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="nome" placeholder="nome"/>
        <input type="text" name="idade" placeholder="idade"/>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>

<?php 
    /*
    $nome = "feh";
    //echo $nome." te amo";
    echo $nome." te amo <h1>Muito</h1>";
    */
    /*
    for ($i=0; $i < ; $i++) { 
        # code...
    }

    while ($a <= 10) {
        # code...
    }

    do {
        # code...
    } while ($a <= 10);

    if (condition) {
        # code...
    }

    $retVal = (condition) ? a : b ;
    */
    /*
    function minhaFuncao ($parametro){
        echo $parametro."<br/>";
        return $parametro;
    }
    $recebeReturn = minhaFuncao(2+2);
    echo $recebeReturn+3;
    */

    //echo nao imprime array
    //print_r($_GET);
    $meuArray = array("indice" => "valor",
                      "nome" => "feh"
                     );
    /*imprime:
    Array
    (
        [indice] => valor
        [nome] => feh
    )
    */
    $meuArray["idade"] = 19;
    $meuArray[] = 22;

    echo "<pre>";
    print_r($meuArray);

?>