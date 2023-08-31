<?php 

    namespace DankiCode\controllers;

    class HomeController{

        public function index(){

            if(isset($_SESSION['login'])){
                /* Renderiza a home do usuário */
                \DankiCode\Views\MainView::render('home');
            }else{
                /* Renderizar para criar conta */

                if(isset($_POST['login'])){
                    $login = $_POST['email'];
                    $senha = $_POST['senha'];

                    /* Verificar no banco de dados. */

                    $verifica = \DankiCode\MySql::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
                    $verifica->execute(array($login));

                    if($verifica->rowCount() == 0){
                        /* Não existe usuario */
                        \DankiCode\Utilidades::alerta('Não Existe nenhum usuario com esse e-mail...');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                    }else{
                        $dados = $verifica->fetch();
                        $senhaBanco = $dados['senha'];
                        if(\DankiCode\Bcrypt::check($senha,$senhaBanco)){
                         /* usuario logado com sucesso */   
                            $_SESSION['login'] = $dados['email'];
                            \DankiCode\Utilidades::alerta('Logado com Sucesso!');
                            \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                        }else{
                            \DankiCode\Utilidades::alerta('Senha incorreta...');
                            \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                        }
                    }
                }

                \DankiCode\Views\MainView::render('login');
            }

        }
    }

?>