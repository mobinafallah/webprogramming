<?php
define('TEXT', '0');
defined('TEXT') or die;

$rows = [
    [   
        '#' => 1,
        'نام' => 'محمد',
        'نام خانوادگی' => 'رضایی',
        'نام کاربری' => '@mrezaei'
    ],
    [ 
        '#' => 2,
        'نام' => 'عباس',
        'نام خانوادگی' => 'احمدی',
        'نام کاربری' => '@aahmadi'
    ],
    [ 
        '#' => 3,
        'نام' => 'فاطمه',
        'نام خانوادگی' => 'محمدی',
        'نام کاربری' => '@fmohammadi'
    ]
];
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>برنامه نویسی وب - اطلاعات</title>
    <style>
        body {
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1 {
            color: #0d6efd;
            margin-bottom: 30px;
        }
        .table {
            margin-top: 20px;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body style="width:70%; margin: 0 auto;">
    <h1 class="text-center">لیست کاربران</h1>
    <table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">نام کاربری</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $value): ?>
                <tr>
                    <?php foreach($value as $v): ?>
                        <td><?= htmlspecialchars($v) ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
