<!DOCTYPE html> 
<html>

    <head>
        <style>
            /*
            * this is for the message box : logout etc
            */
	    #signature  {
			 position:fixed;
			 bottom:7px;
			 width : 99%;
			 height :4%;
			 align : center;
			 opacity : 0.4;
			 border-color : transparent;
			 border: 0.4px solid;
			 border-radius:10px;
			}
            
            #msg_box{
                   width:30%;
                   height:40%;
                   opacity :1;
                   position:fixed;
                   margin-left:-200px; /* half of width */
                   margin-top:-150px;  /* half of height */
                   top:10%;
                   left:50%;
                                
            }
            
            #reg{
                    text-align: center;
                    width:30%;
                   height:40%;
                   opacity :1;
                   position:fixed;
                   margin-left:-200px; /* half of width */
                   margin-top:-150px;  /* half of height */
                   top:90%;
                   left:50%;
                                
            }
            /*
            * addition 1
            * To ()absolute) center the code
            * find a method to do relative center
            */
            #box{
                   
                   width:30%;
                   height:40%;
                   opacity :1;
                   position:fixed;
                   margin-left:-200px; /* half of width */
                   margin-top:-150px;  /* half of height */
                   top:50%;
                   left:50%;
		   
                }
                
            /*
            * addition 2
            * A background texture
            */
            html{ 
                    background: url('img/bg.jpg') no-repeat center center fixed; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
              /*
               * addition 3
               * Loginbox shadow
              */ 
              #loginbox
              {
                  opacity : 0.7;               
                  box-shadow: 15px 15px 15px #000000;
              }
            
          
           
        </style>
        <title>Quid Pro Quo Clarice!</title> 
    </head>

    <body>
           <table id="box" >
                
                <tr>
                    <td align="center" >
                <center>
                    
                    <!--border:10px solid #EE872A;-->
                    <div id="loginbox"  style="font-family:verdana;background-color:#1E1E23;padding:20px;border-radius:10px;width:350px;">
                        <table id="box2" style="border:0px;width:350">
                            <tr>
                                    
                                <td  id="td" style="color:#ffffff;background-color:#fffff;text-align:center;">
                                    <b><b/>
					<b>The page is under development<br></b>
					<b>Thanks for your visit though!<br></b>
					<b>Cheers :)</b>
          <p>Here for my <a href="blog/" style="color:Gray;">blog</a>?</p>
				    <b></b>
                                </td>
                            
                            </tr>
                
            		</table>
	</table>


			<table style="float:center;border-radius:25px;">
				<div id="signature" style="font-family:verdana;background-color:#1E1E23;text-align:left; float:left;">
				<b style="margin-left : 10px;text-align:left; float:left;font-size:80%;color : #A7A2A7;padding:3px">
					&copy 2015 Don Dennis  </b>
				<b style="margin-right: 10px;text-align:right; float:right;font-size:80%;color : #A7A2A7;padding: 3px">
					donkdennis[at]gmail[dot]com</b>
				
				</div>
			</table>

    </body>
</html> 
