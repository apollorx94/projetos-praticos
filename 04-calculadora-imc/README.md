# 🧮 Calculadora de IMC

Este projeto implementa uma calculadora de **Índice de Massa Corporal (IMC)**, permitindo calcular o IMC de várias pessoas, classificá-las conforme os padrões da Organização Mundial da Saúde (OMS) e gerar um relatório completo.

---

# 📖 Sobre o Projeto

O objetivo deste projeto é aplicar, em uma aplicação real, os principais conceitos estudados até o momento.

Durante seu desenvolvimento serão utilizados:

* Variáveis
* Condicionais (`if`, `else`, `elseif`)
* Loops (`foreach` / `forEach`)
* Funções
* Arrays Associativos (PHP)
* Objetos (JavaScript)
* `map()`
* `filter()`
* `reduce()`

Além disso, o projeto continuará evoluindo conforme novos conteúdos forem estudados.

---

# 🎯 Objetivos

Este projeto tem como objetivos:

* Calcular o IMC de uma ou mais pessoas.
* Classificar automaticamente o resultado.
* Organizar os dados utilizando estruturas de dados apropriadas.
* Gerar relatórios.
* Consolidar os conceitos estudados nas aulas anteriores.

---

# 📚 Fórmula do IMC

O cálculo do Índice de Massa Corporal é realizado utilizando a seguinte fórmula:

```text
IMC = Peso ÷ (Altura × Altura)
```

Exemplo:

```text
Peso: 70 kg

Altura: 1.75 m

IMC = 70 ÷ (1.75 × 1.75)

IMC = 22.86
```

---

# 📊 Classificação

| IMC            | Classificação      |
| -------------- | ------------------ |
| Menor que 18.5 | Abaixo do peso     |
| 18.5 até 24.9  | Peso normal        |
| 25.0 até 29.9  | Sobrepeso          |
| 30.0 até 34.9  | Obesidade Grau I   |
| 35.0 até 39.9  | Obesidade Grau II  |
| 40.0 ou mais   | Obesidade Grau III |

---

# ✨ Funcionalidades

Atualmente o projeto é capaz de:

* Calcular o IMC.
* Classificar o resultado.
* Trabalhar com múltiplas pessoas.
* Armazenar os dados em arrays associativos/objetos.
* Exibir um relatório individual.
* Calcular a média de IMC utilizando `reduce()`.

---

# 📂 Estrutura do Projeto

```text
02-calculadora-imc/
│
├── php/
│   └── calculadora-imc.php
│
├── javascript/
│   └── calculadora-imc.js
│
└── README.md
```

---

# 💻 Tecnologias Utilizadas

* PHP
* JavaScript
* Node.js
* Git

---

# ▶️ Como Executar

## PHP

```bash
php calculadora-imc.php
```

## JavaScript

Instale as dependências (caso necessário):

```bash
npm install
```

Execute:

```bash
node calculadora-imc.js
```

---

# 📌 Etapas do Projeto

Este projeto será desenvolvido em etapas.

## ✅ Etapa 1

* [x] Criar a função `calcularImc()`.
* [x] Criar a função `classificarImc()`.
* [x] Trabalhar com um array de pessoas.
* [x] Calcular o IMC de cada pessoa.
* [x] Gerar um relatório.
* [x] Calcular a média do grupo utilizando `reduce()`.

---

## 🚧 Próximas Etapas

O projeto continuará evoluindo durante o curso.

Algumas melhorias previstas são:

* [ ] Entrada de dados pelo terminal.
* [ ] Cadastro dinâmico de pessoas.
* [ ] Menu interativo.
* [ ] Validação dos dados informados.
* [ ] Estatísticas do grupo.
* [ ] Separação do código em módulos.
* [ ] Organização em classes (Programação Orientada a Objetos).

---

# 🧠 Conceitos Praticados

Durante o desenvolvimento deste projeto foram aplicados:

* Variáveis
* Operadores matemáticos
* Condicionais
* Loops
* Funções
* Arrays Associativos
* Objetos
* `map()`
* `filter()`
* `reduce()`
* Organização de código
* Estruturação de projetos

