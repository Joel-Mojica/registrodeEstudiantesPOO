<?php

<<<<<<< HEAD
//Creo lista de carreras que se puede seleccionar
$carreras = [1 =>"Redes",2 =>"Software",3 =>"Multimedia",4 =>"Mecatronica",5 =>"Seguridad Informatica"];

//Aqui uso su mismo metodo de incremento, trate de hacerlo de otra forma y no pude
function getLastElement($list){
    $countList = count($list);
    $lastElement = $list[$countList - 1];
    return $lastElement;
}

//obtener propiedad del id array
function getCompanyName($carreraId){
    return $GLOBALS['carreras'][$carreraId];
}

//Funcion para el get metodo usado por el profesor(no lo entendi mucho)
function searchProperty($list,$property,$value){
    $filter = [];

    foreach($list as $item){
        if($item[$property]== $value){
            array_push($filter,$item);
        }
    }
    return $filter;
}

function getIndexElement($list,$property,$value){
    $index = 0;

    foreach($list as $key => $item){
        if($item[$property]== $value){
            $index = $key;
        }
    }
    return $index;
=======
class Utilities{
  //Creo lista de carreras que se puede seleccionar
 public $carreras = [1 =>"Redes",2 =>"Software",3 =>"Multimedia",4 =>"Mecatronica",5 =>"Seguridad Informatica"];

            //Aqui uso su mismo metodo de incremento, trate de hacerlo de otra forma y no pude
             public function getLastElement($list){
                $countList = count($list);
                $lastElement = $list[$countList - 1];
                return $lastElement;
            }

                //Funcion para el get metodo usado por el profesor(no lo entendi mucho)
                 public function searchProperty($list,$property,$value){
                    $filter = [];

                            foreach($list as $item){
                                if($item->$property == $value){
                                    array_push($filter, $item);
                                }
                            }
                            return $filter;
                        }

                            public function GetCookieTime(){
                                return time() + 60 * 60 * 24 * 30;
                            }

                    public function getIndexElement($list,$property,$value){
                    $index = 0;

            foreach($list as $key => $item){
                if($item->$property == $value){
                    $index = $key;
                }
            }
            return $index;
        }  

    public function uploadImage($directory,$name,$tmpFIle,$type,$size){
        $isSuccess = false;
        
        if(($type == "image/gif") || ($type == "image/jpeg") || ($type == "image/png") || ($type == "image/jpg") || ($type == "image/JPG") || ($type== "image/pjpeg") && ($size < 1000000)){
            
            if(!file_exists($directory)){

                mkdir($directory,0777,true);

                if(file_exists($directory)){
                    
                    $this->uploadFile($directory . $name,$tmpFIle);
                    $isSuccess = true;
                }
            }else{
                $this->uploadFile($name,$tmpFIle);
                $isSuccess = true;
        }

        }else{
            $isSuccess = false;
        }

        return $isSuccess;
    }
        
        private function uploadFile($name,$tmpFIle){
            if(file_exists($name)){
            unlink($name);
        }
        move_uploaded_file($tmpFIle,$name);                                                                                                         
    }
>>>>>>> 39ea508... proyecto funcional registro de estudiantes POO
}

?>