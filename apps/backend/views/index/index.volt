<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    {{ form('index/login', 'class': 'form-inline') }}
        <div class="body bg-gray">
            <div class="form-group">
                <b>Usuario ó Correo Electrónico</b>{{ text_field('email', 'class': "form-control") }}
            </div>
            <div class="form-group">
                <b>Contraseña</b>{{ password_field('password', 'class': "form-control") }}
            </div>          
        </div>
        <div class="footer">
            {{ submit_button('Login', 'class': 'btn bg-olive btn-block') }}
            
            
        </div>
    </form>

</div>