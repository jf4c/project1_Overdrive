<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Crud</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <main>
            <div class="box-login">
                <div class="box-img">
                    <img class="logo" src="img/logo-dark2.png" alt="Logo da Overdrive Softwares e consultoria"> 
                </div>
                <div class="container-log">
                    <h1>Login</h1>
                    <hr class="linha"/>
                    <form class="forms" action='login.php' method="post">
                        <div class="input-box">
                            <span class="material-symbols-outlined">person</span>
                            <input type="text" name=user id="user" class="input"  placeholder="E-mail" >     
                            <!-- <label for="user">User: </label> -->
                        </div>
            
                        <div class="input-box">
                            <span class="material-symbols-outlined">lock</span>
                            <input type="password" name=pass id="pass" class="input" placeholder="senha">
                            <!-- <label for="pass">Senha: </label> -->
                        </div>
            
                        <input type="submit" class="button" value="Entrar">
                    </form>
                </div>  
    
            </div>
        </main>
    </body>
</html>
