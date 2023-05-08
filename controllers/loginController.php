<?php
class loginController extends controller{

    public function __construct()
    {
        $Usuarios = new Usuarios();
        if ($Usuarios->isLogged() == true) {
            header("Location: ".BASE_URL);
        }
    }
    
    public function index(){

        $dados = array();

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);

            $Usuarios = new Usuarios();

            if ($Usuarios->doLogin($email, $password)) {
                header("Location: ".BASE_URL);
                exit;
            } else {
                $dados['error:'] = "E-mail e/ou senha errados!";
            }
        }

        $this->loadView('login', $dados);
    }

    public function logout(){

        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Usuarios->logout();
        header("Location: ".BASE_URL);
    }
}