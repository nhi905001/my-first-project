<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
</head>

<body>
    <form action="bai1.php" method="post">
        <table width="271" border="1">
            <tr>
                <td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
            </tr>
            <tr>
                <td width="91">Họ tên bạn</td>
                <td width="164">
                    <input type="text" name="ten" id="chao3" />
                </td>
            </tr>
            <tr>
                <?php
                    if (isset($_POST['ten'])) {
                    $name = $_POST['ten'];
                ?>
                <td colspan="2">
                    <label style="display: flex; justify-content: center;">Chào bạn
                        <?php echo $name ?>
                    </label>
                </td>
                <?php }?>
            </tr>
            <tr>
                <td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>