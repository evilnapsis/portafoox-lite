/**
@author evilnapsis
@brief Modelo de base de datos
**/
create database portafooxlite;
use portafooxlite;

create table user(
	id int not null auto_increment primary key,
	name varchar(50) not null,
	lastname varchar(50) not null,
	username varchar(50),
	email varchar(255) not null,
	password varchar(60) not null,
	is_active boolean not null default 1,
	is_admin boolean not null default 0,
	created_at datetime not null
);


insert into user(name,lastname,username,email,password,is_active,is_admin,created_at) value("Admin","","admin","",sha1(md5("admin")),1,1,NOW());


create table category (
	id int not null auto_increment primary key,
	name varchar(200) not null,
	short_name varchar(200) not null,
	in_home boolean not null default 0,
	in_menu boolean not null default 0,
	is_active boolean not null default 0
);

insert into category (name,is_active) value ("Software",1);


create table product (
	id int not null auto_increment primary key,
	short_name varchar(20) not null,
	name varchar(200) not null,
	code varchar(200) not null,
	description varchar(1000) not null,
	offer_txt varchar(1000) not null,
	image varchar(255),	
	link varchar(255),	
	is_featured boolean not null default 0,
	is_public boolean not null default 0,
	in_existence boolean not null default 0,
	created_at datetime not null,
	order_at datetime not null,
	price float not null,
	category_id int not null,
	/** for SEO **/
	meta_title varchar(100),
	meta_description varchar(255),
	meta_keywords varchar(100),
	foreign key(category_id) references category(id)
);



create table product_view(
	id int not null auto_increment primary key,
	viewer_id int,
	product_id int null,
	created_at datetime not null,
	realip varchar(16) not null,
	foreign key (viewer_id) references user(id),
	foreign key (product_id) references product(id)
);

create table client (
	id int not null auto_increment primary key,
	name varchar(50) not null,
	lastname varchar(50) not null,
	email varchar(255) not null,
	phone varchar(255) not null,
	address varchar(255) not null,
	password varchar(60) not null,
	is_active boolean not null default 1,
	created_at datetime not null
);

create table slide (
	id int not null auto_increment primary key,
	title varchar(200) not null,
	image varchar(255),	
	is_public boolean not null default 0,
	position int not null,
	created_at datetime not null
);

insert into slide (title,image,is_public,position,created_at) values ("Bienvenido a PortaFoox","slider-bg4.jpg",1,1,NOW());

/**
kind:
1- texto
2- entero
3- checkbox
4- reference
**/


create table configuration(
	id int not null auto_increment primary key,
	name varchar(100) not null unique,
	label varchar(200) not null,
	kind int,
	val text,
	cfg_id int default 1
);

insert into configuration(name,label,kind,val) value ("general_main_title","Titulo Principal",1,"PORTAFOOX");
insert into configuration(name,label,kind,val) value ("general_main_email","Email Principal",1,"tuemail@tudominio.com");
insert into configuration(name,label,kind,val) value ("general_img_default","Imagen Default",1,"res/img/default.png");

insert into configuration(name,label,kind,val) value ("about_title_bg","About Titulo Bg",1,"PORTAFOOX");
insert into configuration(name,label,kind,val) value ("about_title","About Titulo",1,"Sobre PortaFoox");
insert into configuration(name,label,kind,val) value ("about_content","About Contenido",1,"Bienvenido a mi portafolio, aqui puedes ver todos mis trabajos y con detalles.");

insert into configuration(name,label,kind,val) value ("footer_about","About en el Footer",1,"Este es un portafolio personal y es de caracter informativo.");
insert into configuration(name,label,kind,val) value ("phone","Telefono",1,"+5219371331142");
insert into configuration(name,label,kind,val) value ("address","Direccion",1,"Mexico, Mexico");
insert into configuration(name,label,kind,val) value ("fb_url","Facebook URL",1,"https://facebook.com/iamevilnapsis");
insert into configuration(name,label,kind,val) value ("tw_url","Twitter URL",1,"https://twitter.com/evilnapsis");
insert into configuration(name,label,kind,val) value ("yt_url","Youtube URL",1,"https://youtube.com/evilnapsis");
insert into configuration(name,label,kind,val) value ("gh_url","Github URL",1,"https://github.com/evilnapsis");
insert into configuration(name,label,kind,val) value ("copyright","Copiright Footer",1,"Evilnapsis &copy; 2018 ");

