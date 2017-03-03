# Webedia
## Descrição

O projeto foi desenvolvido com framework Laravel utilizando um famoso design pattern chamado Repository que abstrai a implementação de acesso ao banco de dados, criei as interfaces em Webedia\Repositories\Contracts, então toda vez que vou instanciar uma classe Repository, na verdade instacio uma interface e injeto a classe Repository (essa configuração está em app\Providers\AppServiceProvider.php.

De banco utilizei MySQL e no front sass, es6 e a lib Axios para requisições AJAX. No admin utilizei o bootstrap para estilizar.

## Configurando
* É necessário criar um virtual host com domínio webedia.dev apontando para pasta /public do projeto
* Criar banco de dados no mysql chamado webedia
* Configure o arquivo .env (enviando o meu para facilitar) com os acessos ao banco de dados (usuário e senha)
* Pelo terminal no root do projeto execute: php artisan migrate (Esse comando vai gerar as tabelas)
* Pelo terminal executar composer install
* Pelo terminal executar npm install

## URLs:
* http://webedia.dev (Home com as postagens, é necessário criar no admin)
* http://webedia.dev/admin (Acesso o admin, caso não esteja logado, vai para página de login)

## Estrutura Laravel
* HTML está localizado em resources/views
* SASS está localizado em resources/assets/sass
* Js está localizado em resources/assets/js

## Requisitos para rodar o laravel
* https://laravel.com/docs/5.4#server-requirements
