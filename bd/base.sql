create database animales;
use animales;
CREATE TABLE t_animales (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(20),
    region VARCHAR(30),
    comida VARCHAR(30),
    PRIMARY KEY (id)
);
INSER INTO t_animales VALUES ("leon", "africa","ciervos",
                                "tigre", "africa","jabali",
                                "calamar", "atlantico", "peces");