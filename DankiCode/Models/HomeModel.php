<?php 

    namespace DankiCode\Models;

    class HomeModel{

        public static function postFeed($post){
            $pdo = \DankiCode\MySql::connect();
            $post = strip_tags($post);
            /* todo: sub texto img pela tag
            
            
            */
            $postFeed = $pdo->prepare("INSERT INTO `posts` VALUES (null,?,?,?)");
            $postFeed->execute(array($_SESSION['id'],$post,date('Y-m-d H:i:s',time())));

            $atualizaUsuario = $pdo->prepare("UPDATE usuarios SET ultimo_post = ? WHERE id = ?");
            $atualizaUsuario->execute(array(date('Y-m-d H:i:s',time()),$_SESSION['id']));
        }

    }