create database if not exists edoardo_rossi_ecommerce;

create table if not exists   edoardo_rossi_ecommerce.products
(
    id int not null auto_increment primary key,
    nome varchar(50),
    marca varchar(50),
    prezzo float
    );