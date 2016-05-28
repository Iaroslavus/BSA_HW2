<?php
require(__DIR__ . '/vendor/autoload.php');
class Application {
    public function __construct() {
        $this->Greeting = new Greeting();
    }
    protected function showText() {
        echo $this->Greeting->say();
    }
    public function start() {
        $this->showText();
    }
}
$app = new Application();
$app->start();