create table users(
    id_user primary key NOT NULL, 
    firtname varchar NOT NULL,
    lastname varchar NOT NULL,
    Email varchar unique,
    password varchar NOT NULL,
    password_again varchar NOT NULL,
    mobile_phone char(10)NOT NULL
)