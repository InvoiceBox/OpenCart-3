<?php
class ModelExtensionPaymentInvoicebox extends Model {
    public function install() {
        $this->db->query("
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "invoicebox_payments` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `order_id` int(11) NOT NULL,
			  `payment_id` int(11) NOT NULL,
			  `created` DATETIME NOT NULL,
			  `updated` DATETIME NOT NULL,
			  `status` VARCHAR(30) NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;");
        
        $this->load->model('setting/setting');

		$defaults = array();

		
		$defaults['payment_invoicebox_status'] = 0;
		

		$this->model_setting_setting->editSetting('invoicebox', $defaults);
    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "invoicebox_payments`;");
    }
}
?>