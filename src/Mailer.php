<?php

namespace PHPSparkpost;

trait Mailer {
    private $results = [];
    private $errors = [];
    private $content;
    private $recipients;

    /**
     * @param MailContent $content
     * @return $this
     */
    public function addContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param MailRecipients $recipients
     * @return $this
     */
    public function addRecipients($recipients)
    {
        $this->recipients = $recipients;
        return $this;
    }

    /**
     * @return MailRecipients
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @return MailContent
     */
    public function getContent()
    {
        return $this->content;
    }

    public function sendMail() {}

    /**
     * @return array
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getResults() {
        return $this->results;
    }
}