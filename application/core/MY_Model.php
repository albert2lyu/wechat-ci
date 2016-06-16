<?php
/**
 * MY_Model.php
 * User: wlq314@qq.com
 * Date: 16/6/5 Time: 00:11
 */

abstract class MY_Model extends CI_Model{
    
    //表名,子类必须填充
    protected $_table;
    
    //主键名,子类必须填充
    protected $_primary;
    
    /** @var  Logger $logger */
    public $logger;
    
    public function __construct(){
        parent::__construct();
        $this->_table = $this->setTableName();
        $this->_primary = $this->setPrimary();
        //加载日志类
        $this->load->library('Logger', $this->config->item('logger'));
    }
    
    abstract protected function setTableName();
    
    abstract protected function setPrimary();
}