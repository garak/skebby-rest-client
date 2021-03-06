<?php

declare(strict_types=1);

namespace Fazland\SkebbyRestClient\Constant;

/**
 * Represents the Skebby valid Response Codes.
 */
class ResponseCodes
{
    /**
     * Represents a generic error.
     */
    public const GENERIC_ERROR = 10;

    /**
     * Represents invalid charset error.
     */
    public const INVALID_CHARSET = 11;

    /**
     * Represents some mandatory parameter in the request is not specified error.
     */
    public const MISSING_MANDATORY_PARAM = 12;

    /**
     * Represents invalid parameters in the request error.
     */
    public const INVALID_PARAMETERS = 20;

    /**
     * Represents invalid username or password error.
     */
    public const INVALID_USERNAME_OR_PASSWORD = 21;

    /**
     * Represents invalid sender syntax error.
     */
    public const INVALID_SENDER = 22;

    /**
     * Represents sender character length too long error.
     */
    public const SENDER_LENGTH_TOO_LONG = 23;

    /**
     * Represents SMS body is too long error.
     */
    public const TEXT_TOO_LONG = 24;

    /**
     * Represents invalid recipient syntax error.
     */
    public const INVALID_RECIPIENT = 25;

    /**
     * Represents missing sender error.
     */
    public const MISSING_SENDER = 26;

    /**
     * Represents too many recipients error.
     */
    public const TOO_MANY_RECIPIENTS = 27;

    /**
     * Represents account is not configured to use the Skebby SMS gateway error.
     */
    public const ACCOUNT_UNABLE_TO_USE_SMS_GATEWAY = 29;

    /**
     * Represents insufficient credit error.
     */
    public const INSUFFICIENT_CREDIT = 30;

    /**
     * Represents invalid request method (only POST is accepted) error.
     */
    public const INVALID_REQUEST_METHOD = 31;

    /**
     * Represents invalid format of delivery_start parameter error.
     */
    public const INVALID_DELIVERY_START_PARAM = 32;

    /**
     * Represents invalid encoding_scheme parameter error.
     */
    public const INVALID_ENCODING_SCHEME = 33;

    /**
     * Represents invalid validity_period (it MUST be an int, 5 <= validity_period <= 2880) parameter error.
     */
    public const INVALID_VALIDITY_PERIOD = 34;

    /**
     * Represents invalid user_reference error.
     */
    public const INVALID_USER_REFERENCE = 35;

    /**
     * Represents missing user_reference error.
     */
    public const MISSING_USER_REFERENCE = 36;

    /**
     * Represents characters not in current charset error.
     */
    public const CHARACTERS_NOT_IN_CURRENT_CHARSET = 37;

    /**
     * Represents too many alias with same VAT number error.
     */
    public const TOO_MANY_ALIAS_WITH_SAME_VAT = 38;

    /**
     * Represents invalid VAT number error.
     */
    public const INVALID_VAT = 39;

    /**
     * Represent alpha numeric sender names are allowed only for business plans error.
     */
    public const ALPHA_NUMERIC_SENDER_ALLOWED_ONLY_FOR_BUSINESS_PLANS = 40;

    /**
     * Represents already registered alpha numeric sender error.
     */
    public const ALPHA_NUMERIC_SENDER_ALREADY_REGISTERED = 41;
}
