<?php
class finder{
    private $string_from_form; 
    public $answer;
    private function gettext(string $string){
       //This function takes string from form
       $this -> string_from_form = $string;
    }
    private function split(){
        //This function makes array from user's string
        $array = []; $digit = ''; $this -> string_from_form .= ' ';
        for ($i = 0; $i < strlen($this -> string_from_form); $i++){
            if ($this ->string_from_form[$i] != ' '){         
                $digit = $digit.$this -> string_from_form[$i];}
            else{
                array_push($array, $digit);
                $digit = '';}
        }
        return $array;
    }
    function find_dublicate($data_from_user){
        //This function searches for dublicates
        $this -> gettext($data_from_user);
        $array_of_digits = $this -> split();
        for($i = 0; $i < count($array_of_digits); $i++){
            for($j = 0; $j <= count($array_of_digits); $j++){
                if ($j != $i){
                    if ($array_of_digits[$i] == $array_of_digits[$j]){
                        $this -> answer = $array_of_digits[$i];
                        break 2;
                    }
    
                }
            }   
        }
    }

}
?>