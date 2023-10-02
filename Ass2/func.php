<?php
// Bài 2:
$n = filter_input(INPUT_POST, 'so_phan_tu', FILTER_VALIDATE_INT);
function tao_mang()
{
    global $n;
    if (isset($n)) {
        $mang_so = array($n);
        for ($i = 0; $i < $n; $i++) {
            $mang_so[$i] = mt_rand(0, 100); //Trả về một giá trị ngẫu nhiên trong khoảng đã chọn
        }
        return $mang_so;
    }
}

function xuat_mang($mang_so)
{
    global $n;
    if (isset($n)) {
        echo implode(" ", $mang_so);
    } else {
        echo " ";
    }
}

function tim_min($mang_so)
{
    global $n;
    if (isset($n)) {
        if (isset($mang_so[0])) {
            $min = $mang_so[0];
            for ($i = 1; $i < $n; $i++) {
                if ($mang_so[$i] < $min) {
                    $min = $mang_so[$i];
                }
            }
        }
        echo $min;
    } else {
        echo " ";
    }
}

function tim_max($mang_so)
{
    global $n;
    if (isset($n)) {
        if (isset($mang_so[0])) {
            $max = $mang_so[0];
            for ($i = 1; $i < $n; $i++) {
                if ($mang_so[$i] > $max) {
                    $max = $mang_so[$i];
                }
            }
        }
        echo $max;
    } else {
        echo " ";
    }

}

function tinh_tong($mang_so)
{
    global $n;
    if (isset($n)) {
        $tong = 0;
        for ($i = 0; $i < $n; $i++) {
            $tong += $mang_so[$i];
        }
        echo $tong;
    } else {
        echo " ";
    }

}

// Bài 3: 
function mang_duy_nhat($mang_so) {
    $mang_duy_nhat = array();
    if (isset($_POST['nhap_mang'])) {
        $mang_duy_nhat = array_unique($mang_so); // Xóa phần tử trùng lặp trong array
    }
    if(isset($mang_so[0])){
        echo implode(", ", $mang_duy_nhat);
        }
}

function so_lan_xuat_hien($mang_so) {
    $so_lan = array();
    $chuoi = "";
    if (isset($_POST['nhap_mang'])) {
        $so_lan = array_count_values($mang_so); // Đếm số lần xuất hiện của từng phần tử trong mảng
        foreach ($so_lan as $key => $value) {
            $chuoi = $chuoi . $key . ":" . $value . " ";
        }
        return $chuoi;
    }
}
?>