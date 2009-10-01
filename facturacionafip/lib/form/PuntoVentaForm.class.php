<?php

/**
 * PuntoVenta form.
 *
 * @package    facturacionafip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class PuntoVentaForm extends BasePuntoVentaForm
{
  public function configure()
  {
  	unset(
	      $this['id'],
	      $this['old_code'],
	      $this['created_at'], 
	      $this['updated_at'],
	      $this['active']
	    );	    
  }
}
