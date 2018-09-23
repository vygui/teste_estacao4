CREATE TABLE tab_produtos ( 
	`id` 				INT 			NOT NULL 	AUTO_INCREMENT ,
	`nome` 				VARCHAR(80) 	NOT NULL , 
	`descricao` 		VARCHAR(500) 	NOT NULL , 
	`preco` 			FLOAT 			NOT NULL , 
	PRIMARY KEY (`id`)) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_general_ci;