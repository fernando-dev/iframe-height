<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> SALSA [loja de demonstração] </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="SALSA [loja de demonstração]">
<meta name="author" content="SALSA">
<meta name='robots' content='noindex, nofollow' />
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/app.js"></script>
</head>
<body>
    <?php if(isset($_GET['loja']) && !empty($_GET['loja'])): ?>

    <style>html, body {overflow: hidden !important; }</style>
    
    <div id="iframe">

        <iframe id="frame" frameborder="0" src="<?= get_loja($_GET['loja']) ?>">
        
    </div>

    <?php else: ?>

    <div id="main" class="container">
        <div class="row">
            <ul class="thumbnails">
                <li class="thumb span4">
                    <a class="thumbnail" href="./?loja=1" target="_blank">
                        <img src="./img/42315-m-b.jpg" alt="loja1" />
                    </a>
                </li>
                <li class="thumb span4">
                    <a class="thumbnail" href="./?loja=2" target="_blank">
                        <img src="./img/41763-m-b.jpg" alt="loja2" />
                    </a>
                </li>
                <li class="thumb span4">
                    <a class="thumbnail" href="./?loja=3" target="_blank">
                        <img src="./img/42315-m-a.jpg" alt="loja3" />
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <?php endif; ?>

</body>
</html>