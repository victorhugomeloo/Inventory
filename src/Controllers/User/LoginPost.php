<?php
namespace Victor\Inventory\Controllers\User;

use Victor\Inventory\Helpers\Message\Message;
use Victor\Inventory\Models\Users\Users;

class LoginPost
{
    protected Message $message;

    protected Users $users;

    public function __construct()
    {
        $this->users = new Users();
        $this->message = new Message();
    }
    public function execute($data)
    {
        $success = true;
        if (!isset($data['email']) || !isset($data['password'])){
            $success = false;
            $this->message->setMessageError("Você precisa preencher todos os campos");
        }

        if (empty($data['email']) || empty($data['password']))
        {
            $success = false;
            $this->message->setMessageError("Os campos devem conter valores preenchido");
        }

        if(!$success) {
            header('location: /login');
            return;
        }

        $user = $this->users->findOne([
            "email" => $data['email']
        ]);

        if(!$user) {
            $this->message->setMessageError("Usuário não encontrado");
            header('location: /login');
            return;
        }
        
        if(!password_verify($data['password'], $user->password)) {
            $this->message->setMessageError("Usuario ou senha invalidos");
            header('location: /login');
            return;
        }

        header('location: /panel/Inventory/');
    }
}