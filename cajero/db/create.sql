CREATE DATABASE cajero_ird_32;

USE cajero_ird_32;

CREATE TABLE tb_clientes(
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    ap_paterno VARCHAR(25),
    ap_materno VARCHAR(25)
);

CREATE TABLE tb_tarjetas(
    id_tarjeta INT AUTO_INCREMENT PRIMARY KEY,
    n_tarjeta VARCHAR(16) UNIQUE,
    nip VARCHAR(4),
    saldo DECIMAL(12,2),
    id_cliente INT,
    FOREIGN KEY(id_cliente) REFERENCES tb_clientes(id_cliente)
);

CREATE TABLE tb_tipo_movimiento(
    id_tipo_movimiento INT AUTO_INCREMENT PRIMARY KEY,
    tipo_movimiento VARCHAR(25)
);

INSERT INTO tb_tipo_movimiento (tipo_movimiento) VALUES 
("Consulta"),
("Retiro");

CREATE TABLE movimiento(
    id_movimiento INT AUTO_INCREMENT PRIMARY KEY,
    id_tarjeta INT,
    cantidad DECIMAL(7,2),
    id_tipo_movimiento INT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id_tarjeta) REFERENCES tb_tarjetas(id_tarjeta),
    FOREIGN KEY(id_tipo_movimiento) REFERENCES tb_tipo_movimiento(id_tipo_movimiento)
);