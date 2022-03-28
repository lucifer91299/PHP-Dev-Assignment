<?php
include "config.php";

$data['Title'] = $_POST['tt'];
$data['Name'] = $_POST['na'];
$data['Email'] = $_POST['em'];
$data['mobile'] = $_POST['mo'];
$data['Date1'] = $_POST['dt'];
$data['time'] = $_POST['ti'];
$data['Address1'] = $_POST['ad'];
$data['Services'] = $_POST['sc'];
$data['Comments'] = $_POST['co'];

$json = json_decode(json_encode($data));
  
// // Display the output
// // echo $json->{"Title"};  
// print_r($json);
$dataarray = (array)$json;
// print_r($dataarray);

$dataTT = $json->{"Title"};
$dataNA = $json->{"Name"};
$dataEM = $json->{"Email"};
$dataMO = $json->{"mobile"};
$dataDT = $json->{"Date1"};
$dataTI = $json->{"time"};
$dataAD = $json->{"Address1"};
$dataSC = $json->{"Services"};
$dataCO = $json->{"Comments"};

// echo $dataTT;
// echo $dataAD;
// echo $dataCO;
// echo $dataEM;
//print_r($dataarray);
 $insertquery = "INSERT INTO testdata(Title, Name, Email, Phone, Address, Appointment_Date, Appointment_Time, Services, Comments) VALUES ('$dataTT', '$dataNA', '$dataEM', '$dataMO','$dataAD','$dataDT', '$dataTI', '$dataSC', '$dataCO')";
 //$select = "SELECT * FROM 'testdata' ";
 //$result = mysqli_query($con,$insertquery);
 $con->query($insertquery);
//  if ($con->query($insertquery) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $insertquery . "<br>" . $con->error;
//   }
  
  $con->close();
 //echo($result);
//echo json_encode($data);

exit;
 



?>