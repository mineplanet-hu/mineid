<?php
    $token = $_GET['token'];
    
    $data = array(
        'token' => $token,
    );   
    
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://mineid.hu/api/verify/user");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);       
    $json = json_decode($response);
    curl_close($verify);
    
    print_r($json);
?>