CREATE DATABASE baseProyecto;

USE baseProyecto;

CREATE TABLE `legajo_personal` (
  `id_legajo_personal` int NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `dni` int DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `estudios_aprobados` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `hijos` int DEFAULT NULL,
  `grupo_sanguineo` varchar(45) DEFAULT NULL,
  `factor` varchar(45) DEFAULT NULL,
  `es_donante` tinyint DEFAULT NULL,
  `ingreso_a_bb_vv_de` varchar(45) DEFAULT NULL,
  `fecha_ingreso_bb_vv` date DEFAULT NULL,
  `grado_con_el_que_ingresa` varchar(45) DEFAULT NULL,
  `jerarquia_actual` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `fijo` varchar(45) DEFAULT NULL,
  `e_mail` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id_legajo_personal`)
);

INSERT INTO `legajo_personal` VALUES (001,'Persona','P1',0000001,'1999-05-12','1','Soltero',1,'0','RH+',NULL,'SMT','1997-09-27','Aspirante','Sargento',NULL,NULL,NULL),(002,'Persona2','P2',00000002,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Auxiliar Bombero',NULL,NULL,NULL),(003,'Persona3','P3',00000003,'1972-10-16',NULL,NULL,NULL,'A','RH-',NULL,'SMT',NULL,'Aspirante','Sargento',NULL,NULL,NULL);


CREATE TABLE `domicilio` (
  `id_domicilio` int NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `piso_dpto` varchar(45) DEFAULT NULL,
  `codigo_postal` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `legajo_personal_id_legajo_personal` int NOT NULL,
  PRIMARY KEY (`id_domicilio`),
  FOREIGN KEY (`legajo_personal_id_legajo_personal`) REFERENCES `legajo_personal` (`id_legajo_personal`)
);

INSERT INTO `domicilio` VALUES (1,'Calle falsa',4,NULL,'4000','San Miguel de Tucumán','Tucumán','Argentina',001),(2,'Calle Falsa',1964,NULL,'4000','San Miguel de Tucumán','Tucumán','Argentina',002),(3,'Calle Falsa',1,NULL,'4103','Tafí Viejo','Tucumán','Argentina',003);

CREATE TABLE `ascensos` (
  `id_ascensos` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `acta_N` int DEFAULT NULL,
  `orden_jefatura` varchar(100) DEFAULT NULL,
  `ascensos_al_grado_de` varchar(45) DEFAULT NULL,
  `legajo_personal_id_legajo_personal` int NOT NULL,
  PRIMARY KEY (`id_ascensos`),
  FOREIGN KEY (`legajo_personal_id_legajo_personal`) REFERENCES `legajo_personal` (`id_legajo_personal`)
);

INSERT INTO `ascensos` VALUES (1,'2021-10-11',NULL,'R N°1','Bombero',001),(2,'1999-12-20',NULL,'R N°2','Bombero',002),(3,'1997-01-14',NULL,'R N°3','Bombero',003),(4,'1989-10-01',NULL,NULL,'Bombero',003),(5,'1999-03-28',NULL,NULL,'Cabo',003),(6,'2002-11-28',NULL,NULL,'Cabo 1°',003);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`cursos_de_jerarquia` (
  `id_cursos_de_jerarquia` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `curso` VARCHAR(45) NULL,
  `escuela` VARCHAR(60) NULL,
  `observaciones` VARCHAR(100) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_cursos_de_jerarquia`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`altas_ascensos_bajas` (
  `id_altas_ascensos_bajas` INT NOT NULL AUTO_INCREMENT,
  `legajo` INT NULL,
  `fecha` DATE NULL,
  `detalle` VARCHAR(100) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_altas_ascensos_bajas`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`funciones_y_cargos` (
  `id_funciones_y_cargos` INT NOT NULL AUTO_INCREMENT,
  `cargo_o_funcion` VARCHAR(70) NULL,
  `periodo` DATE NULL,
  `jurisdiccion` VARCHAR(45) NULL,
  `sistema_u_objetivo` VARCHAR(45) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_funciones_y_cargos`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`nacio_en` (
  `id_nacio_en` INT NOT NULL AUTO_INCREMENT,
  `ciudad` VARCHAR(45) NULL,
  `provincia` VARCHAR(45) NULL,
  `pais` VARCHAR(45) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_nacio_en`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`examen_medico` (
  `id_examen_medico` INT NOT NULL AUTO_INCREMENT,
  `talla` INT NULL,
  `peso` INT NULL,
  `sexo` VARCHAR(20) NULL,
  `grupo_sanguineo` VARCHAR(45) NULL,
  `factor` VARCHAR(45) NULL,
  `contextura` VARCHAR(45) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_examen_medico`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`antecedentes_personales` (
  `id_antecedentes_personales` INT NOT NULL AUTO_INCREMENT,
  `enfermedades` VARCHAR(100) NULL,
  `operaciones` VARCHAR(100) NULL,
  `habitos` VARCHAR(100) NULL,
  `alergias_medicamentos` VARCHAR(200) NULL,
  `alergias_otras` VARCHAR(200) NULL,
  `identificantes_fisicos` VARCHAR(250) NULL,
  `estado_dental` VARCHAR(100) NULL,
  `examen_bucal` VARCHAR(250) NULL,
  `observaciones` VARCHAR(250) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_antecedentes_personales`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`tension_arterial` (
  `id_tension_arterial` INT NOT NULL AUTO_INCREMENT,
  `sentado` INT NULL,
  `parado` INT NULL,
  `acostado` INT NULL,
  `pulso` INT NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_tension_arterial`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`cabeza_sentidos` (
  `id_cabeza_sentidos` INT NOT NULL AUTO_INCREMENT,
  `oido` VARCHAR(100) NULL,
  `vista` VARCHAR(100) NULL,
  `tacto` VARCHAR(100) NULL,
  `olfato` VARCHAR(100) NULL,
  `gusto` VARCHAR(100) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_cabeza_sentidos`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO cabeza_sentidos (oido, vista, tacto, olfato, gusto, legajo_personal_id_legajo_personal) VALUES ('Conservado','Usa anteojos para leer','Conservado','Conservado','Conservado', 001);

CREATE TABLE `cuello` (
  `id_cuello` int NOT NULL AUTO_INCREMENT,
  `adenopatias` varchar(100) DEFAULT NULL,
  `latidos_patologicos` varchar(100) DEFAULT NULL,
  `legajo_personal_id_legajo_personal` int NOT NULL,
  PRIMARY KEY (`id_cuello`,`legajo_personal_id_legajo_personal`),
  FOREIGN KEY (`legajo_personal_id_legajo_personal`) REFERENCES `legajo_personal` (`id_legajo_personal`)
);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`torax` (
  `id_torax` INT NOT NULL AUTO_INCREMENT,
  `ruidos_cardiacos` VARCHAR(45) NULL,
  `examen_pulmonar` VARCHAR(45) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_torax`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`abdomen` (
  `id_abdomen` INT NOT NULL AUTO_INCREMENT,
  `higado` VARCHAR(100) NULL,
  `intestinos` VARCHAR(100) NULL,
  `anexos` VARCHAR(100) NULL,
  `hernias` VARCHAR(100) NULL,
  `genito_urinario` VARCHAR(200) NULL,
  `miembros_superiores` VARCHAR(200) NULL,
  `miembros_inferiores` VARCHAR(200) NULL,
  `columna_vertebral` VARCHAR(200) NULL,
  `sistema_osteoarticular` VARCHAR(200) NULL,
  `sistema_nerviono_central` VARCHAR(200) NULL,
  `sistema_periferico` VARCHAR(200) NULL,
  `examenes_complementarios` VARCHAR(200) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_abdomen`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO abdomen (higado, intestinos, anexos, hernias, genito_urinario, miembros_superiores, miembros_inferiores, columna_vertebral, sistema_osteoarticular, sistema_nerviono_central, sistema_periferico, examenes_complementarios, legajo_personal_id_legajo_personal) VALUES ('Palpitación normal','RHA escaso',NULL,'No presenta','Sin alteraciones','Sin alteraciones','Sin alteraciones',NULL,'Sin alteraciones','Sin alteraciones','Sin alteraciones','No aporta exámenes',001);

CREATE TABLE IF NOT EXISTS `baseProyecto`.`evaluacion` (
  `id_evaluacion` INT NOT NULL AUTO_INCREMENT,
  `es_apto` TINYINT NULL,
  `observaciones` VARCHAR(200) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_evaluacion`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
CREATE TABLE IF NOT EXISTS `baseProyecto`.`antecedentes_heredoFamiliares` (
  `id_antecedentes_heredoFamiliares` INT NOT NULL AUTO_INCREMENT,
  `vinculo_familiar` VARCHAR(45) NULL,
  `vivo` TINYINT NULL,
  `muerto` TINYINT NULL,
  `causas` VARCHAR(100) NULL,
  `observaciones` VARCHAR(200) NULL,
  `legajo_personal_id_legajo_personal` INT NOT NULL,
  PRIMARY KEY (`id_antecedentes_heredoFamiliares`, `legajo_personal_id_legajo_personal`),
    FOREIGN KEY (`legajo_personal_id_legajo_personal`)
    REFERENCES `baseProyecto`.`legajo_personal` (`id_legajo_personal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE legajo_personal ADD archivo varchar(200);

UPDATE legajo_personal SET archivo ='https://drive.google.com/drive/folders/idDeLaCarpeta' WHERE id_legajo_personal = 001;


CREATE TABLE usuarios (id INT AUTO_INCREMENT, usuario VARCHAR(20), passw VARCHAR(250), PRIMARY KEY (id));

INSERT INTO usuarios (usuario, passw) VALUES ('admin', 'admin'),('comision', 'comision'),('carga', 'carga');
