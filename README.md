<h1>Biblioteca Burkina Faso</h1>



Projeto baseado no desafio Back-end proposto pela DevChallege (https://devchallenge.vercel.app/challenges/5f0b43f5a5fec43156149043/details).

<h2>Desafio:</h2>

Seu desafio é criar o backend para um sistema de gerenciamento de uma biblioteca!

## Requisitos:

### Rotas da aplicação:

**[POST]** /obras : A rota deverá receber titulo, editora, foto, e autores dentro do corpo da requisição. Ao cadastrar um novo projeto, ele deverá ser armazenado dentro de um objeto no seguinte formato: { id: 1, titulo: 'Harry Potter', editora: 'Rocco',foto: 'https://i.imgur.com/UH3IPXw.jpg', autores: ["JK Rowling", "..."]};

**[GET]** /obras/ : A rota deverá listar todas as obras cadastradas

**[PUT]** /obras/🆔 : A rota deverá atualizar as informações de titulo, editora, foto e autores da obra com o id presente nos parâmetros da rota

**[DELETE]** /obras/🆔 : A rota deverá deletar a obra com o id presente nos parâmetros da rota



-**Desafio em andamento**-

11/07/2022: 

- Elaborada a tela para interação do usuário;
- Inserido o campo de cadastro e busca dos livros; 
- Feito o banco e estrutura para comunicação com o mesmo, escolhido o paradigma de orientação a objetos para desenvolvimento das rotas;
- Elaborada a rota de cadastro dos livros no banco.



13/07/2022:

- Construído o método de busca do títulos cadastrados.

  Descrição: Com esse método será possível localizar o título inserindo seu nome ou palavras contidas no título.

Próximos passos: 

- Construir rotas para editar e deletar os dados cadastrados;

- Melhoria na visualização das informações consultadas pelo usuário;

- Inserir condições de busca pelo nome do autor; 

- Aprimorar o tratamento de erros e procedimentos de segurança;

- Criar a tabela e o serviço para cadastro de usuário;

-  Criar o serviço para checagem de login;

- Implementar o serviço de login via conta google.

  

________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________

Sobre mim: Meu nome é Gabriel Oliveira, tenho 29 anos e curso Análise e Desenvolvimento de Sistemas pela Unopar Recife. Atualmente tenho me especializado em desenvolvimento web, com foco no back-end e como ferramentas de aprendizado escolhi a linguagem PHP e o banco de dados MySQL, além de ter noções de Figma e Bootstrap para auxiliar na criação de telas que permitam interação e teste dos usuário nas aplicações.

E-mail: gabrieldev73@gmail.com

Linkedin: https://www.linkedin.com/in/gabidevs/