use Secretaria_Administrativa

DELIMITER |
Create trigger registrar 
after insert on registro for each row 
begin 
if (new.tipo = 1) then 
insert into docentes(primer_nombre, primer_apellido, cedula, correo)
values(new.primer_nombre, new.primer_apellido, new.cedula, new.correo);
elseif(new.tipo = 2) then 
insert into administrativos(primer_nombre, primer_apellido, cedula, correo)
values(new.primer_nombre, new.primer_apellido, new.cedula, new.correo);
end if;
end|

