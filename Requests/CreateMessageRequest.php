<?php


class CreateMessageRequest
{
    private $csrfToken;
    private $userMessage;

    private function __construct(?string $csrfToken, ?string $userMessage)
    {
        $this->csrfToken = $csrfToken;
        $this->userMessage = $userMessage;
    }

    public static function createFromPHPRequest()
    {
        $csrfToken = null;
        $userMessage = null;

        if (array_key_exists('csrfToken', $_REQUEST)) {
            $csrfToken = $_REQUEST['csrfToken'];
        }

        if (array_key_exists('userMessage', $_REQUEST)) {
            $userMessage = $_REQUEST['userMessage'];
        }

        return new CreateMessageRequest($csrfToken, $userMessage);
    }

    public function isValid()
    {
        if (!array_key_exists('csrfToken', $_SESSION)) {
            return false;
        }

        $validCsrfToken = $_SESSION['csrfToken'];

        if (empty($validCsrfToken)) {
            return false;
        }

        if ($this->csrfToken !== $validCsrfToken) {
            return false;
        }

        return !is_null($this->userMessage);
    }

    public function getUserMessage(): ?string
    {
        return $this->userMessage;
    }
}