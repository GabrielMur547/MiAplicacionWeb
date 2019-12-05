use Secretaria_Administrativa

DELIMITER |
Create trigger registrar1 
after insert on registrar for each row 
begin 
insert into docentes(primer_nombre, primer_apellido, cedula, correo)
values(new.primer_nombre, new.primer_apellido, new.cedula, new.correo); 
end|

