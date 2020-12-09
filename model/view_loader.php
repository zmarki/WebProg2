<?php

class View_Loader
{
    private $data = array();
    private $render = FALSE;
    private $selectedItems = FALSE;
    private $style = FALSE;
    private $result ="";

     public function __construct($viewName)
    {
    	 $file = SERVER_ROOT . 'view/' . strtolower($viewName) . '.php';

    	 if (file_exists($file))
    	 {
    	 	 $this->render = $file;
    	 	 $this->selectedItems = explode("_", $viewName);
    	 }
    	 $file = SERVER_ROOT . 'css/' . strtolower($viewName) . '.css';
         if (file_exists($file))
         {
            $this->style = SITE_ROOT . 'css/' . strtolower($viewName) . '.css';;
         }
    }


    public function assign($variable , $value)
    {
        $this->data[$variable] = $value;
    }

    public function __destruct()
    {
        $this->data['render'] = $this->render;
        $this->data['selectedItems'] = $this->selectedItems;
        $this->data['style'] = $this->style;
        $viewData = $this->data;
        include(SERVER_ROOT . 'view/page_main.php');
    }  

   /* public function singup($result)
    {
        $this->result = $result;
        $viewResult=$this->result;
    } */
}
?>

