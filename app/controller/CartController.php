<?php


namespace App\Controller;


use Core\Controller;

class CartController extends Controller
{
    public function orderRoom(){
        if(!isset($_SESSION['user.login'])){
            header("Location:./dang-nhap");
        }


        echo "exit";
    }
}