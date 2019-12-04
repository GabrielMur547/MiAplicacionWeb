use Secretaria_Administrativa

DELIMITER |
Create trigger registrar 
after insert on Registro1 for each row begin 
insert into Resgistro set id_user = new.id_user1; 
end|

