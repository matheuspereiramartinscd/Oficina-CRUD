# Oficina 2.0 - Sistema de Cadastro de Orçamentos

Este projeto é um sistema de cadastro de orçamentos desenvolvido utilizando PHP, o framework Laravel e o banco de dados MySQL. O objetivo é fornecer uma plataforma para gerenciar orçamentos de forma simples e eficiente. A aplicação é baseada no padrão MVC (Model-View-Controller), utilizando Laravel para a criação de APIs e gerenciamento da lógica de negócios.

## Funcionalidades

- **Cadastro de Orçamentos**: Sistema para realizar o cadastro de orçamentos com dados de clientes e serviços.
- **Autenticação e Autorização**: Controla o acesso ao sistema com autenticação baseada em sessões.
- **Gerenciamento de Banco de Dados**: Utiliza migrações do Laravel para criar e gerenciar tabelas no MySQL.
- **Interface Responsiva**: Design adaptado para ser visualizado em dispositivos móveis e desktops.

## Tecnologias Utilizadas

### Backend

- **PHP**: Linguagem de programação utilizada no desenvolvimento do projeto (versão ^8.1).
- **Laravel Framework**: Framework PHP para facilitar o desenvolvimento e organização do código (versão ^10.10).
- **MySQL**: Banco de dados relacional utilizado para armazenar informações de orçamentos.

### Dependências e Ferramentas

- **Composer**: Gerenciador de dependências para PHP, utilizado para instalar as bibliotecas necessárias para o projeto.
- **XAMPP**: Pacote de software que inclui Apache, MySQL e PHP, utilizado para rodar o servidor localmente.

#### Outras Dependências

- **Guzzle HTTP**: Biblioteca para fazer requisições HTTP (versão ^7.2).
- **Laravel Sanctum**: Para autenticação de API e gerenciamento de tokens (versão ^3.2).
- **Laravel Scout**: Para adicionar funcionalidades de pesquisa full-text ao Laravel (versão ^10.2).
- **Laravel Tinker**: Para utilizar o REPL no Laravel (versão ^2.8).
- **Faker PHP**: Para gerar dados falsos em testes (versão ^1.9.1).
- **Laravel Pint**: Ferramenta de formatação de código (versão ^1.0).
- **Laravel Sail**: Ambiente de desenvolvimento Docker para Laravel (versão ^1.18).
- **Mockery**: Framework para mocks de objetos em testes (versão ^1.4.4).
- **PHPUnit**: Framework para execução de testes unitários (versão ^10.1).
- **Spatie Laravel Ignition**: Ferramenta de depuração para Laravel (versão ^2.0).

## Como Rodar o Projeto

### Requisitos

- PHP versão 8.2.4 ou superior.
- XAMPP ou outro servidor local com suporte a PHP e MySQL.
- Composer instalado para gerenciar dependências do Laravel.

### Passos para Instalação

1. **Instalar Dependências**
    - Clone o repositório do projeto:
      ```bash
      git clone https://github.com/seu-usuario/oficina-2.0.git
      cd oficina-2.0
      ```

2. **Configurar o Ambiente**
    - Acesse o arquivo `php.ini` na pasta onde o PHP está instalado.
    - Habilite as extensões `pdo_mysql` e `fileinfo`, removendo o ponto e vírgula (`;`) no início das linhas:
      ```ini
      extension=pdo_mysql
      extension=fileinfo
      ```
    - Abra o XAMPP e ative os módulos **Apache** e **MySQL**.

3. **Configurar o Banco de Dados**
    - Acesse o PhpMyAdmin e crie uma nova base de dados, por exemplo, chamada `oficina2`.
    - Configure o arquivo `.env` do projeto com os dados do seu banco de dados:
      ```dotenv
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=oficina_2_0
      DB_USERNAME=root
      DB_PASSWORD=
      ```

4. **Instalar Dependências do Laravel**
    - Execute o comando para instalar as dependências:
      ```bash
      composer install
      ```

5. **Executar as Migrations**
    - Execute as migrations para criar a tabela `orcamentos` no banco de dados:
      ```bash
      php artisan migrate
      ```

6. **Rodar o Servidor Local**
    - Execute o servidor local com o comando:
      ```bash
      php artisan serve
      ```

7. **Acessar o Sistema**
    - Acesse o sistema no navegador em:
      ```
      http://127.0.0.1:8000
      ```

---

Esse README está formatado para GitHub, e você pode substituí-lo diretamente em seu repositório. Não se esqueça de atualizar o link do repositório com o correto, caso necessário.
