        <a id="anchor-login-4"></a>
        <div class="corner-subcontent-top"></div>
        <div class="subcontent-box">
          <h1 class="login">Login</h1>
         <script type="text/javascript" src="JS/CLogin.js"></script>
          <div class="loginform">
            <p id="error">{$errore}</p>
            <br />
            <form method="post" action="index.php" id="formlog">
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <p><input type="hidden" name="controller" value="registrazione" /></p>
              <p><input type="hidden" name="task" value="autentica" /></p>
              <fieldset>
                <p><label for="username" class="top">Nome utente:</label><br />
                  <input type="text" name="username" id="username" tabindex="1" class="field" value="" /></p>
              <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
              <p><input type="checkbox" name="checkbox" id="checkbox" class="checkbox" tabindex="3" size="1" value="" /><label for="checkbox" class="right">Ricordati?</label></p>

              <p><input type="button" class="button" value="LOGIN" onClick="ModuloLogin()"/></p>
              <p><a href="?controller=registrazione&task=password_dimenticata" id="forgotpsswd">Password dimenticata?</a></p>
            </fieldset>
            </form>
          </div>
        </div>
        <div class="corner-subcontent-bottom"></div>