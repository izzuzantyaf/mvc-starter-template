<?php

class Home extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Welcome"
        ];
        $this->view("templates/header", $data);
        $this->view(strtolower(get_class($this)) . "/index");
        $this->view("templates/footer");
        $this->view("templates/js");
        $this->view("templates/close_tag");
    }
}
