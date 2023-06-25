<?php

require_once 'BaseController.php';

class ShowCreateMessageController extends BaseController
{
    public function __invoke()
    {
        return $this->view(
            'CreateMessageView'
        );
    }
}