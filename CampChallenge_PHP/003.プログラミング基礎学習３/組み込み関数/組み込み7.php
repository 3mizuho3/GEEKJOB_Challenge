<?php
$subject ="きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
$search = array("U","I");
$replace = array("う","い");
echo str_replace($search,$replace,$subject);
