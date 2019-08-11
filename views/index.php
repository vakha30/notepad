<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блокнот</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>

.user {
    font-weight: bold;
    color: blue;
    font-size: 20px;
    position: absolute;
    top: 20px;
    right: 45px;
}

.hide {
    display: none !important;
}

</style>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="text-center"><a href="/">Блокнот</a></h1>
            <div class="user">
                <a href="userinfo"><?= $username ?></a>
                <div style="display: inline;" class="<?php echo $is_logged ? 'hide' : '' ?>">
                    <a href="register">Зарегистрироваться&nbsp;</a>
                    <a href="login">&nbsp;Войти</a>
                </div>
                <div style="display: inline;" class="<?php echo $is_logged ? '' : 'hide' ?>">
                    <a href="logout">&nbsp;Выйти</a>
                </div>
                
            </div>
            <hr>
            <a href="addnote" class="btn btn-success mb-2">Добавить</a>
            
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Заголовок</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lists as $list): ?>
                                <tr>
                            <td><?= $list['id'] ?></td>
                            <td><?= $list['title'] ?></td>
                            <td>
                                <a href="shownote?id=<?= $list['id'] ?>" class="btn btn-info">Показать</a>
                                <a href="editnote?id=<?= $list['id'] ?>" class="btn btn-warning">Изменить</a>
                                <a href="deletenote?id=<?= $list['id'] ?>" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
   </div>
   <script src="script.js"></script>
</body>
</html>