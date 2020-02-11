<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://earl-xml.herokuapp.com//");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $firstname = $data->getElementsByTagName("firstname")->item(0)->nodeValue;
    $lastname = $data->getElementsByTagName("lastname")->item(0)->nodeValue;
    $address = $data->getElementsByTagName("address")->item(0)->nodeValue;
    $contact = $data->getElementsByTagName("contact")->item(0)->nodeValue;
	$email = $data->getElementsByTagName("email")->item(0)->nodeValue;

    echo "
    <ul>
    <li>firstname: <strong>$firstname</strong></li>
    <li>lastname: <strong>$lastname</strong></li>
    <li>Address: <strong>$address</strong></li>
    <li>Contact: <strong>$contact</strong></li>
	<li>email: <strong>$email</strong></li>
    </ul>";
}
