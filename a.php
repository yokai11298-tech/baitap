<?php
//  1c 2b 3a 4b 5b

// Bài 1
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>"; 

// Bài 2
function kiemTraNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

var_dump(kiemTraNguyenTo(17)); 
echo "<br>";
var_dump(kiemTraNguyenTo(4));  
echo "<br><br>";

// Bài 3
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($row = 0; $row < $chieuCao; $row++) {
        for ($col = 0; $col < $chieuRong; $col++) {
            echo "* ";
        }
        echo "<br>";
    }
}

inHinhChuNhat(5, 3);
?>