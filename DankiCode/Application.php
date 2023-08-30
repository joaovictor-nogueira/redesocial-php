<?php 
    namespace DankiCode;

    class Application
    {
        private $controller;

        private function setApp(){

            $loadName = 'DankiCode\controllers\\';
            $url = explode('/',$_GET['url']);

            if($url[0] == ''){
                $loadName.='home';
            }else{
                $loadName.=ucfirst(strtolower($url[0]));
            }

            $loadName.='Controller';

            $this->controller = new $loadName();
        }

        public function run(){
            $this->setApp();
            $this->controller->index();
            
        }
    }

?>