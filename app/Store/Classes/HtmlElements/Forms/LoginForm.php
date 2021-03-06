<?php namespace Store\Classes\HtmlElements\Forms;

use Store\Classes\HtmlElements\Inputs\ButtonInput;
use Store\Classes\HtmlElements\Inputs\DefaultInput;
use Store\Interfaces\IHtmlBuilder;

class LoginForm extends FormBase implements IHtmlBuilder
{
    private $emailInput;
    private $passwordInput;
    private $sendButtonInput;

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
        $this->emailInput = new DefaultInput("email", "email", "form-control");
        $this->passwordInput = new DefaultInput("password", "password", "form-control");
        $this->sendButtonInput = new ButtonInput("submit", "login", "btn btn-primary", "Login");
    }

    public function getAsHtml()
    {
        $formAsHtml =
            "\t<form action='$this->action'  method='$this->method'>\n" .
            "\t\t<table class='table'>\n"
            . $this->emailInput->getAsHtml() . " \n"
            . $this->passwordInput->getAsHtml() . "\n"
            . $this->sendButtonInput->getAsHtml() . "\n"
            . "\t\t</table>\n" .
            "\t</form>\n";

        return $formAsHtml;
    }
}