<?php

function change_date_format_dmy($date)
{
	if ($date != '0000-00-00') {
		$date = date("d-m-Y", strtotime($date));
		return $date;
	}
	else{
		return '__-__-____';
	}
}

function change_date_format_ymd($date)
{
	if ($date != '00-00-0000') {
		$date = date("Y-m-d", strtotime($date));
		return $date;
	}
	else{
		return '__-__-____';
	}
}

function random_num($size) {
	$alpha_key = '';
	$keys = range('A', 'Z');

	for ($i = 0; $i < 2; $i++) {
		$alpha_key .= $keys[array_rand($keys)];
	}

	$length = $size - 2;

	$key = '';
	$keys = range(0, 9);

	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}

	return $alpha_key . $key;
}

function age_count($date)
{
	if ($date == '0000-00-00') {
		return "";	
	}
	else
	{
		$today = date("Y-m-d");
		$diff = date_diff(date_create($date), date_create($today));
		return $diff->format('%y');
	}
}

function json_output($statusHeader,$response)
{
	$ci =& get_instance();
	$ci->output->set_content_type('application/json');
	$ci->output->set_status_header($statusHeader);
	$ci->output->set_output(json_encode($response));
}

function send_otp_sms2($mobileNumber, $message)
{
	//Your authentication key
	$authKey = "226879ACbrBEg495b501b9c";
	//Sender ID, While using route4 sender id should be 6 characters long.
	$senderId = "RIVLYS";
	// $message = "Hello, Welcome to Splection. Please verify your phone number by entering One Time Password(OTP). Your OTP is :".$otpCode.".";
	//Your message to send, Add URL encoding here.
	$message = urlencode($message);
	//Define route 
	$route = "4";    //1-Promotional, 4-Transactional, OTP
	//Prepare you post parameters
	$postData = array(
    	'authkey' => $authKey,
		'mobiles' => $mobileNumber,
		'message' => $message,
		'sender' => $senderId,
		'route' => $route
	);
	//API URL
	$url="https://control.msg91.com/api/sendhttp.php?unicode=1";
	// init the resource
	$ch = curl_init();
	curl_setopt_array($ch, array(
	    CURLOPT_URL => $url,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_POST => true,
	    CURLOPT_POSTFIELDS => $postData
	    //,CURLOPT_FOLLOWLOCATION => true
	));
	//Ignore SSL certificate verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


	//get response
	$output = curl_exec($ch);

	//Print error if any
	if(curl_errno($ch))
	{
	   return 'error:' . curl_error($ch);
	}

	curl_close($ch);
}

function send_otp_sms1($mobileNumber, $message)
{
	//Your authentication key
	//Sender ID, While using route4 sender id should be 6 characters long.
	$senderId = "SKYVOI";
	// $message = "Hello, Welcome to Splection. Please verify your phone number by entering One Time Password(OTP). Your OTP is :".$otpCode.".";
	//Your message to send, Add URL encoding here.
	$message = urlencode($message);
	//Define route 
	$route = "4";    //1-Promotional, 4-Transactional, OTP
	//Prepare you post parameters
	$postData = array(
		'sender' => $senderId,
		'route' => $route
	);
	//API URL
	$url="http://bulksms.msghouse.in/api/sendhttp.php?authkey=7182AdouuM6EcFE35c6279f4&mobiles=".$mobileNumber."&message=".$message;
	// init the resource
	$ch = curl_init();
	curl_setopt_array($ch, array(
	    CURLOPT_URL => $url,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_POST => true,
	    CURLOPT_POSTFIELDS => $postData
	    //,CURLOPT_FOLLOWLOCATION => true
	));
	//Ignore SSL certificate verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


	//get response
	$output = curl_exec($ch);

	//Print error if any
	if(curl_errno($ch))
	{
	   return 'error:' . curl_error($ch);
	}

	curl_close($ch);
}
/** by Mahendra Vikhar
 * use this method to encode anystring and this encrypted string will not decrypt from
 * online tool or any common method.
 *
 * @param type $str
 * @return type
 */
function ci_enc($str)
{
    $one = serialize($str);
    $two = @gzcompress($one, 9);
    $three = addslashes($two);
    $four = base64_encode($three);
    $five = strtr($four, '+/=', '-_.');
    return $five;
}

/** by Mahendra Vikhar
 * Use this method to decript the encrypted string done by ci_enc function if the
 * string is not in correct format then this will not decript and return z1 response.
 *
 * @param type $str
 * @return string
 */
function ci_dec($str)
{
    $one = strtr($str, '-_.', '+/=');
    $two = base64_decode($one);
    $three = stripslashes($two);
    $four = @gzuncompress($three);
    if ($four == '') {
        return "z1"; //Please use the correct code / data string which you get.
    } else {
        $five = unserialize($four);
        return $five;
    }
}

function calculateAge($dob) {
	if ($dob != '0000-00-00') {
		$diff = date('Y') - date('Y',strtotime($dob));
		return $diff .' Years';
	}
	else
	{
		return '';
	}
}

function get_current_week($return = 'all') {
	$monday = strtotime("last monday");
	$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;

	$sunday = strtotime(date("Y-m-d",$monday)." +6 days");

	$this_week_sd = date("Y-m-d",$monday);
	$this_week_ed = date("Y-m-d",$sunday);

	if ($return == 'all') {
		return date('d/m/Y', strtotime($this_week_sd)) . ' to '. date('d/m/Y', strtotime($this_week_ed));
	} else if ($return == 'start') {
		return $this_week_sd;
	} else if ($return == 'end') {
		return $this_week_ed;
	}

}

function sendEmail($emailTo, $realName, $subject, $htmlbody,$replymail, $attachment='', $ccEmail='') 
{    
    //error_reporting(E_ALL);
    error_reporting(E_STRICT);
    date_default_timezone_set('America/Toronto');
    require_once ('class.phpmailer.php');
    require_once ('class.smtp.php');
    require_once ('PHPMailerAutoload.php');
    //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail = new PHPMailer();

    $mail -> IsSMTP();
    // telling the class to use SMTP
    //$mail -> Host = "mail.yourdomain.com";
    // SMTP server
    // $mail -> SMTPDebug = 1;raj
    $mail -> SMTPDebug = 1;
    // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail -> SMTPAuth = true;
    // enable SMTP authentication
    $mail -> SMTPSecure = "ssl";
    // sets the prefix to the servier
    $mail -> Host = "mail.skyvoice.co.in";
    

    // sets GMAIL as the SMTP server
    $mail -> Port = 465;
   
    // set the SMTP port for the GMAIL server
    $mail -> Username = 'info@skyvoice.co.in';
    // GMAIL username
    $mail -> Password = '#skyvoice@1X';
    // GMAIL password

    //$mail -> SetFrom('info@recfirstaid.eu', "RECIRL");
    $mail -> SetFrom('info@skyvoice.co.in', "Enquiry");
   
    $mail -> AddReplyTo($replymail, $realName);
    if($ccEmail)
        $mail->AddCC($ccEmail, $ccEmail);
    $mail -> IsHTML(true);

    $mail -> Subject = $subject;

    //$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mail -> Body = $htmlbody;
    $address = $emailTo;
    $mail -> AddAddress($address, $realName);
    if($attachment)
        $mail ->AddAttachment($attachment);

    if (!$mail -> Send()) {
           echo "Mailer Error: " . $mail -> ErrorInfo;
    } else {
            echo "Message sent!"; 
    }

}

function sendPushNotificationToFCMSever($title,$message,$regId,$include_image='') {

	error_reporting(-1);
    ini_set('display_errors', 'On');
  	require_once ('class.firebase.php');
    require_once ('class.push.php');

    $firebase = new Firebase();
    $push = new Push();

    // optional payload
    $payload = array();
    // $payload['team'] = 'India';
    // $payload['score'] = '5.6';
    
     
    // push type - single user / topic
    // $push_type = 'individual';
     
    // whether to include to image or not


    $push->setTitle($title);
    $push->setMessage($message);
    if ($include_image) {
        $push->setImage('https://api.androidhive.info/images/minion.jpg');
    } else {
        $push->setImage('');
    }
    // $push->setIsBackground(FALSE);
    // $push->setPayload($payload);


    $json = '';
    $response = '';

    $json = $push->getPush();
    $response = $firebase->send($regId, $json);

    return $response;
    
}

function send_firebase_notification($message,$regId)
{
		define('FIREBASE_API_KEY', 'AIzaSyBXAIzTPwO9-zGPRpQMExv95sWIEeXXtMc');
		$fcmUrl = 'https://fcm.googleapis.com/fcm/send';
		$token=$regId;

     	$notification = [
            'title' =>'Skyvoice',
            'message' => $message
        ];
        
        $extraNotificationData = ["message" => $notification];
        
        $fcmNotification = [
            //'registration_ids' => $tokenList, //multple token array
            'to'        => $token, //single token
            'data' => $notification 
        ];

        $headers = [
            'Authorization: key= AIzaSyBXAIzTPwO9-zGPRpQMExv95sWIEeXXtMc',
            'Content-Type: application/json'
        ];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
          $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        curl_close($ch);
 
        return $result;
}

?>
