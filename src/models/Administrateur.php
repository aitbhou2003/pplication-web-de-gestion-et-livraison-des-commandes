<?
namespace Src\Models;
class Administrateur extends User{
    public function __construct($email, $password, $phone){
        parent::__construct($email,$password,$phone);
    }

    public function manageUsersAccounts(){

    }

    public function seeStats(){
        
    }
}