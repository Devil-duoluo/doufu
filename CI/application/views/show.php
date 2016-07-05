<html>
<title>商品详情</title>
<center>
<body>
<style>
    .body li{
        list-style: none;
    }
</style>
<div class="body">
<?php
foreach($list as $value){
    $html="<ul><li><img width='650' src='http://localhost/CodeIgniter-3.0.6/uploads/{$value['photo']}'></li>";
    $html.="<li>商品名字: ".$value['Gname']."</li>";
    $html.="<li>商品价格: ".$value['Gprice'].'￥'." </li>";
    $html.="<li>商品详情: ".$value['Ginfo']."</li>";
    $html.="<li><a href='http://localhost/CodeIgniter-3.0.6/index.php/upload/del/{$value['id']}'>删除</a></li>";
    $html.="<li><a href='http://localhost/CodeIgniter-3.0.6/index.php/upload/change/{$value['id']}'>修改</a></li></ul>";
    echo $html;
}
?>
</div>
</body>
</center>
</html>
