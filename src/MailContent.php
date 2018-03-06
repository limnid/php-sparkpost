<?php

namespace PHPSparkpost;

trait MailContent {
    protected $key;
    protected $fields = [];

    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param string $key
     * @param array $value
     * @return $this
     */
    public function addField($key, $value)
    {
        $this->fields[$key] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}