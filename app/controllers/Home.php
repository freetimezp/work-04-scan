<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        echo "this is index method" . "<br>";

        $user = new User();
        $row = $user->first(['name' => 'Evgen']);
        //$row = $user->first(['name' => 'Evgen', 'email' => 'email@gmail.com']);
        //show($user->findAll());
        if ($row) {
            echo "user found";
        } else {
            echo "User not found";
        }

        //$user->insert(['name' => 'Slavik221', 'age' => 12]);

        $this->view('home');
    }

    public function edit($a = '', $b = '', $c = '')
    {
        echo "this is edit method" . "<br>";

        $this->view('home');
    }

    public function add($a = '', $b = '', $c = '')
    {
        echo "this is add method" . "<br>";

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
            $data = json_decode(file_get_contents('php://input'), true);
            show($data);
        } else {
            echo 123;
        }

        $this->view('home');
    }
}
