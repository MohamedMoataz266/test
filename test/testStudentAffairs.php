<?php
include 'studentAffairs.php';

$student = new studentAffairs();
$student->setFirstName('Ahmed');
$student->setSecondName('Ali');
$student->setThirdName('Hassan');
$student->setFourthName('Omar');
$student->setNationalNumber('21596345879631');
$student->setNationality('Egyption');
$student->setRegion('Muslim');
$student->setPlaceOfBirth('Cairo');
$student->setDateOfBirth('2/3/2002');
$student->setMotherName('SamarOmarKareem');
$student->setAddress('22 Roxy Street');
$student->setPhoneNumber('01125694692');
$student->setFatherJob('Engineer');
$student->setGender('Male');
if($student->validationData()){
    echo '<script>alert("Error, Data Is Not Completed")</script>';
    return;
}
else{
echo 'Name: '.$student->getName(). '<br>';
echo 'NationalNumber: '.$student->getNationalNumber(). '<br>';
echo 'Nationality: '.$student->getNationality(). '<br>';
echo 'Place Of Birth: '.$student->getPlaceOfBirth(). '<br>';
echo 'Date Of Birth: '.$student->getDateOfBirth(). '<br>';
echo 'Mother Name: '.$student->getMotherName(). '<br>';
echo 'Address: '.$student->getAddress(). '<br>';
echo 'Phone Number: '.$student->getPhoneNumber(). '<br>';
echo 'Father Job: '.$student->getFatherJob(). '<br>';
echo 'Gender: '.$student->getGender(). '<br>';
for($i=0;$i<count($student->getAgeInOctober());$i++)
echo 'Age In October: '.$student->getAgeInOctober()[$i]. '<br>';
}
?>