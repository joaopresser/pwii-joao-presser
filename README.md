# pwii-joao-presser
Programação Web II por prof João Siles e Najara Cardosoaa
#  Tutorial de Iniciação de Projeto Expo

  

Este repositório contém um tutorial passo a passo para iniciar um novo projeto com o **Expo**, uma ferramenta poderosa para criar aplicativos universais para Android, iOS e web usando **JavaScript** e **React**.

  

---

  

##  Requisitos

  

Antes de começar, é fundamental ter o **Node.js** e o **NPM (Node Package Manager)** instalados em sua máquina. Para verificar se eles estão instalados e atualizados, abra seu **PowerShell** (ou terminal de sua preferência) e execute os comandos abaixo:

  

```bash

# Verificar a versão do Node.js

node  -v

  

# Verificar a versão do NPM

npm  -v

```

  

> Se você não possui o Node.js em sua máquina, pode baixá-lo em: [Node.js Downloads](https://nodejs.org/)

  

---

  

##  Passo 1: Criando seu Projeto Expo

  

Com os requisitos prontos, crie seu projeto Expo com o seguinte comando:

  

```bash

npx  create-expo-app@latest

```

  

> 💡 Recomendação: “Comece com o projeto padrão criado por create-expo-app. O projeto padrão inclui um código de exemplo para ajudar você a começar.” — Documentação oficial do Expo.

  

Você será solicitado a dar um nome ao seu projeto:

  

```

√ What is your app named?

```

  

Basta digitar o nome desejado e pressionar `Enter`.

  

---

  

# 💻 PWII - Projeto Laravel (Aula 07)

  

Este repositório também inclui informações sobre o projeto **Laravel** desenvolvido para a disciplina **PWII (Programação para Web II)**, especificamente o projeto "**aula 07**":

🔗 [GitHub - pwii-sara-coni](https://github.com/joaopresser/pwii-joao-presser)

  

---

  

## ❓ O que é Laravel?

  

Laravel é um **framework PHP** robusto e elegante, baseado no padrão **MVC (Model-View-Controller)**, que oferece ferramentas modernas como sistema de rotas, ORM (Eloquent), autenticação, cache, entre outras.

  

---

  

## ✅ Requisitos para Rodar o Projeto Laravel

  

-  **PHP:** Versão 8.0 ou superior

-  **Composer:** Gerenciador de dependências do PHP

-  **Servidor Web:** Apache ou Nginx (ex: XAMPP, WAMP, MAMP)

-  **Banco de Dados:** MySQL (ou compatível)

  

---

  

##  Passo a Passo para Rodar o Projeto

  

### 1. Clonar o Repositório

  

```bash

git  clone  https://github.com/saraconi/pwii-sara-coni.git

```

  

### 2.  Acessar o Diretório do Projeto

  

```bash

cd  pwii-sara-coni

```

  

### 3.  Instalar as Dependências com Composer

  

```bash

composer  install

```

  

### 4. Configurar o Arquivo de Ambiente `.env`

  

```bash

cp  .env.example  .env

```

  

Edite o `.env` com as credenciais do banco de dados. Exemplo:

  

```env

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=pwii_aula07

DB_USERNAME=root

DB_PASSWORD=

```

  

### 5. Gerar a Chave da Aplicação

  

```bash

php  artisan  key:generate

```

  

### 6. Rodar as Migrações

  

```bash

php  artisan  migrate

```

  

Se houver seeders:

  

```bash

php  artisan  db:seed

```

  

### 7. Iniciar o Servidor de Desenvolvimento

  

```bash

php  artisan  serve

```

  

Abra no navegador: [http://127.0.0.1:8000](http://127.0.0.1:8000)

  

---

  

## 🔁 Como Salvar e Rodar em Outra Máquina

  

1.  **Clonar o Repositório:**

`git clone https://github.com/saraconi/pwii-sara-coni.git`

  

2.  **Instalar Dependências:**

`composer install`

  

3.  **Configurar `.env`:**

`cp .env.example .env` e ajustar dados do banco

  

4.  **Gerar Chave:**

`php artisan key:generate`

  

5.  **Rodar Migrações:**

`php artisan migrate`

*(opcional)*  `php artisan db:seed`

  

6.  **Rodar o Projeto:**

`php artisan serve`

  

---

  

✅ Certifique-se de que todos os requisitos estão instalados na outra máquina.
