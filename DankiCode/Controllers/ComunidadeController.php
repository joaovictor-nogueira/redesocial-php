<?php 

    namespace DankiCode\controllers;

    class ComunidadeController{

        public function index(){
            if(isset($_SESSION['login'])){

                if(isset($_GET['solicitarAmizade'])){
                    $idPara = (int) $_GET['solicitarAmizade'];
                    if(\DankiCode\Models\UsuariosModel::solicitarAmizade($idPara)){
                        \DankiCode\Utilidades::alerta('Amizade Solicitada com Sucesso!');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH.'comunidade');
                    }else{
                        \DankiCode\Utilidades::alerta('Ocorreu um erro ao solicitar amizade...');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH.'comunidade');
                    }
                }

            \DankiCode\views\MainView::render('comunidade');
            }else{
                \DankiCode\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }

?>