<?php
trait RandomQuote {
    public function getQuote() {
        $array = ['I am HALK!', 'JARVIS', 'IRON MAN', 'PLAYBOY', 'Philanthropist', 'Millionaire', 'Capitan America','BLACK WIDOW','LOCKY','I`M THOR'];
        return $array[mt_rand(0, count($array) - 1)];
    }
}
class Greeting {
    use RandomQuote;
    public function say($name = 'Yaroslav') {
        return "Hi, {$name}! There is a new quote for you: " . $this->getQuote();
    }
}
$greeting = new Greeting(); 
echo $greeting->say();