CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(50) not null ,
    prenom varchar() not null ,
    email varchar(100) not null UNIQUE,
    password varchar(250) not null ,
    phone varchar(250) null ,
    ville varchar(100) null,
    codePostal int null,
    role varchar(20) not null
)ENGINE=INNODB;

CREATE table administrateurs(
    id int PRIMARY key ,
    FOREIGN key (id) REFERENCES users(id)
)ENGINE=INNODB;

CREATE table livreurs(
    id int PRIMARY KEY,
    Type_Vehicule varchar(50) null ,
    matricule varchar(50) null,
    FOREIGN key (id) REFERENCES users(id)
)ENGINE=INNODB;

CREATE TABLE clients(
    id int PRIMARY key,
    FOREIGN key (id) REFERENCES users(id)
)ENGINE=INNODB;

CREATE table commands(
	id int PRIMARY key AUTO_INCREMENT,
    adressDepart varchar(200) not null ,
    adressArive varchar(200) not null ,
    description text not null ,
    optionn varchar(20) not null ,
    client_id int ,
    FOREIGN key (client_id) REFERENCES clients(id)
)ENGINE=INNODB;


CREATE TABLE offers(
    message text null , 
    optionn varchar(20) null ,
    vehicule varchar(20) not null,
    dure float not null,
    prix decimal(10,2) not null 
    livreur_id int ,
    command_id int ,
    FOREIGN key (livreur_id) REFERENCES livreurs(id),
    FOREIGN key (command_id) REFERENCES commands(id)
)ENGINE=INNODB;