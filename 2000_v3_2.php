<html>
<head>
<title>mysql</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
function generateRandomString($length = 9) {
   // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   // $characters = 'A0H1B2K3C4M5D6N7E8S9XPRTVW';
       $characters = 'a1b2c9d8e3h4k7m6n5w0x';
    $charactersLength = strlen($characters);
    
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
    
function arrayUnique($myArray)
{
    $newArray = Array();
    if (is_array($myArray))
    {
        foreach($myArray as $key=>$val)
        {
            if (is_array($val))
            {
                $val2 = arrayUnique($val);
            }
            else
            {
                $val2 = $val;
                $newArray=array_unique($myArray);
                $newArray=deleteEmpty($newArray);
                break;
            }
            if (!empty($val2))
            {
                $newArray[$key] = $val2;
            }
        }
    }
    return ($newArray);
}

function deleteEmpty($myArray)
{
    $retArray= Array();
    foreach($myArray as $key=>$val)
    {
        if (($key<>"") && ($val<>""))
        {
            $retArray[$key] = $val;
        }
    }
    return $retArray;
}
    
// $min=100000;
 // $max=999999;
 $duplicated_array= Array(); 
 $uniqu_array= Array();
  for($i=1;$i<6000;$i++)  {
    //  $duplicated_array[$i]= rand ( $min , $max );
            $duplicated_array[$i]= generateRandomString();

      
                           }
    $uniqu_array= arrayUnique($duplicated_array);
    
    echo sizeof($duplicated_array)."<br>".sizeof($uniqu_array);
    
    
    
 $i;
 $rn;
 
$allowable_period="1d";
$allowable_usage="3h";
$out_page_code_file = "out/code";   
//$out_page_code = $out_page_code_file."1.html";
$out_page_card = "out/card.html";

$out_text ='<!DOCTYPE html>
<html>
<head>
    <title>الكروت </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
   
    <style>
    @page {
  size: A4;
  margin: 0;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
  /* ... the rest of the rules ... */
}

        .arabic { direction: rtl}
        body { font-family:times new roman ; margin:auto ;font-size: 9px;}
        article {  position: relative; height: 24.4px;width: 176px; border: 2px double darkblue;margin: 6px 6px 6px 6px;padding: 2px; display: inline-block;  }
        span {padding: 1px}
        .up {position:absolute;top:0px;left:8px;index:100}
        .network-ar { position: absolute;bottom:-5px;right: 5px; background-color: white;z-index: 100; color: darkblue;font-weight: bold}
        .network-en { position: absolute;bottom:-5px;left: 5px; background-color: white;z-index: 100; color: darkblue;font-weight: bold}

        .valid-title { border-radius: 5px; color: darkred;display: inline-block; border:1px solid darkblue;font-size: 8px;}
        .code {font-size: 10px }
        .code2 { border-radius: 5px; color: darkred; display: inline-block;border:1px solid darkblue }
        .fn { }
        .valid { }
        .up3 {position:absolute;top:0px;left:147px}
        .price { position: absolute;bottom:-5px;right: 53px;background-color: white;z-index: 100; color: darkred;font-weight: bold}
        .note {background-color: lightgreen; border-radius: 5px; color: black;display: inline-block;border:3px double black}
        .code-title {font-size:8px; color:red}
    </style>    
</head>
<body>

 <section  class="main-section w3-margin-bottom  ">
    <div class="   arabic w3-center " >
      <div class="w3-row" style="">
    ';
 file_put_contents("$out_page_card", $out_text , FILE_APPEND); 
   
  
   $k=0;
//    $code= "/ip hotspot user "."\r\n";
//      $out_text = $code;
//      file_put_contents("$out_page_code", $out_text , FILE_APPEND); 
    
   
for($i=1;$i<=100;$i++)
    {
      if(fmod($i-1,500)==0){
                              $k++;
                              $out_page_code = $out_page_code_file.$k.".html";
                              $code= "/ip hotspot user "."\r\n";
                              $out_text = $code;
                              file_put_contents("$out_page_code", $out_text , FILE_APPEND); 
                               
                            }
      $rn= $uniqu_array[$i];
      $rnc=$rn;
    //  $rns=$rnc."s";
      $code= "add name=".$rnc." disabled=no   profile=default limit-uptime=300h  limit-bytes-out=12582912000 email=dec@2000.com "."\r\n";
      $out_text = $code;
      file_put_contents("$out_page_code", $out_text , FILE_APPEND); 
   //   $code= "add name=".$rns." disabled=no   profile=pOnlyFN limit-uptime=20h  limit-bytes-out=3145728000 "."\r\n";
    //  $out_text = $code;
   //   file_put_contents("$out_page_code", $out_text , FILE_APPEND); 
    
       
$out_text ='
            <article class="  w3-container w3-bordered w3-round">
              
              <span class="network-ar w3-white w3-round">فري نت </span>
              
              <span class="code2">
              <span  class="code-title">الرمز:</span>
              <span class="code">'.$rnc.'</span>
              </span>
              <span class="fn"></span>
             
              <span  class="valid-title">12000MB لمده شهر كامل</span>
              
              <span class="valid"></span>
               <span class="network-en">www.freenet.com</span>
              
              
              <span class=" price w3-white w3-round">2000 ريال</span>
             </article>
    ';
    file_put_contents("$out_page_card", $out_text , FILE_APPEND); 
    }


    
    
$out_text =' 
       
     </div>
</section>
 
    
    
</body>
</html>

    ';
file_put_contents("$out_page_card", $out_text , FILE_APPEND); 
    
    
    
?>

</body>
</html>

