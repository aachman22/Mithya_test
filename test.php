<?php

      
      $star = $_POST['star'];
      $index = $_POST['index'];

      //echo $star;

      $jsonString = file_get_contents('users.json');
      $data = json_decode($jsonString, true);


      if ($data['star'][$index] == 0)
      	$data['star'][$index] = ($star);
      
      else
      	$data['star'][$index] =($data['star'][$index] + $star)/2;


      $newJsonString = json_encode($data);
      file_put_contents('users.json', $newJsonString);

      // header("Location: hotelpage.html");
  
    ?>
