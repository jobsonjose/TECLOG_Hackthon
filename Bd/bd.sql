CREATE TABLE products(
	id INTEGER NOT NULL AUTO_INCREMENT,
	descricao VARCHAR(80) NOT NULL,
	quantidade_atual INTEGER NOT NULL,
	preco_por_caixa FLOAT(5) NOT NULL,
	demanda INTEGER NOT NULL,
	constraint id_pk primary key(id)
);


CREATE TABLE users(
	id INTEGER NOT NULL AUTO_INCREMENT,
	name VARCHAR(40) NOT NULL,
	register VARCHAR(12) NOT NULL,
	password VARCHAR(70) NOT NULL,
	username VARCHAR(20) NOT NULL,
	constraint cpf_pk primary key(id)
);
CREATE TABLE lots(
	id INTEGER NOT NULL AUTO_INCREMENT,
	quantidade_entrada INTEGER NOT NULL,
	entrada DATETIME NOT NULL,
	validade DATETIME NOT NULL,
	quantidade_saida INTEGER NOT NULL,
	product_id INTEGER NOT NULL,
	id_funcionario INTEGER NOT NULL,
	constraint pk_id primary key(id),
	constraint product_id_fk foreign key(product_id) references products(id),
	constraint id_fk foreign key(id_funcionario) references users(id)
);