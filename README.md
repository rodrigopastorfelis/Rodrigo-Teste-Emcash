# Teste Em Cash

## Sobre o Projeto
Projeto criado para cadastrar polígonos e retornar o valor da soma de todos cadastrados via API REST. Sua criação tem por finalidade testar as habilidades relacionado ao conteúdo citado acima.

## O que usamos?
Foi utilizado no desenvolvimento a linguagem PHP em sua versão 8.1.4, Laravel 9.7, Testes Unitários utilizando Phpunit, MySQL para persistir os dados e Insomnia para testar as rotas.

## Como iniciar
### Pré-Requisitos
- Laravel 9.7
- PHP 8
- Composer
- Xampp ou Wamp
- Programa para testar rotas de API (Insomnia ou Postman)

### Iniciando o Projeto
Para instalar as dependências do projeto execute o código:

composer install


Acessar o phpmyadmin atraves do Xampp/Wamp, crie um novo banco com o nome `teste_emcash`. Após realizar os passos acima, execute o código abaixo para criar as migrations necessárias:

php artisan migrate


Execute o código abaixo para iniciar o servidor local após realizar as migrations:

php artisan serve


Para cadastrar um triângulo acesse a rota `http://localhost:8000/api/triangulo` e inserir no corpo da requisição os valores para "base" e "altura" do polígono. Exemplo:

{
"base": 10,
"altura": 10
}


Para cadastrar um retângulo acesse a rota `http://localhost:8000/api/retangulo` e inserir no corpo da requisição os valores para "base" e "altura" do polígono. Exemplo:

{
"base": 10,
"altura": 10
}


Para obter o resultado final com a soma da área de todos os polígonos cadastrados, acesse a rota `http://localhost:8000/api/resultado` e ela mostrará no body o valor final.

## Testes Unitários
Para realizar os testes unitários do sistema, podemos fazer de duas formas: executando todos os métodos de teste ou individualmente. Para executar todos os métodos digite o código abaixo:

vendor\bin\phpunit


Para executar cada método individualmente, digite os códigos abaixo, um de cada vez:

vendor\bin\phpunit --filter TrianguloAreaTest


vendor\bin\phpunit --filter RetanguloAreaTest



 
