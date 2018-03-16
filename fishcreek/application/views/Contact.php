<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fishcreek.css"/>
        <title>Fish Creek Animal Hospital</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        .error {color: #FF0000;}
      </style>
    </head>
        <body>

      <div id="wrapper">
        <div><h1 class="mainheading"><b>Fish Creek Animal Hospital</b></h1></div>
          <table>
          <tr>
            <td class="td_start" valign="top" width="140" height="220">
            <div><nav class="links_section"><a class="home" href="IndexController" >Home</a>
              <!-- Use of URL Helpers -->
             <a class = "links" href="ServicesController" >Services</a><br>
            <a class = "links" href="AskvetController" >Ask the Vet</a><br>
            <a class = "links" href="SubscribeController" >Subscribe</a><br>
            <a class = "links" href="ContactController" >Contact</a><br>
        </nav>
      </div>
    </td>
    <td>
  
  <!--Contact Form-->
	<div>
	<h3><p class="contact_heading"><strong>Contact Fish Creek</strong></p></h3>
	<br/>
	<p class = "contact_us_required">
	Required fields are marked with an asterisk (*).</p>
  <form method="post" name="contact_form">
    <?php
    //Form helpers
      echo form_open('ContactController');?>
  <table class="contact_form">
    <tr>
      <?php 
                if (isset($success)) { ?>
                <h3 style="color:green;"><?php echo $success;?></h3><br>
                <?php }
                ?>
      <td>
	        <p class="field_headings"> <?php echo form_label('* Name:', 'name');?></p>
      </td>
      <td>
         <?php $name = array('name' => 'name','id'=> 'name','type' => 'text');
         echo form_input($name);?>
          
          <?php echo form_error('name'); ?>
       </td>
       </tr>   
	     <tr>
        <td>
        <p class="field_headings"> <?php echo form_label('* E-mail:', 'email');?></p>
      </td>
      <td>
     <?php  $email = array('name'=> 'email','id' => 'email','type' => 'text');
                
                echo form_input($email); ?>
        
        <?php echo form_error('email'); ?>
       </td>
       </tr>
       <tr>
       <td> 
       <p class="field_headings"> <?php echo form_label('* Comments:', 'comments');?></p>
     </td>
       <td>
        <?php $comments = array('name'=> 'comments','id' => 'comments',);
                
        echo form_textarea($comments);
               
        echo form_error('comments'); ?>
        
      </td>
	</tr>
  <tr>
    <td>
    </td>
     <td>
     <p class="sendnow_btn">
     <?php echo form_submit('submit', 'Send Now'); ?>
	</p>
</td>
</tr>
</table>
<?php echo form_close();?>
<!-- </form> -->
	</div>
   </body>

</html>