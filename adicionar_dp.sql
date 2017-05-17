-- Estrutura para tabela `usuarios`
--



select * from usuarios;


CREATE TABLE usuarios (
  id int(11) NOT NULL auto_increment,
  materia_nome varchar(220) NOT NULL,
  primary key (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



