<?php

namespace drose379\Library;
use drose379\View\viewEngine;

class newResume {

public function run() {
    echo "We in";
}

public function newResume() {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        $viewEngine = new viewEngine('View/formTemplate.php');
        echo $viewEngine->view();
    }
    else {
        //Instantiate class that views the completed resume.
    }
}
    
}