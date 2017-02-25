<?php

class PagesController extends Controller{

    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Page();
    }

    public function index(){
        if (isset($_GET['sort'])){
            if ($_GET['sort'] == 'byname'){
                $this->data['info'] = $this->model->sortBy('name');
            }elseif ($_GET['sort'] == 'byemail'){
                $this->data['info'] = $this->model->sortBy('email');
            }elseif ($_GET['sort'] == 'bystatus'){
                $this->data['info'] = $this->model->sortBy('is_ready');
            }
        } else {
            $this->data['info'] = $this->model->getAll();
        }
    }

    public function admin_index(){
        $this->data['info'] = $this->model->getAll();

        if ( $_POST ){
            $this->model = new Task();
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->createTask($_POST, null, $id);
            var_dump($result);
            if ( $result ){
                Session::setFlash('Page was saved.');
                Router::redirect('/admin/');
            } else {
                Session::setFlash('Error update.');
            }
        }
    }
}