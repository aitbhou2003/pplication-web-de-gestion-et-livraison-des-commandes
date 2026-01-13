<?php
require_once '..\repositories\creatCommandRepositorie.php';
if (!isset($_SESSION)) {
    session_start();
}



class CreatCommandValidation
{
    private CreatCommandRepositorie $creat;

    public function __construct($creat)
    {
        $this->creat = $creat;

    }


    public function creatCommand($userId, $adressDepart, $adressArrive, $phone, $details, $options)
    {
        if (
            $this->creatCommandValidation(
                $adressDepart,
                $adressArrive,
                $phone,
                $details,
                $options
            )
        ) {
            $this->creat->creatCommand(
                $userId,
                $adressDepart,
                $adressArrive,
                $phone,
                $details,
                $options
            );

        }
    }


    private function creatCommandValidation($adressDepart, $adressArrive, $phone, $details, $options)
    {
        $this->validateAdressDepart($adressDepart);
        $this->validateAdressArive($adressArrive);
        $this->validatePhone($phone);
        $this->validateDetails($details);
        $this->validateOption($options);
        return true;
    }


    private function validateAdressDepart($adressDepart)
    {
        if (!preg_match("/^[a-zA-Z0-9',\s]+$/", $adressDepart) or empty($adressDepart)) {
            echo 'invalid adresse';
            return false;
        } else {
            return true;
        }
    }

    private function validateAdressArive($adressArrive)
    {
        if (!preg_match("/^[a-zA-Z0-9',\s]+$/", $adressArrive) or empty($adressArrive)) {
            echo 'invalid adresse';
            return false;
        } else {
            return true;
        }
    }

    private function validatePhone($phone)
    {
        // if (!preg_match('/^\+?[1-9]\d{9,14}$/', $phone) or empty($phone)) {
        //     echo 'invalid phone';
        //     return false;
        // } else {
        //     return true;
        // }

        if(empty($phone)){
            return false;
        }else{
            return true;
        }
    }

    private function validateDetails($details)
    {
        if (empty($details)) {
            echo "empty details";
            return false;
        } else {
            return true;
        }

    }

    private function validateOption($option)
    {
        if (empty($option)) {
            echo "empty option";
            return false;
        } else {
            return true;
        }

    }
}