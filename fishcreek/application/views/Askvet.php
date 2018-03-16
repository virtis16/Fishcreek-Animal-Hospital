<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Connecting to database-->

<html>
    <head>

        <link rel="stylesheet" type="text/css" href="fishcreek.css"/>
        <title>Fish Creek Animal Hospital</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
      <div id="wrapper">
      
        <div class="" >
        
          <h1  class="mainheading"><strong>Fish Creek Animal Hospital</strong></h1></div>
        <table valign="top" style="float:left;">
          <tr>
            <td class="td_start" valign="top" width="140" height="200">
            <div><nav class="links_section"><a class="links" href="IndexController">Home</a>
             <a class = "links" href="ServicesController" >Services</a><br>
            <a class = "links" href="AskvetController" >Ask the Vet</a><br>
            <a class = "links" href="SubscribeController" >Subscribe</a><br>
            <a class = "links" href="ContactController" >Contact</a><br>
        </nav>
      </div>
    </td>
</tr>
</table>
<table valign="top">
    <td>
        <div>
          <p class="contact_us"><a class="contact" href="ContactController"><strong><u>Contact</u></strong></a> us if you have a question that you would like answered here.</p>
            <p class="contact_us1">
            	<?php

                    if ($result!=NULL) {
                        $data = array();
                        ////Fetching data from AskVetController
                        foreach ($result as $faqs) {
                            $data[] = $faqs;
                            echo '<ul><li><p class="contact_us1"><b>'.$faqs->question.'</b></p><br/></li><p class="contact_us2">'.$faqs->answer.'</p></ul>';
                        }
                       
                      }   
                ?>  
             
        </div>
         
      <div>
          <footer>
          <p class="footer">Copyright &copy; 2016 Fish Creek Animal Hospital<br>
              <font color = "blue"><u><i><a href="mailto:virtibipin.sanghavi@mavs.uta.edu">Virti@Sanghavi.com</a></i></u></font></p>
          </footer>
         </div> 
       </td>
     </tr>
   </table>
  </div><!-- End of Div id = "wrapper" -->
  </body>
</html>
