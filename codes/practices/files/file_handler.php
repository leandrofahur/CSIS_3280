<?php
    
    print_r ($_FILES['fileName']);
    print "<br>";
    print "name: " . $_FILES['fileName']['name'] . "<br>";
    print "type: " . $_FILES['fileName']['type'] . "<br><br>";

    $file_content = file_get_contents($_FILES['fileName']['tmp_name'], 'utf8');
    print $file_content;

    print "<br><br>"

?>

<form action="file_handler.php" method="POST" enctype="multipart/form-data">      
  <input type="file" name="fileName" />  
  <br>
  <br>
  <button type="submit" name="submit">Submit</button>
</form>

<!-- 
 <table id="dyntable" class="table table-bordered">
        <tr>
            <td>
                File
            </td>
            <td>
                <input type="file" name="fileField" id="fileField" placeholder="">
            </td>
        </tr>
        <tr>
            <td colspan="2">              
                    <button type="submit" name="Send">Send</button>
                    <button type="reset">Reinitialiser</button>                
            </td>
        </tr>
    </table> -->