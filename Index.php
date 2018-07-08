<!Doctype html>
 <html>
   <head>
      <style>
        body
        {background-color:white;
         margin:20% 20% 20%;
         }
        textarea
        {width: 100%;
		 border-color:aqua;
         }  
        input[type=submit]
        {background-color: green;
         border-radius: 10px;
         border: 2px solid;
         color: white;
         font-size: 25px;
         width: 100px;
         }      
         input[type=reset]
         {background-color:orange;
          border-radius: 10px;
          border: 2px solid;
          color: white;
          font-size: 25px;  
          text-align: center;
          width: 100px;
          }
             
        </style>   
         <body>
           <hr>
              <h2 align="center">Character Frequency Counter</h2>
            <hr>
            </br>
             
			 <h4 align="center">Insert your sting into the following text area to get the counter per Character</h4>
          <form  id="tins" action="counter.php" method="post">
            <textarea name="txt" form="tins" rows="5" cols="20"></textarea>
              <table align="center">
				<tr>
                  <td>
				   <input type="submit" value="count" ><input type="reset"value="clear">
				  <td>
				 </tr>
               </table>
            </form>   
            
         </body>     
     </head>
 </html>   