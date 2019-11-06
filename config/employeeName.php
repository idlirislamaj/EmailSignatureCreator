<?php

    /////// FUNCTION RETURN FULL NAMES FROM EMPLOYEES //////////////
    function fillNameDropdown($xml){
        $form = "";
        foreach($xml->employees->employee as $number){
            $displayName = $number->field[0];
            $form .= "<option value='$displayName'>$displayName</option>";
        }
        return $form;
    }
?>