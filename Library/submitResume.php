<?php

namespace drose379\Library;
use drose379\View\viewEngine;

class submitResume {
    
public function run() {
    $this->submitResume();
}   

public function submitResume() {
    $Resume = new FormatResume($_POST);
    $viewEngine = new viewEngine('View/resumeTemplate.php');
    $viewEngine->attach("resumeObject" , $Resume);
    echo $viewEngine->view();
    #Save the resume to DB
    #Call the class that saves the resume and pass it $_POST
}

}
