<?php
class Config {
	
	public function __construct() 
	{
		$this->view = new view();
		$this->db = new m_config();
	}
	
	public function account()
	{	
		$this->update('config/signin');
	}
	
	public function settings()
	{
		$this->view->show('config/settings');
	}
	
	public function search()
	{
		if(isset($_REQUEST["FIO"]) && isset($_REQUEST["passport"]) && isset($_REQUEST["birthdate"]))
		{
			$FIO = $_REQUEST["FIO"];
			$passport = $_REQUEST["passport"];
			$birthdate = $_REQUEST["birthdate"];
			if($_REQUEST["phonenumber1"])
			{
				$phonenumber1 = 'null';
			}
			else
			{
				$phonenumber1 = $_REQUEST["phonenumber1"];
			}
			if($_REQUEST["phonenumber2"])
			{
				$phonenumber2 = 'null';
			}
			else
			{
				$phonenumber2 = $_REQUEST["phonenumber2"];
			}
			$python = 'python3.4 /home/admin/web/andrey.ru/public_html/rb/block/block_search.py '.$FIO.' '.$birthdate.' '.$passport.' '.$phonenumber1.' '.$phonenumber2;
			$output = system($python);
			//$url = 'http://skype.gr02.ru/find_integrity_post';
			//$ch = curl_init($url);
			//$jsonData = array(
			//	'fio' => $FIO,
			//	'birthdate' => $birthdate,
			//	'passport' => $passport,
			//	'telephone1' => $phonenumber1,
			//	'telephone2' => $phonenumber2
			//);
			//$jsonDataEncoded = json_encode($jsonData);
			//curl_setopt($ch, CURLOPT_POST, 1);
			 
			//Attach our encoded JSON string to the POST fields.
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
			 
			//Set the content type to application/json
			//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
			 
			//Execute the request
			//ob_start();
			//curl_exec($ch);
			//$str = ob_get_contents();
			//@ob_end_clean();
			//$obj = json_decode($str);
			//$ans = $obj->{'content'}; // 12345
			$data['msg'] = $output;
			$this->view->cp_show('login/search',$data);
		}
		else
		{
			$this->view->cp_show('login/search');
		}
	}
	
	public function add()
	{
		if(isset($_REQUEST["FIO"]) && isset($_REQUEST["passport"]) && isset($_REQUEST["birthdate"]))
		{
			$FIO = $_REQUEST["FIO"];
			$passport = $_REQUEST["passport"];
			$birthdate = $_REQUEST["birthdate"];
			if($_REQUEST["phonenumber1"]=='')
			{
				$phonenumber1 = 'null';
			}
			else
			{
				$phonenumber1 = $_REQUEST["phonenumber1"];
			}
			if($_REQUEST["phonenumber2"]=='')
			{
				$phonenumber2 = 'null';
			}
			else
			{
				$phonenumber2 = $_REQUEST["phonenumber2"];
			}
			if($_REQUEST["amount"]=='')
			{
				$amount = 'null';
			}
			else
			{
				$amount = $_REQUEST["amount"];
			}
			if($_REQUEST["kind"]=='')
			{
				$kind = 'null';
			}
			else
			{
				$kind = $_REQUEST["kind"];
			}
			$python = 'python3.4 /home/admin/web/andrey.ru/public_html/rb/block/block_add.py '.$FIO.' '.$birthdate.' '.$passport.' '.$phonenumber1.' '.$phonenumber2.' '.$amount.' '.$kind;
			$output = system($python);
			$data['msg'] = $output;
			
			//$url = 'http://skype.gr02.ru/write_block_post';
			//$ch = curl_init($url);
			//$jsonData = array(
				//'fio' => $FIO,
				//'birthdate' => $birthdate,
				//'passport' => $passport,
				//'telephone1' => $phonenumber1,
				//'telephone2' => $phonenumber2,
				//'amount' => $amount,
				//'kind' => $kind
			//);
			//$jsonDataEncoded = json_encode($jsonData);
			//curl_setopt($ch, CURLOPT_POST, 1);
			 
			//Attach our encoded JSON string to the POST fields.
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
			 
			//Set the content type to application/json
			//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
			 
			//Execute the request
			//ob_start();
			//curl_exec($ch);
			//$str = ob_get_contents();
			//@ob_end_clean();
			//$obj = json_decode($str);
			//$ans = $obj->{'result'}; // 12345
			//if($ans=='yes')
			//{
			$data['msg'] = $output;
			//}
			$this->view->cp_show('login/add', $data);
		}
		else
		{
			$this->view->cp_show('login/add');
		}
	}
	
	public function check()
	{
		$python = 'python3.4 /home/admin/web/andrey.ru/public_html/rb/block/block_check.py';
		$output = system($python);
		$data['msg'] = $output;
		$this->view->cp_show('login/check',$data);
	}
}


?>