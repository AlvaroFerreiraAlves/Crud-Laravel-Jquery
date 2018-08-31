## CRUD SIMPLES LARAVEL COM JQUERY

Depois de clonar este repositório, vá para a pasta raiz, execute os seguintes comandos no terminal:

- composer install
- composer update 
<p>Renomeie o arquivo <b>.env.example</b> para <b>.env</b> e forneça os detalhes do seu banco de dados:</p>
- DB_CONNECTION=mysql</br>
- DB_HOST=localhost</br>
- DB_PORT=3306</br>
- DB_DATABASE=nome_da_base</br>
- DB_USERNAME=usuario</br>
- DB_PASSWORD=senha</br></br>
<p>É preciso uma tabela de banco de dados para executar operações CRUD. Execute <b>php artisan migrate</b> para importar a tabela.</p>
<p>Execute:</p>
- php artisan key:generate</br>
- php artisan serve
<p>Vá para o navegador e coloque na barra de endereço:  <b>http://localhost:8000/</b> </p>
