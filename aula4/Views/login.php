<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo TITULO; ?></title>
</head>
<style>
    .cardL{
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto
    }
</style>
<body>
    <nav class="nav navbar-dark bg-dark">
        <a href="#" class="navbar-brand"><img src="logo.png" alt=""><img src="logo.png" alt=""></a>
        <?php echo TITULO; ?>
    </nav>
    <div class="row">
        <div class="cardL">
            <div class="card">
                <div class="card-header">
                    login
                </div>
                <div class="card-body">
                    <form action="valida_login.php" method="post">
                        <input type="text" name="email" placeholder="email">
                        <input type="password" name="senha" placeholder="senha">
                        <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                            <div class="text-danger">
                             erro
                            </div>
                        <?php } ?>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>