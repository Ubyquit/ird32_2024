CREATE DATABASE usuario_ird32;

USE usuario_ird32;

CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25),
    ap_paterno VARCHAR(25),
    ap_materno VARCHAR(25),
    tel VARCHAR(10),
    email VARCHAR(50),
    nacimiento DATE
);