<?php 

    namespace DankiCode\views;

    class MainView{
        public static function render($filename){
            include('pages/'.$filename.'.php');
        }
    }

?>