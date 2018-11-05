<?php

if ( !defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class PD_WiFi {

	private $db;
	private $db_table = 'submissions';

	public function __construct() {
		$this->autoload();
		$this->load_DB();
		$this->run();
	}

	private function autoload() {
		require_once ABSPATH . 'inc/Medoo.php';
		require_once ABSPATH . 'inc/utility.php';
	}

	private function get_db_connection_args() {
		$return = array(
			'database_type'	 => DB_TYPE,
			'database_name'	 => DB_NAME,
			'username'		 => DB_USER,
			'password'		 => DB_PASWORD,
			'server'		 => DB_SERVER,
		);
		if ( defined( 'DB_SERVER_PORT' ) && DB_SERVER_PORT ) {
			$return[ 'port' ] = DB_SERVER_PORT;
		}
		return $return;
	}

	private function load_DB() {
		if ( !class_exists( 'Medoo\Medoo' ) ) {
			die( 'Database error!: No database manager found!' );
		}
		$this->db = new Medoo\Medoo( $this->get_db_connection_args() );
	}

	public function get_db() {
		return $this->db;
	}

	private function installed() {
		$db = $this->db->query("DESCRIBE {$this->db_table};")->fetchAll();
		
		if(empty($db)){
			return false;
		}
		return true;
	}
	
	private function install() {
		$table_schema = "CREATE TABLE {$this->db_table} (
  ID bigint(20) unsigned NOT NULL auto_increment,
  first_name varchar(60) NOT NULL default '',
  last_name varchar(60) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  sub_date datetime NOT NULL default '0000-00-00 00:00:00',
  browser_agent varchar(255) NOT NULL default '',
  PRIMARY KEY  (ID),
  KEY email (email(10))
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;";
		$this->db->query($table_schema)->fetchAll();
	}
	
	public function process_submission() {
		$first_name = !empty($_POST['first_name']) ? trim($_POST['first_name']) : '';
		$last_name = !empty($_POST['last_name']) ? trim($_POST['last_name']) : '';
		$email = !empty($_POST['email']) ? trim($_POST['email']) : '';
		
		$email = sanitize_email($email);
		
		if(!$first_name || !$last_name || !$email) {
			echo 'No empty fields allowed!';
			die();
		}
		$user_agent = !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'sub_date' => date('Y-m-d H:i:s'),
			'browser_agent' => $user_agent
		);
		$this->db->insert($this->db_table, $data);
		
		if($this->db->id()){
			echo 'OK';
		}else{
			echo 'NOT OK!';
		}
		die();
	}
	
	public function actions() {
		if(!empty($_POST['submitted'])){
			$this->process_submission();
		}
	}
	
	public function load_template() {
		include ABSPATH . 'templates/main.php';
	}

	private function run() {
		if(!$this->installed() && !empty($_GET['install'])){
			$this->install();
		}
		if ( !$this->installed() ) {
			echo 'Database is ont installed! <a href="/?install=1">Install now</a>';
			die();
		}
		$this->actions();
		$this->load_template();
	}

}
