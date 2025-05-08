<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h1 {
            color: #0d6efd;
            margin-bottom: 30px;
            text-align: center;
        }
        .contact-info {
            margin-bottom: 25px;
        }
        .contact-info i {
            margin-left: 10px;
            color: #0d6efd;
        }
        .contact-form {
            margin-top: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h1>تماس با ما</h1>
        
        <div class="contact-info">
            <h3><i class="bi bi-geo-alt-fill"></i>آدرس:</h3>
            <p>تهران، خیابان آزادی، دانشگاه صنعتی شریف، ساختمان مرکزی</p>
            
            <h3 class="mt-4"><i class="bi bi-telephone-fill"></i>تلفن:</h3>
            <p>۰۲۱-۶۶۱۶۶۱۶۶</p>
            
            <h3 class="mt-4"><i class="bi bi-envelope-fill"></i>ایمیل:</h3>
            <p>info@example.com</p>
            
            <h3 class="mt-4"><i class="bi bi-clock-fill"></i>ساعات کاری:</h3>
            <p>شنبه تا چهارشنبه: ۸ صبح تا ۴ بعدازظهر</p>
        </div>
        
        <div class="contact-form">
            <h3>فرم تماس</h3>
            <form action="process-contact.php" method="POST">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">موضوع</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">پیام</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ارسال پیام</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</body>
</html>
