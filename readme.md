## CRUD SIMPLES LARAVEL COM jQUERY

Depois de clonar este repositório, vá para a pasta raiz, execute os seguintes comandos no terminal:

- composer install
- composer update 
<p>Renomeie o arquivo .env.example para .env e forneça os detalhes do seu banco de dados:</p>
- DB_CONNECTION=mysql
- DB_HOST=localhost
- DB_PORT=3306
- DB_DATABASE=nome_da_base
- DB_USERNAME=usuario
- DB_PASSWORD=senha</br></br>
<p>É preciso uma tabela de banco de dados para executar operações CRUD. Execute <b>php artisan migrate</b> para importar a tabela.</p>
<p>Execute:</p>
- php artisan key:generate
