<?php

class InputElement extends HtmlTag{

    public function __construct(string $type, string $name, 
                                string $value, array $attributes = [])
    {
        $attributes["type"] = $type;
        $attributes["name"] = $name;
        $attributes["value"] = $value;

        parent::__construct("input", $attributes, "", true);
    }

    public function getValue(){
        return $this->attributes["value"];
    }

    public function setValue($val){
        $this->attributes["value"] = $val;
    }

}