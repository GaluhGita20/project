<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ukm')->delete();

        \DB::table('ukm')->insert(
            [
            'id' => '1',
            'slug' => 'shorinji-kempo-udayana',
            'nama' => 'Shorinji Kempo Udayanas',
            'keterangan' => '<p style=\"text-align:justify\"><big>Apakah kamu suka dengan olahraga beladiri? Kamu bisa bergabung dengan UKM Shorinji Kempo loh.&nbsp; UKM Shorinji Kempo merupakan salah satu ukm olahraga yang berfokus pada seni beladiri yang berasal dari Jepang. Seni beladiri ini diciptakan oleh Doshin So pada tahun 1947 sebagai sistem pelatihan dan pengembangan diri.&nbsp; Disini kamu dapat berlatih pertahanan diri, pelatihan mental serta meningkatkan kesehatan tentunya. Metode latihannya pun berdasarkan pada filosofi &quot;jiwa dan tubuh adalah sebuah kesatuan yang tak terpisahkan&quot; dan &quot;melatih tubuh dan jiwa&quot;.</big></p>\r\n',
            'contact' => '<p style=\"text-align:justify\"><big><strong>IG :</strong> shorinjikempoudayana</big></p>\r\n\r\n<p><big><strong>Cp&nbsp; Ketua :</strong> Awam Aminullah Ibrahim/085338477084/awamaminullah</big></p>\r\n',
            'logo' => 'kempo.jpg',
            'video' => 'https://www.youtube.com/embed/HwHU4MVakZ8',
            ]);

        \DB::table('ukm')->insert([
            'slug' => 'pramuka',
            'nama' => 'Pramuka',
            'keterangan' => '<p style=\"text-align: justify;\"><big>Kalian tertarik dengan kegiatan kepramukaan dan pelatihan karakter? Kalian bisa bergabung loh dengan Rancana pertama dan tertua di Provinsi Bali yaitu Rancana Udayana-Mahendradatta. Rancana Udayana-Mahendradatta atau yang bisa disingkat menjadi RUM merupakan UKM yang fokus kegiatannya bergerak pada bidang kepramukaan dan berdiri sejak tanggal 5 Mei 1985. RUM juga memiliki berbagai kegiatan menarik yang bisa kalian ikuti, seperti Tatsaka, Napak Tilas, Perkemahan Karakter dan masih banyak kegiatan lainnya.</big></p>\r\n',
            'contact' => '<p><big><strong>Ig :</strong> @racana.udayana_mahendradatta</big></p>\r\n\r\n<p><big><strong>Fb : </strong>racana.mahendradatta@facebook.com</big></p>\r\n\r\n<p><big><strong>Blog :</strong> udayana-mahendradatta.blogspot.com/</big></p>\r\n\r\n<p><big><strong>Emai l:</strong> udadatta19@gmail.com</big></p>\r\n\r\n<p><big><strong>OA Line :</strong> @088sitgk</big></p>\r\n',
            'logo' => 'pramuka.png',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'udayana-debating-society',
            'nama' => 'Udayana Debating Society',
            'keterangan' => '<p style=\"text-align: justify;\"><big>Mari bergabung dengan UKM Udayana Debating Society! UKM Udayana Debating Society (UDS)&nbsp; sendiri merupakan UKM&nbsp; yang berdiri dari tahun 2009 dan bergerak dalam kegiatan debat yaitu, debat bahasa inggris, debat Bahasa Indonesia, dan MUN. UKM ini juga memiliki kegiatan atau event menarik yaitu English Debating Competition dan setiap tahunnya selalu aktif mengikuti berbagai ajang perlombaan dibidangnya serta menyumbang prestasi kepada Universitas Udayana.</big></p>\r\n',
            'contact' =>'<p><big><strong>Line :</strong> @tlf6855w</big></p>\r\n\r\n<p><big><strong>IG :</strong> @ukmuds</big></p>\r\n',
            'logo' => 'logo_1597327410.png',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'sepak-bola',
            'nama' => 'Sepak Bola',
            'keterangan' => '<p style=\"text-align: justify;\"><big>Ayo salurkan hobi dan passion bermain bolamu di UKM Futsal dan Sepakbola Universitas Udayana! Disini kalian dapat aktif berpastisipasi dalam berbagai kompetisi di tingkat provinsi ataupun nasional. UKM Futsal dan Sepakbola juga pernah menjadi juara di regional Bali dan juara 3 dalam putaran nasional Liga Mahasiswa Piala Menpora U21 di Yogyakarta pada tahun 2019.</big></p>\r\n', 
            'contact' => '<p><big><strong>Instagram :</strong> Ukmbolaunud</big></p>\r\n',
            'logo' => 'logo_1597329729.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'pps-betako-merpati-putih',
            'nama' => 'PPS Betako Merpati Putih',
            'keterangan' => '<p style=\"text-align: justify;\"><big>UKM PPS Betakon Merpati Putih berdiri pada tanggal 8 April 1987 dibawah naungan Pemda Bali. UKM PPS Betakon Merpati Putih merupakan Unit Kegiatan Mahasiswa yang bergerak di bidang seni bela diri pencak silat yang berasal dari Indonesia. UKM ini cocok bagi kamu yang memiliki ingin belajar tentang budaya dan bela diri pencak silat khususnya perguruan Merpati putih selain itu kamu juga dapat berpartisipasi dalam kompetisi dan menyumbang prestasi kepada Universitas Udayana.</big></p>\r\n',
            'contact' => '<p><big><strong>UKM merpati putih Unud</strong></big></p>\r\n',
            'logo' => 'logo_1597365421.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'marching-band',
            'nama' => 'Marching Band',
            'keterangan' => '<p style=\"text-align:justify\"><big>Untuk kamu yang ingin tampil didepan umum dan hobi bermain alat music bisa bergabung dengan UKM Marching Band Universitas Udayana. UKM Marching Band Universitas Udayana merupakan Marching band tertua di Bali yang didirikan tahun 1978 oleh Prof. Ida Bagus Oka (Rektor Universitas Udayana pada masa itu). UKM ini juga aktif mengikuti berbagai perlombaan dan menyumbang berbagai prestasi kepada Universitas Udayana.</big></p>\r\n',
            'contact' => '<p style=\"text-align:justify\"><big><strong>Email :</strong> pengurusmbudayana@gmail.com</big></p>\r\n\r\n<p style=\"text-align:justify\"><big><strong>Web : </strong>www.mbudayana.org</big></p>\r\n\r\n<p style=\"text-align:justify\"><big><strong>Instagram :</strong> @mbudayana</big></p>\r\n\r\n<p style=\"text-align:justify\"><big><strong>Facebook :</strong> MB Universitas Udayana</big></p>\r\n',
            'logo' => 'logo_1597366129.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'basket-putri',
            'nama' => 'BASKET PUTRI',
            'keterangan' => '<p>Hai kawan! Buat kalian para wanita tangguh yang hobi olahraga atau mau coba olahraga baru yang seru, basket bisa jadi salah satu opsi buat kalian coba. Disamping berolahraga, di ukm ini teman-teman juga dapat bersosialisasi yang mana dapat menambah relasi teman-teman</p>\r\n',
            'contact' => '<p>No. Tlp: 087820962130</p>\r\n\r\n<p>Id line: sekarlangit28</p>\r\n',
            'logo' => 'logo_1597741129.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'ksr-pmi',
            'nama' => 'KSR PMI',
            'keterangan' => '<p>Mari bergabung dengan UKM KSR-PMI Universitas Udayana! Disini kalian dapat berpartisipasi dalam berbagai kegiatan kemanusian dan pengabdian masyarakat. UKM ini juga memiliki kegiatan rutin yaitu donor darah dan berbagai kegiatan menarik lainnya yang tentunya tetap berpegang pada visi misi UKM KSR-PMI Universitas Udayana yaitu &ldquo;Terwujudnya organisasi kemahasiswaan yang unggul, mandiri dan berbudaya, berlandaskan pada prinsip-prinsip dasar gerakan internasional palang merah dan bulan sabit merah serta Tri Dharma Perguruan Tinggi.</p>\r\n',
            'contact' => '<p>Instagram : ksrpmi_udayana<br />\r\nFacebook : Korps Sukarela Udayana<br />\r\nLine&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : @GMI1900S<br />\r\nEmail&nbsp; &nbsp; &nbsp; &nbsp; : <a href=\"mailto:ksrpmiunud1995@gmail.com\">ksrpmiunud1995@gmail.com</a></p>\r\n',
            'logo' => 'logo_1597741503.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => '9-kki',
            'nama' => 'KKI',
            'keterangan' => '<p>Ayo asah kemampuan bela dirimu di UKM KKI Universitas Udayana! UKM KKI merupakan wadah yang tepat untuk kamu yang memiliki passion dalam bela diri karate. UKM ini juga eksis menyumbang medali kepada Universitas Udayana dan memiliki berbagai prestasi yang diraih oleh Patriot UKM KKI dikancah nasional ataupun Internasional.</p>\r\n',
            'contact' =>'<p>Id Line&nbsp; &nbsp;: wiraputrayoga</p>\r\n\r\n<p>No. Tlp&nbsp; : 081337561939</p>\r\n',
            'logo' => 'logo_1597741613.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'kesenian',
            'nama' => 'Kesenian',
            'keterangan' => '<p>Memiliki hobi dalam kesenian seperti menyanyi atau menari? UKM Kesenian adalah tempat yang tepat untuk kamu. Disini kamu dapat mengembangkan potensi minat dan bakatmu dengan berpartisipasi dalam berbagai kegiatan dan event menarik, seperti Musang dan Raket. UKM ini sendiri terbagi atas 4 divisi, yaitu Divisi Paduan Suara, Divisi Tarian Daerah, Divisi Musik dan Divisi Tarian Modern.</p>\r\n',
            'contact' =>'<p>Instagram : @ukmkesenianunud</p>\r\n\r\n<p>Line&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : @bcz3215o</p>\r\n\r\n<p>CP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : sindi ( 087861110882 )</p>\r\n', 
            'logo' => 'logo_1599231186.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'teater-orok',
            'nama' => 'Teater Orok',
            'keterangan' => '<p>Memiliki bakat dalam dunia peraktingan dan senang tampil di depan umum? Ayo bergabung dengan UKM Teater Orok Noceng! Disini kamu dapat berproses bersama teman-teman lainnya dan&nbsp; melatih kemampuan serta bakatmu. Teater Orok Noceng didirikan pada tanggal 17 Oktober 1999 dan ditetapkan sebagai UKM pada tahun 2000 di bawah naungan Universitas Udayana. Teater Orok Noceng berasal dari dua kata yaitu &ldquo;Orok&rdquo; yang artinya bayi sebagai filosofi perkembangan dan pertumbuhan dimana diharapkan bahwa setiap anggotanya dapat belajar dari suatu proses dan &ldquo;Noceng&rdquo; yang artinya 2000,diambil dari tahun pengesahan UKM ini oleh Universitas Udayana.</p>\r\n',
            'contact' => '<p>Instagram : teater_orok</p>\r\n\r\n<p>Facebook : Teater Orok Noceng</p>\r\n\r\n<p>OA Line&nbsp; &nbsp; : @oig1998l</p>\r\n\r\n<p>Email&nbsp; &nbsp; &nbsp; &nbsp; : teaterorok@gmail.com</p>\r\n\r\n<p>CP&nbsp; Ketua : Nyoman_w</p>\r\n',
            'logo' => 'logo_1597741835.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'gateball',
            'nama' => 'Gateball',
            'keterangan' => '<p>Pernah mendengar tentang olahraga gateball dan penasaran ingin mencoba? Kamu bisa loh bergabung dengan UKM Gateball Universitas Udayana. Kegiatan utama UKM ini yaitu berlatih setiap minggu untuk persiapan lomba dan menambah keakraban antar anggotanya. Disini kamu juga bisa mengikuti berbagai kegiatan yang selalu rutin diadakan setiap tahunnya yaitu Rektor Cup dan berbagai turnamen diluar lainnya yang diselenggarakan untuk olahraga Gateball.</p>\r\n',
            'contact' => '<p>IG&nbsp; &nbsp; : @gateballudayana</p>\r\n\r\n<p>Line : @gvn5607q</p>\r\n\r\n<p>FB&nbsp; &nbsp;: UKM gateball udayana</p>\r\n',
            'logo' => 'logo_1597742299.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'pers-akademika',
            'nama' => 'Pers Akademika',
            'keterangan' => '<p style=\"text-align:justify\">Mari bergabung dengan UKM Pers Mahasiswa Akademika Universitas Udayana! UKM ini tepat untuk kamu yang memiliki hobi dan passion dibidang jurnalistik. UKM Pers Mahasiswa Akademika sendiri didirikan pada tanggal 17 Maret 1982 dan terlahir atas kegelisahan mahasiswa Universitas Udayana pada media 1980-an terkait kehadiran sebuah media yang dapat menyalurkan minat jurnalistik mahasiswa. Fokus kegiatan utama pada UKM Pers Mahasiswa Akademika yaitu menghasilkan karya-karya jurnalistik.</p>\r\n',
            'contact' => '<p>ig&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : @persakademika</p>\r\n\r\n<p>web&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : www.persakademika.com</p>\r\n\r\n<p>Cp Ketua : Id line : missjung31</p>\r\n',
            'logo' => 'logo_1597742354.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'perisai-diri',
            'nama' => 'Perisai Diri',
            'keterangan' => '<p>Dari sekian banyak UKM olahraga yang ada di Universitas Udayana salah satu yang dapat kamu ikuti yaitu UKM Perisai Diri Universitas Udayana. UKM ini dirintis pada tanggal 30 April 1974 dengan motto &ldquo;Pandai Silat Tanpa Cedera&rdquo;. UKM Perisai Diri juga memiliki serangkaian program yang dapat kamu ikuti diantara-Nya, Latihan Rutin (setiap hari Kamis dan Minggu), Kemah Bhakti Pemantapan dan Latihan Mahasiswa (KBPLM), Ujian Kenaikan Tingkat (UKT), Latihan Penyegaran dan Pemusatan Latihan Persiapan Kejuaraan (TC), serta keikutsertaan UKM Perisai Diri dalam kejuaraan-kejuaraan di tingkat daerah, nasional maupun internasional.</p>\r\n',
            'contact' => '<p>Ig&nbsp; &nbsp;: @perisaidiriunud</p>\r\n\r\n<p>CP : ketua Perisai diri : ide line : anggapramana013</p>\r\n',
            'logo' => 'logo_1597742399.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'jegeg-bagus-udayana',
            'nama' => 'Jegeg Bagus Udayana',
            'keterangan' => '<p style=\"text-align: justify;\">UKM Jegeg Bagus Universitas Udayana merupakan ajang yang di ikuti oleh 13 fakultas yang ada di Universitas Udayana melalui pemilihan yang diwakili oleh sepasang putra dan putri terbaik dari masing-masing fakultas. Jegeg Bagus sendiri merupakan panggilan dalam istilah bahasa Bali yang diberikan kepada generasi muda Bali baik perempuan serta laki-laki yang memiliki paras yang cantik dan tampan. Namun, untuk mengikuti UKM ini selain paras yang cantik dan tampan kamu juga harus memiliki minat dan bakat. Nantinya mereka yang mewakili fakultas masing-masing bisa mengembangkan potensi dan kreativitasnya dalam pemilihan Jegeg Bagus Udayana.</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">Ig&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : jegegbagusudayana</p>\r\n\r\n<p style=\"text-align:justify\">Youtube&nbsp; : Jegeg Bagus Udayana</p>\r\n\r\n<p style=\"text-align:justify\">CP UKM : I Kadek Purnadwipa Irsadinata/85746940794/purnadwipa</p>\r\n',
            'logo' => 'logo_1597742754.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'udayana-fokus',
            'nama' => 'Udayana Fokus',
            'keterangan' => '<p style=\"text-align: justify;\">UKM ini awalnya terbentuk dari dari berakhirnya kepanitiaan 3D (desain, dekorasi, dan dokumentasi) Student Day Universitas Udayana tahun 2013 yang dicetuskan oleh mahasiswa Teknik Informasi Angkatan 2012, yaitu Gede Riska Wiradarma selaku Koordinator 3D pada kepanitiaan saat itu. UKM ini merupakan wadah yang tepat bagi yang ingin kamu ingin menumbuhkan dan mengembangkan bakatmu pada bidang fotografi, videografi, animasi dan produksi. UKM ini tidak hanya berfokus pada hard-skill,namun juga pada soft-skill agar tercipta civitas yang professional dan handal dibidangnya.</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">Ig&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : udayanafokus</p>\r\n\r\n<p style=\"text-align:justify\">Line&nbsp; &nbsp; &nbsp; &nbsp; : @snh71651</p>\r\n\r\n<p style=\"text-align:justify\">CP UKM : Maul/89689946243/maulidyady666</p>\r\n',
            'logo' => 'logo_1597743466.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'robotec',
            'nama' => 'Robotec',
            'keterangan' => '<p style=\"text-align: justify;\">UKM ini awalnya terbentuk dari keinginan mahasiswa Fakultas Teknik Udayana yang tergabung dalam tim KSR (Kelompok Studi Robot) untuk mengikuti perlombaan tingkat nasional mewakili Universitas. KSR ini sendiri sudah berdiri sejak tahun 2006 dan hanya terdiri dari mahasiswa Fakultas Teknik. Maka, pada tanggal 15 Mei 2011 dibentuklah UKM Robotec. Tujuannya yaitu agar dapat menjaring mahasiswa yang berpotensi dibidang robotika dengan ruang lingkup lebih luas, yakni seluruh mahasiswa Universitas Udayana. Jadi untuk kamu yang bukan anak teknik tidak perlu takut untuk bergabung ya!</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">Line&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: @gai8312o</p>\r\n\r\n<p style=\"text-align:justify\">Instagram&nbsp; : @robotec_udayana</p>\r\n\r\n<p style=\"text-align:justify\">CP UKM&nbsp; &nbsp;&nbsp;: Agus Surya/81770452363/gusrombe</p>\r\n',
            'logo' => 'logo_1597743639.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'boxer',
            'nama' => 'Boxer',
            'keterangan' => '<p style=\"text-align: justify;\">Universitas Udayana memiliki berbagai UKM olahraga yang dapat kamu ikuti,salah satunya UKM Boxer yang berfokus pada beladiri. Disini kamu dapat belajar mengenai beladiri dan cara menjaga diri. Banyak program latihan yang kamu dapat ikuti mulai dari belajar untuk menjadi atlet sampai ke belajar teknik bertarung yang efektif dijalan untuk jaga diri juga bisa. Selain meningkatkan skill bertarung disini kamu juga dilatih keberanian dan rasa percaya diri.</p>\r\n',
            'contact' =>'<p style=\"text-align:justify\">CP UKM : Gus Dyo/81339101959/dhotarunab</p>\r\n',
            'logo' => 'logo_1597744848.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'usc',
            'nama' => 'USC',
            'keterangan' => '<p>Untuk kamu yang memiliki hobi menulis atau bercita-cita ingin menjadi aktivis bisa mengikuti UKM Udayana Science Club loh. Di UKM USC kamu dapat melatih penalaran kamu dalam tulis-menulis dan kegiatan aktivis lainnya di lingkungan Universitas Udayana. UKM USC sendiri merupakan manifestasi visi Universitas Udayana,yaitu menghasilkan para aktivis nalar yang unggul, mandiri dan berbudaya.</p>\r\n',
            'contact' => '<p>No. Tlp : 082340567541</p>\r\n\r\n<p>Id Line&nbsp; : caaaffeinatedd</p>\r\n',
            'logo' => 'logo_1597745066.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'generasi-bidikmisi-udayana',
            'nama' => 'Generasi Bidikmisi Udayana',
            'keterangan' =>'<p style=\"text-align: justify;\">USC adalah manifestasi visi Universitas Udayana, yaitu dalam rangka menghasilkan para aktivis nalar yang unggul, mandiri dan berbudaya.&nbsp; USC lahir sebagai jawaban dan berbagai dilema tumpulnya kekritisan mahasiswa Udayana yang konon kekurangan literasi dan tidak giat berdiskusi lagi. Berkembangnya penalaran tak hanya mematok USC dalam tulis menulis, tapi pula menggiatkan penalaran yang sebenarnya dan melahirkan aktivis-aktivis nalar di lingkungan Universitas kita tercinta.</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">Instagram&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ukmgbu</p>\r\n\r\n<p style=\"text-align:justify\">Line&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : @ygu9154q</p>\r\n\r\n<p style=\"text-align:justify\">Facebook&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : UKM GBU</p>\r\n\r\n<p style=\"text-align:justify\">CP UKM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Adhan/83114889082/adhan_z</p>\r\n',
            'logo' => 'logo_1597745538.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'menwa',
            'nama' => 'Menwa',
            'keterangan' => '<p style=\"text-align: justify;\">Bagi kamu yang tertarik dengan hal pelatihan ilmu militer dan ingin menjadi salah satu kekuatan sipil bela negara bisa bergabung dengan UKM Resimen Mahasiswa (Menwa) Universitas Udayana. Menwa merupakan UKM yang bergerak di bidang Keprajuritan dan Bela Negara sebagai suatu bentuk pengabdian masyarakat sesuai amanat konstitusi dan aplikasi Tri Dharma Perguruan Tinggi loh! Adapun pelatihan ilmu militer yang kalian bisa temui, yaitu penggunaan senjata, taktik pertempuran, navigasi, dan sebagainya.</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">Ig&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : menwa_unud</p>\r\n\r\n<p style=\"text-align:justify\">CP UKM : Mumtaz/87860281481/Mumtazah_</p>\r\n',
            'logo' =>'logo_1597745636.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'renang',
            'nama' => 'Renang',
            'keterangan' =>'<p style=\"text-align: justify;\">Memiliki hobi di bidang olahraga renang atau baru ingin serius belajar? UKM renang adalah pilihan yang tepat untuk kamu ikuti! UKM ini dibentuk pada tahun 2008 sebagai upaya untuk meningkatkan prestasi olahraga renang Universitas Udayana. Berbagai sarana dan prasarana siap mendukung kamu untuk mengembangkan minat dan bakatmu yang ingin berprestasi di bidang renang.</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">CP UKM : Intan : 082145400125 / intanseftiyani12</p>\r\n',
            'logo' => 'logo_1597745718.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'uyec',
            'nama' => 'Uyec',
            'keterangan' =>  '<p style=\"text-align: justify;\">Ayo bergabung dengan UKM Udayana Young Entrepreneur Community (Uyec) Universitas Udayan! UKM Uyec merupakan UKM yang dibentuk pada tanggal 16 Juni 2013 untuk mewadahi minat dan bakat mahasiswa di bidang kewirausahaan. Adapun program kerja dari UKM ini, yaitu festival wirausaha mahasiswa, expo wirausaha, bazzar, entrepreneur in reality, pelatihan penulisan proposal bisnis, sharing session, dan sebagainya.</p>\r\n',
            'contact' => '<p>Instragram : @ukm_kwuunud</p>\r\n\r\n<p>Id Line&nbsp; &nbsp; &nbsp; &nbsp;: @xrh2185x (pakai@)</p>\r\n\r\n<p>Youtube&nbsp; &nbsp; &nbsp;: UKM Kewirausahaan Universitas Udayana</p>\r\n\r\n<p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: ukmkewirausahaanunud2014@gmail.com</p>\r\n',
            'logo' => 'logo_1597745921.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'mapala',
            'nama' => 'Mapala',
            'keterangan' => '<p style=\"text-align: justify;\">Apakah kamu adalah salah satu pecinta alam? Jika iya, Ayo bergabung dengan UKM Mapala &ldquo;Wanaprastha Dharma&rdquo; Universitas Udayana! UKM Mapala ini merupakan organisasi pecinta alam tertua di Provinsi Bali loh. Dimana, UKM Mapala diresmikan sejak 21 April 1981 dengan memiliki 6 Divisi dan SAR, yaitu Divisi Mountaineering (Hutan, Gunung); Divisi Rock ( Panjat Tebing); Divisi Caving (Penelusuan Gua); Divisi Diving (Menyelam); Divisi Conservation (Konservasi); Divisi White Water Sport (Olahraga Arus Deras).</p>\r\n',
            'contact' => '<p>Instragram : @nakWDunud</p>\r\n',
            'logo' => 'logo_1597746044.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'dirgantara',
            'nama' => 'Dirgantara',
            'keterangan' => '<p style=\"text-align: justify;\">Mari bergabung dengan UKM Dirgantara! UKM Dirgantara merupakan wadah pengembangan minat dan bakat mahasiswa/i Universitas Udayana dalam bidang olahraga Dirgantara (Aerosport) khususnya Paralayang (Paragliding) sejak tanggal 11 November 2011. Pendidikan dan pelatihan &ldquo;Kamacharin&rdquo; disesuaikan dengan prosedur induk organisasi nasional Federasi Aero Sport Indonesia (FASI) dan Persatuan Olahraga Layang Gantung Indonesia (PLGI) loh.</p>\r\n',
            'contact' => '<p>No. Tlp : 081334957780</p>\r\n\r\n<p>Id line&nbsp; &nbsp;: jovanmichaelsanricho</p>\r\n',
            'logo' => 'logo_1597746114.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'wushu',
            'nama' => 'Wushu',
            'keterangan' => '<p style=\"text-align: justify;\">Kalian tertarik untuk mempelajari ilmu olahraga seni bela diri wushu? Mari bergabung dengan UKM Wushu Universitas Udayana! UKM ini dibentuk pada tanggal 22 Desember 1998 dan merupakan UKM ke-20 yang disahkan melalui Ketetapan Musyawarah Mahasiswa Universitas Udayana loh. Olahraga seni yang berasal dari negeri Tiongkok ini terbagi menjadi 2 aliran, yaitu Taolu dan Sanda. Untuk tau lebih jauh, ayo segera gabung dan hubungi contact person yang tertera di bawah!</p>\r\n',
            'contact' =>'<p>Instagram : @wushu_udayana</p>\r\n\r\n<p>Facebook : Ukm Wushu UniversitasUdayana</p>\r\n\r\n<p>Youtube&nbsp; &nbsp; : WushuUdayana</p>\r\n\r\n<p>Email&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;<a href=\"mailto:ukm.wushu@unud.ac.id\">ukm.wushu@unud.ac.id</a></p>\r\n\r\n<p>Official Account Line :@chf2327i</p>\r\n',
            'logo' => 'logo_1597746401.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'catur',
            'nama' => 'Catur',
            'keterangan' => '<p style=\"text-align: justify;\">Ayo kembangkan minat dan bakat bermain caturmu di UKM Catur Universitas Udayana! Disini kalian bisa berpartisipasi aktif untuk mengikuti kompetisi catur di luar universitas loh. UKM yang dibentuk pada tahun 2012 ini pernah menjadi juara harapan 1 pada POMNAS XVI di Jakarta dan meraih juara pertama pada kejuaraan Catur Se-Bali 2019 yang diselenggarakan oleh PNB.&nbsp;</p>\r\n',
            'contact' =>'<p>Facebook : UKM Catur Universitas Udayana</p>\r\n\r\n<p>Instagram : @ukmcatur.unud</p>\r\n\r\n<p>Line@&nbsp; &nbsp; &nbsp; &nbsp;: @phu9790d</p>\r\n\r\n<p>Website&nbsp; &nbsp;&nbsp;: <a href=\"https://sinmawa.unud.ac.id/ormawa/ukm-catur\">https://sinmawa.unud.ac.id/ormawa/ukm-catur</a></p>\r\n',
            'logo' => 'logo_1597747039.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'kopma',
            'nama' => 'KOPMA',
            'keterangan' => '<p style=\"text-align: justify;\">Apakah kalian ingin mendapatkan ilmu lebih dalam berorganisasi maupun berwirausaha? UKM Kopma bisa menjadi pilihanmu. UKM ini merupakan unit kegiatan mahasiswa yang bergerak di bidang perkoperasian di lingkungan Universitas Udayana. UKM ini berdiri sejak tanggal 7 Desember tahun 1985 dan menempatkan mahasiswa sebagai kader utamanya. Sehingga para anggota nantinya diharapkan bisa membuka lapangan pekerjaan untuk membantu mengurangi tingkat pengangguran di Indonesia dengan bekal yang telah diterima di UKM Kopma.</p>\r\n',
            'contact' => '<p>Instagram&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : @kopma_unud</p>\r\n\r\n<p>Line&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : @shu1778o</p>\r\n\r\n<p style=\"text-align:justify\">Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <a href=\"mailto:kopmauniversitasudayana@gmail.com\">kopmauniversitasudayana@gmail.com</a></p>\r\n',
            'logo' => 'logo_1597747205.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'teakwondo',
            'nama' => 'Teakwondo',
            'keterangan' => '<p style=\"text-align: justify;\">Bagi kamu yang memiliki hobi dan passion di olahraga seni bela diri asal Korea Selatan ini bisa bergabung di UKM Taekwondo Universitas Udayana. UKM Taekwondo Udayana berkerja sama dengan Pengurus Provinsi Taekwondo Indonesia (Pengprov TI) Bali di bawah naungan Pengurus Besar Taekwondo Indonesia (PBTI) dalam membina dan mendidik atlet dari anggota UKM Taekwondo serta berkontribusi dalam berbagai kejuruan baik regional, nasional, maupun internasional.</p>\r\n',
            'contact' => '<p>IG : ukmtaekwondo_unud</p>\r\n',
            'logo' => 'logo_1597747302.jpg',
            'video' => '',
        ]);

        \DB::table('ukm')->insert([
            'slug' => 'bulu-tangkis',
            'nama' => 'Bulu Tangkis',
            'keterangan' =>'<p style=\"text-align: justify;\">Mau nyalurin minat, bakat, hobi maupun kecintaanmu terhadap olahraga Bulu Tangkis? Yuk gabung UKM Bulu Tangkis Universitas Udayana!&nbsp; UKM ini berdiri pada tanggal 29 Desember 2016 sebagai salah satu wadah olahraga untuk mahasiswa/i Universitas Udayana. Jika kalian tertarik untuk bergabung, jangan lupa hubungi kontak person di bawah ini ya!</p>\r\n',
            'contact' => '<p style=\"text-align:justify\">OA line&nbsp; &nbsp; &nbsp;: @ukmbulutangkisunud</p>\r\n\r\n<p style=\"text-align:justify\">Instagram : badmintonudayana</p>\r\n',
            'logo' => 'logo_1597747360.jpg',
            'video' => '',
        ]);

    }
}
