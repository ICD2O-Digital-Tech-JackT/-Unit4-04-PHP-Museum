<?php
  $Age = $_POST['years'];
  $Day = $_POST['day'];
  $Result = "";
  $Valid = true;
  if ($Age <=5 || $Age >=95){
      $Result = "no admission fees";
  }
  else
    if ($Age<=12 && $Age <=21){
         $Result = "the student discount";
  } else 
    if ($Day == "Tuesday" || $Day == "Thursday"){
        $Result = "the student discount";
  }  else{
        $Result = "full price";
  }
  if (! $Age || $Age<0 || round($Age)!=$Age){
      $Valid = false;
  }
?>
<?php
  if ($Valid == true){
   echo "You will have to pay " . $Result. ". Thank you for using our service.";
  } else{
   echo "Please make sure that you enter a whole and positive number for your age, and a proper day of the week.";
  }
?>