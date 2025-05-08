<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتایج فرم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .result-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        h1 {
            color: #0d6efd;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
    </style>
</head>
<body>
<?php
$name = '';
$last_name = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $last_name = htmlspecialchars($_POST['last_name'] ?? '');
}
?>
<div class="result-container">
    <h1>نتایج ارسال فرم</h1>
    <table class="table table-bordered">
        <tr class="table-primary">
            <td><strong>نام:</strong></td>
            <td><?= $name ?></td>
        </tr>
        <tr class="table-light">
            <td><strong>نام خانوادگی:</strong></td>
            <td><?= $last_name ?></td>
        </tr>
    </table>
    <div class="text-center mt-4">
        <a href="/" class="btn btn-primary">بازگشت به صفحه اصلی</a>
    </div>
</div>
</body>
</html>
