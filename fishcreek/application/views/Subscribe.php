<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$con_database = mysqli_connect("localhost","root","","vet");
// Check connection to the database
      if (mysqli_connect_errno())
      {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
?>

        
<html>
    <head>
      <style>
      /* The message box is shown when the user clicks on the password field */
.error {color: #FF0000;}

</style>
        <link rel="stylesheet" type="text/css" href="fishcreek.css"/>
        <title>Fish Creek Animal Hospital</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    
    <body>
    
  
      <div id="wrapper">
        <div><header><h1 class="mainheading"><b>Fish Creek Animal Hospital</b></h1></header></div>
          <table valign="top" style="float:left">
          <tr>
            <td class="td_start" valign="top" width="140" height="200" >
            <div><nav class="links_section"><a class="home" href="IndexController" >Home</a>
            <a class="home" href="ServicesController" >Services</a><br>
            <a class = "links" href="AskvetController">Ask the Vet</a><br>
            <a class="links" href="SubscribeController" >Subscribe</a><br>
          <a class="links" href="ContactController">Contact</a><br>
        </nav>
      </div>
    </td>
    </tr>
</table>
<table valign="top">
    <td>
   <!--Contact Form-->
  <div>
  <h3><p class="contact_heading"><strong>Subscribe Fish Creek</strong></p></h3>
  <p><span class="error"></span></p>
  <p class = "contact_us_required">
  Required fields are marked with an asterisk (*).</p>
<!-- Code of Code igniter starts here -->
<form method="post" name="subscribe_form">
  <?php echo form_open('SubscribeController'); ?>
      <table>
        <tr>
          <?php 
          //Success Message Shown if data inserted successfully
                if (isset($success_subscription)) { ?>
                <h3 style="color:green;"><?php echo $success_subscription;?></h3><br>
                <?php }
                ?>
          <td style ="color : #460da5;"><?php echo form_label('* Client Full Name:'); ?></td>
          <td><?php echo form_input(array('id' => 'name', 'type'=>'text','name' => 'name','value'=>set_value('name'))); ?></td>
          <td><span style="color:red; font-size: 10px;"><?php echo form_error('name'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td style ="color : #460da5;"><?php echo form_label('* Address:'); ?></td>
          <td><?php echo form_textarea(array('id' => 'address', 'name' => 'address','value'=>set_value('address'))); ?></td>
          <td><span style="color:red; font-size: 10px;"><?php echo form_error('address'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td style ="color : #460da5;"><?php echo form_label('* E-mail:'); ?></td>
          <td><?php echo form_input(array('id' => 'email', 'type'=>'text', 'name' => 'email','value'=>set_value('email'))); ?></td>
          <td><span style="color:red; font-size: 10px;"><?php echo form_error('email'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td style ="color : #460da5;"><?php echo form_label('* Phone:'); ?></td>
          <td><?php echo form_input(array('id' => 'phone', 'name' => 'phone','value'=>set_value('phone'))); ?></td>
          <td><span style="color:red; font-size: 10px;"><?php echo form_error('phone'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td style ="color : #460da5;"><?php echo form_label('* Password:'); ?></td>
          <td><?php echo form_password(array('id' => 'password', 'type'=>'password','name' => 'password', 'value'=>set_value('password'))); ?></td>
          <td><span style="color:red; font-size: 10px;"><?php echo form_error('password'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td style ="color : #460da5;"><?php echo form_label('* Type of Service:'); ?></td>
          <td><span>
          <?php 
          if($result!=NULL){
                   echo "<select name='service_name'>";    
                 foreach($result as $row)
                { 
                  echo '<option value="'.$row->serviceid.'">'.$row->servicename.'</option>';
                }
                
                echo "</select>"; echo "<br>"; echo "<br>";

                }

          ?></span>
          </td>
          <td><span style="color:red; font-size: 10px;"><?php echo form_error('service_name'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td style ="color : #460da5;"><?php echo form_label('* Pet Name:'); ?></td>
          <td><span>

          <?php 
          //Retrieval for Pet Name
        
          if($petname!=NULL){
               echo "<select name='petname'>";    
             foreach($petname as $row)
            { 
              echo '<option value="'.$row->petid.'">'.$row->petname.'</option>';
            }
            
            echo "</select>";

            }

          
          ?></span>
          </td>
          <td><span style="color:red; font-size: 15px;"><?php echo form_error('petname'); ?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
          <td></td><td><?php echo form_submit(array('id' => 'submit', 'name' =>'submit', 'value' => 'Send Now')); ?></td></tr>
      </table>
    </form>
    <!-- Code of Code igniter ends here-->

<div>
    <footer>
          <p class="footer">Copyright &copy; 2016 Fish Creek Animal Hospital<br>
              <font color = "blue"><u><i><a href="mailto:virtibipin.sanghavi@mavs.uta.edu">Virti@Sanghavi.com</a></i></u></font></p>
          </footer>
         </div> 
       </td>
     </tr>
   </table>
  </div>
  </div>
  </body>
 </html>

