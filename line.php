 <?php
  

function send_LINE($msg){
 $access_token = '2Gx/H04PHFG4WFjfflBPbAPa/FoYR9Uf8uvHPS6xdEVHmw3IrK913vGDjMQuBC67tp1jXP2ZB0WnZ/ifsMlkv97BDtuRKP3p7DFKTwJIEGYPTUs9UiDzvQDLhQ8PQr2v6KkZQ+20mM8DKMeRwRKi0AdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'de736c21a7512b51531a76bbfcbeeb05',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
