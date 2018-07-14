<?php
class Welcome {
	
	public function __construct() 
	{
		$this->view = new view();		
		$this->db = new m_welcome();
		
	}
	
	public function index()
	{
		$this->view->show('login/login');
	}
	
	public function register()
	{
				
		if((isset($_REQUEST["login"])) && (isset($_REQUEST["username"])) && (isset($_REQUEST["password1"])) && (isset($_REQUEST["password2"])))
		{


			$login = $_REQUEST["login"];
			$username = $_REQUEST["username"];
			$password1 = $_REQUEST["password1"];
			$password2 = $_REQUEST["password2"];
			
			if($password1 == $password2)
			{
				if ($this->db->get_count_user($login) == 0)
				{
					$res = $this->db->add_user($login, $username, $password1);
					if($res == 1)
					{
						$this->view->show('login/login',array('msg'=>'Вы успешно зарегестрировались!'));
					}
				}
				else
				{
					$msg = 'Имя пользователя занято';
				}
			}
			else
			{
				$msg = 'Пароли не совпадают';
			}
			
			$this->view->show('login/register',array('msg'=>$msg));
		}
		else
		{
			$this->view->show('login/register');
		}
	}
	
	public function login()
	{
		if((isset($_REQUEST["login"])) && (isset($_REQUEST["password"])))
		{
			$login = $_REQUEST["login"];
			$password = $_REQUEST["password"];
			$ac = $this->db->_get_info($login);
			if(strlen($ac->password)!=0)
			{
				if(md5($password) == $ac->password)
				{
					$user["USERNAME"] = $login;
					$user["TIMESTAMP"] = time();
					$user["USER_ID"] = $ac->id;
					$_SESSION["_USER"] = $user;
					
					header("Location: ".BASE_URL."?module=welcome&method=settings");
					
				}
				else
				{
					$msg = 'Wrong password!';
					$this->view->show('login/login',array('msg'=>$msg));
				}
			}
			else
			{
				$msg = 'Пользователь не найден';
				$this->view->show('login/register',array('msg'=>$msg));
			}
		}
		else
		{
			$this->view->show('login/login');
		}
	}
	
	public function logout()
	{
		unset($_SESSION["_USER"]);
		unset($_REQUEST["password"]);
		header("Location: ".BASE_URL."?module=welcome&method=login");
	}
	
	
	public function settings()
	{
		$this->view->cp_show('login/settings');
	}
	
	public function search()
	{
		$this->view->cp_show('login/search');
	}
	
	public function add()
	{
		$this->view->cp_show('login/add');
	}
	
	public function check()
	{
		$this->view->cp_show('login/check');
	}
}
?>