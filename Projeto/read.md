# Trabalho Final de Web

## Funcionalidades implementadas 
Foi desenvolvido um sistema de gerenciamento de academia. É possível cadastrar novos clientes e instrutores.
Para cadastrar instrutores é necessário preencher:
    1.Foto (através do unsplash);
    2.Nome;
    3.Sexo;
    4.Área de atuação.

Na tabela dos intrutores é exibido o nome, a área de atuação e quantos alunos estão designado a ele. Ao clicar em 'ver' é possível visualizar todas as informações do mesmo, além de poder editar ou deletar o perfil.

Para cadastrar um novo membro da academia é necessário preencher:
    1.Foto (através do unsplash);
    2.Nome;
    3.E-mail;
    4.Data de nascimento;
    5.Sexo;
    6.Tipo Sanguíneo;
    7.Altura;
    8.Peso;
    9.Selecionar o instrutor responsável.

Na tabela dos membros é exibido o nome, e-mail, altura e peso. Além disso, ao clicar em 'ver' é possível visualizar todas as informações do mesmo, além de poder editar ou deletar o perfil.

Foi implementado a paginação de dois perfis por página e o filtro pelo nome ou acompanhamento no caso do instrutor ou nome e e-mail para o membro. 

## Funcionalidades previstas e não implementadas

Devido ao tempo do período e a sobrecarga de trabalhos, não foi possível implementar o upload de imagens. 

## Outras funcionalidades implementadas

Originalmente, não era possível editar os usuários cadastrados, porém sem essa funcionalidade o trabalho ficaria incompleto, por isso foi feito o desenvolvimento da mesma.

---
## Principais desafios e dificuldades
A principal dificuldade não foi referente ao desenvolvimento em si, pois já tinha familiaridade com as stacks usadas. O grande desafio foi conciliar os roteiros de aula com o trabalho final, pois o perído esta mais corrido e a demanda de todas as disciplinas foi alto. 

---

## Instruções para instalação e execução

Para executar o projeto, siga as  intruções abaixo:

1º Instalar o Postgres

2º Configurar o .env de acordo com o Postgres

3º Rodar npm install

4º Rodar npm start
