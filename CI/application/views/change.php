<html>
<head>
    <title>发布商品</title>
</head>
<center>
    <body>
    <style>
        .body{
            border: red solid 1px;
            width: 500px;
            height: 500px;
        }
    </style>
    <div class="body">
        <?php echo $error;?>
        <?php echo form_open_multipart('upload/change'.$id);?>
        <b>商品分类：</b><select>
            <option>电器</option>
            <option>手机</option>
            <option>食品</option>
            <option>奢侈品</option>
        </select><br/>
        <b>商品名称：</b><input type="text" name="Gname" placeholder="上传商品名"><br/>
        <input type="file" name="userfile" size="20" /><br/>
        <b>商品详情：</b><input type="text" name="Ginfo" placeholder="商品详情"><br/>
        <b>商品价格：</b><input type="text" name="Gprice" placeholder="商品价格"><br/>
        <input type="submit" value="发布" />
        </form>
    </div>
    </body>
</center>
</html>