<?php 
// to know if a dte is in the future or not
function spipfeeder_date_relative($date) {
	$ref_time = time();

	if (!$date) return;
	$decal = date("U",$ref_time) - date("U", strtotime($date));

	return $decal;
}

// $decal > 0 ou < 0

// are there anything syndicated at this date ?
function casevide($date)
{

 return true;
}
$GLOBALS['table_des_traitements']['TITRE'][]='typo(supprimer_numero(%s),"TYPO",$connect)';
$GLOBALS['table_des_traitements']['NOM'][]='typo(supprimer_numero(%s),"TYPO",$connect)';
$GLOBALS['table_des_traitements']['TYPE']['mots']='typo(supprimer_numero(%s),"TYPO",$connect)';
$GLOBALS['table_des_traitements']['NOM_SITE'][]='typo(supprimer_numero(%s),"TYPO",$connect)';
?>