/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8 */

;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */

;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */

;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */

;

CREATE DATABASE `ist`;

USE `ist`;

# Dump of table pessoas
# ------------------------------------------------------------
DROP TABLE IF EXISTS `pessoas`;

CREATE TABLE
    `pessoas` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `nome` varchar(200) NOT NULL DEFAULT '',
        `cpf` varchar(11) NOT NULL DEFAULT '',
        `endereco` text NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

LOCK TABLES `pessoas` WRITE;

/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */

;

INSERT INTO
    `pessoas` (`id`, `nome`, `cpf`, `endereco`)
VALUES (
        1,
        'Marcelo Ramos',
        '48349778032',
        'Rua Luiz Demo, n 120, Bairro Passagem, Tubarão/SC'
    ), (
        2,
        'Renato Silva',
        '76537136024',
        'Rua Alexandre de Sá, n 98, Bairro Dehon, Tubarão/SC'
    ), (
        3,
        'Maria Cordeiro',
        '01054804010',
        'Rua Júlio Pozza, n 450, Bairro São João, Tubarão/SC'
    );

/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */

;

UNLOCK TABLES;

CREATE TABLE
    `contas` (
        `idcontas` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `numConta` INT(10) UNSIGNED NOT NULL,
        `id_pessoa` INT(11) UNSIGNED,
        PRIMARY KEY (`idcontas`),
        FOREIGN KEY (`id_pessoa`) REFERENCES pessoas(`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- CREATE TABLE
--     `movimentacao` (
--         `idmovimentacao` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
--         `valor` INT(7),
--         `id` int(11),
--         `idcontas` INT(11),
--         CONSTRAINT fk_1 FOREIGN KEY (id) REFERENCES pessoas(id),
--         CONSTRAINT fk_2 FOREIGN KEY (idcontas) REFERENCES contas(idcontas)
--     ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */

;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */

;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */

;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;