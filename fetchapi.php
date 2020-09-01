<?php
	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        //ako stavim * , to znaci da oću svegaaa
        if($name == '*') $name = 0;
        
		$url = "http://localhost/PHP/api/".$name;
        
        // CURL SOLUTION
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        echo $response;
	}
   ?>