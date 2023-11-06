create database game;
	use game;

	create table usuarios(
	id int not null auto_increment primary key,

		nombre text(50)not null,
		contrasena varchar(50)not null,
		foto varchar(50)not null,
		create_at datetime not null
	);
	

	create table punteos(
	id int not null auto_increment primary key,

		nombre text(50)not null,
		puntuacion text(50)not null,
		create_at datetime not null
	);	