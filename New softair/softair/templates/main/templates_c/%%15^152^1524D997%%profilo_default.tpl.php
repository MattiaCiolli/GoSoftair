<?php /* Smarty version 2.6.26, created on 2015-07-12 23:01:38
         compiled from profilo_default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'profilo_default.tpl', 45, false),)), $this); ?>
        <div class="corner-content-1col-top"></div>
          <?php if ($this->_tpl_vars['datiUtente'] != false): ?>
          <div class="content-1col-nobox">
          <a href="index.php?controller=profilo&task=modutente"><img title="Modifica" class="mod" height="20" src="templates/main/template/img/mm.jpg"></a>
          <h1><?php echo $this->_tpl_vars['datiUtente']['username']; ?>
</h1>
          <h5><?php echo $this->_tpl_vars['datiUtente']['nome']; ?>
 <?php echo $this->_tpl_vars['datiUtente']['cognome']; ?>
</h5> 
          <p><img  src="copertine/<?php echo $this->_tpl_vars['datiUtente']['foto']; ?>
" alt="<?php echo $this->_tpl_vars['datiUtente']['username']; ?>
" title="<?php echo $this->_tpl_vars['datiUtente']['username']; ?>
">
		  e-mail: <?php echo $this->_tpl_vars['datiUtente']['email']; ?>
<br>
		  Citta: <?php echo $this->_tpl_vars['datiUtente']['citta']; ?>
<br>
		  Via: <?php echo $this->_tpl_vars['datiUtente']['via']; ?>
<br>
		  CAP: <?php echo $this->_tpl_vars['datiUtente']['CAP']; ?>
<br>
		  	<?php if ($this->_tpl_vars['datiPartite'] != false): ?>	
		    <div class="corner-content-2col-top"></div>
            <div class="content-2col-box">
		    	<h1>Prenotazioni effettuate</h1>
		    	<table>
            	<tr><th class="top" scope="col">ID Partita</th>
                	<th class="top" scope="col">Nome Partita</th>
                	<th class="top" scope="col">Username</th>
                	<th class="top" scope="col">Attrezzatura</th>
                	<th class="top" scope="col"></th></tr>
          		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['datiPartite']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>  
            	<tr><td><?php echo $this->_tpl_vars['datiPartite'][$this->_sections['i']['index']]['partitaID']; ?>
</td>
                	<td><a href="?controller=partita&task=apripartita&id_partita=<?php echo $this->_tpl_vars['datiPartite'][$this->_sections['i']['index']]['partitaID']; ?>
"><?php echo $this->_tpl_vars['datiPartite'][$this->_sections['i']['index']]['titoloPartita']; ?>
</td>
                	<td><?php echo $this->_tpl_vars['datiPartite'][$this->_sections['i']['index']]['utenteusername']; ?>
</td>
            		<td><?php echo $this->_tpl_vars['datiPartite'][$this->_sections['i']['index']]['attrezzatura']; ?>
</td>
            		<td><a href="#&id_prenotazione=<?php echo $this->_tpl_vars['datiPartite'][$this->_sections['i']['index']]['id']; ?>
"><img title="Modifica" class="mod" height="20" src="templates/main/template/img/mm.jpg"></a></td></tr> 
            	<?php endfor; endif; ?>
				</table>
			</div>
            <div class="corner-content-2col-bottom"></div>
		  </p>
		  <?php else: ?><p>Non ci sono prenotazioni a partite.</p><?php endif; ?>
		  
		  <h1>Annunci pubblicati</h1>
		  <table>
            <tr><th class="top" >Titolo</th>
                <th class="top" >Prezzo</th>
                <th class="top" ">Descrizione</th>
                <th class="top" >Telefono</th>
                <th class="top" ></th>
          	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['datiPartite']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>  
            <tr><td><?php echo $this->_tpl_vars['datiAnnunci'][$this->_sections['i']['index']]['titolo']; ?>
</td>
                <td><?php echo $this->_tpl_vars['datiAnnunci'][$this->_sections['i']['index']]['prezzo']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['datiAnnunci'][$this->_sections['i']['index']]['descrizione'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 240, " [...]") : smarty_modifier_truncate($_tmp, 240, " [...]")); ?>
</td>
            	<td><?php echo $this->_tpl_vars['datiAnnunci'][$this->_sections['i']['index']]['telefono']; ?>
</td>
            	<td><a href="index.php?controller=profilo&task=modannuncio&id_annuncio=<?php echo $this->_tpl_vars['datiAnnunci'][$this->_sections['i']['index']]['IDannuncio']; ?>
""><img title="Modifica" class="mod" height="20" src="templates/main/template/img/mm.jpg"></a></td> 
            <?php endfor; endif; ?>
			</table>
		  
		  
		  <?php else: ?>
		              <p>Se vuoi visiatre il tuo profilo prima accedi .</p>
          <?php endif; ?>
          </div>
        <div class="corner-content-1col-bottom"></div>