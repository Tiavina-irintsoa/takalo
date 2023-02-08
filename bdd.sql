create table LoginAdmin(
    idAdmin int primary key,
    nom varchar(40) not null,
    motdepasse varchar(40) not null
);

create table category(
    idcategory int primary key auto_increment,
    nom varchar(40) not null
);

create table utilisateur(
    idutilisateur int primary key auto_increment,
    nom varchar(40),
    motdepasse varchar(40) not null
);
create table objet(
    idobjet int primary key auto_increment,
    idcategory int,
    nom varchar(30),
    description varchar(40),
    prix double not null,
    idutilisateur int,
    foreign key (idcategory) references category(idcategory),
    foreign key (idutilisateur) references utilisateur(idutilisateur)
);
create table photo(
    idphoto int primary key auto_increment,
    idobjet int,
    nomphoto varchar(40),
    foreign key (idobjet) references objet(idobjet)
);
create table proposition(
    idProposition int primary key auto_increment,
    idutilisateur1 int,
    idobjet1 int,
    idutilisateur2 int,
    idobjet2 int,
    etat int default 0,
    foreign key (idutilisateur1) references utilisateur(idutilisateur),
    foreign key (idutilisateur2) references utilisateur(idutilisateur),
    foreign key (idobjet1) references objet(idobjet),
    foreign key (idobjet2) references objet(idobjet)
);
create table historique (
    idObjet integer,
    idUtilisateur integer,
    dateechange timestamp,
    foreign key(idobjet) references objet(idobjet),
    foreign key (idutilisateur) references utilisateur(idutilisateur)
);

insert into LoginAdmin values(1,'admin','admin1');

insert into category values(null,'vetement');
insert into category values(null,'Electronique');
insert into category values(null,'Chaussure');
insert into category values(null,'Decor');
insert into category values(null,'Cuisine');


insert into utilisateur values('','Rakoto','Rakoto12');
insert into utilisateur values('','Rasoa','Rasoa1');
insert into utilisateur values('','Rabe','Rab22');

insert into objet values('','akanjoba','tsara be',20000,1);
insert into objet values('','sotro','tsara ny lambany',17000,2);
insert into objet values('','balerine','tsy mora simba',15000,3);
insert into objet values('','collier','tsy mora simba',15000,1);


insert into proposition values ('',2,1,3,1,0);
insert into proposition values ('',3,3,3,1,2);
insert into proposition values ('',1,2,1,4,1);
insert into proposition values ('',3,4,2,1,2);
insert into proposition values ('',1,3,2,4,1);

insert into photo values ('',1,'akanjoba.jpg');
insert into photo values ('',1,'akanjoba1.jpg');
insert into photo values ('',2,'cuisine1.jpg');
insert into photo values ('',2,'cuisine2.jpg');
insert into photo values ('',2,'cuisine3.jpg');
insert into photo values ('',2,'cuisine4.jpg');
insert into photo values ('',3,'kiraro.jpg');
insert into photo values ('',3,'kiraro1.jpg');
insert into photo values ('',3,'kiraro2.jpg');
insert into photo values ('',3,'kiraro2.jpg');
insert into photo values ('',4,'image1.jpg');
insert into photo values ('',4,'image2.jpg');
insert into photo values ('',4,'image3.jpg');





