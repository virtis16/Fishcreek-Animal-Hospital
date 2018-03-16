
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fishcreek.css"/>
        <title>Fish Creek Animal Hospital</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
      <div id="wrapper">
        <div class="mainheading"><h1>Fish Creek Animal Hospital</h1></div>
          <table valign="left" style="float:left">
          <tr>
            <td class="td_start" valign="top" width="140" height="220">
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
  <tr>
    <td>
                <ul class="bulletpoints">
                <?php
        
                if ($result!=NULL) {
                        $data = array();
                        
                        foreach ($result as $services) {
                            //Fetching data from ServicesController
                            $data[] = $services;
                            echo '<li><h3 class="captions1">'.$services->servicename.'</h3><p class="content1" >'.$services->description.'</p></li><br><br>';
                          
                        }
                       
                      }
                ?>  
              </ul>
          </div>
          <div>
          <footer>

          <p class="footer">Copyright &copy; 2016 Fish Creek Animal Hospital<br>
              <font color = "blue"><u><a href="mailto:virtibipin.sanghavi@mavs.uta.edu">Virti@Sanghavi.com</a></u></font></p>
              </footer>
            </td>
         </tr>
       </table>
         </div> 
    </body>
</html>
