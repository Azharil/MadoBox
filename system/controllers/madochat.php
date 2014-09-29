<?php
	
	
		$D->tabs_state	= $this->network->get_dashboard_tabstate($this->user->id, array('all','@me','private','commented','feeds', 'tweets', 'notifications'));

	$this->load_template('madochat.php');
	
?>