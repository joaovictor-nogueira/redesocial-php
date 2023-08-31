<?php 
    namespace DankiCode;

    class Application
    {
        private $controller;

        private function setApp(){

            $loadName = 'DankiCode\controllers\\';
            $url = explode('/',@$_GET['url']);

            if($url[0] == ''){
                $loadName.='home';
            }else{
                $loadName.=ucfirst(strtolower($url[0]));
            }

            $loadName.='Controller';

            if(file_exists($loadName.'.php')){
                $this->controller = new $loadName();
            }else{
                include('Views/pages/404.php');
                die();
                /* die('Não existe a página solicitada!'); */
                /* PODERIA apenas dar um DIE se quisesse */
            }

            $this->controller = new $loadName();

        }

        public function run(){
            $this->setApp();
            $this->controller->index();
            
        }
    }

?>