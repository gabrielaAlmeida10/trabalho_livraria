create database if not exists db_aluno;

use db_aluno;
create table livros(
cod int primary key,
nome varchar(40) ,
autor varchar(30),
qtd int);

insert into livros values(1,"A culpa é das estrelas","John green",5);
insert into livros values(2,"A menina que roubava livreos","Markus Zusak",5);
insert into livros values(3,"O Batman que ri","Snyder Jock Baron",5);
insert into livros values(4," Box As cronicas de fogo e gelo","George Martin",5);
insert into livros values(5,"Box Desventuras em serie","Daniel Handler",5);
insert into livros values(6,"Box Harry Potter","Joanne Rowling",5);
insert into livros values(7,"Box Senhor dos aneis","John Ronald Reuel Tolkien",5);
insert into livros values(8,"Box A seleção","Kiera Cass",5);
insert into livros values(9,"Box Diario de um banana","Jeff Kinney",5);
insert into livros values(10,"Como eu era antes de você","Jojo Moyes",5);
insert into livros values(11,"Deixe a neve cair","John green",5);
insert into livros values(12,"O Iluminado","Stephen King",5);
insert into livros values(13,"The Flash","Williamsin Porter",5);
insert into livros values(14,"Homem de ferro","Marvel",5);
insert into livros values(16,"Jogador numero 1","Enest cline",5);
insert into livros values(17,"Liga da justiça","geoff johns",5);
insert into livros values(18,"O menino do pijama listrado","John Boyne",5);
insert into livros values(19,"O Meu pé de laranja lima","José Mauro de Vasconcelos",5);
insert into livros values(20,"Box As cronicas de narnia","Clive Staple Lewis",5);
insert into livros values(21,"Quem é você Alasca?","John green",5);
insert into livros values(22,"Viagem ao centro da terra","Jules Verne",5);
insert into livros values(23,"Box Vilões da Disney","Serena Valentino",5);
insert into livros values(24,"Desafio Infinito","Starlin Pérez Lim",5);
insert into livros values(25,"Coraline","Neil Gaiman",5);

select* from livros;