<?php
/**
 * Descrizione di VPrenotazione
 * Classe VPrenotazione, estende la classe view del package System e gestisce la visualizzazione 
 * e formattazione della pagina di prenotazione.
 *
 * @package View
 * @author Davide Giancola
 * @author Mattia Ciolli
 * @author Vincenzo Cavallo
 * @access public
 */
class VPrenotazione extends View {
    
    /**
     * @access private
     * @var string $_layout
     */
    private $_layout='prenotazione'; 
    
    /**
     * Restituisce l'id della partita passato per GET o POST
     * @access public
     * @return mixed
     */
    public function getIdPartita() {
        if (isset($_REQUEST['id_partita'])) {
            return $_REQUEST['id_partita'];
        } else
            return false;
    }
    
    /**
     * Processa il layout scelto nella variabile _layout
     * @access public
     * @return string
     */
    public function processaTemplate() {
        return $this->fetch('prenotazione_'.$this->_layout.'.tpl');
    }
    
    /**
     * Imposta i dati nel template identificati da una chiave ed il relativo valore
     * @access public
     * @param string $key
     * @param mixed $valore
     */
    public function impostaDati($key,$valore) {
        $this->assign($key,$valore);
    }
    
    /**
     * Restituisce il nome del task richiesto tramite GET o POST
     * @access public
     * @return mixed
     */
    public function getTask() {
        if (isset($_REQUEST['task']))
            return $_REQUEST['task'];
        else
            return false;
    }
    
    /**
     * Imposta il layout
     * @access public
     * @param string $layout
     */
    public function setLayout($layout) {
        $this->_layout=$layout;
    }
    
    /**
     * Restituisce l'array contenente i dati necessari per fare la  prenotazione
     * @access public
     * @return mixed
     */
    public function getDatiCreaPrenotazione() {
        $dati_richiesti=array('attrezzatura', 'perterzi');
        $dati=array();
        foreach ($dati_richiesti as $dato) {
            if (isset($_REQUEST[$dato]))
            	$dati[$dato]=$_REQUEST[$dato];
            else 
            	$dati=FALSE;
        }
        return $dati;
    }


}

?>