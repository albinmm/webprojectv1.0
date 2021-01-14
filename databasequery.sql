create database Projekti
use Projekti



DROP TABLE Admin
create table Perdoruesi(
	Id char(5) Primary Key,
	Emri varchar(15),
	Mbiemri varchar(15),
	username varchar(10) UNIQUE,
	password varchar(20),
	role char(1)
)
DROP TABLE Perdoruesi


INSERT INTO Perdoruesi VALUES('P0001', 'User', 'User', 'user', 'password', '1')
INSERT INTO Perdoruesi VALUES('P0002', 'User', 'User1', 'user1', 'password', '0')
INSERT INTO Perdoruesi VALUES('P0003', 'User', 'User2', 'user2', 'password', '0')
INSERT INTO Perdoruesi VALUES('P0004', 'User', 'User1', 'user3', 'password', '0')
INSERT INTO Perdoruesi VALUES('P0005', 'User', 'User2', 'user4', 'password', '0')

select * from Perdoruesi