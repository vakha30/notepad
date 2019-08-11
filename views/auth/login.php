<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блокнот</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

   <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="text-center"><a href="/">Блокнот</a></h1>
            <hr>
                <h3>Вход</h3>
                <form action="/controller/login" method="POST" class="form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Пароль" required>
                    </div>
                    <input type="submit" class="btn btn-danger" value="Войти">
                </form>
            </div>
        </div>
   </div>
   <script src="../../script.js"></script>
</body>
</html>