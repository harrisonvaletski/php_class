<?php


	if(isset($_POST['formSubmit'])) 
    {
		$aDoor = $_POST['myArray'];
		
		if(isset($_POST['formWheelchair'])) 
        {
			echo("<p>You DO need wheelchair access.</p>\n");
		} 
        else 
        {
			echo("<p>You do NOT need wheelchair access.</p>\n");
		}
		
		if(empty($aDoor)) 
        {
			echo("<p>You didn't select any buildings.</p>\n");
		} 
        else 
        {
            $N = count($aDoor);

			echo("<p>You selected $N door(s): ");
			for($i=0; $i < $N; $i++)
			{
				echo($aDoor[$i] . " ");
			}
			echo("</p>");
		}
        



        //Checking whether a particular check box is selected
        //See the IsChecked() function below
        if(IsChecked('myArray','A'))
        {
            echo ' A is checked. ';
        }
        if(IsChecked('myArray','B'))
        {
            echo ' B is checked. ';
        }
        if(IsChecked('myArray','C'))
        {
            echo ' C is checked. ';
        }
        if(IsChecked('myArray','D'))
        {
            echo ' D is checked. ';
        }
       else echo ' something happend';
	}
    
    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
?>
