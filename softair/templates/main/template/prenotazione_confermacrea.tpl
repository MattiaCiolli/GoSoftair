        <a id="anchor-heading-noicon-1"></a>
        <div class="corner-content-1col-top"></div>
        <div class="content-1col-nobox">
        {if $errore == false}
          <h1 class="noicon">Conferma prenotazione</h1>
          <h2 class="noicon">Prenotazione effettuata con successo</h2>
                 <form action="index.php"  method="get">
					<input type="hidden" name="controller" value="profilo">
    				<input type="hidden" name="task" value="apri">
    				{if $username==AMMINISTRATORE}<input type="hidden" name="profilo" value="mio">{/if}
    				<p><input type="submit" id="button" value="Vai al profilo" title="Vai al profilo" ></p>
				</form>
          <p class="demo"></p>
        {else} <h1>{$errore}</h1>
        <p><input id="button" type="button" value="Vai al profilo" onclick=location.href="index.php?controller=profilo&task=apri&username={$username}"></>
        {/if}
        </div>
        <div class="corner-content-1col-bottom"></div>  