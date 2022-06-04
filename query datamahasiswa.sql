CREATE TABLE data_mahasiswa (
NIM INT (10),
Nama VARCHAR (50),
Fakultas VARCHAR (20),
Prodi VARCHAR (50),
Gender VARCHAR (10),
Alamat VARCHAR (30),
PRIMARY KEY (NIM)
);

INSERT INTO data_mahasiswa (NIM, Nama, Fakultas, Prodi, Gender, Alamat) 
VALUES	(2021001,"Fikri Rijal","FIKOM","Marketing","Laki-laki","DKI Jakarta"),
				(2021002,"Irfan Hakim","FASILKOM","Informatika","Laki-laki","Bandung"),
				(2021003,"Intan","FH","Hukum Pidana","Perempuan","Makasar"),
				(2021004,"Funy","FE","Manajemen","Perempuan","Surabaya");
				
SELECT * FROM data_mahasiswa;