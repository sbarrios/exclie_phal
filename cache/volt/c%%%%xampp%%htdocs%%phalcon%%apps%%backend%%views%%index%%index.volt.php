<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <?php echo $this->tag->form(array('index/login', 'class' => 'form-inline')); ?>
        <div class="body bg-gray">
            <div class="form-group">
                <b>Usuario ó Correo Electrónico</b><?php echo $this->tag->textField(array('email', 'class' => 'form-control')); ?>
            </div>
            <div class="form-group">
                <b>Contraseña</b><?php echo $this->tag->passwordField(array('password', 'class' => 'form-control')); ?>
            </div>          
        </div>
        <div class="footer">
            <?php echo $this->tag->submitButton(array('Login', 'class' => 'btn bg-olive btn-block')); ?>
            
            
        </div>
    </form>

</div>