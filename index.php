<?php

$welcomeMessage = "Good morning";
$age = 25;
$temp = 1.5;
$isTodayFriday = true;
$array = [$welcomeMessage,$age,$temp,$isTodayFriday];

//print_r($array[3]);

//asociativen masiv

$assocArray=[
    "welcome" => $welcomeMessage,
    "age" => $age,
    "temp" => $temp,
    "isTodayFriday" => $isTodayFriday
];

//for($i=0;$i<sizeof($array);$i++)
//{
 //   echo $array[$i];
   // echo"<br>";
//}

//$i = 0;
//while ($i<sizeof($array))
//{
  //  echo $array[$i] . "<br>";
    //$i++;
//}

function findDogBreed($nameOfDog)
{
    switch($nameOfDog)
    {
        case"Kiara":
            echo "Husky <br> ";
        case"Rex":
            echo "H <br> ";
        case "Sharo":
            echo "u <br> ";
        case "Maxi":
            echo "s <br> ";
        case "Mike":
            echo "y <br> ";
        default:
            echo "Breed not found";
    }
}
findDogBreed("Rex");