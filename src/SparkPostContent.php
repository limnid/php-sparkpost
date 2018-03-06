<?php

namespace PHPSparkpost;

class SparkPostContent {
    use MailContent;

    public function from($value)
    {
        $this->addField('from', $value);
        return $this;
    }

    public function replyTo($value)
    {
        $this->addField('reply_to', $value);
        return $this;
    }

    public function subject($value)
    {
        $this->addField('subject', $value);
        return $this;
    }

    public function html($value)
    {
        $this->addField('html', $value);
        return $this;
    }
}