create database informatikaa;

create table Mahasiswa(
NIM varchar(10) primary key not null,
Nama char(50) Null,
Kelas char(5) Null,
Alamat char(50) Null
);

insert into Mahasiswa values("L200080001", "Ari Wibowo", "A", "Solo");
select*from Mahasiswa;
insert into Mahasiswa(NIM, Nama, Kelas) values("L20008080", "Agustina", "B");
select*from Mahasiswa;

update Mahasiswa set Nama="Agustina Anggraini" where Nama="Agustina";
select*from Mahasiswa;

create table Nilai(
NIM varchar(10) primary key not null,
Nama_MK varchar(45) Null,
Nilai_Angka integer Null,
Nilai_Huruf char(2) Null
);

insert into Nilai values("L200080002". "Kapita Selekta", 60, "BC"),
("L200080010". "Pemrograman Web", 87, "A"),
("L200080080". "Pemrograman Web", 90, "A");

select Mahasiswa.NIM, Mahasiswa.Nama, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa JOIN Nilai ON Mahasiswa.NIM=Nilai.NIM);

select Mahasiswa.NIM, Mahasiswa.Nama, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa left join nilai on Mahasiswa.NIM = Nilai.NIM);

select Mahasiswa.NIM, Mahasiswa.Nama, Nilai.Nama_MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa right join Nilai ON Mahasiswa.NIM=Nilai.NIM);

select avg(Nilai_Angka) "Rata-rata Nilai" from Nilai;

select sum(Nilai_Angka) "Total Nilai" from Nilai;

create view KHS as select Mahasiswa.NIM, Nilai.Nama-MK, Nilai.Nilai_Angka, Nilai.Nilai_Huruf from (Mahasiswa inner join Nilai ON Mahasiswa.NIM=Nilai.NIM);
select*from KHS;

/*
1.	Fungsi
a.	Select : to show the containt of the table
b.	Join : For making relaiton between two tables or more who has relation / connection
c.	Left Join : For showing the data who has not relation
d.	Right Join :  For showing the data who has not relation but that data will have value Null
e.	AVG : For calculating average  in one coloumn of table
f.	SUM : For summarizing in one coloumn of table

2.	Syntax
update Mahasiswa set Alamat = “Sragen” where NIM = “L20008080”;
*/