<?php
class ModelSettingExtension extends Model {	
	public function getInstalled($type) {
		$extension_data = array();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "' ORDER BY `code`");

		foreach ($query->rows as $result) {
			$extension_data[] = $result['code'];
		}

		return $extension_data;
	}

	public function install($type, $code) {
		$extensions = $this->getInstalled($type);

		if (!in_array($code, $extensions)) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "extension` (`type`,`code`) 
			VALUES('" . $this->db->escape($type) . "','" . $this->db->escape($code) . "')");
		}
	}

	public function uninstall($type, $code) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "' AND `code` = '" . $this->db->escape($code) . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = '" . $this->db->escape($type . '_' . $code) . "'");
	}	

	public function addExtensionInstall($filename, $extension_id = 0, $extension_download_id = 0) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "extension_install` (`filename`,`extension_id`, `extension_download_id`,`date_added`) 
		VALUES('" . $this->db->escape($filename) . "', '" . (int)$extension_id . "','" . (int)$extension_download_id . "', NOW())");
	
		return $this->db->getLastId();
	}
	
	public function deleteExtensionInstall($extension_install_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "extension_install` WHERE `extension_install_id` = '" . (int)$extension_install_id . "'");
	}

	public function getExtensionInstalls($start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}		
		
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension_install` ORDER BY date_added DESC LIMIT " . (int)$start . " OFFSET " . (int)$limit);
	
		return $query->rows;
	}

	public function getExtensionInstallByExtensionDownloadId($extension_download_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension_install` WHERE `extension_download_id` = '" . (int)$extension_download_id . "'");

		return $query->row;
	}
		
	public function getTotalExtensionInstalls() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "extension_install`");

		return $query->row['total'];
	}
		
	public function addExtensionPath($extension_install_id, $path) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "extension_path` (`extension_install_id`, `path`, `date_added`) 
		VALUES('" . (int)$extension_install_id . "','" . $this->db->escape($path) . "', NOW())");
	}
		
	public function deleteExtensionPath($extension_path_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "extension_path` WHERE `extension_path_id` = '" . (int)$extension_path_id . "'");
	}
	
	public function getExtensionPathsByExtensionInstallId($extension_install_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension_path` WHERE `extension_install_id` = '" . (int)$extension_install_id . "' ORDER BY `date_added` ASC");

		return $query->rows;
	}
}