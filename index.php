<?php // Check if the "mobile" word exists in User-Agent 
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 
if($isMob){ 
    header("Location: ./mobile/index.html");
}else{ 
    header("Location: ./web_main.html");
    }
?>