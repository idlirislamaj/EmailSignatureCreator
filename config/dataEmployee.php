<?php   
require '../database/connection.php';
////////////////////////////////////////////////////
    // IF DRODOWN IS TRIGGERED SHOW EMPLOYEE SELECTED//
    ////////////////////////////////////////////////////
    $employees = [];
    if(isset($_POST["dropdown"])){

        $dd_value = $_POST['dropdown'];
        if($dd_value != "1"){
            $path = $xml->employees->employee;
            $arr_length = count($path);
                for($i =0; $i < $arr_length; $i++){
                    if($dd_value == $path[$i]->field[0]){
                        $displayName = $path[$i]->field[0];
                        $firstName = $path[$i]->field[1];
                        $lastName = $path[$i]->field[2];
                        $preferredName = $path[$i]->field[3];
                        $Gender = $path[$i]->field[4];
                        $jobTitle = $path[$i]->field[5];
                        $workPhone = $path[$i]->field[6];
                        $mobilePhone = $path[$i]->field[7];
                        $workEmail = $path[$i]->field[8];
                        $department = $path[$i]->field[9];
                        $location = $path[$i]->field[10];
                        $division = $path[$i]->field[11];
                        $skypeUsername = $path[$i]->field[12];
                        $photo_uploaded = $path[$i]->field[16];
                        $photo_url = $path[$i]->field[17];

                        // CHECKING IF LINKEDIN AND TWITTER HAVE LINKS OTHERWISE USE DEFAULT 
                        if(empty($path[$i]->field[13])){
                            $companyLinkedin = "https://www.linkedin.com";
                        }else{
                            $personalLinkedin = $path[$i]->field[13];
                        }
                        $personalTwitter = $path[$i]->field[14];
                        $stripped = preg_replace('/\s/', '', $personalTwitter);
                        
                        if(empty($stripped)){

                            $personalTwitter = "https://twitter.com";
                            
                        }else{

                            // Main function 
                            if(startsWith($path[$i]->field[14],"@")) 
                            $personalTwitter = "https://twitter.com/" . $path[$i]->field[14]; // TRUE
                            
                        }

                    }// end if

                }//end for

        } 

    }// end if

    function startsWith ($string, $startString){ 
                                
        $len = strlen($startString); 
        return (substr($string, 0, $len) === $startString); 
    } 

    
   

    


?>