# Café & Grão

> A didactic coffee shop storefront built with PHP, MySQL, HTML, and CSS.

## English

### About

Café & Grão is a fictional online coffee shop created for educational purposes. The application displays coffee products, accessories, and kits loaded from a MySQL database. Visitors can filter the catalog by category and see prices, promotional prices, product status, stock availability, and product images.

The project currently focuses on the storefront presentation. Cart interactions and checkout are not implemented yet.

### Features

- Responsive coffee shop storefront.
- Product catalog loaded from MySQL.
- Category filters for coffees, accessories, and kits.
- Promotional and regular price display.
- New-product and promotion badges.
- Out-of-stock state.
- PDO connection with exception mode enabled.
- Sensitive local configuration excluded through `.gitignore`.

### Technologies

- PHP 7.4+ (PHP 8.x recommended)
- MySQL 5.7+ or MariaDB 10.4+
- HTML5
- CSS3
- Apache (XAMPP recommended)

### Project structure

```text
.
├── imagens/              # Product and hero illustrations
├── src/
│   ├── conexao.php       # MySQL/PDO connection
│   ├── index.php         # Storefront page and product catalog
│   └── style.css         # Visual styles
├── test/
│   └── teste_conexao.php # Basic database connection check
├── .env.example          # Example local environment variables
└── README.md
```

### Requirements

Before running the project, install or enable:

1. PHP with the PDO MySQL extension.
2. Apache.
3. MySQL or MariaDB.
4. A database named `loja_cafe` containing the `categorias` and `produtos` tables expected by the catalog query.

> This repository does not include a database dump. The database schema and seed data must be created separately.

### Running locally with XAMPP

1. Copy or clone the project into the XAMPP web directory, for example:

   ```text
   C:\xampp\htdocs\prova-web1-italo-main
   ```

2. Start **Apache** and **MySQL** from the XAMPP Control Panel.
3. Create the `loja_cafe` database in MySQL.
4. Create and populate the `categorias` and `produtos` tables with the columns used by `src/index.php`.
5. Confirm the local database credentials in `src/conexao.php`.
6. Open the storefront at:

   ```text
   http://localhost/prova-web1-italo-main/src/index.php
   ```

### Testing the database connection

With Apache and MySQL running, open:

```text
http://localhost/prova-web1-italo-main/test/teste_conexao.php
```

The page should show `Conexão realizada com sucesso!` when the PDO connection is available.

### Configuration and security

- Use `.env.example` as a reference for local database settings.
- Do not commit real passwords or other secrets.
- The current connection file contains local development defaults; review it before deploying.
- Configure production credentials through a secure environment or server configuration.

### Project status

This is a fictional educational project. It is not intended for production use without additional work on authentication, cart behavior, checkout, validation, error handling, accessibility, and deployment security.

## Português

### Sobre o projeto

O Café & Grão é uma loja virtual fictícia de cafés, criada para fins didáticos. A aplicação exibe cafés, acessórios e kits carregados de um banco de dados MySQL. Os visitantes podem filtrar o catálogo por categoria e visualizar preços, preços promocionais, status dos produtos, disponibilidade em estoque e imagens.

Atualmente, o projeto concentra-se na apresentação da vitrine. As interações do carrinho e o checkout ainda não foram implementados.

### Funcionalidades

- Vitrine responsiva de uma loja de café.
- Catálogo de produtos carregado do MySQL.
- Filtros por categoria: cafés, acessórios e kits.
- Exibição de preços normais e promocionais.
- Identificação de produtos novos e em promoção.
- Indicação de produtos esgotados.
- Conexão PDO configurada com modo de exceção.
- Configurações locais sensíveis protegidas pelo `.gitignore`.

### Tecnologias

- PHP 7.4+ (PHP 8.x recomendado)
- MySQL 5.7+ ou MariaDB 10.4+
- HTML5
- CSS3
- Apache (XAMPP recomendado)

### Estrutura do projeto

```text
.
├── imagens/              # Ilustrações dos produtos e do banner principal
├── src/
│   ├── conexao.php       # Conexão com MySQL/PDO
│   ├── index.php         # Página da vitrine e catálogo
│   └── style.css         # Estilos visuais
├── test/
│   └── teste_conexao.php # Verificação básica da conexão
├── .env.example          # Exemplo de variáveis de ambiente locais
└── README.md
```

### Requisitos

Antes de executar o projeto, instale ou habilite:

1. PHP com a extensão PDO MySQL.
2. Apache.
3. MySQL ou MariaDB.
4. Um banco chamado `loja_cafe` com as tabelas `categorias` e `produtos` esperadas pela consulta do catálogo.

> Este repositório não contém um dump do banco de dados. O esquema e os dados iniciais devem ser criados separadamente.

### Execução local com XAMPP

1. Copie ou clone o projeto para a pasta web do XAMPP, por exemplo:

   ```text
   C:\xampp\htdocs\prova-web1-italo-main
   ```

2. Inicie o **Apache** e o **MySQL** no Painel de Controle do XAMPP.
3. Crie o banco `loja_cafe` no MySQL.
4. Crie e preencha as tabelas `categorias` e `produtos` com as colunas utilizadas por `src/index.php`.
5. Confirme as credenciais do banco local em `src/conexao.php`.
6. Abra a vitrine em:

   ```text
   http://localhost/prova-web1-italo-main/src/index.php
   ```

### Teste da conexão com o banco

Com o Apache e o MySQL em execução, abra:

```text
http://localhost/prova-web1-italo-main/test/teste_conexao.php
```

A página deve exibir `Conexão realizada com sucesso!` quando a conexão PDO estiver disponível.

### Configuração e segurança

- Use `.env.example` como referência para as configurações locais do banco.
- Não envie senhas reais ou outros segredos para o repositório.
- O arquivo de conexão atual contém valores padrão de desenvolvimento local; revise-o antes de publicar em produção.
- Configure credenciais de produção por meio de um ambiente seguro ou da configuração do servidor.

### Status do projeto

Este é um projeto fictício e didático. Ele não deve ser usado em produção sem trabalho adicional em autenticação, carrinho, checkout, validações, tratamento de erros, acessibilidade e segurança de publicação.

## License

This project is intended for educational use.

## Licença

Este projeto é destinado a fins didáticos.
