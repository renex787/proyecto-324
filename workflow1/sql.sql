create table flujo
(
    flujo varchar(3),
    proceso varchar(3),
    procesosiguiente varchar(3),
    tipo varchar(1),
    rol varchar(15),
    pantalla varchar(30)
)

insert into flujo 
	values('F1','P1','P2','I','alumno','inicio');
insert into flujo 
	values('F1','P2','P3','P','alumno','listado');
insert into flujo 
	values('F1','P3','P4','I','alumno','envio');


alter table academica.alumno add column ci varchar(7);
alter table academica.alumno add column matricula varchar(7);

create table flujousuario
(
numerotramite int,
flujo varchar(3),
proceso varchar(3),
fechainicio datetime,
fechafin datetime,
usuario varchar(20)
)


insert into flujousuario values ('100','F1','P1','2023/05/03 11:00','2023/05/03 11:15','mm2');
insert into flujousuario values ('100','F1','P2','2023/05/03 11:15',NULL,'mm2');
insert into flujousuario values ('200','F1','P1','2023/05/03 11:00','2023/05/03 11:15','mm3');
insert into flujousuario values ('200','F1','P2','2023-05-03 11:15','2023-05-03 11:30','mm3');
insert into flujousuario values ('200','F1','P3','2023-05-03 11:30',NULL,'mm3');


insert into flujousuario values ('100','F2','P1','2023/05/03 11:00',NULL,'mm2');

insert into flujousuario values ('100','F4','P1','2023/05/03 11:00',NULL,'mm3');


insert into flujo values('F2','P1','P2','I','alumno','inicio');
insert into flujo values('F3','P1','P2','P','alumno','listado');
insert into flujo values('F4','P1','P2','I','docente','envio');

alter table academico.alumno add column rol varchar(20)

update academico.alumno set rol='alumno' where id in(2,3);
update academico.alumno set rol='docente' where id in(4);
