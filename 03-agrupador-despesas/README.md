# 💳 Agrupador de Transações em PHP

## 📖 Sobre o projeto

O **Agrupador de Transações** é uma aplicação Web desenvolvida em **PHP**, **HTML**, **JavaScript** e **Bootstrap**, criada para registrar múltiplas transações financeiras e apresentar um resumo consolidado das movimentações.

O usuário pode adicionar quantas transações desejar, classificando cada uma como **Entrada** ou **Saída**, informando seu valor e uma descrição. Após o envio do formulário, o sistema calcula automaticamente os totais de entradas, saídas e o saldo final.

Este projeto foi desenvolvido com o objetivo de praticar o processamento de formulários dinâmicos em PHP utilizando arrays enviados pelo navegador.

---

# 🚀 Funcionalidades

* Adicionar múltiplas transações dinamicamente
* Remover transações antes do envio
* Classificar transações como Entrada ou Saída
* Informar descrição de cada movimentação
* Calcular total de entradas
* Calcular total de saídas
* Calcular saldo final
* Exibir todas as transações em formato de tabela
* Interface responsiva utilizando Bootstrap

---

# 🛠 Tecnologias utilizadas

* PHP 8+
* HTML5
* CSS3
* JavaScript
* Bootstrap 5
* DOM API

---

# 📂 Estrutura do projeto

```text
📦 agrupador-despesas
│
├── index.html
├── resultado.php
└── README.md
```

---

# 📌 Fluxo da aplicação

```text
Usuário
    │
    ▼
Adiciona uma ou várias transações
    │
    ▼
Preenche:
 • Tipo
 • Valor
 • Descrição
    │
    ▼
Envia formulário
    │
    ▼
resultado.php
    │
    ├── Processa todas as transações
    ├── Soma entradas
    ├── Soma saídas
    ├── Calcula saldo
    ▼
Exibe resumo completo
```

---

# 🧮 Regras implementadas

O sistema realiza automaticamente:

* Leitura de múltiplos registros enviados pelo formulário
* Conversão dos valores para tipo numérico
* Ignora linhas sem valor informado
* Soma separadamente entradas e saídas
* Calcula o saldo final

A fórmula utilizada é:

```text
Saldo = Total de Entradas - Total de Saídas
```

---

# 💡 Conceitos praticados

Durante o desenvolvimento deste projeto foram utilizados diversos conceitos importantes do PHP moderno e do desenvolvimento Web.

## PHP

* Arrays enviados por formulário (`campo[]`)
* Arrays associativos
* Laços de repetição (`foreach`)
* Índices de arrays
* `floatval()`
* `number_format()`
* Estruturas condicionais (`if` / `else`)
* Manipulação de dados enviados via `POST`
* Separação entre processamento e apresentação

---

## HTML

* Formulários
* Inputs
* Selects
* Estrutura semântica
* Tabelas
* Componentes responsivos

---

## JavaScript

* Manipulação do DOM
* `createElement()`
* `appendChild()`
* `querySelector()`
* `addEventListener()`
* Remoção dinâmica de elementos
* Template Literals
* Criação dinâmica de componentes

---

## Bootstrap

* Grid System
* Cards
* Tabelas responsivas
* Botões
* Badges
* Responsividade
* Espaçamentos utilitários

---

# 📈 Exemplo de utilização

### Entrada

| Tipo    |       Valor | Descrição |
| ------- | ----------: | --------- |
| Entrada | R$ 3.500,00 | Salário   |
| Entrada |   R$ 800,00 | Freelance |
| Saída   | R$ 1.200,00 | Aluguel   |
| Saída   |   R$ 450,00 | Mercado   |

### Resultado

```text
Total de Entradas:
R$ 4.300,00

Total de Saídas:
R$ 1.650,00

Saldo:
R$ 2.650,00
```

---

# 🎯 Objetivos de aprendizado

Este projeto foi desenvolvido para consolidar conhecimentos em:

* Manipulação de formulários dinâmicos
* Envio de arrays através do HTML
* Processamento de dados em PHP
* Estruturas de repetição
* Manipulação de arrays associativos
* Organização da lógica de negócio
* Construção de interfaces responsivas
* Integração entre HTML, JavaScript e PHP

---

# 📚 Próximas melhorias

* Validação dos campos obrigatórios
* Máscara monetária para os valores
* Edição de transações antes do envio
* Exclusão com confirmação
* Persistência em banco de dados
* Filtros por tipo de transação
* Categorias (Alimentação, Transporte, Lazer, etc.)
* Exportação para CSV e PDF
* Gráficos utilizando Chart.js
* Dashboard financeiro
* Organização em Programação Orientada a Objetos (POO)
* Estrutura seguindo o padrão MVC

---

# 👨‍💻 Autor

Desenvolvido por **Lucas Apolinário** como parte da sua jornada de estudos em PHP, com foco no desenvolvimento de aplicações Web, manipulação de formulários e construção de sistemas financeiros simples para consolidar conceitos fundamentais da linguagem.
