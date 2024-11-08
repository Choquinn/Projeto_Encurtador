<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;
use Core\helpers;

class DashController extends Controller
{

    public function home(){
        $this->view("index/index");
    }

    public function tweet() {
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            session_start();

            $tweet = $_POST["tweet"];
            $user_id = $_SESSION['user_id'];

            
            $db = Database::connect();

            $stm = $db->prepare("INSERT INTO tweets (content, user_id) VALUES (:tweet, :user_id)");
            
            $stm->bindParam(":tweet", $tweet);
            $stm->bindParam(":user_id", $user_id);

            $stm->execute();
            
            $this->redirect("/dash");
        }

    }

    public function like() {
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            session_start();

            $tweet_id = intval($_POST["tweet_id"]);
            $user_id = $_SESSION['user_id'];

            $db = Database::connect();

            $stm = $db->prepare("INSERT INTO likes (tweet_id, user_id) VALUES (:tweet_id, :user_id)");
            
            $stm->bindParam(":tweet_id", $tweet_id); 
            $stm->bindParam(":user_id", $user_id);

            $stm->execute();
            
            $this->redirect("/dash");
        }

    }
    

}