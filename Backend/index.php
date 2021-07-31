<?php
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Key\InMemory;
require_once("./config/Database.php");
require_once("./config/header.php");

$config = $container->get(Configuration::class);
assert($config instanceof Configuration);

$now   = new DateTimeImmutable();
$token = $config->builder()
                // Configures the issuer (iss claim)
                ->issuedBy('http://example.com')
                // Configures the audience (aud claim)
                ->permittedFor('http://example.org')
                // Configures the id (jti claim)
                ->identifiedBy('4f1g23a12aa')
                // Configures the time that the token was issue (iat claim)
                ->issuedAt($now)
                // Configures the time that the token can be used (nbf claim)
                ->canOnlyBeUsedAfter($now->modify('+1 minute'))
                // Configures the expiration time of the token (exp claim)
                ->expiresAt($now->modify('+1 hour'))
                // Configures a new claim, called "uid"
                ->withClaim('uid', 1)
                // Configures a new header, called "foo"
                ->withHeader('foo', 'bar')
                // Builds a new token
                ->getToken($config->signer(), $config->signingKey());

$DB = new Database();
$myPDO = $DB->connect();

echo json_encode(
    array(
        'message' => "sds"
    )
);
