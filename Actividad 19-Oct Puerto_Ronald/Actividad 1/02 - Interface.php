<?php

interface Animal {
    public function hacer_sonido();
}

class Perro implements Animal {
    public function hacer_sonido() {
        echo "Guau Guau";
    }
}

class Gato implements Animal {
    public function hacer_sonido() {
        echo "Miau Miau";
    }
}

?>