CREATE DATABASE base;
CREATE TABLE `base`.`usuarios` ( 
    `idUsuario` INT(5) NOT NULL AUTO_INCREMENT , 
    `nombreUsuario` CHAR(30) NOT NULL , 
    PRIMARY KEY (`idUsuario`)
) ENGINE = InnoDB;
INSERT INTO `usuarios`(`nombreUsuario`) VALUES ('taquito2305');
INSERT INTO `usuarios`(`nombreUsuario`) VALUES ('Myprogram');