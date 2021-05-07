<?php
class User{
    private $firstName;
    private $secondName;
    private $thirdName;
    private $forthName;
    private $nationalNumber;
    private $birthDate;
    private $gender;


public function setFirstName($firstName){
    $this->firstName = $firstName;
}
public function setSecondName($secondName){
    $this->secondName = $secondName;
}
public function setThirdName($thirdName){
    $this->thirdName = $thirdName;
}
public function setForthName($forthName){
    $this->forthName = $forthName;
}
public function setNationalNumber($nationalNumber){
    $this->nationalNumber = $nationalNumber;
}
public function setBirthDate($birthDate){
    $this->birthDate = $birthDate;
}
public function setGender($gender){
    $this->gender = $gender;
}
public function getFirstName(){
    return $this->firstName;
}
public function getSecondName(){
    return $this->secondName;
}
public function getThirdName(){
    return $this->thirdName;
}
public function getForthName(){
    return $this->forthName;
}
public function getNationalNumber(){
    return $this->nationalNumber;
}
public function getBirthDate(){
    return $this->birthDate;
}
public function getGender(){
    return $this->gender;
}
public function validationData(){
    $flag = true;
    if($this->firstName == '' || 
       $this->secondName == '' || 
       $this->thirdName == '' || 
       $this->forthName == '' ||
       $this->gender == ''||
       $this->birthDate == ''){
       return $flag;
    }
    else if (strlen($this->nationalNumber) >= 15 || strlen($this->nationalNumber) <= 13){
        return $flag;
    }
    include "dB.php";   
    $sql = mysqli_query($conn, "SELECT nationalNumber FROM Registration");
    while($row = mysqli_fetch_array($sql)){
        if($row['nationalNumber'] == $this->nationalNumber){
            return $flag;
        }
    }
        $flag = false;
        return $flag;
}
public function getEmail(){
    return ($this->firstName.$this->secondName.$this->thirdName.$this->forthName.'@amounegypt.com');
}
public function getPassword(){
    $string = $this->birthDate;
    $token = strtok($string, "/");
    $bN = array(); 
    while ($token !== false){
        $bN[] = $token;
        $token = strtok("/");
}
    $bN[] = substr($this->nationalNumber, 10, 14);
    $p = array();
    for($i=0;$i<count($bN); $i++){
    array_push($p, (int)$bN[$i]);
 }
    $pass = implode("", $p);   
return $pass;    
}
}
?>


</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>