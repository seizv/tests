 <?php

class Controller{

    protected $data;

    protected $model;

    protected $params;

    /**
     * @return mixed
     */
    public function getData(){
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getModel(){
        return $this->model;
    }

    public function __construct($data = array()){
        $this->data = $data;
    }

}