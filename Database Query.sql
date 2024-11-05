CREATE DATABASE Web_Mahasiswa;

CREATE TABLE Data (
	ID INT IDENTITY(1,1),
	Nama varchar(100),
	NIM char(10),
	Perguruan_Tinggi varchar(100),
	Program_Studi varchar(100));

INSERT INTO Data (Nama, NIM, Perguruan_Tinggi, Program_Studi) VALUES
('Alya Putri', '2103001', 'Universitas Indonesia', 'Teknik Informatika'),
('Budi Santoso', '2103002', 'Universitas Gadjah Mada', 'Manajemen'),
('Citra Dewi', '2103003', 'Institut Teknologi Bandung', 'Arsitektur'),
('Dedi Pratama', '2103004', 'Universitas Airlangga', 'Kedokteran'),
('Erika Sari', '2103005', 'Universitas Diponegoro', 'Ekonomi'),
('Farhan Alamsyah', '2103006', 'Universitas Padjadjaran', 'Ilmu Komunikasi'),
('Gita Puspita', '2103007', 'Universitas Brawijaya', 'Hukum'),
('Hariyanto', '2103008', 'Institut Pertanian Bogor', 'Agribisnis'),
('Intan Maharani', '2103009', 'Universitas Sebelas Maret', 'Pendidikan'),
('Joko Susilo', '2103010', 'Universitas Negeri Yogyakarta', 'Psikologi');

SELECT * FROM Data;

