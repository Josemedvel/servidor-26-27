<?php
class ErrorPropio extends Exception{
    public function __construct(string $message = ""){
        parent::__construct($message);
    }
}

class LanzaErrores{
    public function fallar(){
        throw new ErrorPropio("Un error de lógica de negocio");
    }
}

$l = new LanzaErrores();
try{
    $l->fallar();
} catch (ErrorPropio $ex) {
    echo $ex->getLine();
    echo "<br>";
    echo $ex->getMessage();
}
