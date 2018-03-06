<?php

namespace Tests;

use PHPSparkpost\Mailer;

class SparkPostMock {
    use Mailer;

    public function sendMail()
    {
        $this->results = [];
        $this->errors = [];
    }
}