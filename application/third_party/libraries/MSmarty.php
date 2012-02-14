<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Smarty封装类
 */

/*
 * 
 * Team     : cncore.com & caizi.org
 * Author   : chentao
 * Email    : hilerchyn@gmail.com
 * Create On: 2011-5-7 18:07:56
 */

require_once(APPPATH . '/third_party/smarty/Smarty.class' . EXT);

class mSmarty extends Smarty {

    function __construct($theme = 'default') {
        parent::__construct();
        
        // set default dirs
        $this->template_dir = array(APPPATH . 'template' . DS . 'templates' . DS . $theme . DS);
        $this->compile_dir = APPPATH . 'template' . DS . 'templates_c' . DS;
        $this->plugins_dir = array(SMARTY_PLUGINS_DIR);
        $this->cache_dir = APPPATH . 'cache' . DS;
        $this->config_dir = APPPATH . 'template' . DS . 'configs' . DS;
        
        $this->left_delimiter = '<{';
        $this->right_delimiter = '}>';
        
        $this->caching = true;
        
    }

}
?>
