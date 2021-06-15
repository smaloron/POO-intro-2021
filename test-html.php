<?php
require "autoload.php";



$div = new HtmlTag("div");
$div->setContent(new HtmlTag(
        "h1", 
        ["style" => "color:red;", "lang" => "fr"], 
        "Hello"
    )
);

//echo $div;


$input = new InputElement("number", "age", "19", []);

//echo $input;

$data = [
    "age" => "45",
    "name" => "Brahé",
    "prenom" => "Tycho",
    "profession" => "Astronome"
];

$form = new Form("post", "action");

$form   ->addInput("number", "age", "34")
        ->addInput("text", "name", "Bob")
        ->addInput("text", "prenom", "Paul")
        ->addInput("text", "profession", "Formateur");

$form->setData($data);        
echo $form;