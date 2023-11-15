<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src='ckeditor/ckeditor.js'></script>
</head>

<body>
    <style>
        .form-control {
            width: 426px;
            height: 30px;
            margin: 10px 0 25px 0;
            border: 1px solid lightgray;
            border-radius: 2px;
        }

        input[type="file"] {
            height: 25px;
            text-align: center;
            padding: 5px 0 0 10px;
        }

        ::placeholder {
            padding: 10px;
        }

        .btn-primary{
            width: 75px;
            height: 34px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    <h1>Email tới bạn</h1>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <label>Email</label><br>
        <input type="text" class="form-control" name="email" placeholder="Email"><br>
        <label>Subject</label><br>
        <input type="text" class="form-control" name="tieude" placeholder="ten"><br>
        <label>Nội dung</label><br>
        <textarea name="content" id="editor" cols="56" rows="10" style="margin-bottom: 15px"></textarea><br>
        <label>File đính kèm</label><br>
        <input type="file" class="form-control" name="file"><br>
        <button type="submit" class="btn btn-primary">Gửi</button><br>
    </form>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>

</html>