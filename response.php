
 <?php

require_once 'Atompay.php';

$atompay = new Atompay();

$response = $atompay->atomResponse('2ebef1f2f370b2ff44'); // change your response hash key
 // print_r($response);exit();
if (!is_array($response['f_code']) == 'F') {
  echo "<script>
  alert('Failed');
  window.location.href='http://localhost:81/donationpayment/ ';
  </script>";
}

if (strtolower($response['f_code']) == 'Ok') { 
  //sucess
    echo "<script>
  alert('success');
  window.location.href='http://localhost:81/donationpayment/ ';
  </script>";
} elseif (strtolower($response['f_code']) == 'C') {
  // Cancel
    echo "<script>
  alert('cancel');
  window.location.href='http://localhost:81/donationpayment/ ';
  </script>";
} else {
  // Failed
     echo "<script>
  alert('error');
  window.location.href='http://localhost:81/donationpayment/ ';
  </script>";
}


 $urls = 'http://127.0.0.1:8000/api/createdonation';


  $response['name']=$response['udf1'];
  $response['email']=$response['udf2'];
  $response['mobile']=$response['udf3'];
  $response['comments']=$response['udf4'];
  $response['address']=$response['udf5'];

$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($response),
    )
    );
  $context  = stream_context_create($options);
  $result = file_get_contents($urls, false, $context);

?>
<!-- 8760870314@ibl -->