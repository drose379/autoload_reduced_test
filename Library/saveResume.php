<?php

namespace drose379\Library;
use drose379\View\viewEngine;

class saveResume {
    
public function run() {
    $this->saveResume($_POST);
}

public function setConnection() {
    $this->PDOconnect = new PDO ('mysql:host=localhost;dbname=resumesystem','root','root');
}
    
public function getConnection() {
    if (! $this->PDOconnect instanceof PDO) {
        $this->setConnection();   
    }
    return $this->PDOconnect;
}
    
public function saveResume($Resume) {
    $Insert = new insertClass($this->getConnection());
    $Insert->Save($Resume);
}

}