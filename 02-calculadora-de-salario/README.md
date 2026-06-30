# 💰 Calculadora de Salário Líquido em PHP

## 📖 Sobre o projeto

Este projeto consiste em uma **Calculadora de Salário Líquido**, desenvolvida em **PHP**, **HTML**, **CSS** e **JavaScript**, com o objetivo de calcular automaticamente os descontos de **INSS** e **IRRF**, retornando ao usuário o valor do salário líquido.

O sistema recebe o salário bruto e a quantidade de dependentes, realiza todos os cálculos no backend utilizando PHP e apresenta o resultado sem recarregar a página através da API `fetch()` do JavaScript.

Este projeto foi desenvolvido com foco em praticar conceitos fundamentais de desenvolvimento Web Backend utilizando PHP moderno.

---

## 🚀 Funcionalidades

* Informar salário bruto
* Informar quantidade de dependentes
* Calcular desconto progressivo do INSS
* Calcular desconto do IRRF
* Aplicar dedução por dependentes
* Aplicar regra de isenção do IRRF
* Aplicar regra de desconto parcial do IRRF
* Calcular salário líquido
* Exibir o total de descontos
* Atualizar os resultados sem recarregar a página (AJAX utilizando Fetch API)

---

## 🛠 Tecnologias utilizadas

* PHP 8+
* HTML5
* CSS3
* JavaScript
* Fetch API

---

## 📂 Estrutura do projeto

```text
📦 calculadora-de-salario
│
├── index.php
├── cad.php
└── README.md
```

---

## 📌 Fluxo da aplicação

```text
Usuário
    │
    ▼
Preenche formulário
    │
    ▼
JavaScript (Fetch API)
    │
    ▼
cad.php
    │
    ├── Calcula INSS
    ├── Calcula IRRF
    ├── Calcula Salário Líquido
    ▼
Retorna HTML
    │
    ▼
Resultado exibido na tela
```

---

## 🧮 Regras implementadas

### INSS

O cálculo do INSS é realizado utilizando o modelo progressivo por faixas.

As regras incluem:

* Aplicação de alíquotas por faixa salarial
* Respeito ao teto previdenciário
* Soma dos descontos de cada faixa

---

### IRRF

Após o cálculo do INSS é realizado o cálculo do IRRF considerando:

* Base de cálculo
* Dedução por dependentes
* Faixas oficiais do IRRF
* Isenção para salários de até R$ 5.000,00
* Regra de desconto parcial para salários até R$ 7.350,00

---

## 💡 Conceitos praticados

Durante o desenvolvimento deste projeto foram utilizados diversos conceitos importantes do PHP moderno:

### PHP

* Funções
* Tipagem de parâmetros
* Tipagem de retorno
* Arrays multidimensionais
* Estruturas condicionais
* Estruturas de repetição (`foreach`)
* Operador de coalescência (`??`)
* Named Arguments
* Constantes internas do PHP (`PHP_FLOAT_MAX`)
* `floatval()`
* `intval()`
* `number_format()`
* `round()`

---

### HTML

* Formulários
* Inputs
* Labels
* Estrutura semântica
* Organização em Sections

---

### JavaScript

* Manipulação do DOM
* Eventos
* `addEventListener`
* `preventDefault`
* `FormData`
* `Fetch API`
* Promises
* Manipulação de respostas assíncronas

---

## 📈 Exemplo de utilização

Entrada:

```text
Salário Bruto:
R$ 6.000,00

Dependentes:
2
```

Saída:

```text
Salário Líquido

Desconto INSS:
R$ xxx.xx

Desconto IRRF:
R$ xxx.xx

Total de descontos:
R$ xxx.xx
```

---

## 🎯 Objetivos de aprendizado

Este projeto foi desenvolvido para consolidar conhecimentos em:

* Comunicação entre Front-end e Back-end
* Processamento de formulários
* Cálculos financeiros
* Organização de funções
* Separação de responsabilidades
* Boas práticas em PHP

---

## 📚 Próximas melhorias

* Validação dos campos de entrada
* Máscara monetária para o salário
* Formatação automática dos valores
* Histórico de cálculos
* Interface responsiva
* Exibição detalhada do cálculo por faixa do INSS
* Exibição detalhada do cálculo do IRRF
* Testes unitários
* Organização em classes (Programação Orientada a Objetos)
* Separação da lógica em camadas (MVC)

---

## 👨‍💻 Autor

Desenvolvido por **Lucas Apolinário** como parte da sua jornada de estudos em PHP, com foco no desenvolvimento de aplicações Web Backend e evolução para níveis mais avançados da linguagem.
