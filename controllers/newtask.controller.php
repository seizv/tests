<?php

class NewtaskController extends Controller
{

    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Task();
    }

    public function index()
    {
        if ($_POST) {
            $post = $_POST;
            if ($_FILES['foto']['name']) {
                $name = explode('.', basename($_FILES['foto']['name']));
                $new_name = md5($name[0]);
                $upload_file = DS . Config::get('upload_dir') . $new_name . '.' . array_pop($name);
                move_uploaded_file($_FILES["foto"]["tmp_name"], ROOT . $upload_file);
                if ($post['name'] && $post['email'] && $post['task']) {
                    $result = $this->model->createTask($post, $upload_file);
                    if ($result) {
                        Session::setFlash('Task was created.');
                    } else {
                        Session::setFlash('Error.');
                    }
                }
            }

        }

    }
}