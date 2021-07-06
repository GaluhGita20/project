<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('fakultas')->delete();

        \DB::table('fakultas')->insert([
          'id'=>1,
          'slug' => 'fakultas-ilmu-budaya',
          'nama' => 'Fakultas Ilmu Budaya',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Ilmu Budaya merupakan fakultas pertama di Universitas Udayana. Berdiri atas prakarsa Yayasan Fakultas-fakultas Nusa Tenggara yang diketuai oleh Letkol Minggoe dan Wakil Ketua I, Gubernur Sunda Kecil, Teuku Mochamad Daoedsjah. Diresmikan oleh Presiden Pertama Negara Republik Indonesia yaitu Dr. Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Prijono pada tanggal 29 September 1958.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat :</strong>&nbsp;Jln. Nias No. 13 Sanglah Denpasar 80114 Bali<br />\r\n<strong>Tlp/Fax :</strong> 0361224121<br />\r\n<strong>Email :</strong> fsb@unud.ac.id<br />\r\n<strong>Website :</strong>&nbsp;<a href=\"http://https/fib.unud.ac.id\">https://fib.unud.ac.id</a></big></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n',
          'logo' => 'admin/gambar/fakultas/FIB.png',
        ]);

        \DB::table('fakultas')->insert([
          'id'=>2,
          'slug' => 'fakultas-kedokteran',
          'nama' => 'Fakultas Kedokteran',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Kedokteran Unud (FK Unud) tepatnya berdiri pada tahun 1962 dan merupakan salah satu bagian dari 12 Fakultas yang ada di bawah Unud. FK Unud berlokasi di Denpasar (Pusat Kota Provinsi Bali). Fakultas Kedokteran Unud merupakan salah satu dari institusi pendidikan kedokteran yang memiliki kualitas yang tinggi dan dapat disejajarkan dengan institusi pendidikan kedokteran pada tingkat nasional dan ASEAN.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat : </strong>Jl. PB Sudirman, Kampus Sudirman Denpasar<br />\r\n<strong>Tlp/Fax :</strong> 0361222510<br />\r\n<strong>Email :</strong> infofk@unud.ac.id<br />\r\n<strong>Website :</strong>&nbsp;<a href=\"http://https/fk.unud.ac.id/\">https://fk.unud.ac.id/</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FK.png',
        ]);

          \DB::table('fakultas')->insert([
          'id'=>3,
          'slug' => 'fakultas-peternakan',
          'nama' => 'Fakultas Peternakan',
          'keterangan' =>'<p style=\"text-align:justify\"><big>Fakultas Peternakan saat awal berdiri pada tahun 1962 bernama Fakultas Kedokteran Hewan dan Peternakan. Berdasarkan Keputusan Presiden No. 62 tahun 1982 tentang Organisasi Universitas Udayana, nama Fakultas Kedokteran Hewan dan Peternakan diubah menjadi Fakultas Peternakan. Dengan demikian sejak tahun 1982 nama Fakultas Peternakan ditetapkan sebagai pengganti nama Fakultas Kedokteran Hewan dan Peternakan. Fakultas Peternakan telah menjalin kerja sama dengan PT Charoen sejak 2019 sehingga memiliki teknologi close house dalam sistem pendidikannya.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat:</strong> Kampus Bukit Jimbaran, Denpasar, Bali, Indonesia 80361<br />\r\n<strong>Tlp/ Fax :</strong> 0361702771<br />\r\n<strong>Email :</strong> infofapet@unud.ac.id<br />\r\n<strong>Website :</strong>&nbsp;<a href=\"http://https/fapet.unud.ac.id\">https://fapet.unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FAPET.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>4,
          'slug' => 'fakultas-hukum',
          'nama' => 'Fakultas Hukum',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Hukum Universitas Udayana lahir dari pemikiran dan usulan PERSAHI Indonesia Cabang Bali. Fakultas Hukum Universitas Udayana berdiri pada tanggal 29 September 1964, diresmikan pendiriannya oleh Brigjen. Prof. Dr. Sumantri Hardjoprakoso, Pembantu Menteri dan atas nama Menteri Pendidikan Tinggi dan Ilmu Pengetahuan, bertepatan dengan Dies natalis pada Dies Natalis ke III Universitas Udayana.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat :</strong> Jl. Pulau Bali No.1, Denpasar-Bali<br />\r\n<strong>Tlp/Fax&nbsp;</strong>: 0361222666<br />\r\n<strong>Email :</strong> Info@fl.unud.ac.id<br />\r\n<strong>Website :</strong>&nbsp;<a href=\"http://https/fl.unud.ac.id\">https://fl.unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/fh.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>5,
          'slug' => 'fakultas-teknik',
          'nama' => 'Fakultas Teknik',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965 yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana adalah dalam rangka pelestarian, pengembangan khususnya pada kebudayaan Daerah Bali dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.</big></p>\r\n',
          'contact' => '<p style=\"text-align:justify\"><big><strong>Alamat :</strong> Jl. Kampus Bukit Jimbaran, Kuta Selatan, Badung-Bali<br />\r\n<strong>Tlp/Fax :</strong> 0361703320<br />\r\n<strong>Email :</strong> <a href=\"mailto:infoft@unud.ac.id\">infoft@unud.ac.id</a><br />\r\n<strong>Website :</strong> <a href=\"https://ft.unud.ac.id/\">https://ft.unud.ac.id/</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FT.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=> 6,
          'slug' => 'fakultas-pertanian',
          'nama' => 'Fakultas Pertanian',
          'keterangan' =>'<p style=\"text-align:justify\"><big>Fakultas Pertanian Universitas Udayana berdiri tahun 1965 atas prakarsa Rektor Universitas Udayana Prof. Dr. Ida Bagus Mantra dengan menghubungi Dr. Ir. I Gusti Bagus Teken dan Ir. Putu Djapa Winaya, M.Sc. Keduanya adalah staf dosen Institut Pertanian Bogor. Akhirnya, berdasarkan Keputusan Dirjen Dikti Nomor 102 Tanggal 2 September 1967 secara resmi dinyatakan berdirinya Fakultas Pertanian Universitas Udayana. Dekan pertama Fakultas Pertanian Universitas Udayana adalah Ir. Putu Djapa Winaya M.Sc.</big></p>\r\n',
          'contact' => '<p style=\"text-align:justify\"><big><strong>Alamat :</strong> Kampus Bukit Jimbaran, Badung, Bali. 80361<br />\r\n<strong>Email :</strong> <a href=\"mailto:infofp@unud.ac.id\">infofp@unud.ac.id</a><br />\r\n<strong>Tlp/Fax :</strong> (0361) 702801, 703602<br />\r\n<strong>Website :</strong> <a href=\"http://https/fp.unud.ac.id\">https://fp.unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FP.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>7, 
          'slug' => 'fakultas-ekonomi-dan-bisnis',
          'nama' => 'Fakultas Ekonomi dan Bisnis',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Ekonomi Universitas Udayana didirikan tahun 1967 dan disahkan&nbsp;dengan S.K. Dirjen Pendidikan Tinggi No.102 tanggal 2 September 1967. Pada awal berdiri Fakultas Ekonomi Unud hanya diperkenankan untuk melaksanakan pendidikan Sarjana Muda. Perintis berdirinya Fakultas Ekonomi Universitas Udayana adalah Drs. Wayan Rendha (almarhum). Pada tanggal 21 Juni 2013, berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor 100A/UN14/HK/2013 tertanggal 21 Juni 2013, Fakultas Ekonomi berubah nama menjadi Fakultas Ekonomi dan Bisnis.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat :</strong> Kampus Bukit Jimbaran, Denpasar, Bali, Indonesia<br />\r\n<strong>Tlp/Fax :</strong> 0361701810<br />\r\n<strong>Emai l: </strong>infofe@unud.ac.id<br />\r\n<strong>Website :</strong>&nbsp;<a href=\"http://https/feb.unud.ac.id\">https://feb.unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FEB.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>8,
          'slug' => 'fakultas-matematika-dan-ilmu-pengetahuan-alam',
          'nama' => 'Fakultas MIPA',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Matematika dan Ilmu Pengetahuan Alam merupakan fakultas ke-8 yang berdiri pada tahun 1984. Fakultas MIPA dibentuk dalam beberapa tahap. Pada 1984 dibentuk Jurusan Kimia dan Fisika. Pada tahun 1985 dibentuk Jurusan Biologi, dilanjukan dengan jurusan matematka pada tahun 2000 dan terakhir jurusan Farmasi diijinkan 2005. Pada tahun 2006 dibawah jurusan matematika, dibuka program studi baru yaitu program studi ilmu computer dimana penerimaan mahasiswa baru dimulai dari Tahun Ajaran 2006/2007.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat&nbsp;</strong>: Kampus Bukit Jimbaran, Denpasar, Bali, Indonesia 80361<br />\r\n<strong>Tlp/Fax&nbsp;</strong>: 0361703137<br />\r\n<strong>Email&nbsp;</strong>: mipa@unud.ac.id<br />\r\n<strong>Website&nbsp;</strong>:&nbsp;<a href=\"http://https/fmipa.unud.ac.id/\">https://fmipa.unud.ac.id/</a></big></p>\r\n\r\n<p>&nbsp;</p>\r\n',
          'logo' => 'admin/gambar/fakultas/FMIPA.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>9,
          'slug' => 'fakultas-kedokteran-hewan',
          'nama' => 'Fakultas Kedokteran Hewan',
          'keterangan' =>'<p style=\"text-align:justify\"><big>Pada awal berdirinya Universitas Udayana di tahun 1962, bidang ilmu kedokteran hewan bersama bidang ilmu peternakan berada di bawah payung fakultas kedokteran hewan dan peternakan. Hal ini mempertimbangkan terbatasnya fasilitas dan sumber daya yang baru mampu membina bidang ilmu peternakan saja. Meningkatnya angka kebutuhan akan dokter hewan maka pada tahun 1978 terbentuklah Jurusan Kedokteran Hewan, selang 19 tahun kemudian Fakultas Kedokteran Hewan Universitas Udayana resmi berdiri sendiri pada tanggal 8 November 1997.</big></p>\r\n',
          'contact' => '<p style=\"text-align:justify\"><big><strong>Alamat :</strong> Jl. P.B Sudirman Denpasar<br />\r\n<strong>Phone<strong> </strong>:</strong> (0361) 701808<br />\r\n<strong>Fax<strong> </strong>:</strong> (0361) 701808<br />\r\n<strong>Email<strong> </strong>:</strong> <a href=\"mailto:infofkh@unud.ac.id\">infofkh@unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FKH.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>10,
          'slug' => 'fakultas-teknologi-pertanian',
          'nama' => 'Fakultas Teknologi Pertanian',
          'keterangan' => '<p style=\"text-align:justify\"><big>Pengembangan bidang ilmu Teknologi Pertanian di Universitas Udayana dimulai sejak tahun 1962 yang dirintis oleh bagian Teknologi Hasil Ternak, Fakultas Kedokteran Hewan dan Peternakan (FKHP) yang sekarang bernama Fakultas Peternakan (FAPET). Atas petunjuk dan persetujuan Direktorat Jenderal Pendidikan Tinggi (Ditjen DIKTI), Fakultas Teknologi Pertanian (FTP) dapat didirikan berdasarkan Surat Keputusan Rektor Universitas Udayana tertanggal 7 Oktober 2004 No.271.A/J14/PR.01.10/2004.</big></p>\r\n',
          'contact' => '<p style=\"text-align:justify\"><big><strong>Alamat </strong>: Jl. Kampus Bukit Jimbaran 80361 Bali, Indonesia<br />\r\n<strong>Phone :</strong> (0361) 701801<br />\r\n<strong>Fax :</strong> (0361) 701801<br />\r\n<strong>Email :</strong> <a href=\"mailto:ftp@unud.ac.id\">ftp@unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/FTP.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>11,
          'slug' => 'fakultas-pariwisata',
          'nama' => 'Fakultas Pariwisata',
          'keterangan' => '<p style=\"text-align:justify\"><big>Pada awalnya Fakultas Pariwisata Universitas Udayana bernama Program Studi Ilmu Kepariwisataan (PSIK) Universitas Udayana berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor 326/PT.17/I.01.12/1985 per tanggal 1 Mei 1985. Tanggal ini pula yang kemudian ditetapkan sebagai hari ulang tahun Fakultas pariwisata. Dalam perkembangannya, PSIK Universitas Udayana sempat mengalami perubahan status hingga pada tanggal 22 Juli 1989 sesuai dengan Surat Keputusan Pendidikan Tinggi Nomor 67/Kep/1989 menetapkan bahwa Program Studi Diploma 4 Pariwisata merupakan program studi antar fakultas di Universitas Udayana.</big></p>\r\n',
          'contact' =>'<p style=\"text-align:justify\"><big><strong>Alamat :</strong> Fakultas Pariwisata Jimbaran, Jl. Dr. R. Goris No.7 Denpasar, Bali, Indonesia (Kode Post 80114)<br />\r\n<strong>Phone :</strong> (0361) 223798<br />\r\n<strong>Email :</strong> <a href=\"https://fpar.unud.ac.id\">https://fpar.unud.ac.id</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/logo_1596514810.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>12,
          'slug' => 'fakultas-ilmu-sosial-dan-ilmu-politik',
          'nama' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Ilmu Sosial dan Ilmu Politik merupakan fakultas ke-12 yang berdiri pada tahun 2009 sesuai dengan Keputusan Rektor Universitas Udayana Nomor: 304/H14/HK/2009 tentang pendirian Fakultas Ilmu Sosial dan Ilmu Politik Universitas Udayana. Pada tahun ajaran 2010/2011 FISIP Unud membuka Program Studi Administrasi Negara berdasarkan Keputusan Menteri Pendidikan Nasional Republik Indonesia Nomor: 63/D/O/2010 tertanggal 2 Juni 2010. Pada tahun 2011, FISIP Unud juga telah membuka beberapa program baru, antara lain Prodi Ilmu Politik melalui Kemendiknas Nomor 97/E/O/2011, Prodi Ilmu Komunikasi, serta Program D3 Perpustakaan.&nbsp;</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat :</strong> Kantor sekretariat Fakultas Ilmu sosial dan ilmu politik berlokasi di JL. PB Sudirman (kampus UNUD Sudirman), Denpasar , Bal<strong>i<br />\r\nTlp :</strong> +62361 255378<br />\r\n<strong>Email :</strong> fisipunud@unudac.id<br />\r\n<strong>Website :</strong>&nbsp; <a href=\"https://fisip.unud.ac.id/\">https://fisip.unud.ac.id/</a></big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/logo_1596516809.png',
          ]);

          \DB::table('fakultas')->insert([
          'id'=>13,
          'slug' => 'fakultas-kelautan-dan-perikanan',
          'nama' => 'Fakultas Kelautan dan Perikanan',
          'keterangan' => '<p style=\"text-align:justify\"><big>Fakultas Kelautan dan Perikanan (FKP) merupakan salah satu dari 13 Fakultas yang ada di Universitas Udayana. Fakultas yang terletak di jalan Kampus Bukit Jimbaran ini merupakan&nbsp; Fakultas termuda di Universitas Udayana (UNUD) yang berdiri pada tanggal 10 Oktober 2011 sesuai dengan Surat Keputusan (SK) Rektor Nomor: 680/UN.14/HK/2011 tentang pendirian Fakultas Kelautan dan Perikanan Universitas Udayana.</big></p>\r\n',
          'contact' => '<p><big><strong>Alamat</strong> <strong>:</strong> Jl. Kampus Bukit Jimbaran 80361 Bali, Indonesia<br />\r\n<strong>Phone</strong> <strong>:</strong> +62 361 702802<br />\r\n<strong>Email :</strong> <a href=\"mailto:fkp@unud.ac.id\">fkp@unud.ac.id</a> </big></p>\r\n',
          'logo' => 'admin/gambar/fakultas/logo_1596528358.png',
          ]);
            
    }
}
