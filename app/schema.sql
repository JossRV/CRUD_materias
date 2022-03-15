CREATE DATABASE `materias`;
CREATE TABLE `materias`.`t_materias` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nombreM` VARCHAR(50) NOT NULL , 
    `creditos` INT NOT NULL , 
    `semestre` INT NOT NULL , {
    `carrera` VARCHAR(50) NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `materias`.`c_carrera` ( 
    `carreraid` INT NOT NULL AUTO_INCREMENT , 
    `carrera` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`carreraid`)
) ENGINE = InnoDB;

INSERT INTO `c_carrera` (`carreraid`, `carrera`) 
    VALUES (NULL, 'Ingenieria en Sistemas Computacionales'), 
           (NULL, 'Ingenieria en Gestion Empresarial')
           (NULL, 'Ingenieria Industrial');

CREATE TABLE `materias`.`c_semestre` ( 
    `semestreid` INT NOT NULL AUTO_INCREMENT , 
    `semestre` INT NOT NULL , 
    PRIMARY KEY (`semestreid`)
) ENGINE = InnoDB;

INSERT INTO `c_semestre` (`semestreid`, `semestre`) 
    VALUES (NULL, '1'), (NULL, '2'), (NULL, '3'), (NULL, '4'), 
           (NULL, '5'), (NULL, '6'), (NULL, '7'), (NULL, '8'), (NULL, '9');