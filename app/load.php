<?php
   include '../config/dataEmployee.php';
   include '../config/extraTitles.php';
   ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style5.css" />
        <link rel="stylesheet" type="text/css" href="css/tabs.css" />
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6" style="background: #eaeaea; font-size: 13px;">
                    <table id="tData" class="table table-striped table-responsive" style="color: #00263D; margin-bottom: 0px;height: 435px;">
                        <tr style="background-color:#039BE5; color:white;">
                            <td style="width: 150px">Display Name</td>
                            <td>
                                <?php echo $displayName ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>
                                <?php echo $firstName ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Last name</td>
                            <td>
                                <?php echo $lastName ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Job Title</td>
                            <td class="edit" id="jobTitle">
                                <?php echo $jobTitle ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle;">Certifications</td>
                            <td class="edit2">
                                <label><input type="checkbox" value="Microsoft MVP" name="cert" class="chkbx" disabled>  Microsoft MVP</label>
                                <label><input type="checkbox" value="Microsoft Certified Master" name="cert" class="chkbx" disabled>  Microsoft Certified Master</label>
                                <label><input type="checkbox" value="Microsoft Certified Solutions Master" name="cert" class="chkbx" disabled>  Microsoft Certified Solutions Master</label>
                                <label><input type="checkbox" value="SharePoint PnP Core Team" name="cert" class="chkbx" disabled>  SharePoint PnP Core Team</label>
                                <input type="text" placeholder="Insert certification manually" class="chkbx" id="additionalCert" style="width: 200px;" disabled>
                            </td>                         
                        </tr>
                        <tr>
                            <td>Work Phone</td>
                            <td class="edit" id="workPhone">
                                <?php echo $workPhone ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Mobile Phone</td>
                            <td class="edit" id="mobilePhone"><?php echo $mobilePhone?></td>
                        </tr>
                        <tr>
                            <td>Work Email</td>
                            <td class="edit" id="workEmail">
                                <?php echo $workEmail ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Use Personal Links</td>
                            <td class="edit2">
                            <label><input class="chkbx" type="checkbox" name="personalLinks" value="Yes" disabled />  Linkedin & Twitter </label>
                            </td>
                        </tr>
                    </table>
                    <button id="edit" class="fill btn" style="background-color: #C7CFD3;">Edit</button>
                    <button id="cancel" class="fill btn" style="background-color: #C7CFD3;display: none">Cancel</button>
                    <button id="add_img" class="fill btn" style="background-color: #C7CFD3;  display: none">Add Image</button>
                    <button id="save" class="fill btn" type ="submit" style="background-color: #C7CFD3;  display: none">Save</button>
                    
                </div>

                <!-- SIGNATURE STANDARD PREVIEW ------------->
                <div class="col-xs-6">

                    <ul class="tabs" style="margin-left: 249px; padding-right: 0;">
                        <li class="tab-link current" data-tab="tab-1">Standard</li>
                        <li class="tab-link" data-tab="tab-2">Compact</li>
                    </ul>
                    <!-- TAB CODE -->
                    <div id="tab-1" class="tab-content current">
                        <div id="signature" class="animate-right">
                            <div id="signature_table">
                                <table style=" color: #00263D; font-family: Tahoma, Geneva, sans-serif;">
                                    <tbody>
                                        <tr style="text-align: center;">
                                            <td style="display: none" id="profile_img">
                                                <img class="foto_id" src="<?php echo $photo_url; ?>" width="160px" height="160px" />
                                            </td>
                                            <td>
                                                <table style="text-align: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding: 0;">
                                                                <div style="color : #039BE5;  font-size: 12px; font-weight: bold; font-family: Tahoma, Geneva, sans-serif; ">
                                                                    <?php echo $firstName . " " . $lastName?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0;">
                                                                <div id="jobTitleSig" style="color : #00263D;  font-size: 11px; font-family: Tahoma, Geneva, sans-serif;">
                                                                    <?php echo $jobTitle?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr id="et_row">
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0;">
                                                                <div id="workEmailSig" style="color : #039BE5; font-size: 11px; font-weight: bold; font-family: Tahoma, Geneva, sans-serif; ">
                                                                    <?php echo $workEmail;?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0; font-size: 11px; color : #00263D; font-family: Tahoma, Geneva, sans-serif;">
                                                                    
                                                                <span class="work_text">P: </span>  <span id="workPhoneSig"> <?php echo $workPhone ?></span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="padding: 0;font-size: 11px; color : #00263D; font-family: Tahoma, Geneva, sans-serif;">
                        
                                                                    
                                                                <span class="m_text">M: </span> <span id="mobilePhoneSig"> <?php echo $mobilePhone ?></span>

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                            </td>
                                        </tr>
                                        </table>
                                    </tbody>
                                </table>
                            </div>
                            <!--end table div-->
                        </div>
                        <!--end signature div-->

                        <!-- Logo and social div -->
                        <table class="logo_id" id="social_table" style=" margin_left: 0; margin-top:10px; font-family: Tahoma, Geneva, sans-serif;">
                            <tr>
                                <td>
                                    <img class="logo_id" src="resources/images/logo/logo.png" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 40px;">
                                    <a style="color : #039BE5; font-size: 13.5px; font-weight: bold; text-decoration:none; font-family: Tahoma, Geneva, sans-serif;" href="#">www.sample.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="social_logos" style="padding-left: 40px;">
                                    <a id="linkedin" href="#"> <img style="width:25px; height:25px; " src="resources/images/logo/linkedin.png" /></a>&nbsp;
                                    <a id="twitter" href="#"><img style="width:25px; height:25px;" src="resources/images/logo/twitter.png" /></a>&nbsp;
                                    <a href="#"><img style="width:25px; height:25px;" src="resources/images/logo/facebook.png" /></a>&nbsp;
                                    <a href="#"><img style="width:25px; height:25px" src="resources/images/logo/You-Tube.png" /></a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    



                <!-- TAB COMPACT SIGNATURE   -->

                <div id="tab-2" class="tab-content">
                    <!-- TAB Compact Start Div -->
                    <table style="text-align: left; border-spacing: 0;">
                        <tbody style="line-height: initial;">
                            <tr>
                                <td style="padding: 0;">
                                    <div style="color : #039BE5;  font-size: 11px; font-weight: bold; font-family: Tahoma, Geneva, sans-serif; ">
                                        <?php echo $firstName . " " . $lastName?>
                                    </div>
                                </td>
                            </tr>
                            <tr style="line-height: 13px">
                                <td style="padding: 0;">
                                    <div> <span class="titlespan" style="color : #00263D;  font-size: 11px; font-family: Tahoma, Geneva, sans-serif;"> <?php echo $jobTitle?> </span>
                                        <span class="et_place" style="font-size: 10px; color: #00263D; font-family: Tahoma, Geneva, sans-serif;">
                              
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0;">
                                    <div id="" style="color : #00263D;  font-size: 10px; font-family: Tahoma, Geneva, sans-serif;">
                                        <span style="font-weight: bold;">Sample </span> 
                                        <span class="work_text">| P: </span><span class="workPhoneSig"> <?php echo $workPhone ?> </span>
                                        <span class="m_text">| M: </span><span class="mobilePhoneSig"> <?php echo $mobilePhone ?></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0;">    
                                    <div id="" style="color : #039BE5; font-weight:bold; font-size: 10px; font-family: Tahoma, Geneva, sans-serif;">
                                        <span class="workEmail"> 
                        <?php echo $workEmail;?>  
                    </span>
                                </td>
                            </tr>
                        </tbody>
                        </td>
                        </tr>
                    </table>
                    </div>
                    <!-- TAB Compact End Div -->



                </div>
                                    <!--Buttons Area-->
                     <div id="buttons" >
                        <button style="background-color: #C7CFD3;" class="fill btn" id="download" onclick="download('<?php echo $firstName ?>.htm', $('#' + tab_id).html())">Download</button>
                        <button style="background-color: #C7CFD3;" class="fill btn" id="copyToClipboardBtn" type="button">Copy HTML</button>
                    </div>
                </div> <!-- End Row Div -->
               
            </div>        <!--END CONTAINER DIV -->

           
        </div>

        <script>
    var tab_id = "tab-1";
    $('ul.tabs li').click(function () {
        tab_id = $(this).attr('data-tab');
        
        })

        // CHECKBOX FOR PERSONAL LINKS

function check_links() {
    $.each($("input[name='personalLinks']:checked"), function () {
        $("#linkedin").attr('href', '<?php echo $personalLinkedin; ?>');
        $("#twitter").attr('href', '<?php echo $personalTwitter; ?>');

    })
}

</script>

 
    </body>

    </html>
