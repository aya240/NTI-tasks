<?php

class Validator
{
    public function Clean($input)
    {
        return trim(strip_tags(stripslashes($input)));
    }

    public function validation($input, $flag)
    {
        $status = true;

        switch ($flag) {
            //------ required (not empty )---------    
            case 1:
                if (empty($input)) {
                    $status = false;
                }
                break;

            //----------- string only ----------    
            case 2:
                if (!preg_match('/^[a-zA-Z\s]*$/',$input)) {
                    $status = false;
                }
                break;

            //-------- length -------    
            case 3:
                if (strlen($input) < 50) {
                    $status = false;
                }
                break;

          
        }

        return $status;
    }
}

?>