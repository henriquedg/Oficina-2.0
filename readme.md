<h1>Oficina 2.0</h1>

<h2>Sobre o projeto:</h2>

<h3>O projeto Oficina 2.0 visa facilitar o cadastro e consulta de orçamentos de uma oficina através de um sistema informatizado.</h3>

Criador: Henrique Duarte Guerra;
Banco de dados utilizado: sqlite;
Necessário ter o Composer instalado no sistema para executar o projeto;

<h2>Como usar:</h2>

Vá ao terminal e localize a pasta onde o projeto foi salvo.
Execute o comando "composer install" para instalar o composer na pasta do projeto. Logo após, crie um arquivo chamado "database.sqlite" na pasta "database" do projeto, ele será o banco de dados do sistema.

Feito isso, execute o comando "copy .env.example .env". Em seguida, execute "php artisan migrate". Execute "php artisan key:generate", e por último, execute "php artisan serve", e deixe o terminal aberto durante o uso do site.

Após executar o comando "php artisan serve", aparecerá na tela do terminal um link, copie e cole ele no seu browser de preferência. O site será aberto na tela inicial, e você terá duas opções relacionadas ao usuário: Login e Cadastro.

Feito o cadastro, o usuário é redirecionado à página Home. Nela existem as opções de cadastro e consulta de orçamentos.

Na tela de Cadastro de orçamento existem 7 campos a serem preenchidos: ID, Cliente, Data, Hora, Vendedor, Descrição e Valor Orçado. Após preencher esses campos clique em Registrar, os dados serão salvos no banco de dados, e você será redirecionado à página Home.
Na página Home você tem a opção de realizar uma pesquisa por nome, na qual o resultado será definido com base no filtro escolhido (Cliente ou Vendedor), e há também a opção de realizar uma pesquisa por intervalo de data, na qual é necessário preencher uma data inicial e uma data final. Os resultados são apresentados abaixo das opções de pesquisa, em uma tabela, ordenados de forma decrescente com base da data de cadastro. Se a informação pesquisada não for encontrada, um aviso é exibido. Na tabela de resultados de pesquisa, só são exibidos os orçamentos cadastrados pelo usuário logado.
