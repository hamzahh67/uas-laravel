CREATE TABLE tb_kategori (
	kat_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	kat_nama VARCHAR(50) NOT NULL,
	kat_keterangan TEXT DEFAULT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(kat_id)
);

CREATE TABLE tb_produk (
	produk_id INT(11) NOT NULL AUTO_INCREMENT,
	produk_id_kat TINYINT(3) NOT NULL,
	produk_kode VARCHAR(50) NOT NULL,
	produk_nama VARCHAR(256) NOT NULL,
	produk_hrg INT(11) NOT NULL,
	produk_photo VARCHAR(100) DEFAULT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(produk_id),
	UNIQUE KEY(produk_kode),
	FOREIGN KEY(produk_id_kat) REFERENCES tb_kategori(kat_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_keranjang (
	ker_id INT(11) NOT NULL AUTO_INCREMENT,
	ker_id_produk INT(11) NOT NULL,
	ker_harga DOUBLE,
	ker_jml INT(11),
	PRIMARY KEY(ker_id),
	FOREIGN KEY(ker_id_produk) REFERENCES tb_produk(produk_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
