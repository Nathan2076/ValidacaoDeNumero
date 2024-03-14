# Validação de Número com PHP

## Sobre

Esse repositório guarda uma coletânea de exercícios de PHP da disciplina de Programação Web II que envolve validação de números.

- `atv1.php`: Par ou Ímpar

  Dado um número definido pelo usário, o programa calcula, usando a operação módulo, se o número informado é par ou ímpar, através da condição `if (&num % 2 == 0)`.

- `atv2.php`: Redondo ou Não

  O algoritmo valida um número dado pelo usuário, dizendo se ele é redondo ou não. Apesar das diversas definições existentes de número redondo, a utilizada é a determinada pelo último algarismo de um número ser 0, usando a condição `if (&num % 10 == 0)`.

- `atv3.php`: Positivo, Negativo ou Neutro

  O usuário informa um número e o código verifica se ele é positivo, negativo ou zero, usando if/else:
  ```php
  if (&num > 0) {
      // Positivo
  } elseif (&num < 0) {
      // Negativo
  } else {
      // Neutro
  }
  ```

## Tecnologias utilizadas

- ✅ HTML
- ✅ PHP

## Fontes consultadas

- [Round number](https://en.wikipedia.org/wiki/Round_number) (Wikipedia)
