<?php
  $prof = kansu();
  echo $prof["name"]."<br>";
  echo $prof["birth"]."<br>";
  echo $prof["adress"]."<br>";

function kansu() {
  $prof = array(
  "ID" => "3mizuho3",
  "name" => "Mizuho Suzuki",
  "birth" =>"13/10/1990",
  "adress" => "Yokohama");

  return $prof;
}
