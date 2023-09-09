<?php 
    if (isset($_POST["so_dau"]) && isset($_POST["so_cuoi"]))
    {
        $sodau=$_POST["so_dau"];
        $socuoi=$_POST["so_cuoi"];
        $tong=0;
        $tongchan=0;
        $tongle=0;
        $tich=1;
        for ($i=$sodau;$i<=$socuoi;$i++){
            $tong=$tong+$i;
        }
        for ($i=$sodau;$i<=$socuoi;$i++){
            $tich=$tich*$i;
        }
        for ($i=$sodau;$i<=$socuoi;$i++){
            if ($i%2==0){
                $tongchan=$tongchan+$i;
            }
        }
        for ($i=$sodau;$i<=$socuoi;$i++){
            
            if ($i%2!=0){
                $tongle=$tongle+$i;
            }
        }   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tong_for.php" method="post" >
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">Số bắt đầu</td>
                <td width="169"><label for="textfield"></label>
                <input type="text" name="so_dau" id="textfield" value=""/></td>
                <td width="152">Số kết thúc</td>
                <td width="175"><label for="textfield2"></label>
                <input type="text" name="so_cuoi" id="textfield2" value=""/></td>
            </tr>
            <tr>
                <td colspan="5">Kết quả
                <label for="textfield3"></label></td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td colspan="4"><label for="textfield4"></label>
                <input type="text" name="tong" id="textfield4" value="<?php echo $tong ?>"/></td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4"><label for="textfield5"></label>
                <input type="text" name="tich" id="textfield5" value="<?php echo $tich ?>"/></td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4"><label for="textfield6"></label>
                <input type="text" name="tong_chan" id="textfield6" value="<?php echo $tongchan ?> "/></td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4"><label for="textfield7"></label>
                <input type="text" name="tong_le" id="textfield7" value="<?php echo $tongle ?>"/></td>
            </tr>
            <tr>
               <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
            </tr>
        </table>
    </form>
</body>
</html>