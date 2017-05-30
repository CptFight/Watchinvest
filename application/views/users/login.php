
    <form action="" method="POST">
        <input type="email" id="login-email" name="login" class="form-control" placeholder="<?php echo $this->lang->line('Email'); ?>" required="">
        <input type="password" id="login-password" name="password" class="form-control" placeholder="<?php echo $this->lang->line('password'); ?>" required="">
        <input type="submit" class="btn" name="send-login" value="<?php echo $this->lang->line('login'); ?>" />
    </form>
    <a href="<?php echo site_url('users/lost_password'); ?>" class="link-password"><?php echo $this->lang->line('forgot_password'); ?></a>
   