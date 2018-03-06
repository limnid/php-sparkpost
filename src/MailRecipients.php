<?php

namespace PHPSparkpost;

trait MailRecipients {
    protected $addresses = [];

    /**
     * @param string|array $address
     * @return $this
     */
    public function add($address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * @return array
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}