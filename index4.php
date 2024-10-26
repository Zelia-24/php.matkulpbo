<!DOCTYPE html>
<html>
<head>
<title>php</title>
</head>
<body>
<?php
    class Mahasiswa {
        public $nama;
        public $tinggiBadan;
        public $warnaKulit;
        public function __construct($nama, $tinggiBadan, $warnaKulit) {
            $this->nama = $nama;
            $this->tinggiBadan = $tinggiBadan;
            $this->warnaKulit = $warnaKulit;
        }
        public function tampilkanInfo() {
            echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tinggiBadan} cm, dan Warna Kulit {$this->warnaKulit}.<br>";
        }
    }
    $mahasiswa1 = new Mahasiswa("puput eliza", 172, "Sawo Matang");
    $mahasiswa2 = new Mahasiswa("tena erfiana", 170, "kuning langsat");
    $mahasiswa3 = new Mahasiswa("sasi maelani", 165, "kuning langsat");
    $mahasiswa1->tampilkanInfo();
    $mahasiswa2->tampilkanInfo();
    $mahasiswa3->tampilkanInfo();
    ?>
</body>
</html>