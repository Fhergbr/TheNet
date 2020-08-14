<?php
namespace App\Controller;

class PagesController extends AppController
{

    public function home()
    {
        $title = "Inicio";
        $this->set(['title'=>$title]);
    }
}
