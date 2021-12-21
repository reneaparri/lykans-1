<?PHP
@system("clear");

//Set font color

$mydummy=[];

   array_push($mydummy,"lykapro002");
   array_push($mydummy,"lykapro003");


$myaccounts=[];
   array_push($myaccounts,"lykapro001");




// Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow
$Blue     = "\033[0;34m" ;        # Blue
$Purple   = "\033[0;35m" ;      # Purple
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White

$ScriptName ="PHP LykaPro Menu (c) lykapro team 2021";
$Web="https://github.com/lykapro/lyka";

echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n\n";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n";
echo "$Green\nWhat do you want to do today?\n";
echo "$Yellow\n1. Rate Posts";
echo "$Cyan\n2. Add Moments";
echo "$Yellow\n3. Add Posts";
echo "$Cyan\n4. Check GEMS";
echo "$Yellow\n5. Harvest GEMS";
echo "$Green\n6. Exit\n$Yellow\n";

   $inputtask = readline("\nEnter Task No : ");

   switch($inputtask) {
      case "1" :
        @system("clear");
        rateit($mydummy,$myaccounts);
        exit;
      case "2" :
        @system("clear");
        moments($mydummy,$myaccounts);
        exit;        
      case "3" :
        @system("clear");
        postit($mydummy,$myaccounts);
        exit;
      case "4" :
        @system("clear");
        checkgems($mydummy,$myaccounts);
        exit;
      case "5" :
        @system("clear");
        harvestgems($mydummy,$myaccounts);
        exit;
      case "6" :
        echo "\nThank you";
        echo "\nProgram exits\n\n";
        echo "$White";
        echo "$ScriptName\n";
        echo "$Web\n\n";
        exit;  
      default :
        echo "$Cyan\nPls. select Task by entering 1-6";
        echo "\nProgram exits\n\n";
        echo "$White";
        echo "$ScriptName\n";
        echo "$Web\n\n";
        exit;  

   } //end of switch..case

function rateit($mydummy,$myaccounts)
{
   @system("clear");

   // Regular Colors
   $Black    = "\033[0;30m" ;     //  # Black
   $CRed     = "\033[0;31m" ;     //  # Red
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   $Blue     = "\033[0;34m" ;        # Blue
   $Purple   = "\033[0;35m" ;      # Purple
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   
   //init deviceID array
   $PhoneID=['df0439087259ad38','a5ead687bdb3729c','87a87fe99d0039a5'];
   array_push($PhoneID,'7d7e6f904741daea');
   array_push($PhoneID,'9f78dab798ab0324');
   array_push($PhoneID,'83d23b76250d2a97');
   ARRAY_push($PhoneID,'7ae21b1182e2a323');
   array_push($PhoneID,'29b3e709883d7321');
   array_push($PhoneID,'c51e10db899a4cc4');
   array_push($PhoneID,'47db99101c533bc5');
   
   $PhoneModel=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
   "iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
   "iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
   "iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
   "iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
   "Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
   "Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
   "Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
   "Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
   "Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
   "HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
   "Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
   "Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
   "Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");
   
   $ScriptName ="rateit (c) lykapro team 2021";
   $Web="https://github.com/lykapro/lyka";
   
   
   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "automaxrate dummy+main accounts\n";


   $usr=0;
   $acct=0;
   
   
   echo "$White\n#ActiveLYKA";
   echo date("l");
   echo "\n\n";
   
   $raters = $mydummy;
   foreach($myaccounts as $acct)
   {
     array_push($raters,$acct);
   }

   $acct2rate=$myaccounts;
  foreach($mydummy as $acct)
  {
   array_push($acct2rate,$acct);      
  }




           echo "$Yellow\n";
           echo "Input RATERS password";
           echo "$Green\n\n";
           $mainpassword=readline('Password : ');
           if ($mainpassword == '')
           {
               echo "$Yellow";
               echo "\nNo password entered\n";
               echo "Program will terminate\n\n";
               echo "$White";
               echo "$ScriptName\n";
               echo "$Web\n\n";
               exit;
           }
   
   //get acct names to rate
   

  
   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "looks like everything is in place\n";
   echo "we're good to go\n";
   sleep(2);
   
   /////////////////// start rating ////////////////////
   
   foreach ($raters as $currentRater) :  //raters
   
       //login to raters
       $devID=$PhoneID[rand(0,9)];
       $DevName=$PhoneModel[rand(0,50)];
       
       echo "$Yellow\n\n-----------------\n";
       echo "Rater       | $currentRater\n";
       
       $urll = "https://identity.mylykaapps.com/useraccounts/login";
       $curll = curl_init($urll);
       curl_setopt($curll, CURLOPT_URL, $urll);
       curl_setopt($curll, CURLOPT_POST, true);
       curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
       $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 30)");
       curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
       $DeviceInfo = <<<DATA
       {
       "countryCode": "US",
       "device": {
       "deviceId"          : "$devID", 
       "deviceImei"        : "$devID",
       "deviceModel"       : "$DevName",
       "deviceName"        : "$DevName",
       "deviceOs"          : "Android",
       "isEmulator"        : false,
       "notificationToken" : "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
       "osVersion"         : "11"
       },
       "password"          : "$mainpassword",
       "username"          : "$currentRater"
       }
       DATA;
       
       curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
       $respp = curl_exec($curll);
       curl_close($curll);
       $jsonn = json_decode($respp);
       $msgn = $jsonn->message;
   
         //if login to raters is success  
       if ($msgn == "User logged in") {
   
    //   $status = $jsonn->status;
       $vuser = $jsonn->data->username;
       $bearer = $jsonn->data->token->accessToken;
       $json = json_decode($respp);  
       
       //display raters gems
       echo "$White";
       displaygems($bearer);
       echo "$Cyan";
       echo "$msgn\n";
       
       ///// loop to each account to rate ////////
       foreach ($acct2rate as $BeingRated) : //rated
       
           if ($currentRater != $BeingRated) : //avoid rating own post
       
           echo "$White\n";
           echo "[$currentRater]";
       
           $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$BeingRated&os=android&pageIndex=1&pageSize=16";
           $curlm = curl_init($urlm);
           curl_setopt($curlm, CURLOPT_URL, $urlm);
           curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
           $headersm = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)", "authorization: Bearer $bearer",);
           curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
           $respm = curl_exec($curlm);
           curl_close($curlm);
       
           $jsonm = json_decode($respm, true);
           $verifiedaccountID = $jsonm["data"]["0"]["id"];
           $verifiedaccount = $jsonm["data"]["0"]["userName"];
       
           if ($BeingRated == $verifiedaccount) :
           
               echo ">>[$BeingRated]\n";
               sleep(2);  
               $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=16&id=$verifiedaccountID&category=ALL";
               $curld = curl_init($urld);
               curl_setopt($curld, CURLOPT_URL, $urld);
               curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
               $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)",);
               curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
               $respd = curl_exec($curld);
               curl_close($curld);
               sleep(1);
   //            $jsond = json_decode($respd, true);
         
               $arr = json_decode($respd, true);
       
                   $x=0;
                   do {
                       $p[$x] = $arr["data"]["$x"]["id"];
                       $x++;
                   } while ($x !=11);
       
                       /// actual rating of posts /////
                       /// loop 10 times /////////////
                       $PostNum=0;
                       $xcount=1;
    
                       do {
                           $PhoneID[rand(0,9)];
                           $DevName=$PhoneModel[rand(0,50)];
                       
                           echo "$White";
                           echo "..post$Green #$xcount";
                       
                        $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
                        $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                        $data = <<<DATA
                    {
                        "device": {
                        "deviceId"         : "$devID",
                        "deviceImei"       : "$devID",
                        "deviceModel"      : "$DevName",
                        "deviceName"       : "$DevName",
                        "deviceOs"         : "Android",
                        "isEmulator"       : false,
                        "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
                        "osVersion"        : "11"
                        },
                        "postId": $p[$PostNum],
                        "rate": 5,
                        "userid": $verifiedaccountID
                    }
                    DATA;
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                        $resp = curl_exec($curl);
                        curl_close($curl);
                        sleep(2);
                        $json = json_decode($resp);
                        echo "$Cyan";
                        $postmessage=$json->message;
                        
                        if (strstr($postmessage,'Congratulations')) {
                            echo " > rated 10 posts \n";
                        } elseif ($postmessage=="You already have rated this post.")
                        {
                         echo " > already rated\n";    
                        } elseif (strstr($postmessage,'Too many')) {
                            echo " > too many request\n";
                            sleep(2);
                        } elseif (strstr($postmessage,'Forbidden')) {
                            echo " > forbidden\n";
                            sleep(2);
                        } elseif (strstr($postmessage,"Post rating")) {
                           echo " > earnings saved\n";    
                        } else {
                           echo " >$postmessage\n";     
                        }

                        $PostNum++;
                        $xcount++;

                    } while ($PostNum !=10);
   
                       echo "$White\nCompleted rating$Green [$BeingRated]\n";
                       echo "$White--------\n";
                       //// end of do...while /////////
                   else :
                       echo "\n$Purple >> error connecting to$Green [$BeingRated]\n"  ; 
                        
                   endif;
     
                   else:
                       echo "\n$Yellow >> skip rating [$BeingRated] posts\n";
       
               endif; //raters!=rated
               
              endforeach;
       ///////////// end of loop to each account to rate /////////////
       } else {
         //  echo "$Purple error\n"; //error login to raters
           echo "$Yellow";
           echo "$msgn\n";
           echo "$White";
           break;
       }  //endif
       

       sleep(1);
       
       endforeach;
       echo "\nrateit has completed, exiting...";   
       echo "$White\n\n";
       echo "$ScriptName\n";
       echo "$Web\n\n\n";
       ///////////////// end of foreach loop to raters account //////////////////
    
} //end of rateit

//////////////////////////////////////////////////////////////
function displaygems($bearer)
{
    $Green    = "\033[0;32m" ;
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);   
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
  
    $jsonbal = json_decode($respbal);
    $gemsavailable = $jsonbal->data->totalGem;
    echo "GEMS        | $gemsavailable\n";

    sleep(1); 
} //end displaygems 


////////////////////////////////////////////////////////////////////////////////////

function harvestgems($mydummy,$myaccounts)
{
   // Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow
$Blue     = "\033[0;34m" ;        # Blue
$Purple   = "\033[0;35m" ;      # Purple
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White
   
   $harvestedgems=0;

   $ScriptName ="harvestgems (c) lykapro team 2021";
   $Web="https://github.com/lykapro/lyka";
   
   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "Let's harvest your LYKA GEMS\n";
   
   echo "$White\n#ActiveLYKA";
   echo date("l");
   echo "\n";
   
   //init dummy array
   $acct2check = $myaccounts; 
   
   foreach($mydummy as $acct){
       array_push($acct2check,"$acct");
   }

   //should use one password per raters account
   echo "$Yellow\n";
   echo "Input password (one password for all accounts)\n$Green";
   $mainpassword=readline('Password : ');
   if ($mainpassword == '')
   {
       echo "$Yellow\nNo password entered.\n";
       echo "Program will terminate\n$White\n";
       echo "$ScriptName\n";
       echo "$Web\n\n";
       exit;    
   }
   
   echo "$White\n";
   
   //get the account where the harvested gems will be sent
   
   echo "\nInput LYKA GEMS recipient\n\n";
   $GEMReceiver=readline('Username : ');
   
   if ($GEMReceiver == '')
   {
       echo "$Yellow\nNo recipient entered\n";
       echo "Program will terminate\n$White\n";
       echo "$ScriptName\n";
       echo "$Web\n\n";
       exit;
   }
   
   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "seems we have gathered necessary info\n";
   echo "let's harvest your GEMS...\n\n";
   sleep(2);
   
   echo "Recipient > $Yellow $GEMReceiver $White\n ";
   
   foreach ($acct2check as $activeAcct) {
   
       //Login to each account
   
       $urll = "https://identity.mylykaapps.com/useraccounts/login";
       $curll = curl_init($urll);
       curl_setopt($curll, CURLOPT_URL, $urll);
       curl_setopt($curll, CURLOPT_POST, true);
       curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
       $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
       curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
       $DeviceInfo = <<<DATA
       {
       "countryCode": "US",
       "device": {
       "deviceId": "7d7e6f904741daea",
       "deviceImei": "7d7e6f904741daea",
       "deviceModel": "Tecno Spark 7 Pro",
       "deviceName": "android",
       "deviceOs": "Android O_MR1 ",
       "isEmulator": false,
       "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
       "osVersion": "30"
     },
     "password": "$mainpassword",
     "username": "$activeAcct"
   }
   DATA;
       curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
       $respp = curl_exec($curll);
       curl_close($curll);
       $jsonn = json_decode($respp);
       $msgn = $jsonn->message;
       $status = $jsonn->status;
       $verifiedAcct = $jsonn->data->username;
       $bearer = $jsonn->data->token->accessToken;
       $json = json_decode($respp);  
   
       if ($status == 0) {
         echo "$Purple";
         echo "[$activeAcct] username/password error\n";
       }
   
     //pass only when logged successfully
     if ($status == 1) {
   
     
       $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
       $curlbal2 = curl_init($urlbal2);
       curl_setopt($curlbal2, CURLOPT_URL, $urlbal2);
       curl_setopt($curlbal2, CURLOPT_RETURNTRANSFER, true);
       $headersbal2 = array("authorization: Bearer $bearer",);
       curl_setopt($curlbal2, CURLOPT_HTTPHEADER, $headersbal2);
       //for debug only!
       curl_setopt($curlbal2, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($curlbal2, CURLOPT_SSL_VERIFYPEER, false);
       $respbal2 = curl_exec($curlbal2);
       curl_close($curlbal2);
       //var_dump($respbal);
       $jsonbal2 = json_decode($respbal2);
       $TotalGEMS = $jsonbal2->data->totalGem;
   
       $urlx = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$GEMReceiver&os=android&pageIndex=1&pageSize=16";
       $curlx = curl_init($urlx);
       curl_setopt($curlx, CURLOPT_URL, $urlx);
       curl_setopt($curlx, CURLOPT_RETURNTRANSFER, true);
       $headersx = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)", "authorization: Bearer $bearer",);
       curl_setopt($curlx, CURLOPT_HTTPHEADER, $headersx);
       $respx = curl_exec($curlx);
       curl_close($curlx);
   
       $jsonx = json_decode($respx, true);
       $uidx = $jsonx["data"]["0"]["id"];
       $usernamex = $jsonx["data"]["0"]["userName"];
     
       if ($GEMReceiver == $usernamex)
       {
   
           $SendGEMURL = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
           $curlGEMS = curl_init($SendGEMURL);
           $headerGEMS = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
           curl_setopt($curlGEMS, CURLOPT_URL, $SendGEMURL);
           curl_setopt($curlGEMS, CURLOPT_POST, true);
           curl_setopt($curlGEMS, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($curlGEMS, CURLOPT_HTTPHEADER, $headerGEMS);
           $databals = '{
             "amount":"' . $TotalGEMS . '",
             "device":{
               "deviceId":"7d7e6f904741daea",
               "deviceImei":"7d7e6f904741daea",
               "deviceModel":"Tecno Spark 7 Pro",
               "deviceName":"android",
               "deviceOs":"Android O_MR1",
               "isEmulator":false,
               "notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"30"
             },
             "recipientId":' . $uidx . '}';
   
           curl_setopt($curlGEMS, CURLOPT_POSTFIELDS, $databals);
           $respbals = curl_exec($curlGEMS);
           curl_close($curlGEMS);
   
           $jsonbals = json_decode($respbals);
           //echo $jsonbals->message;
   
           echo "$Yellow\n";
           echo "$activeAcct  GEMS > $TotalGEMS ...$Green sent";
           $harvestedgems =$harvestedgems+$TotalGEMS;
         } else {
           echo "$Purple\nerror confirming recipient";
           echo "no GEMS was transferred\n$White\n";
                }
   
            
       sleep(1);
     
     } //end of status==1  
   
   } //end of loop for each dummy
   
     echo "$White\n============================\n";
     echo "Total harvested GEMS :$Yellow$harvestedgems\n";
     echo "$White============================\n\n";
     echo "$ScriptName\n";
     echo "$Web\n\n";
     echo "\n";

} //end of harvest gems

//////////////////////////////////////////////////////////////////////////

function checkgems($mydummy,$myaccounts)
{

// Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow
$Blue     = "\033[0;34m" ;        # Blue
$Purple   = "\033[0;35m" ;      # Purple
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White   

   $harvestedgems=0;

$ScriptName ="checkgems (c) lykapro team 2021";
$Web="https://github.com/lykapro/lyka";


echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "Time to check your LYKA GEMS\n";

echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n";

$acct2check = $myaccounts; 
   
foreach($mydummy as $acct){
    array_push($acct2check,"$acct");
}


//should use one password for all accounts
echo "$Yellow\n";
echo "Input the default password of your accounts";
echo "$Green\n";
$mainpassword=readline('Password : ');
if ($mainpassword == '')
{
    echo "$Yellow";
    echo "\nNo password entered\n";
    echo "Program will terminate\n\n";
    echo "$White";
    echo "$ScriptName\n";
    echo "$Web\n\n";
    exit;
}

@system("clear");
echo "$White\n";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "usernames have been gathered\n";
echo "let's check your GEMS...\n\n";
sleep(2);

$total=0;

foreach ($acct2check as $activeAcct) {

    //Login to each account

    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "US",
    "device": {
    "deviceId": "7d7e6f904741daea",
    "deviceImei": "7d7e6f904741daea",
    "deviceModel": "Tecno Spark 7 Pro",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "30"
  },
  "password": "$mainpassword",
  "username": "$activeAcct"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;

    if ($msgn == "User logged in") { 

    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    $json = json_decode($respp);  

//    echo "bearer :$bearer";
  
    $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal2 = curl_init($urlbal2);
    curl_setopt($curlbal2, CURLOPT_URL, $urlbal2);
    curl_setopt($curlbal2, CURLOPT_RETURNTRANSFER, true);
    $headersbal2 = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal2, CURLOPT_HTTPHEADER, $headersbal2);
    //for debug only!
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYPEER, false);
    $respbal2 = curl_exec($curlbal2);
    curl_close($curlbal2);
    //var_dump($respbal);
    $jsonbal2 = json_decode($respbal2);
    $TotalGEMS = $jsonbal2->data->totalGem;

    echo "$White";  
    echo "$activeAcct $Yellow GEMS > $Green $TotalGEMS\n";

    $total=$total + $TotalGEMS;

  } else {
    echo "$Yellow";
    echo "$msgn\n";
    echo "$White";
    break;

  }//end of "User logged in"  

} //end of loop for each account

  //rene_wolverine uid = 700002814478

  echo "$White============================\n";
  echo "Total GEMS > $Yellow $total\n";
  echo "$White============================\n\n";
  echo "$ScriptName\n";
  echo "$Web\n\n";
  echo "$White\n\n";

} //end of check gems

///////////////////////////////////////////////////////////////////////////////

function postit($mydummy,$myaccounts)
{
   @system("clear");

   //Set font color
   
   // Regular Colors
   $Black    = "\033[0;30m" ;     //  # Black
   $CRed     = "\033[0;31m" ;     //  # Red
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   $Blue     = "\033[0;34m" ;        # Blue
   $Purple   = "\033[0;35m" ;      # Purple
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   

   $hash_tags =array("#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
   "#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
   "#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas",    
   "#LykaGlobal","#LykaShare","#LykaWorld","#MaxRate","#LykaRetail",
   "#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
   "#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas",    
   "#LykaGlobal","#travelthainow2019","#LykaUltraRater","#LykaMerchants","#travelthainow2019",
   "#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
   "#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
   "#LykaGlobal","#LykaMall","#LykaUltraRater","#LykaMerchants","#travelthainow2019",
   "#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
   "#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas");
   
   $hash_tags2 =array("lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
   "StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
   "WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas",    
   "LykaGlobal","LykaShare","LykaWorld","MaxRate","LykaRetail",
   "StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
   "WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas",    
   "LykaGlobal","travelthainow2019","LykaUltraRater","LykaMerchants","travelthainow2019",
   "lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
   "StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
   "LykaGlobal","LykaMall","LykaUltraRater","LykaMerchants","travelthainow2019",
   "lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
   "WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas");
   
   $DeviceIDarray=['df0439087259ad38','a5ead687bdb3729c','87a87fe99d0039a5'];
   array_push($DeviceIDarray,'7d7e6f904741daea');
   array_push($DeviceIDarray,'9f78dab798ab0324');
   array_push($DeviceIDarray,'83d23b76250d2a97');
   ARRAY_push($DeviceIDarray,'7ae21b1182e2a323');
   array_push($DeviceIDarray,'29b3e709883d7321');
   array_push($DeviceIDarray,'c51e10db899a4cc4');
   array_push($DeviceIDarray,'47db99101c533bc5');
   
   $DeviceArray=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
   "iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
   "iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
   "iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
   "iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
   "Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
   "Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
   "Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
   "Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
   "Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
   "HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
   "Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
   "Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
   "Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");
   
   $ScriptName ="addposts (c) lykapro team 2021";
   $Web="https://github.com/lykapro/lyka";
   
   $acct=0;
   
   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "add posts to your account\n";
   echo "no hidden codes\n";
   
   echo "$White\n#ActiveLYKA";
   echo date("l");
   echo "\n\n";
   
   $acct2post = []; 

   foreach($myaccounts as $acct)
    {
      array_push($acct2post,$acct);
    }

   foreach($mydummy as $acct)
   {
    array_push($acct2post,$acct);      
   }

   echo "$Green";
   echo "*Pls. use same password for your accounts*\n";
   echo "\n";
   
   echo "$White";
   $mainpassword=readline("Password : ");
   if ($mainpassword == '')
   {
       echo "$Yellow";
       echo "\n >sorry but no password was entered,\n";
       echo " >script terminated\n\n";
       echo "$White";
       echo "$ScriptName\n";
       echo "$Web\n\n";
   
       exit;
   }
   
   echo "$White";
   echo "\nNumber of posts to add (default 10)?\n";
   $postcount=readline("Count : ");
   
   if ($postcount =='') {
       $postcount=10;
   }
   
   echo "$Yellow";
   echo "\nPosts title e.g. #LYKAglobal\n";
   $posttitle=readline("Title : ");
   
   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n$Yellow\n";
   echo "time to add posts to your account\n";
   echo "fasten your seatbelt\n";
   sleep(2);
   
   
   foreach ($acct2post as $currentUser) {
   
       $devID=$DeviceIDarray[rand(0,9)];
       $DevName=$DeviceArray[rand(0,80)];
   
   echo "$White\n";
   echo "Account Details\n\n";
   //echo "Phone Name  | $DevName\n";
   //echo "Phone ID    | $devID\n";
   echo "Username    | $currentUser\n";
   echo "$Cyan";
   
   //Login to account
   $urll = "https://identity.mylykaapps.com/useraccounts/login";
   $curll = curl_init($urll);
   curl_setopt($curll, CURLOPT_URL, $urll);
   curl_setopt($curll, CURLOPT_POST, true);
   curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
   $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 30)");
   curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
   $DeviceInfo = <<<DATA
   {
   "countryCode": "US",
   "device": {
   "deviceId": "$devID",
   "deviceImei": "$devID",
   "deviceModel": "$DevName",
   "deviceName": "$DevName",
   "deviceOs": "Android",
   "isEmulator": false,
   "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
   "osVersion": "11"
   },
   "password": "$mainpassword",
   "username": "$currentUser"
   }
   DATA;
   
   curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
   $respp = curl_exec($curll);
   curl_close($curll);
   $jsonn = json_decode($respp);
   $msgn = $jsonn->message;
   
   //if ($status == 1) {
   
   if ($msgn == "User logged in") {
   
   $status = $jsonn->status;
   $vuser = $jsonn->data->username;
   $bearer = $jsonn->data->token->accessToken;
   //sleep(1);
   
   //echo "$msgn\n";
   //exit;
   
         echo "$White";
         displaygems($bearer);
         echo "$Cyan";
         echo "$msgn\n\n";
   
    $postloop=1;
    do {  
       
      echo "$White";
      echo "adding posts #$postloop  > "; 
      
      $device_id = $DeviceIDarray[rand(0,9)];
   
      echo "$Cyan";
      
      if ($posttitle == "" ) {
           $title_content=$hash_tags[rand(0,57)];
      } else {
           $title_content=$posttitle;
      }
      
      $xhash=$hash_tags2[rand(0,57)];
   
   
      addPosts($vuser, $bearer, $device_id, $title_content, $xhash);
      
      echo "\n";
      $postloop++;
   
   } while ($postloop !=$postcount+1);
   
   echo "$Yellow";
   echo "\nposts has been added to [$currentUser]\n\n";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   
   
   } else {
       echo "$Yellow";
       //echo " Error : username/password does not match.\n";
       echo "$msgn\n";
       echo "$White";
       break;
   } //end of status==1   
   
   
   echo "\n$Green";
   echo "addposts summary\n";
   echo "Username    | $currentUser\n";
   echo "Posts added | $postcount\n";
   displaygems($bearer);
   echo "=============================\n";
   sleep(2);
   
   } //end of loop for x username
   
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   exit;


} //end of postit
//////////////////////////////////////////////////////////////////////////////////

function addPosts($currentUser, $bearer, $device_id, $contents, $xhash) {

   $currentUser_id = getUserId($device_id, $bearer);
   $device_id = $device_id;

   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   $uploadPay = <<<DATA
       {"category":"post",
        "clientId":"$currentUser_id",
        "files":[{
            "fileName":"https://github.com/maximum001/images/blob/main/p1.jpeg", 
            "mediaType":"image"}]
        }
   DATA; 
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);
 
   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$currentUser_id";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);
           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value;
               }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) {
                   echo "failed\n";
               }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

               $uploaded_count = 0;
               $upload_attempt = 0;
               while ($uploaded_count < 1) {


                   sleep(0);

                   //echo " $contents $xhash ";

                   $uploadPost = "https://posting.mylykaapps.com/api/v3/posts/AddImagePost";
                   $post = postX($uploadPost, 
                   payload($device_id,
                   '"files":[{
                    "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                    "height":1024,
                    "key":"'.$mediaID.'", 
                    "RemoteStorage":"lyka-legacy-images-input" ,
                    "type":"image","width":768}],
                    "isHighlight":false,
                    "isSharedLink":false,
                    "mediaTags":"[[]]",
                    title:"#ActiveLYKA'.date("l").'",
                    hashtags:"'.$xhash.'",
                    content: "'.$contents.'"'),
                    $bearer);
                   $response_message = $post->message;
                   //echo "$response_message.";
                   if (strstr($response_message, 'Post saved')) {
                     echo "success";  
                     
                     $uploaded_count++;
                       $upload_attempt = 0;
                   } else {
                       echo "failed. retrying. \n";
                       $upload_attempt++;
                       if ($upload_attempt >= 5) {
                           break;
                       }
                   }
               }      
           }
       }
   } else {
   }
}  //end of addposts
/////////////////////////////////////////////////////////////////////////////

function moments($mydummy,$myaccounts)
{

   @system("clear");

//Set font color

// Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow
$Blue     = "\033[0;34m" ;        # Blue
$Purple   = "\033[0;35m" ;      # Purple
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White
# Bold
$BBlack   = "\033[1;30m" ;      # Black
$BRed     = "\033[1;31m" ;        # Red
$BGreen   = "\033[1;32m" ;      # Green
$BYellow  = "\033[1;33m" ;     # Yellow
$BBlue    = "\033[1;34m" ;       # Blue
$BPurple  = "\033[1;35m" ;     # Purple
$BCyan    = "\033[1;36m" ;       # Cyan
$BWhite   = "\033[1;37m" ;      # White

$hash_tags =array("#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
"#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
"#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas",    
"#LykaGlobal","#LykaShare","#LykaWorld","#MaxRate","#LykaRetail",
"#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
"#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas",    
"#LykaGlobal","#travelthainow2019","#LykaUltraRater","#LykaMerchants","#travelthainow2019",
"#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
"#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
"#LykaGlobal","#LykaMall","#LykaUltraRater","#LykaMerchants","#travelthainow2019",
"#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
"#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas");

$DeviceIDarray=['df0439087259ad38','a5ead687bdb3729c','87a87fe99d0039a5'];
array_push($DeviceIDarray,'7d7e6f904741daea');
array_push($DeviceIDarray,'9f78dab798ab0324');
array_push($DeviceIDarray,'83d23b76250d2a97');
ARRAY_push($DeviceIDarray,'7ae21b1182e2a323');
array_push($DeviceIDarray,'29b3e709883d7321');
array_push($DeviceIDarray,'c51e10db899a4cc4');
array_push($DeviceIDarray,'47db99101c533bc5');

$DeviceArray=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
"iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
"iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
"iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
"iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
"Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
"Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
"Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
"Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
"Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
"HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
"Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
"Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
"Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");

$ScriptName ="addmoments (c) lykapro team 2021";
$Web="https://github.com/lykapro/lyka";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "add moments to your account\n";
echo "no hidden codes\n";

echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n\n";

$acct2post = $myaccounts; 
   
foreach($mydummy as $acct){
    array_push($acct2post,"$acct");
}



echo "$Green\n";
echo "*Pls. use same password for your accounts*\n";

echo "$White";
$mainpassword=readline("\nPassword : ");
if ($mainpassword == '')
{
    echo "$Green";
    echo "\nno password was entered\n";
    echo "password is needed to proceed\n\n";
    echo "$White";
    echo "$ScriptName\n";
    echo "$Web\n\n";
    exit;
}

echo "$White";
echo "\nNumber of moments to add (default 10)?\n";
$postcount=readline("Count : ");

if ($postcount =='') {
    $postcount=10;
}

@system("clear");
echo "$White\n";
echo "$ScriptName\n";
echo "$Web\n$Green\n";
echo "are you ready to post your moments?\n";
echo "let's go!!!\n";
sleep(2);

foreach ($acct2post as $currentUser) {

echo "$White\n";

$devID=$DeviceIDarray[rand(0,9)];
$DevName=$DeviceArray[rand(0,80)];

echo "$White";
echo "Account to addmoments\n\n";
echo "Username    | $currentUser\n";

echo "$Cyan";

//Login to account
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 30)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$DeviceInfo = <<<DATA
{
"countryCode": "US",
"device": {
"deviceId": "$devID",
"deviceImei": "$devID",
"deviceModel": "$DevName",
"deviceName": "android",
"deviceOs": "Android R",
"isEmulator": false,
"notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
"osVersion": "30"
},
"password": "$mainpassword",
"username": "$currentUser"
}
DATA;

curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
$respp = curl_exec($curll);
curl_close($curll);
$jsonn = json_decode($respp);
$msgn = $jsonn->message;

if ($msgn == "User logged in") {

$status = $jsonn->status;
$vuser = $jsonn->data->username;
$bearer = $jsonn->data->token->accessToken;
//sleep(1);

//echo "$msgn\n";
//exit;

      echo "$White";
      displaygems($bearer);
      echo "$Cyan";
      echo "$msgn\n\n";


   $postloop=1;   
//for ($postloop=1; $postloop<12; $postloop++) {
do {    
   $title_content=$hash_tags[rand(0,57)];
   $xhash=$hash_tags[rand(0,57)];
   $device_id = $DeviceIDarray[rand(0,9)];
   
   echo "$White";
   echo "> posting moments #$postloop > ";
   echo "$Yellow"; 
   addMoments($vuser, $bearer, $device_id);
   echo "\n";
   $postloop++;

} while ($postloop !=$postcount+1);//end of for loop

echo "$White";
echo "\nmoments have been added to [$currentUser]\n\n";
echo "$ScriptName\n";
echo "$Web\n\n";


} else {
    echo "$Yellow";
    //echo " Error : username/password does not match.\n";
    echo "$msgn\n";
    echo "$White";
    break;
} //end of status==1   

echo "$Green";
echo "addmoments summary\n\n";
echo "Username    | $currentUser\n";
echo "New Moments | $postcount\n";
displaygems($bearer);
echo "========================\n\n";
sleep(2);

} //end of loop for x username

echo "\n";
echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";

}  //end of moments

//////////////////////////////////////////////////////////////////////////////

function addMoments($currentUser, $bearer, $device_id) {
   
   $currentUsrID = getUserId($device_id, $bearer);

   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   $uploadPay = <<<DATA
       {"category":"moment","clientId":"$currentUsrID","files":[{"fileName":"p5.jpeg", "mediaType":"image"}]}
   DATA; 
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);

   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$currentUsrID";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);
           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value;
               }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) {
                   echo "failed";
               }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

               $uploaded_count = 0;
               $upload_attempt = 0;
               while ($uploaded_count < 1) {
                   sleep(1);
                   $uploadMoment = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment";
                   $momnts = postX($uploadMoment, 
                   payload($device_id,
                   '"files":[{
                       "height":2081,
                       "key":"'.$mediaID.'", 
                       "RemoteStorage":"lyka-legacy-images-input" ,
                       "type":"image",
                       "width":1079}]'),
                        $bearer);
                   $response_message = $momnts->message;
                   if( $response_message == "Moment retrieved."){
                       echo "success";
                       $uploaded_count++;
                       $upload_attempt = 0;
                   } else {
                       echo "failed. retrying\n";
                       $upload_attempt++;
                       if ($upload_attempt >= 5) {
                           break;
                       }
                   }
               }      
           }
       }
   } else {
       echo "\n Error getting moments server data.\n";
   }
} //end of addmoments

   ///////////////////////////////////////////
   // getuserID
   //
   //////////////////////////////////////////

function getUserId($rDevID, $mcCookie){
   $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);

   return $getUID->data->id;

}

function getX($urlx, $gdevID, $cooks = ""){
   $getURL = $urlx;
   $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)';
   $getHeader = array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent",
       "authorization: Bearer $cooks",
       "x-clientid: $gdevID",
       );
       $getCurl = curl_init($getURL);
       curl_setopt($getCurl, CURLOPT_URL, $getURL);
       curl_setopt($getCurl, CURLOPT_HTTPGET, true);
       curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
       sleep(1);
       $getResp = curl_exec($getCurl);
       curl_close($getCurl);
       $getjson = json_decode($getResp);

       return $getjson;
}

function postX($urlx, $payloader, $cooks = ""){
   $postURL = $urlx;
   $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)';
   $postHeader = !$cooks 
       ? array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent") 
       : array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent","authorization: Bearer $cooks") ;
       $postCurl = curl_init($postURL);
       curl_setopt($postCurl, CURLOPT_URL, $postURL);
       curl_setopt($postCurl, CURLOPT_POST, true);
       curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
       curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
       curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
       sleep(1);
       $postResp = curl_exec($postCurl);
       curl_close($postCurl);
       $postjson = json_decode($postResp);

       return $postjson;
}

function payload($devIDx, $xtraPay, $rTokenx = ""){
    $valdata = <<<DATA
            {"device": {
                "deviceId": "$devIDx",
                "deviceImei": "$devIDx",
                "deviceModel": "Tecno Spark 7 Pro",
                "deviceName": "Tecno Spark 7 Pro",
                "deviceOs": "Android",
                "isEmulator": false,
                "osVersion": "11",
                "notificationToken": "$rTokenx"
            },
            "countryCode": "US",
            $xtraPay
            }
            DATA; 
 
    return $valdata;
 }


?>
