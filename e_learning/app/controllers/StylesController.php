<?php 
namespace Controllers;
use Models\Styles;

class StylesController extends Styles
{

private $stylesModel;

    public function __construct() {
        $this->stylesModel = new Styles();
    }
    public function putStyle() {
        
    }
}