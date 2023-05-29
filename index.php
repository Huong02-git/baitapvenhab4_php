<?php
// Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkParity($number){
    $number = 150;
$so_du = $number % 2;
if ($so_du == 0){
    echo 'Số ' . $number . ' Là Số Chẵn';
}
else{
    echo 'SỐ ' . $number . ' Là Số Lẻ';
}
}

//Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"

//Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkParity($nam){
    $nam = 2023;
$so_du = $nam % 2;
if ($so_du == 0){
    echo 'Nam ' . $number . ' Là Năm Chẵn';
}
else{
    echo 'Nam ' . $number . ' Là Năm Lẻ';
}
}

//Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printOutTheNumber($number){
    $number == $i;
    for ($i = 0; $i <= 100; $i++){
        echo $i . ' - ';
    }
}

//Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.

//Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
function printOutTheYears($number){
    $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995
    );
     
    foreach ($nam as $key => $value){
        echo $value;
    }
}

?>