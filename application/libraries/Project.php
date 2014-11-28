<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Project {



    var $params;

    /**
     * Singleton CodeIgniter
     *
     * @var object
     **/
    public $CI;





    // ===========
    // = METHODS =
    // ===========


    function __construct()
    {
        $this->CI =& get_instance();
        
    }


   

}