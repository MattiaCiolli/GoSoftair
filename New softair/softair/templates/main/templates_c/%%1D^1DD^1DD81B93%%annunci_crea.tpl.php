<?php /* Smarty version 2.6.26, created on 2015-08-01 22:04:59
         compiled from annunci_crea.tpl */ ?>
 <?php if ($this->_tpl_vars['username'] != false): ?>
 <div class="corner-content-1col-top"></div>        
        <div class="content-1col-nobox">
         <h1 >Creazione annuncio</h1>
          <div >
              <br />
            <form method="POST" action="index.php" enctype="multipart/form-data">
              <input type="hidden" name="controller" value="annuncio" />
              <fieldset>
                <p><label for="Titolo" class="top">Titolo:</label><br />
                  <input type="text" id="Titolo" name="Titolo" tabindex="1" class="field" /></p>           
		<p><label for="Prezzo" class="top">Prezzo:</label><br />
                  <input type="number" name="Prezzo" id="Prezzo" tabindex="2" class="field" value="0" /></p>
		<p><label for="Descrizione" class="top">Descrizione:</label><br />
                  <textarea name="Descrizione" id="Descrizione" tabindex="7" cols="80" rows="10" tabindex="3" class="field" onfocus="clearText(this)" onblur="clearText(this)" />Il mio articolo &egrave...</textarea></p>
		<p><label for="Numero" class="top">Telefono:</label><br />
                  <input type="text" name="Numero" id="Numero" tabindex="4" class="field" value="" /></p>
		<p><label for="Immagine" id="Immagine" class="top">Immagine:</label><br />
		  <input id="button" type="file" id="button" name="Immagine" size="40">

              <p><input type="submit"  name="task" class="button" value="Crea annuncio" tabindex="5" /></p>
            </fieldset>
            </form>
          </div>
        </div>
<?php else: ?>
		  		  	<div class="corner-content-1col-top"></div>
           			<div class="content-1col-nobox">
		              <h1>Non puoi creare annunci, senza autenticarti.</h1>
		              <h2 class="noicon">Se non sei ancora iscritto, fallo subito &egrave facile!</h2>
                			<p><input type="button" id="button" value="Iscriviti" onclick="location.href='index.php?controller=registrazione&task=registra'"></p>
          				<p class="demo"></p>
                    </div>
        			<div class="corner-content-1col-bottom"></div>
<?php endif; ?>     