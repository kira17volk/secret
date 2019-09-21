<?php

class controllerMain extends Controller {
    protected $templateDir = 'template';

    public function actionPage() {
        // work with models
        $model = $this -> getModel('test');
        $model -> insertFakeData();

        // render view at the end
        echo $this -> renderLayout(['lo_content' =>
            $this -> renderTemplate('auth')
        ]);
    }
}
