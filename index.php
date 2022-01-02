<?php

$text = "[Lorem] ipsum dolor sit amet, [consectetur] adipiscing elit. Mauris dui [metus], suscipit nec [tempor ut], consequat ut nisl. Nulla consectetur.";
preg_match_all("/\\[(.*?)\\]/", $text, $matches); 
$newtext = "";
foreach($matches as $match){
   $newtext = implode(' ', $match);
}
var_dump($newtext);die;
