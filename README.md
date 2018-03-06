# UZ Translit

**Install**
```$xslt
composer install
```

**Run test**
```$xslt
php vendor/bin/phpunit
```

**Example**

```$xslt
$content = new SparkPostContent();
$content->setKey('api key');
$content->from( 'Company name <noreply@company.com>');
$content->replyTo( 'test@test.com');
$content->subject( 'Test subject');
$content->html( 'HTML content');

$recipients = new SparkPostRecipients();
$recipients->add('client@test.com');

$mailer = new SparkPost();
$mailer->addContent($content);
$mailer->addRecipients($recipients);
$mailer->sendMail();
```