<?php
require "autoload.php";



$div = new HtmlTag("div");
$div->setContent(new HtmlTag(
        "h1", 
        ["style" => "color:red;", "lang" => "fr"], 
        "Hello"
    )
);

echo $div;


$input = new InputElement("number", "age", "19", []);

echo $input;

$form = new Form("post", "action");

$form   ->addInput("number", "age", 34)
        ->addInput("text", "name", "Bob")
        ->addInput("text", "prenom", "Paul");

        var_dump($form);
//echo $form;