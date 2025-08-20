 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
    <style>
        .pagina{
            align-items: center;
        }
    </style>
 </head>
 <body class="pagina">
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === 'admin' && $password === "admin123") {
            echo "<h2>login bem-sucedido</h2>";
    } else {
        echo "<h2>Login Invalido</h2>";
    }
}
    ?>
 </body>
 </html>