## CRUD SIMPLES LARAVEL COM jQUERY

Depois de clonar este repositório, vá para a pasta raiz, execute os seguintes comandos no terminal:

- composer install
- composer update </br>
Renomeie o arquivo .env.example para .env e forneça os detalhes do seu banco de dados:
- DB_CONNECTION=mysql
- DB_HOST=localhost
- DB_PORT=3306
- DB_DATABASE=nome_da_base
- DB_USERNAME=usuario
- DB_PASSWORD=senha
É preciso uma tabela de banco de dados para executar operações CRUD. Execute php artisan migrate para importar a tabela.
Execute:
- php artisan key:generate
