<?php
namespace App\Models\SubModels;

class User {
    var $name;
    function setName($new_name) {
        $this->name = $new_name;
    }

    function getName() {
        return $this->name;
    }
}
?>
