<?php
/* estrutura de decisão. Na programação temos algumas formas de desenvolver a estrutura de decisão:
    Tias como:
        - Estrutura simples; 
        - estrutura composta;
        - Estrutura encadeada;
        - Estrutura compacta;
        - Estrutura ternária;
        - Decisão  multipla;
*/

# Estrutuar simples : É dada por uma única ação.


$idade = 18;

// no português estruturado (porgol) se

if($idade >= 18) {
    echo " Pode ir pra festa";
}
   echo "<br><br>";
# Estrutura composta : É dada por mais de uma ação
# Estrutura encadeada : É dada por muitas  ações


// no português estruturado (portugol) se,senão

if($idade >= 18) {
    echo " Pode ir a festa";
}else {
    echo "Não pode ir a festa";
}
echo "<br><br>";

$materia = "PHP com banco de dados"; 
if($materia == "java"){
    echo "Linguagem orientada a objetos";

}else if($materia =="linguagem de scripts"){
    echo " Linguagem web para aplicações";
} else if($materia =="PHP com banco de dados") {
    echo "Linguagem procetual web";
} else {
    echo "Não é uma matéria de programação";
}

#Estrutura compacta: É dada pela ausencia das chaves.
// Pode ser usada em estruturas simples, compostas, encadeadas e estruturas de repetição.

if($idade >= 18)
    echo " Pode ir pra festa";
    
    else 
        echo "Não tem idade apropriada";

echo "<br><br><br><br>";
        // OBS: Essa estrutura só funciona Quando o conteudo de linha do bloco if/else é somente 1 linha.
        
        echo "<br><br><br><br>";

        # Estrutura ternária : É dada por definir a estrutura composta em 1 única linha.

        echo( $idade >= 18) ? "Pode ir pra festa" : "Não tem idade apropriada";

echo "<br><br><br><br>";

# Decisão multipla: É dada definir cassos de teste.

$opcao = 5;
switch($opcao) {
    case 1: "Somar";
    echo " A soma dos valores é:" . (1 + 2);
    break;
    case 2:
    echo " A multiplicação dos valores é:" . (1  * 2);
    break;
    case 3:
        echo "O módulo dos valores é:" . (1 % 2);
        break;
        default:
            echo "Opção inválida";
            break;
}