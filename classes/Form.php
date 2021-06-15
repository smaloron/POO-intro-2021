<?php
/**
 * Cette classe représente un formulaire HTML 
 */
class Form {

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $action;

    /**
     * La liste des champs, un tableau d'instances d'InputElement
     * @var array<InputElement>
     */
    private $fields = [];

    /**
     * Constructeur de la classe
     *
     * @param string $method
     * @param string $action
     */
    public function __construct(string $method, string $action = null)
    {
        $this->method = $method;
        $this->action = $action;
    }

    /**
     * Ajout d'un champ Input au formulaire
     * Les champs sont stockés dans un tableau associatif $fields
     * dont les clefs sont les attibuts name des champs de formulaire
     * 
     * Les valeurs du tableau $fields sont des instances de InputElement
     * 
     * La méthode retourne $this pour permettre l'appel en chaîne
     * comme ceci
     * $form->addInput(..)->addInput(..)
     *
     * @param string $type
     * @param string $name
     * @param string $value
     * @return Form
     */
    public function addInput(string $type, string $name, string $value = ""){
        $this->fields[$name] = new InputElement($type, $name, $value);
        return $this;
    }

    /**
     * Boucle sur le tableau des champs ($fields)
     * et retourne le code html de tous les inputs de ce tableau
     *
     * @return string
     */
    private function getFieldsAsHtml(){
        $html = "";

        foreach($this->fields as $element){
            $html .= $element;
        }

        return $html;
    }

    /**
     * Retourne le code html complet du formulaire avec ses champs
     * Pour cela on utilise une instance de HtmlTag 
     * pour créer la balise formulaire
     *
     * @return string
     */
    public function __toString()
    {
        // Les attributs
        $attributes = [];
        $attributes["method"] = $this->method;
        if(! empty($this->action) ){
            $attributes["action"] = $this->action;
        }
        // Création de la balise form
        $form = new HtmlTag("form", $attributes, $this->getFieldsAsHtml());

        return $form;
    }

}