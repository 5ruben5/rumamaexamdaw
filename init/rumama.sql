USE rumama;

-- Crear la tabla con tres campos: nombre, edad y estilo
CREATE TABLE IF NOT EXISTS personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    edad INT,
    estilo VARCHAR(50)
);

-- Insertar al menos dos registros
INSERT INTO personas (nombre, edad, estilo)
VALUES ('Ruben', 19, 'Pop');

INSERT INTO personas (nombre, edad, estilo)
VALUES ('Carlos', 27, 'Musica Clasica');

