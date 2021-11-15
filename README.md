# Max Plural
Website da incorporadora Max Plural
- https://maxplural.com.br

----
# Instalar compass e gulp [dependências]
1) $ gem update --system
2) $ gem install compass
3) $ gem install susy
4) $ npm install -g npm
5) $ npm install
6) $ gulp

----
# Instalar a aplicação [php 7.3+]
1) Criar uma nova base de dados MySQL ex: "create database maxplural";
2) Configurar o arquivo .env (ou copiar env para .env)
3) $ composer install
4) $ php spark migrate
5) $ php spark db:seed DataSeeder
6) $ php spark serve
7) Acessar o site ex: "http://localhost:8080/"
8) Acessar o painel adm ex: "http://localhost:8080/admin/" (login: gihovani ou kleverton / Senha: senha)
