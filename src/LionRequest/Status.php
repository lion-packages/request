<?php

declare(strict_types=1);

namespace Lion\Request;

/**
 * Define response states
 *
 * @package Lion\Request
 */
class Status
{
    /**
     * [Represents a correct response object]
     *
     * @const SUCCESS
     */
    const SUCCESS = 'success';

    /**
     * [Represents an error response object]
     *
     * @const ERROR
     */
    const ERROR = 'error';

    /**
     * [Represents a warning response object]
     *
     * @const WARNING
     */
    const WARNING = 'warning';

    /**
     * [Represents an information response object]
     *
     * @const INFO
     */
    const INFO = 'info';

    /**
     * [Represents a database error response object]
     *
     * @const DATABASE_ERROR
     */
    const DATABASE_ERROR = 'database-error';

    /**
     * [Represents a sesion error response object]
     *
     * @const DATABASE_ERROR
     */
    const SESSION_ERROR = 'session-error';

    /**
     * [Represents a route error response object]
     *
     * @const DATABASE_ERROR
     */
    const ROUTE_ERROR = 'route-error';

    /**
     * [Represents a file error response object]
     *
     * @const DATABASE_ERROR
     */
    const FILE_ERROR = 'file-error';

    /**
     * [Represents a mail error response object]
     *
     * @const DATABASE_ERROR
     */
    const MAIL_ERROR = 'mail-error';

    /**
     * [Represents a rules error response object]
     *
     * @const RULE_ERROR
     */
    const RULE_ERROR = 'rule-error';
}
