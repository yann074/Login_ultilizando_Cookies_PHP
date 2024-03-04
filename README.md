# Sistema de Login em PHP utilizando Cookies e Sessões

Este é um simples sistema de login desenvolvido em PHP que utiliza cookies e sessões para autenticação de usuários.

## Funcionalidades

- Página de login para inserção de email e senha.
- Validação dos dados de login.
- Utilização de cookies para manter a sessão do usuário ativa.
- Utilização de sessões para armazenar informações de autenticação.

## Estrutura de Arquivos

- **index.php**: Página de login onde os usuários podem inserir suas credenciais.
- **auth.php**: Arquivo que processa a autenticação do usuário.
- **dashboard.php**: Página de dashboard exibida após o login bem-sucedido.
- **logout.php**: Página para realizar o logout do usuário.

## Configuração

1. Clone o repositório para o seu ambiente de desenvolvimento local.
2. Configure um servidor web local (por exemplo, XAMPP, WAMP, MAMP) e certifique-se de que o PHP esteja instalado.
3. Importe o arquivo de banco de dados `database.sql` para criar a tabela `users`.
4. Configure as credenciais do banco de dados no arquivo `auth.php`.
5. Inicie o servidor web e acesse o projeto através do navegador.

## Como Utilizar

1. Acesse a página `index.php` no navegador.
2. Insira o email e senha cadastrados.
3. Após a autenticação bem-sucedida, você será redirecionado para a página de dashboard.
4. Para sair, clique no botão "Logout" na página de dashboard.

## Tecnologias Utilizadas

- PHP
- HTML
- CSS
