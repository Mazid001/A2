<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        <link rel="stylesheet" href="style2.css">
    </head>
   <body>
        <hr>
		<h4>Character Frequency Count</h4>
        <hr>
       <table id="t">
            <tr>
                <td>Character</td>
                <td>Count</td>
             </tr>
             <?php
                $in= $_POST["txt"];
                $asp=str_split($in);
                $achk=array();
                foreach($asp as $char)
                {          

                  if(!in_array($char,$achk))
                   {
                    echo"<tr>";
                    echo"<td>";
                    echo $char;
                    echo"</td>";
                    echo"<td>";
                    echo array_count_values($asp)[$char];
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($achk,$char);
                   }
                     
                }
                ?>
        </table>
        
        <br>
        <br>
        <a class="btn" id="b" href="index.php">Input Another String</a> 
        <br>
        <hr>
        
		
		
		
		<h4>Word Count</h4>
        <hr>
        <table id="t">
            <tr>
                <td>Word</td>
                <td>Count</td>
             </tr>
             <?php
                $in= $_POST["txt"];              
                $arr =  explode(" ", $in);
                $achk2=array();
                foreach($arr as $word)
                {   
                    if(in_array($word,$achk2))
                   {
                       
                   }
                   else
                   {
                    echo"<tr>";
                    echo"<td>";
                    echo $word;
                    echo"</td>";
                    echo"<td>";
                    echo array_count_values($arr)[$word];
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($achk2,$word);
                   }
                     
                }
                ?>
        </table>
        <br>
        <a class="btn" id="b" href="index.php">Input Another String</a>        
                
            

</body>
</html>