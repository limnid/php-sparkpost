<?php

namespace Tests;

use PHPSparkpost\SparkPostContent;
use PHPSparkpost\SparkPostRecipients;

class LibraryTest extends \PHPUnit_Framework_TestCase
{
    public function testTransliteration()
    {
        $content = new SparkPostContent();
        $content->setKey('api key');
        $content->from( 'Company name <noreply@company.com>');
        $content->replyTo( 'test@test.com');
        $content->subject( 'Test subject');
        $content->html( 'HTML content');

        $this->assertTrue(count($content->getFields()) > 0);

        $recipients = new SparkPostRecipients();
        $recipients->add('client@test.com');

        $this->assertTrue(count($recipients->getAddresses()) > 0);

        $mailer = new SparkPostMock();
        $mailer->addContent($content);
        $mailer->addRecipients($recipients);
        $mailer->sendMail();

        $this->assertTrue(count($mailer->getErrors()) == 0);
    }
}