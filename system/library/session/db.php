<?php
/*
CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(32) NOT NULL,
  `data` text NOT NULL,
  `expire` datetime NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
*/
namespace Session;
final class DB {
	public $expire = '';
	
	public function __construct($registry) {
		$this->db = $registry->get('db');
		
		$this->expire = ini_get('session.gc_maxlifetime');
	}
	
	public function read($session_id) {
		$query = $this->db->query("SELECT `data` FROM `" . DB_PREFIX . "session` WHERE session_id = '" . $this->db->escape($session_id) . "' AND expire > to_timestamp(" . (int)time() . ")");
		
		if ($query->num_rows) {
			return json_decode($query->row['data'], true);
		} else {
			return false;
		}
	}
	
	public function write($session_id, $data) {
		if ($session_id) {
			$this->db->query("INSERT INTO `" . DB_PREFIX .
                "session` Values ('". $this->db->escape($session_id)."','". $this->db->escape(json_encode($data)) . "','" .$this->db->escape(date('Y-m-d H:i:s', time() + $this->expire))
                ."') ON CONFLICT (session_id) DO UPDATE SET "
                . " `data` = '" . $this->db->escape(json_encode($data))
                . "', expire = '" . $this->db->escape(date('Y-m-d H:i:s', time() + $this->expire))
                . "'");
		}
		
		return true;
	}
	
	public function destroy($session_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE session_id = '" . $this->db->escape($session_id) . "'");
		
		return true;
	}
	
	public function gc($expire) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE expire < " . ((int)time() + $expire));
		
		return true;
	}
}
