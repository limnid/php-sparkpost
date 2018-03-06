<?php

namespace PHPSparkpost;

class SparkPost {
    use Mailer;

    private $url = 'https://api.sparkpost.com/api/v1/transmissions';

    public function sendMail()
    {
        $api_key = $this->getContent()->getKey();
        $body = json_encode([
            'content' => $this->getContent()->getFields(),
            'recipients' => $this->getRecipients()->getAddresses()
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: '.$api_key,
            'Content-type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);

        $this->results = isset($result['results']) ? $result['results'] : [];
        $this->errors = isset($result['errors']) ? $result['errors'] : [];
    }
}