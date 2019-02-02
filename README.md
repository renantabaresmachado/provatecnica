#README PROVA TECNICA DE RENAN 
PARA RODAR O TESTE É NECESSÁRIO:
1 - SERVIDOR WEB (APACHE) UTILIZEI O XAMPP.
2 - BANCO DE DADOS MYSQL .
3- RODAR SCRIPT PARA GERAR DUMP NO BANCO DE DADOS \testedot\resourses\Dump20190202.sql
4 - CONFIGURAR O ARQUIVO \teste\tarefas\index.php
3. $con=  mysqli_connect("Caminho do banco", "SEU_USER", "SUA_SENHA", "provatecnica");
5 - CONFIGURAR O ARQUIVO \teste\api_rest\config\app.php.
258. 'username' => 'SEU_USER',
259. 'password' => 'SUA_SENHA',
260  'database' => 'provatecnica',
6- GIT: CLONAR https://github.com/renantabaresmachado/provatecnica PARA PASTA DO SERVIDOR WEB
7 - RODAR SERVIDOR WEB 
8- ACESSAR URL DO SERVIDOR/teste
9- ACESSAR ACESSAR LINK DOS EXERCICIOS
10- PARA TESTAR TOTALMENTE O EXERCICIO 4  É NECESSÁRIO UMA FERRAMENTA PARA REALIZAR REQUISIÇÕES AOS SERVIÇOS REST (UTILIZEI POSTMAN):

PATCH - URL DO SERVIDOR/test/api_rest/tarefas/edit/{ID(id válido)testar com 1}
GET - URL DO SERVIDOR/test/api_rest/tarefas/view/{ID(id válido)testar com 1}
incluir no corpo da requisição:
{
	"titulo": "novo nome da tarefa"
	"descricao": "nova descrição da descrição da tarefa",
	"prioridade": "1"
}
POST - URL DO SERVIDOR/test/api_rest/tarefas/add
incluir no corpo da requisição:
{
	"titulo": "titulo da tarefa",
	"descricao": "Descrição da tarefa",
	"prioridade": "prioridade (inteiro ex: 10)"
}
DEL - URL DO SERVIDOR/test/api_rest/tarefas/delete/{ID(id válido)testar com 1}

grato.
