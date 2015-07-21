<?php

/**
 * @access public
 * @package Entity
 */
class EPrenotazione {
	/**
	 * @var $id Variabile contenente l'identificativo della prenotazione
	 * @AttributeType string
	 */
    public $id;
	/**
	 * @var $partitaID Variabile contenente l'identificativo della partita associatata alla prenotazione
	 * @AttributeType string
	 */
    public $partitaID;
    /**
     * @var $titoloPartita Variabile contenente il titolo della prenotazione
     * @AttributeType string
     */
    public $titoloPartita;
    /**
     * @var $utenteusername Variabile contenente l'usernme dell'utente prenotante
     * @AttributeType string
     */
    public $utenteusername;
	/**
	 * @var $attrezzatura Variabile contenente se � richiesta attrezzatura
	 * @AttributeType boolean
	 */
    public $attrezzatura=false;
  
    /**
     * Imposta i dati della prenotazione.
     * La funzione viene utilizzata quando � necessario apportare un modifica alla prenotazione.
     *
     * @access public
     * @param string $id
     * @param string $partitaID
     * @param string $titoloPartita
     * @param string $utenteusername
     * @param boolean $attrezzatura
     */
    public function setPrenotazioneMod($id, $partitaID, $titoloPartita, $utenteusername, $attrezzatura) {
    	$this->id=$id;
    	$this->partitaID=$partitaID;
    	$this->titoloPartita=$titoloPartita;
    	$this->utenteusername=$utenteusername;
    	$this->attrezzatura=$attrezzatura;    	
    }

    /**
     * Imposta $id come  l'identificatico della prenotazione
     * @access public
     * @param string $id
     *
     */
    public function setId($id) {
    	$this->id = $id;
    }
    
    /**
     * Imposta $partitaID come  l'identificatico della partita relativa
     * @access public
     * @param string $partitaID
     *
     */
    public function setPartitaID($partitaID) {
    	$this->partitaID = $partitaID;
    }
    
    /**
     * Imposta $titoloPartita come il titolo della partita prenotata
     * @access public
     * @param string $titoloPartita
     *
     */
    public function setTitoloPartita($titoloPartita) {
    	$this->titoloPartita = $titoloPartita;
    }
    
    /**
     * Imposta $utenteusername come  l'username dell'utenteprenotante
     * @access public
     * @param string $utenteusername
     *
     */
    public function setUtenteusername($utenteusername) {
    	$this->utenteusername = $utenteusername;
    }
    
    /**
     * Imposta $attrezzatura come attrezzatura 
     * @access public
     * @param string $attrezzatura
     *
     */
    public function setAttrezzatura($attrezzatura) {
    	$this->attrezzatura = $attrezzatura;
    }
    
    /**
     * @access public
     * @return string Stringa contenente l'identificativo della prenotazione.
     *
     */
    public function getId() {
    	return $this->id;
    }
    
    /**
     * @access public
     * @return string Stringa contenente l'dentificativo relatico alla partita.
     *
     */
    public function getPartitaID() {
    	return $this->partitaID;
    }
    
    /**
     * @access public
     * @return string Stringa contenente il titolo della partita prenotata.
     *
     */
    public function getTitoloPartita() {
    	return $this->titoloPartita;
    }
    
    /**
     * @access public
     * @return string Stringa contenente l'username dell'utenteprenotante.
     *
     */
    public function getUtenteusername() {
    	return $this->utenteusername;
    }
    
    /**
     * @access public
     * @return string Stringa contenente l'attrezzatura.
     *
     */
    public function getAttrezzatura() {
    	return $this->attrezzatura;
    }
}
?>