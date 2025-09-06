<?php

declare(strict_types=1);

namespace Lion\Request;

/**
 * Define response states.
 */
abstract class Status
{
    /**
     * Represents a correct response object.
     *
     * @const SUCCESS
     */
    public const string SUCCESS = 'success';

    /**
     * Represents an error response object.
     *
     * @const ERROR
     */
    public const string ERROR = 'error';

    /**
     * Represents a warning response object.
     *
     * @const WARNING
     */
    public const string WARNING = 'warning';

    /**
     * Represents an information response object.
     *
     * @const INFO
     */
    public const string INFO = 'info';

    /**
     * Represents a database error response object.
     *
     * @const DATABASE_ERROR
     */
    public const string DATABASE_ERROR = 'database-error';

    /**
     * Represents a session error response object.
     *
     * @const DATABASE_ERROR
     */
    public const string SESSION_ERROR = 'session-error';

    /**
     * Represents a route error response object.
     *
     * @const DATABASE_ERROR
     */
    public const string ROUTE_ERROR = 'route-error';

    /**
     * Represents a file error response object.
     *
     * @const DATABASE_ERROR
     */
    public const string FILE_ERROR = 'file-error';

    /**
     * Represents a mail error response object.
     *
     * @const DATABASE_ERROR
     */
    public const string MAIL_ERROR = 'mail-error';

    /**
     * Represents a rules error response object.
     *
     * @const RULE_ERROR
     */
    public const string RULE_ERROR = 'rule-error';

    /**
     * Represents a rules error response object.
     *
     * @const RULES_ERROR
     */
    public const string RULES_ERROR = 'rules-error';

    /**
     * Represents an authentication error response object.
     *
     * @const AUTHENTICATION_ERROR
     */
    public const string AUTHENTICATION_ERROR = 'authentication-error';
}
