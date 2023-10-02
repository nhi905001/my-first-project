<!DOCTYPE html>
<html>

<head>
    <title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
    <meta charset="utf-8">
    <style>
        * {
            font-family: Tahoma;
        }

        table {
            width: 400px;
            margin: 100px auto;
        }

        table th {
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }

        input {
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="mang-3.php" method="POST">
        <table border="0">
            <thead>
                <tr>
                    <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG
                        DUY NHẤT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'func.php';
                $mang_so = array();
                if (isset($_POST['nhap_mang'])) {
                    $mang_so = explode(",", $_POST['nhap_mang']);
                    $chuoi = so_lan_xuat_hien($mang_so);
                }

                ?>
                <tr>
                    <td>Mảng:</td>
                    <td><input type="text" name="nhap_mang"
                            value="<?php echo isset($_POST['nhap_mang']) ? $_POST['nhap_mang'] : " "; ?>"></td>
                </tr>
                <tr>
                    <td>Số lần xuất hiện:</td>
                    <td><input type="text" name="so_lan_xuat_hien" value="<?php echo isset($chuoi)?$chuoi : " " ; ?>" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>Mảng duy nhất:</td>
                    <td><input type="text" name="mang_duy_nhat" value="<?php mang_duy_nhat($mang_so) ?>"
                            disabled="disabled"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Thực
hiện"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>