<?php

$host = "localhost"; 
$user = "root"; 
$pass = "SabbirHasan87"; 

function getMicroTime()
{
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}


function printHTMLfooter($scriptName, $startTime)
{
  $endTime = getMicroTime();
  $totalTime = $endTime - $startTime;
  printf("<br><hr>RUBiS (C) Rice University/INRIA<br><i>Page generated by $scriptName in %.3f seconds</i><br>\n", $totalTime);
  print("</body>\n");
  print("</html>\n");	
}

$scriptName = "test.php";
$startTime = getMicroTime();


$mode = file_get_contents("/var/tmp/modeFile");
$a=1;
$b=2;
$REC1 = ($mode == $a);
$REC2 = ($mode == $b);





   $link = mysql_connect($host, $user, $pass);

       if (!$link) {
                 echo "Could not connect to server\n";
                 trigger_error(mysql_error(), E_USER_ERROR);
                } else {
                echo "Connection established\n"; 
                }

   $dbSelect = mysql_select_db("rubis", $link);

       if (!$dbSelect) {
                 echo "Could not select database\n";
                 trigger_error(mysql_error(), E_USER_ERROR);
                } else {
                echo "Database Selected\n"; 
                       }

 
 if  ($REC1) {
         
     $counter1=0;
         $x=20;
         $y=10;

         $p = $x + $y;
         $counter1++;
         echo $p; 
}  
      echo $counter1;

if  ($REC2) {
         $counter2=0;
         $x=20;
         $y=10;

         $p = $x - $y;
         iecho $p;
         $counter2++;
         $temp = $counter2;
         
}  
     echo $temp;
/*
  // mysql query:
  $query = "SELECT SQL_NO_CACHE id, name, category, initial_price FROM items WHERE items.max_bid < 10000 ORDER BY nb_of_bids DESC LIMIT 10";
  $result = mysql_query($query);
  //$itemIds = array ();
  //array_push($itemIds, 0);
  //echo $result;
     
      if (!$result) {
                 echo "Could not execute the query\n";
                 trigger_error(mysql_error(), E_USER_ERROR);
                    } 
           else {
                echo "Query successfull :-)\n";
           }

     while ($row = mysql_fetch_assoc($result)) {
              
              echo  $row['id'] . " " . "\n";
              echo  $row['name'] . " " . "\n";
              echo  $row['category'] . " " . "\n";
              echo  $row['initial_price'] . " " . "\n";
               
}  */

  mysql_close();
 printHTMLfooter($scriptName, $startTime);

?>
