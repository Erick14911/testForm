CREATE DATABASE db_persona CHARACTER SET utf8mb4;

START TRANSACTION;
CREATE TABLE IF NOT EXISTS tableA(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(50),
        apellido VARCHAR(50),
        nombre_completo DEFAULT CONCAT(nombre, " ", apellido), 
        email VARCHAR(50),
        telefono VARCHAR(10),
        fecha DATE
        )ENGINE=InnoDb
        DEFAULT CHARSET = utf8mb4;

ALTER TABLE tableA ADD educacion VARCHAR(50);
ALTER TABLE tableA ADD edad int(2);

INSERT OR REMPLACE INTO tableA(
        nombre, apellido, email, telefono, fecha
)
VALUES
('Luis','Arreola','luis@gmail.com','1122334455','2024-05-15')
('Laura','Esquivel','laura@gmail.com','1122334465','2024-05-15')
;

UPDATE tableA
SET
telefono = '9988776655'
WHERE nombre_completo = 'Laura Esquivel';


CREATE VIEW IF NOT EXISTS v_reporte AS
SELECT nombre_completo AS "Nombre del empleado", 
       email AS "Correo electronico",
       telefono AS "Telefono"
FROM tableA;

DELETE FROM tableA
WHERE nombre LIKE "Laura" ;

COMMIT;
