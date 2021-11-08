<?php
		if(isset($_POST['isi'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
    
            function penjumlahan($a,$b){
                $hasil=$a + $b;
                return $hasil;
            }
            $penjumlahan=penjumlahan($a,$b);

            function pengurangan($a,$b){
                $hasil=$a - $b;
                return $hasil;
            }
            $pengurangan=pengurangan ($a,$b);

            function perkalian($a,$b){
                $hasil=$a * $b;
                return $hasil;
            }
            $perkalian=perkalian ($a,$b);

            function pembagian($a,$b){
                $hasil=$a / $b;
                return $hasil;
            }
            $pembagian=pembagian ($a,$b);

            function modulo($a,$b){
                $hasil=$a % $b;
                return $hasil;
            }
            $modulo=modulo ($a,$b);   

        }
?>
<html>
    <head>
        <Title>Pemweb Mg 5</Title>
    </head>
    <body>
    	<h2>Kalkulator Sederhana</h2>
        <form action="" method="POST">
        <td>Bilangan 1 : </td>
        <input type="number" name="a" id="a">
        <td>Bilangan 2</td>
        <input type="number" name="b" id="b">
        <button type="isi" name="isi" id="isi"> isi</button>
        </form>
        <h4>
            <?php
            echo "<h3>Hasil perhitungan : <br></h3>";
            echo "<hr><strong>Penjumlahan </strong><br><hr>";
            echo "Operator : + <br>";
            echo "Hasil ";
            echo "$penjumlahan <br><hr>"; 
            echo "<strong>Pengurangan </strong><br><hr>";
            echo "Operator : - <br>";
            echo "Hasil ";
            echo "$pengurangan <br><hr>";
            echo "<strong>Perkalian </strong><br><hr>";
            echo "Operator : * <br>";
            echo "Hasil ";
            echo "$perkalian <br><hr>";
            echo "<strong>Pembagian </strong><br><hr>";
            echo "Operator : / <br>";
            echo "Hasil ";
            echo "$pembagian <br><hr>";
            echo "<strong>Modulo </strong><br><hr>";
            echo "Operator : % <br>";
            echo "Hasil ";
            echo "$modulo <br>";
            ?>
        </h4>
        
    </body>

</html>

<?php
function random(){
    echo "<h2> Random Array</h2>";

    $file = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "ginting", "jojo", "kevin");
    sort($file);
    
    foreach ($file as $data){
        echo "$data<br>";
    }
}



function prima(){
    echo " <h2>Bilangan Prima</h2>";
    for($i = 2; $i <=50; $i++){
        for($j = 2; $j<$i ;$j++){

            if($i % $j == 0){
                break;

            }
            else if ($i-1 == $j){
                echo "$i ";
                break;
            }
        }
    }
}

random();
prima();
?>
