create database j17100275;
use j17100275;
CREATE TABLE docente (
    DocenteID int,
    Nombre varchar(255),
    Apellido varchar(255),
    Materia varchar(255),
    Horario varchar(255)
);
insert into docente values (1,"Gerardo","Pineda", "Programación Web", "13:00-14:00"),
							(2,"Roberto","Puerto", "Redes de computadoras", "08:00-09:00"),
                            (3,"Carlos","Zárate", "Lenguajes de interfaz", "07:00-08:00"),
                            (4,"María","Mendoza", "Lenguajes y Autómatas", "09:00-10:00"),
                            (5,"Humberto","Vela", "Ingeniería de software", "10:00-12:00")