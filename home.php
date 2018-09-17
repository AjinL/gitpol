<?php
    require_once "db_connect.php";

    $link = mysqli_connect($host,$user,$password,$database) or die("ERROR ".mysqli_connect($link));

    if(isset($link)){
        echo "<div class='container'>";
        echo "КРУТО КОННЕКТ ЕСТЬ)))";
        echo "</div>";
    }
?>
<style>
    .margin{
        margin-left:15px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-3 margin"></div>
        <div class="col-sm-3 margin"></div>
        <div class="col-sm-3 margin"></div>
        <div class="col-sm-3 margin"></div>
        <div class="col-sm-3 margin"></div>
        <div class="col-sm-3 margin"></div>
    </div>
    <div class="row">

<!--        Тестовое подключение))) потом удалить-->

        <?php
        try{
            $pdo = new PDO("mysql:dbname=polygon;host=localhost","root","");
        }catch (PDOException $PDOException){
            echo "Ошибка подключение к бд: ".$PDOException->getMessage();
            exit;
        }
        $sql = "SELECT name_product, commit FROM product";
        $rs = $pdo->query($sql);

        while ($row = $rs->fetch()){
            echo "{$row[name_product]} - {$row[commit]}<br>";
        }

        ?>
    </div>
</div>
