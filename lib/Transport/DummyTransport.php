<?php

declare(strict_types=1);

namespace Fazland\SkebbyRestClient\Transport;

/**
 * A dummy Transport that always returns the same response.
 * Useful for testing purposes.
 */
class DummyTransport implements TransportInterface
{
    public function executeRequest(string $uri, string $body): string
    {
        return '<?xml version="1.0" encoding="UTF-8"?>
<SkebbyApi_Public_Send_SmsEasy_Advanced generator="zend" version="1.0">
<test_send_sms_classic_report><remaining_sms>5</remaining_sms><id>1477056680</id><status>success</status></test_send_sms_classic_report>
</SkebbyApi_Public_Send_SmsEasy_Advanced>';
    }
}
