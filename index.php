<?php
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body id = "target">
    <header>
    <img src="http://mimg.segye.com/content/image/2021/02/25/20210225512788.jpg" alt="김나정 아나운서">    
    <h1><a href="http://localhost/index.php">JavaScript</a></h1>
    </header>
    <nav> 
        <ol>
        <?php
            echo file_get_contents("list.txt");
        ?>
        </ol>
    </nav>

    <div id = "control"> <!-- 그룹핑 -->
        <input type="button" value = "white" onclick = "document.getElementById('target').className = 'white'"/>
        <input type="button" value = "black" onclick = "document.getElementById('target').className = 'black'"/>
    </div>

    <article>
        <?php
        if (empty($_GET['id']) == false){
            echo file_get_contents($_GET['id'].".txt");
        }
        ?>
    </article>

</body>
</html>

