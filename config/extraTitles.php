<?php
    ////// EXTRA TITLES ARRAY AND FUNCTION ///////////////
    $extra_titles = array(
        ' Microsoft MVP',
        ' Microsoft Certified Master',
        ' Microsoft Certified Solutions Master',
        ' SharePoint PnP Core Team'
        );

        function fillTitleDropdown($extra_titles){
            $currentTitle = "";
            foreach ($extra_titles as $title) {
                $selected_Title = $title;
                $currentTitle .= "<option value='$selected_Title'>$selected_Title</option>";
            }
            return $currentTitle;
        }

?>