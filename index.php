<?php
    require_once('list_command.php');
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="css/main.css">
            <meta charset="utf-8">
        </head>
        <body>
            <header class="header">
                <!-- logo -->
                <a class="logo">DG</a>
                <!-- hamburger icon -->
                <input class="side-menu" type="checkbox" id="side-menu"/>
                <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
                <nav class="nav">
                    <ul class="menu">
                        <li><a href="#">Пункт меню</a></li>
                        <li><a href="#">Пункт меню</a></li>
                        <li><a href="#">Пункт меню</a></li>
                    </ul>    
                </nav>
            </header>
            <section>
                <h1>Main git command</h1>
                <p class="description">In this website you can find git command</p>
                <div class="row">
                    <?php
                        foreach ($command_git as $value){
                            echo "<div class='column'><div class='card'><h3>".$value['command_name']."</h3><p>".$value['description']."</p></div></div>";
                        }
                    ?>
                </div>
            </section>
        </body>
    </html>

