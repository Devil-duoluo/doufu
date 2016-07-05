<html>
<head>
    <title>Upload Form</title>
</head>
<body>

<h3>上传成功</h3>

<ul>
    <?php foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>: <?php echo $value;?></li>
    <?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', '返回上传页面');?></p>
<p><?php echo anchor('upload/homes', '首页');?></p>

</body>
</html>