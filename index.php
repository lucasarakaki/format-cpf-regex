<?php
# Formantando CPF com regex e grupos no PHP
  function formatCpf($cpf) {
    # Definindo o padrão da expressão
    $pattern = "/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/";
    $result = preg_match($pattern, $cpf);
    # Validando exceções
    try {
      if ($result == false) {
        throw new Exception("digite 0s 11 dígitos do seu CPF sem pontos e traços");
      }
      # Formantando o CPF com o preg_replace
      if ($result) {
        $cpf = preg_replace($pattern, "$1.$2.$3-$4", $cpf);
        echo "Seu CPF formatado: " . $cpf;
      }
      } catch (\Exception $e) {
        echo "Padrão incorreto, " . $e->getMessage(); 
      }

  }
  # Insira o CPF, somente números
  $inputCpf = "";
  formatCpf($inputCpf);