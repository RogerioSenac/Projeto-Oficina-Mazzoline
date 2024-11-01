create database oficina;
use oficina;

create table clientes
(
idCli int auto_increment primary key,
nomeCli varchar(255) not null,
ruaCli varchar(255),
bairroCli varchar(255),
cidadeCli varchar(255),
cepCli varchar(10),
estadoCli varchar(5),
foneCli varchar(14),
emailCli varchar(255),
fotoCli varchar(255),
tipoCli enum('Física','Jurídica'),
docCli varchar(20)
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

CREATE TABLE ordem_servico (
    idOrdem INT AUTO_INCREMENT PRIMARY KEY,
    idCli INT,
    data_criacao DATE NOT NULL,
    hora_criacao time not null,
    descricao TEXT NOT NULL,
    situacao ENUM('Aberto', 'Em Andamento', 'Concluído', 'Cancelado') DEFAULT 'Aberto'
);

CREATE TABLE servicos(
idIServico int auto_increment primary key,
servico text not null
);

CREATE TABLE itens_ordem(
idItem int auto_increment primary key,
descricao text not null,
qtd INT not null,
vlUnit DECIMAL(10, 2) not null,
vlTotal DECIMAL(10, 2) generated always AS (qtd * vlUnit) STORED,
idServico int,
idOrdem int
);

insert into servicos (servico) values
("AMORTECEDORES"), ("MOLAS"), ("PASTILHA DE FREIO"), ("ROLAMENTO TRASEIRO"),
("ROLAMENTO DIANTEIRO"), ("TERMINAL DE DIREÇÃO"), ("PIVô"), ("JUNTA HOMOCINETICA"),
("TRIZETA"), ("FILTRO DE COMBUSTIVEL"), ("FILTRO DE ÓLEO"), ("FILTRO DE AR"),
("FILTRO CABINE"), ("PASTILHA DE MOTOR E CAIXA"), ("CAIXA DE DIREÇÃO"),
("BOMBA DE COMBUSTIVEL"), ("LONA DE FREIO"), ("DESCARBONIZAÇÃO DE MOTOR"),
("LIMPEZA DE BICO"), ("SCANER/DIAGNOSTICO"), ("LIMPEZA SISTEMA DE ARREFECIMENTO"), 
("CABO DE EMBREAGEM"), ("EMBREAGEM"), ("RADIADOR SUBSTITUIÇÃO"), ("LAMPADAS DIVERSAS"), 
("TRABULADOR DA EMBREAGEM"), ("LIMPEZA DO AR CONDICIONADO"), ("MOTOR DE PARTIDA (ARRANQUE)"); 

SELECT * FROM SERVICOS;

insert into servicos (servico) values
("FUSIVEIS - VERIF.ELETRICA"), ("RELÉ - VERIF. ELETRICA"), ("BOMBA DE DIREÇÃO"),
("CORREIA DENTADA 8V + TENSOR"), ("CORRENTE DE COMANDO"), ("CORREIA DO ALTERDANOR"), 
("CORREIA DA DIREÇÃO"), ("BOMBA D'AGUA"), ("BOMBA DE FREIO"), ("BOMBA DO ABS"),
("SENSOR DO ABS"), ("SANGRIA - LIMPEZA AR DO FREIO"), ("BURRINHO DO FREIO"),
("DISCO DE FREIO"), ("VENTOINHA COM AR E SEM AR"), ("VALVULA TERMOSTICA"),
("FAROIS"), ("LANTERNAS"), ("CABO DEFREIO DE MÃO"), ("OLEO DA CAIXADE MARCHA MANUAL"),
("JUNTA DA TAMPA DE VALVULA"), ("RESERVATORIO D'AGUA"), ("TANQUE DE PARTIDA A FRIO"),
("BOIA DE COMBUSTIVEL"), ("BICO"), ("CORREIA DENTADA 12V/16V + TENSOR"), ("TENSIONADOR"), 
("BIELETA DO AMORTECEDOR"), ("BUCHA DA BANDEJA"), ("ALTERNADOR"), ("PORTA ESCOVA"), 
("CABEÇOTE - DESMONT + MONTAGEM"), ("BENDIX - ARRANQUE"), ("ARRANQUE AUTOMATICO"), ("REG. DE VOLTAGEM - ALTERNADOR"),
("CARVÃO - ALTERNADOR"), ("CABOS E VELAS"), ("LIMPEZA TBI");


