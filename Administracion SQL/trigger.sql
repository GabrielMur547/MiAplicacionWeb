use Secretaria_Administrativa

DELIMITER |
Create trigger registrar 
after insert on registro for each row 
begin 
insert into docentes(primer_nombre, primer_apellido, cedula, correo)
values(new.primer_nombre, new.primer_apellido, new.cedula, new.correo); 
end|

