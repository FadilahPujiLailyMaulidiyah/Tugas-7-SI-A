<?php
class Controller {
    public function loadModel($modelName) {
        include_once "models/Model.class.php";
        include_once "models/$modelName.class.php";
        return new $modelName;
    }

    public function loadView($viewName, $data = []) {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        include_once "views/$viewName.php";
    }
}
?>
