<html>
<head>
    <title>购物</title>
</head>
<center>
<body>
<style>
    .body ul{
        float: left;
        width: 200px;
    }
    .body li{
        list-style: none;
    }
</style>
<div class="body">
<p><?php echo anchor('form','进入注册页面');?></p>
<p><?php echo anchor('upload','进入上传页面');?></p>
<?php
foreach($photo as $value){
    $html="<ul><li><a href='http://localhost/CodeIgniter-3.0.6/index.php/upload/show/{$value['id']}'><img width='200' src='../../uploads/{$value['photo']}'></a></li>";
    $html.="<li>商品名字: ".$value['Gname']."</li>";
    $html.="<li>商品价格: ".$value['Gprice'].'￥'." </li>";
    $html.="<li>商品详情: ".$value['Ginfo']."</li></ul>";
    echo $html;
}
?>
</div>
</body>
</center>
</html>