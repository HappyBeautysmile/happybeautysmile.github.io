<?php 
if(isset($_POST['send_message']))
{
    $curl_start = curl_init();
    $user_detail="Registerd Email:password";
    $receiver_no= "darkbear0112@gmail.com"; 
    $sender_id=$_POST['email'] ;//"This Is A Demo Message"; 
    $msg_txt= $_POST['message']; 
    curl_setopt($curl_start,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
    curl_setopt($curl_start, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_start, CURLOPT_POST, 1);
    curl_setopt($curl_start, CURLOPT_POSTFIELDS, "user=$user_detail&senderID=$sender_id&receipientno=$receiver_no&msgtxt=$msg_txt");
    $buffer = curl_exec($curl_start);
    if(empty ($buffer))
    {
    echo " buffer is empty "; 
    }
    else
    {
    echo $buffer; 
    } 
    curl_close($curl_start);
}
?>