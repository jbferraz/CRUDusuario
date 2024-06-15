<h1>Exercício de CRUD com passwordHash</h1>
<h3>Turma DEV3N222v</h3>
<pre>
  CREATE TABLE usuario(
    idUsuario int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(45) not null,
    email varchar(45) NOT null UNIQUE,
    pass varchar(256) not null
    );
</pre>
