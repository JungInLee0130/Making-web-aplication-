<?php
    $true_or_false = "참";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>javascript</h1>
    <script charset = "utf-8">
        result = (1==2);
        if (result){
            document.write("참");
        }else{
            document.write("거짓");
        }
    </script>
    <h1>php</h1>
    <?php
        if (true){
            echo $true_or_false;
        }else{
            echo "거짓";
        }
    ?>
</body>

</html>