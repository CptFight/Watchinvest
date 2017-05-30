

<form action="" method="POST">
    <input type="email" id="login-email" name="login" class="form-control" placeholder="<?php echo $this->lang->line('email'); ?>" required="">
    <input type="submit" class="btn" name="send-login" value="<?php echo $this->lang->line('send_new_password'); ?>" />
</form>
<a href="<?php echo site_url('users/login'); ?>" class="link-password"><?php echo $this->lang->line('login'); ?></a>

