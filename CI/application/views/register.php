<html>
<head>
    <title>购物</title>
</head>
<center>
<body>
<style>
    .body{
        font-family: '华文行楷';
    }
</style>
<?php echo form_open('form'); ?>
<div class="body">
    <h1>账户</h1>
    <input type="text" name="username" value="" size="50" />
    <?php echo form_error('username'); ?>
    <h1>密码</h1>
    <input type="password" name="password" value="" size="50" />
    <?php echo form_error('password'); ?>
    <h1>电子邮箱</h1>
    <input type="text" name="email" value="" size="50" />
    <?php echo form_error('email'); ?>
    <h1>手机</h1>
    <input type="text" name="phone" value="" size="50" />
    <?php echo form_error('phone'); ?>
    <h1>验证码</h1>
    <input type="text" name="number" value="" size="50" />
    <?php echo form_error('number'); ?>
    <div><input type="submit" value="注册" /></div>
</div>
</form>
</body>
</center>
</html>