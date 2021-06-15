<?php

class HtmlTag {

    /**
     * @var string
     */
    protected $tagName;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var boolean
     */
    protected $autoClosed = false;

    /**
     * @var string
     */
    protected $content = "";

    public function __construct($tagName, $attributes = [], 
                                $content = "", $autoClosed= false)
    {
        $this->tagName = $tagName;
        $this->attributes = $attributes;
        $this->content = $content; 
        $this->autoClosed = $autoClosed;
    }

    private function getAttributesAsString(){
        $list = "";
        foreach($this->attributes as $key=>$val){
            $list .= "{$key}=\"{$val}\" ";
        }
        return $list;
    }

    private function getOpeningTag(){
        $attr = $this->getAttributesAsString();
        return "<{$this->tagName} $attr>";
    }

    private function getClosingTag(){
        return "</{$this->tagName}>";
    }

    public function getHtml(){
        $html = $this->getOpeningTag();

        if( ! $this->autoClosed){
            //$html = $html . $this->content;
            $html .=  $this->content;
            $html = $html . $this->getClosingTag();
        }
        
        return $html;
    }

    public function __toString()
    {
        return $this->getHtml();
    }

    public function setContent($content){
        $this->content = $content;
    }

}