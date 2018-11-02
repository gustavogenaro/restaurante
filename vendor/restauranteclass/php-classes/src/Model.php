<?php

namespace Restaurante;

#faz o get e set de forma dinamica

class Model{

    private $values = []; 


    public function __call($name, $args)
    {
                                                                                  //-------------------------------------//  
        $method = substr($name, 0, 3); #para saber se é um get ou set            // ex: string(3) "set" string(2) "id"  //
        $fieldName = substr($name, 3, strlen($name)); #nome do campo chamado    //-------------------------------------// 

        switch ($method) {

            case 'get':
                return $this->values[$fieldName];
                break;
            
           case 'set':
                $this->values[$fieldName] = $args[0];
           break;
        }
       

    }

    public function setData($data = array()){ #faz um foreach de todos os dados que precisam de get e set

        foreach ($data as $key => $value) { 
            $this->{"set".$key}($value);
        }

    }

    public function getValues(){

        return $this->values; 
    }
       
    
   

}

?>

