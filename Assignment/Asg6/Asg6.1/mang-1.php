<?php
    $ket_qua = 0;
    $mang_so = array();
    $message = '';
    $n= 0;
    if(!isset($_POST['btn_goi'])){
        $message = 'Enter 3 number';
    }
    else{
        $mang_so = explode(",", $_POST['nhap_mang']);
        $n = count($mang_so);
    }
    for($i = 0; $i < $n; $i++){
        $ket_qua += $mang_so[$i];
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Nhập và tính toán trên dãy số</title>
<meta charset="utf-8">
<style>
*{
 font-family: Tahoma;
}
table{
Trang 27
 width: 400px;
 margin: 100px auto;
}
table th{
 background: #66CCFF;
 padding: 10px;
 font-size: 18px;
}
</style>

</head>
<body>
    <form method="POST" action="mang-1.php">
        <table>
            <thead>
                <tr>
                <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập dãy số:</td>
                    <td><input type="text" name="nhap_mang" value="<?php  ?>"></td>
                </tr>
                <tr>
                <td></td>
                    <td><input type="submit" name="btn_goi" value="Tổng 
                    dãy số" ></td>
                </tr>
                <tr>
                <td>Tổng dãy số:</td>
                    <td><input type="text" name="ket_qua" 
                    disabled="disabled" value="<?php echo $ket_qua ?>" ></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>