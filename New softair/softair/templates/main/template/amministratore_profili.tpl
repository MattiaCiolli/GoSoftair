{if $datiUtente!= false}	
<div class="corner-content-1col-top"></div>
<div class="content-1col-nobox">
		  <h1>Profili</h1>
		  <table>
            <tr><th class="top" scope="col">Username</th>
            	<th class="top" scope="col">Password</th>
                <th class="top" scope="col">Nome</th>
                <th class="top" scope="col">Cognome</th>
                <th class="top" scope="col">Punti</th>
                <th class="top" scope="col">E-mail</th>
                <th class="top" scope="col">Citta</th>
                <th class="top" scope="col">Via</th>
                <th class="top" scope="col">CAP</th>
                <th class="top" scope="col">Codice Attivazione</th>
                <th class="top" scope="col">Stato</th>
                <th class="top" scope="col">Foto</th>
                <th class="top" scope="col"></th>
                <th class="top" scope="col"></th>
          	{section name=i loop=$datiUtente}  
            <tr><td>{$datiUtente[i].username}</td>
                <td>{$datiUtente[i].password}</td>
            	<td>{$datiUtente[i].nome}</td>
 				<td>{$datiUtente[i].cognome}</td>
            	<td>{$datiUtente[i].punti}</td>
            	<td>{$datiUtente[i].email}</td>
            	<td>{$datiUtente[i].citta}</td>
            	<td>{$datiUtente[i].via}</td>
            	<td>{$datiUtente[i].CAP}</td>
            	<td>{$datiUtente[i].codice_attivazione}</td>
            	<td>{$datiUtente[i].stato}</td>
            	<td>{$datiUtente[i].foto}</td>
            	<td><a href="index.php?controller=profilo&task=modutente&username={$datiUtente[i].username}"><img title="Modifica" class="mod" height="20" src="templates/main/template/img/mm.jpg"></a></td> 
            	<td><a href="index.php?controller=amministratore&task=eliminaprofilo&utente={$datiUtente[i].username}"><img title="Elimina" class="mod" height="20" src="templates/main/template/img/el4.jpg"></a></td> 
            </tr>
            {/section}
			</table>
		  </div>
		  <div class="corner-content-1col-bottom"></div>
	{else}
		  		  	<div class="corner-content-1col-top"></div>
           			<div class="content-1col-nobox">
		              <h1>Non ci sono utenti registati.</h1>
		              <h2 class="noicon">Puoi registrarti facilmente! Clicca qui  </h2>
                			<p><input type="button" value="Registrati" onclick="location.href='index.php?controller=registrazione&task=registra'"></p>
          				<p class="demo"></p>
                    </div>
        			<div class="corner-content-1col-bottom"></div>
     {/if}  