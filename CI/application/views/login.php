<html>
<head>
    <title>登录</title>
</head>
<center>
    <body>
    <style>
        .body{
            font-family: '华文行楷';
        }
    </style>
    <?php echo form_open('form/login'); ?>
    <div class="body">
        <h1>账户</h1>
        <input type="text" name="user" value="" size="50" />
        <?php echo form_error('user'); ?>
        <h1>密码</h1>
        <input type="password" name="pass" value="" size="50" />
        <?php echo form_error('pass'); ?>
        <div><input type="submit" value="登录" /></div>
    </div>
    </form>
    </body>
</center>
</html>