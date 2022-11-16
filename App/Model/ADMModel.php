<?php

namespace App\Model;

use App\DAO\ADMDAO;

class ADMModel extends Model
{
    public $id, $email_adm, $senha_adm;


   

 
    public function save()
    {
        $dao = new ADMDAO(); 


        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }

    public function getAllRows()
    {      

        $dao = new ADMDAO();

        $this->rows = $dao->getAllRows();
    }

    
    public function getById(int $id)
    {
        $dao = new ADMDAO();

        $obj = $dao->getById($id); 

      
        return ($obj) ? $obj : new ADMModel(); 
    }



}
