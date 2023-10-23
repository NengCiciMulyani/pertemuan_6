<?php
    $nilai = 50;
    if (($nilai >= 0) && ($nilai <50)) {
        $indek = "E";
    } elseif (($nilai >= 50) && ($nilai <60)) {
        $indek = "D";
    } elseif (($nilai >= 60) && ($nilai <75)) {
        $indek = "C";
    } elseif (($nilai >= 75) && ($nilai <85)) {
        $indek = "B";
    } elseif (($nilai >= 85) && ($nilai <100)) {
        $indek = "A";
    } else {
        $indek = "Nilai diluar jangkuan";
    }
    echo "Nilai Anda : $nilai, dikonversi menjadi '$indek'";
