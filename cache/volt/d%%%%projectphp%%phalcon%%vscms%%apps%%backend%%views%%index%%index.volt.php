<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <?php echo $this->tag->form(array('index/login', 'class' => 'form-inline')); ?>
        <div class="body bg-gray">
            <div class="form-group">
                <?php echo $this->tag->textField(array('email', 'class' => 'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->tag->passwordField(array('password', 'class' => 'form-control')); ?>
            </div>          
        </div>
        <div class="footer">
            <?php echo $this->tag->submitButton(array('Login', 'class' => 'btn bg-olive btn-block')); ?>
            
            <p><a href="#">I forgot my password</a></p>
        </div>
    </form>

</div>