<?php

require_once 'Controllers/BaseController.php';
require_once 'Requests/CreateMessageRequest.php';

class CreateMessageController extends BaseController
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function sendEmail($message) {
        $message = wordwrap($message,70);
        // send email
        mail("someone@example.com","My subject",$message);
    }

    public function __invoke(CreateMessageRequest $request)
    {
        if (!$request->isValid()) {
            return $this->view(
                'CreateMessageView'
            );
        }

        $this->database->insertMessage($request->getUserMessage());

        $lastUserMessage = $this->database->lastInsertedMessage();

        //send email
//        $this->sendEmail($lastUserMessage);

        return $this->view(
            'CreateMessageView',
            compact('lastUserMessage')
        );
    }
}