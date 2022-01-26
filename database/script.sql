CREATE DATABASE konecta;

use konecta;

CREATE TABLE Productos(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  Nom_producto VARCHAR(255) NOT NULL,
  Referencia VARCHAR(255) NOT NULL,
  Precio DOUBLE(12) NOT NULL,
  peso VARCHAR(255) NOT NULL,
  Categoria VARCHAR(255) NOT NULL,
  Stock VARCHAR(255) NOT NULL,
  Fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

<!-- Query Eliminar productos por ID -->
"DELETE FROM `productos` WHERE `productos`.`id` = 13"?