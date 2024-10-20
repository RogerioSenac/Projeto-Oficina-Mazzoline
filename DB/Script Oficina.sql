create database oficina;
use oficina;

create table clientes_fisicos
(
idCFisico int auto_increment primary key,
nomeCFisico varchar(255) not null,
ruaCFisico varchar(255),
bairroCFisico varchar(255),
cidadeCFisico varchar(255),
cepCFisico varchar(10),
estadoCFisico varchar(5),
foneCFisico varchar(14),
emailCFisico varchar(255),
fotoCFisico varchar(255),
cpfCliente varchar(20)
);

create table clientes_juridicos
(
idCJuridico int auto_increment primary key,
nomeCJuridico varchar(255),
ruaCJuridico varchar(255),
bairroCJuridico varchar(255),
cidadeCJuridico varchar(255),
cepCJuridico varchar(255),
estadoCJuridico varchar(255),
foneCJuridico varchar(14),
emailCJuridico varchar(255),
fotoCJuridico varchar(255),
cnpjCJuridico varchar(20),
inscr_estadualCJuridico varchar(15)
);

create table fornecedores
(
idFornecedor int auto_increment primary key,
nomeFornecedor varchar(255),
ruaFornecedor varchar(255),
bairroFornecedor varchar(255),
cidadeFornecedor varchar(255),
cepFornecedor varchar(255),
estadoFornecedor varchar(255),
foneFornecedor varchar(14),
emailFornecedor varchar(255),
fotoFornecedor varchar(255),
cnpjFornecedor varchar(20),
inscr_estadualFornecedor varchar(15)
);


 