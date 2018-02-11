<?php

	/**
	 * User class.
	 */
	class User extends DB_object{

		// properties
		protected static $db_table = "users";
		protected static $db_table_fields = array('username', 'first_name', 'last_name');
		public $id;
		public $first_name;
		public $last_name;
		public $username;

		/**
		 * Find user by email.
		 *	@param find user by $email.
		 * @return true or false
		 */
		public static function user_find_by_email($email){
			global $database;

			$email =  $database->escape_string($email);

			$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
			$sql .= "email = '{$email}'";
			$sql .= "LIMIT 1";

			$the_result_array = self::find_by_query($sql);
			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}


		/**
		 * Find user by username.
		 *	@param find user by $username.
		 * @return trur or false
		 */
		public static function user_find_by_username($username){
			global $database;

			$username =  $database->escape_string($username);

			$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
			$sql .= "username = '{$username}'";
			$sql .= "LIMIT 1";

			$the_result_array = self::find_by_query($sql);
			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}

		/**
		 * Find user by id.
		 *	@param Find user by $id.
		 * @return true or false
		 */
		public static function user_find_by_id($id){
			global $database;

			$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
			$sql .= "id = '{$id}' ";
			$sql .= "LIMIT 1";

			$the_result_array = self::find_by_query($sql);
			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}


	} //End of User class.

?>
