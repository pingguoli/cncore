<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 核心模块
 */

/*
 * 
 * Team     : cncore.com & caizi.org
 * Author   : chentao
 * Email    : hilerchyn@gmail.com
 * Create On: 2011-5-6 15:00:04
 */
    
    class Core extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //原加载VIEW模块示例
                    //$this->load->view('core');

            //数据库查询示例
            $query = 'select * from debug_example;';
            $result = $this->db->query($query);
            foreach ($result->result_array() as $row)
            {
               $userinfo = $row;
            }
            $this->msmarty->assign('userinfo', $userinfo);
            
            $this->msmarty->assign('base_url', base_url());

            $this->msmarty->display('core.html');
	}
}

?>
