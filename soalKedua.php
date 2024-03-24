<!DOCTYPE html>

<head>
    <title>Soal Kedua</title>
</head>

<body>
    <?php
    class Orang
    {
        public $namaOrang;
        public $berat;
        public $tinggi;
        public $bmi;

        function __construct($namaOrang, $berat, $tinggi)
        {
            $this->namaOrang = $namaOrang;
            $this->berat = $berat;
            $this->tinggi = $tinggi;
            $this->bmi = round($berat / pow($tinggi, 2), 2);
        }
    }

    class Hasil
    {
        public $orang1;
        public $orang2;

        function __construct($orang1, $orang2)
        {
            $this->orang1 = $orang1;
            $this->orang2 = $orang2;
        }

        function hasil()
        {
            $bmi1 = $this->orang1->bmi;
            $bmi2 = $this->orang2->bmi;

            //markHigherBMI
            if ($bmi1 > $bmi2) {
                $markHigherBMI = True;
                return $markHigherBMI ? "true" : "false";
            } else {
                $markHigherBMI = False;
                return $markHigherBMI ? "true" : "false";
            }
        }

        function show()
        {
            echo '<b>' . $this->orang1->namaOrang . ' :</b><br>';
            echo 'Tinggi : ' . $this->orang1->tinggi . ' m<br>';
            echo 'Berat : ' . $this->orang1->berat . ' kg<br>';
            echo '<br>';
            echo '<b>' . $this->orang2->namaOrang . ' :</b><br>';
            echo 'Tinggi : ' . $this->orang2->tinggi . ' m<br>';
            echo 'Berat : ' . $this->orang2->berat . ' kg<br>';
            echo '<br>';
            echo '<b>Hasil BMI</b><br>';
            echo 'Mark : ' . $this->orang1->bmi . '<br>';
            echo 'John : ' . $this->orang2->bmi . '<br>';
            echo '<br>';
            echo '<b>Mark memiliki BMI lebih tinggi dari John : ' . $this->hasil() . '</b>';
        }
    }

    echo '<h3>Data 1</h3>';
    $mark = new Orang("Mark", 78, 1.69);
    $john = new Orang("John", 92, 1.95);
    $hasil = new Hasil($mark, $john);
    $hasil->show();

    echo '<h3>Data 2</h3>';
    $mark = new Orang("Mark", 95, 1.88);
    $john = new Orang("John", 85, 1.76);
    $hasil = new Hasil($mark, $john);
    $hasil->show();
    ?>

</body>

</html>