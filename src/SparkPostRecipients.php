<?php

namespace PHPSparkpost;

class SparkPostRecipients {
    use MailRecipients;

    /**
     * @param string|array $address
     * @return $this
     */
    public function add($address)
    {
        $this->addresses[] = ['address' => $address];
        return $this;
    }
}