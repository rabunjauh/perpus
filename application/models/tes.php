<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Model {
	public function model_tes($parameter1 = '', $parameter2 = false, $parameter3 = null ){
		echo "parameter1->".$parameter1."<br>";
		if($parameter2 = false){
			echo "parameter2->false<br>";
		}else{
			echo "parameter2->true<br>";
		}
		echo "parameter3->".$parameter3."<br>";
	}
	

}

/* End of file tes.php */
/* Location: ./application/models/tes.php */