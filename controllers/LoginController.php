<?php

    namespace Controllers;
    use MVC\Router;
    use Model\Admin;

    class LoginController{

        public static function login(Router $router){

            $errores = [];

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $auth = new Admin($_POST);

                $errores = $auth->validar();

                if(empty($errores)){
                    //Verificar si el usuario existe
                    $resultado = $auth->existeUsuario();

                    if(!$resultado){
                        //Mensaje de error al loguearse
                        $errores = Admin::getErrores();
                    }else{
                        //Verificar la contraseña
                        $autenticado = $auth->comprobarPassword($resultado);

                        if($autenticado){
                            //Autenticar al usuario
                            $auth->autenticar();
                            
                        }else{
                            //mensaje de error en contraseña
                            $errores = Admin::getErrores();
                        }
                    }
                }
            }
            
            $router->render('auth/login', [
                'errores' => $errores
            ]);
        }


        public static function logout(){
            session_start();

            $_SESSION = [];

            header('location: /');
        }
    }

?>