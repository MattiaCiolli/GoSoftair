<?php
/**
 * @access public
 * @package Controller
 */
class CPartita {
    /**
     * @var string $_username
     */
    private $_username=null;
    
    /**
     * @var string $_errore
     */
    private $_errore='';
   
     
    public function apriPartita() {
    	$view=USingleton::getInstance('VPartita');
    	$session=USingleton::getInstance('USession');
        $id_partita=$view->getIdPartita();
    	$FPartita=new FPartita();
    	$partita=$FPartita->load($id_partita);
    	
    	// controlla che la data della partita non sia pi� vecchia di 7 giorni fa
    	// se lo � la cancella
    	$date=USingleton::getInstance('UData');
    	$dataPartita=$partita->getData();
    	$giorni=$date->diff_daoggi($dataPartita);
    	if($date->sePrimaOggi($dataPartita) && $giorni>7){
    		$FPartita->delete($partita);
    		//print 'calcellata';
    		$view->setLayout('cancellata');
    	}
    	else{
    		$commenti=$partita->getCommenti();
    		$arrayCommenti=array();
    		$dati=get_object_vars($partita);
    		if ( is_array( $commenti )  ) {
    			foreach ($commenti as $commento){
    				$arrayCommenti[]=get_object_vars($commento);
    			}
    		}
    		$dati['commento']=$arrayCommenti;
    		$view->impostaDati('dati',$dati);
    		$username=$session->leggi_valore('username');
    		$FPrenotazione=new FPrenotazione();
    	
    		//mette in utenti che passa alla view e quindi al template gli utenti registrati alla partita
    		$prenotazioni=$FPrenotazione->loadfrompartita($id_partita);
    		if ($prenotazioni!=false) {
    			$i=0;
    			while ($i<count($prenotazioni)) {
    				$_array_dati_partite[$i]=get_object_vars($prenotazioni[$i]);
    				$utenti[$i]=$_array_dati_partite[$i]['utenteusername'];
    				$i++;
    			}
    			$view->impostaDati('utenti', $utenti);
    		}
    	
    		//controlla se l'utente � registrato e se � gia prenotato a questa partita
    		if ($username!=false){
    			$giaPrenotato=false;
    			$prenotazioni=$FPrenotazione->loadfromuser($username);
    			if ($prenotazioni!=false) {
    				$i=0;
    				while ($i<count($prenotazioni)) {
    					$_array_dati_partite[$i]=get_object_vars($prenotazioni[$i]);
    					if ($_array_dati_partite[$i]['partitaID']==$id_partita)
    						$giaPrenotato=true;
    					$i++;
    				}
    			}
    			$view->impostaDati('giaPrenotato', $giaPrenotato);
    			$view->setLayout('dettagli_registrato');
    		}else
    			$view->setLayout('dettagli');
    	}
    	return $view->processaTemplate();
    	
    }
     
     
     
     
     /**
     * Crea una partita sul DB
     *
     * @return mixed
     */
    public function creaPartita() {
	    $view=USingleton::getInstance('VPartita');
		$session=USingleton::getInstance('USession');

        $EPartita=new EPartita();
        $FPartita=new FPartita();
		$dati_registrazione=$view->getDatiCreaPartita();
		$data=$dati_registrazione['Giorno'].'/'.$dati_registrazione['Mese'].'/'.$dati_registrazione['Anno'];
		$EPartita->autore=$session->leggi_valore('username');
		$EPartita->titolo=($dati_registrazione['Titolo']);
		$EPartita->indirizzo=($dati_registrazione['Indirizzo']);
		$EPartita->data=$data;
		$EPartita->descrizione=($dati_registrazione['Descrizione']);
		$EPartita->ngiocatori=($dati_registrazione['Giocatori']);
		$EPartita->ndisponibili=($dati_registrazione['Giocatori']);
		$EPartita->categoria=($dati_registrazione['Categoria']);	
		$EPartita->setPrezzo($dati_registrazione['Prezzo']);
		$file=$view->getFile();
        if($file){
            $nomeOriginale=basename($view->getOriginalFile());
            $dir="./immagini/partite/".$session->leggi_valore('username').'/';
            $target=$dir.'partite'.'_'.$nomeOriginale;
            if(!is_dir($dir)){
                mkdir($dir,0755,true);
            }
            if(move_uploaded_file($file, $target)){
                $EPartita->immagine=$target;               
                
            }
        }
        /*else {echo("Errore, file non pervenuto");} da errore anche quando uno decide di non metterla propio l'immagine cos�
		e comunque non mettete echo diretti, al massimo impostate il mex in qualche variabile, che passate al tamplate e da li lo
		stampa a video o si perde la divisione tra logica di programmazione e quella di visualizzazione*/
		$EPartita->IDpartita=($session->leggi_valore('username').$dati_registrazione['Titolo']);
        $FPartita->store($EPartita);
		
		/********************************************************** da far funzionare
				if($dati_registrazione['Partecipazione']==1)
		{
			echo("PARTECIPO");
		}
		else {echo("NON PARTECIPO");}
		****************************************************************************/
		
		$view->setLayout('confermacrea');
    	return $view->processaTemplate();
     }
    /**
     * Mostra il modulo di registrazione
     *
     * @return string
     */
    public function moduloCreaPartita() {
        $VPartita=USingleton::getInstance('VPartita');
        $session=USingleton::getInstance('USession');
        $username=$session->leggi_valore('username');
        $VPartita->impostaDati('username', $username);
        return $VPartita->processaTemplate();
    }
   
    /**
     * Smista le richieste ai relativi metodi della classe
     * 
     * @return mixed
     */
    public function smista() {
        $view=USingleton::getInstance('VPartita');
        switch ($view->getTask()) {
            case 'CREA PARTITA':
                return $this->creaPartita();
			case 'modulopartita':
                return $this->moduloCreaPartita();
             case 'apripartita':
                		return $this->apriPartita();           
        }
    }
}

?>