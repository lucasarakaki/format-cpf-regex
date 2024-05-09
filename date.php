<?php
/* 15. Escrever uma função que receba uma string contendo uma data no formato 
"dd/mm/aaaa" e retorne a mesma data no formato "aaaa-mm-dd". */

  function formatDate($date){
    # Definindo variáveis
    $pattern = "/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/";
    $result = preg_match($pattern, $date);
    # Execption caso não informe a data no padrão
    try {
      # Validando a $result
      if ($result == false) {
        throw new Exception("Padrão incorreto, a data precisa ser informada nesse padrão: 'dd/mm/aaaa'");
      }else {
        $date = preg_replace($pattern, "$3-$2-$1", $date);
        echo "Formantando a data para esse padrão 'aaaa-mm-dd': " . $date;
      }
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  }
  # Verificando se a $inputDate está vazia
  try {
    # Defina a data no formato "dd/mm/aaaa"
    $inputDate = "09/05/2024";
    if (empty($inputDate)) {
      throw new Exception("A variável 'inputDate' está vazia, insira uma data nesse padrão, 'dd/mm/aaaa'.");
    }else{
      # Chamando a function
      formatDate($inputDate);
    }
  } catch (\Exception $e) {
    echo "Variável vazia: " . $e->getMessage();
  }



