CREATE TABLE client (
    id INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    adress VARCHAR(255),
    city VARCHAR(255),
    country VARCHAR(255),
    username VARCHAR(255),
    pass VARCHAR(255),
    avatar VARCHAR(2000),
    RIB VARCHAR(255),
    BIC VARCHAR(255),
    PRIMARY KEY (id)
);