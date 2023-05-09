EXAMPLE:---> // Check if a var is of type int & btw 1-250.
      <?php 
      $int = 143;
      $min =1;
      $max = 250;
// array is passes as option parameter here.
      if (filter_var($int,FILTER_VALIDATE_INT,array("options" => array("min_range"=> $min,"max_range"=>$max)))===false){
        echo ("Variable value is not within the legal range");
      }else{
        echo ("Variable value is within the legal range");
      }
      ?>

___________________________________________________________________________________________________________________________
VALIDATE IPv6 ADDRESS 
**********************

EXAMPLE:----> // Check if the variable $ip is a valid IPv6 address.

          <?php
          $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
          if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false){
            echo ("$ip is a valid IPv6 address");
          }else{
            echo ("$ip is not a valid IPv6 address");
          
          }
          ?>

___________________________________________________________________________________________________________________________
VALIDATE URL CONTAIN QUERYSTRING
********************************
EXAMPLE:---> Check if the variable $url is a URL with a querystring. 
   
           <?php
           $url = "https://www.wikipedia.com";
           if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false){
            echo("$url is a valid URL with a query string");
           }else{
            echo ("$url is not a valid URL with a query string");
           }
           ?>

___________________________________________________________________________________________________________________________
