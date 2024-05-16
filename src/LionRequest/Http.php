<?php

declare(strict_types=1);

namespace Lion\Request;

/**
 * Defines HTTP status codes and request methods as constants
 *
 * This class provides a comprehensive list of HTTP status codes and request
 * methods that can be used to handle HTTP responses and requests within an
 * application
 *
 * @package Lion\Request
 */
class Http
{
    /**
     * [The HTTP 100 Continue informational status response code indicates that everything
     * so far is OK and that the client should continue with the request or ignore it if
     * it is already finished]
     *
     * @const HTTP_CONTINUE
     */
    const HTTP_CONTINUE = 100;

    /**
     * [The HTTP 101 Switching Protocols informational status code is sent in response to
     * an Upgrade request header from the client, and indicates the protocol the server
     * is switching to]
     *
     * @const HTTP_SWITCHING_PROTOCOLS
     */
    const HTTP_SWITCHING_PROTOCOLS = 101;

    /**
     * [The HTTP 102 Processing status code is an interim response used to inform the client
     * that the server has accepted the complete request, but has not yet completed it]
     *
     * @const HTTP_PROCESSING
     */
    const HTTP_PROCESSING = 102;

    /**
     * [The HTTP 103 Early Hints status code is primarily intended to be used with the Link header,
     * letting the user agent start preloading resources while the server prepares a response]
     *
     * @const HTTP_EARLY_HINTS
     */
    const HTTP_EARLY_HINTS = 103;

    /**
     * [The HTTP 200 OK success status response code indicates that the request
     * has succeeded A 200 response is cacheable by default]
     *
     * @const HTTP_OK
     */
    const HTTP_OK = 200;

    /**
     * [The HTTP 201 Created success status response code indicates that the request
     * has succeeded and a new resource has been created as a result]
     *
     * @const HTTP_CREATED
     */
    const HTTP_CREATED = 201;

    /**
     * [The HTTP 202 Accepted status code indicates that the request has been received
     * but not yet acted upon]
     *
     * @const HTTP_ACCEPTED
     */
    const HTTP_ACCEPTED = 202;

    /**
     * [The HTTP 203 Non-Authoritative Information response status code indicates that the
     * request was successful but the enclosed payload has been modified from that of the
     * origin server's 200 OK response by a transforming proxy]
     *
     * @const HTTP_NON_AUTHORITATIVE_INFORMATION
     */
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * [The HTTP 204 No Content success status response code indicates that a request has
     * succeeded, but that the client doesn't need to navigate away from its current page]
     *
     * @const HTTP_NO_CONTENT
     */
    const HTTP_NO_CONTENT = 204;

    /**
     * [The HTTP 205 Reset Content status code indicates that the server has fulfilled the
     * request and desires that the client resets the document view, which caused the request
     * to be sent, to its original state as received from the origin server]
     *
     * @const HTTP_RESET_CONTENT
     */
    const HTTP_RESET_CONTENT = 205;

    /**
     * [The HTTP 206 Partial Content success status response code indicates that the request
     * has succeeded and has the body content of the range requested by the client]
     *
     * @const HTTP_PARTIAL_CONTENT
     */
    const HTTP_PARTIAL_CONTENT = 206;

    /**
     * [The HTTP 207 Multi-Status status code provides status for multiple independent
     * operations]
     *
     * @const HTTP_MULTI_STATUS
     */
    const HTTP_MULTI_STATUS = 207;

    /**
     * [The HTTP 208 Already Reported status code is used inside a <dav:propstat> response
     * element to avoid enumerating the internal members of multiple bindings to the same
     * collection repeatedly]
     *
     * @const HTTP_ALREADY_REPORTED
     */
    const HTTP_ALREADY_REPORTED = 208;

    /**
     * [The HTTP 226 IM Used success status code indicates that the server has fulfilled a
     * request for the resource, and the response is a representation of the result of one or
     * more instance-manipulations applied to the current instance]
     *
     * @const HTTP_IM_USED
     */
    const HTTP_IM_USED = 226;

    /**
     * [The HTTP 300 Multiple Choices redirect status response code indicates that the request
     * has more than one possible response The user-agent or user should choose one of them]
     *
     * @const HTTP_MULTIPLE_CHOICES
     */
    const HTTP_MULTIPLE_CHOICES = 300;

    /**
     * [The HTTP 301 Moved Permanently redirect status response code indicates that the resource
     * requested has been definitively moved to the URL given by the Location headers]
     *
     * @const HTTP_MOVED_PERMANENTLY
     */
    const HTTP_MOVED_PERMANENTLY = 301;

    /**
     * [The HTTP 302 Found redirect status response code indicates that the resource requested
     * has been temporarily moved to the URL given by the Location header]
     *
     * @const HTTP_FOUND
     */
    const HTTP_FOUND = 302;

    /**
     * [The HTTP 303 See Other redirect status response code indicates that the redirects don't
     * link to the newly uploaded resources but to another page]
     *
     * @const HTTP_SEE_OTHER
     */
    const HTTP_SEE_OTHER = 303;

    /**
     * [The HTTP 304 Not Modified client redirection response code indicates that there is no need
     * to retransmit the requested resources]
     *
     * @const HTTP_NOT_MODIFIED
     */
    const HTTP_NOT_MODIFIED = 304;

    /**
     * [The HTTP 305 Use Proxy response status code indicates that the requested response must be
     * accessed by a proxy]
     *
     * @const HTTP_USE_PROXY
     */
    const HTTP_USE_PROXY = 305;

    /**
     * [Unused]
     * This response code is no longer used; it is just reserved
     * It was used in a previous version of the HTTP/11 specification
     *
     * @const HTTP_UNUSED
     */
    const HTTP_UNUSED = 306;

    /**
     * [The HTTP 307 Temporary Redirect redirect status response code indicates that the resource
     * requested has been temporarily moved to the URL given by the Location headers]
     *
     * @const HTTP_TEMPORARY_REDIRECT
     */
    const HTTP_TEMPORARY_REDIRECT = 307;

    /**
     * [The HTTP 308 Permanent Redirect redirect status response code indicates that the resource
     * requested has been definitively moved to the URL given by the Location headers]
     *
     * @const HTTP_PERMANENT_REDIRECT
     */
    const HTTP_PERMANENT_REDIRECT = 308;

    /**
     * [The HTTP 400 Bad Request response status code indicates that the server
     * cannot or will not process the request due to something that is perceived
     * to be a client error]
     *
     * @const HTTP_BAD_REQUEST
     */
    const HTTP_BAD_REQUEST = 400;

    /**
     * [The HTTP 401 Unauthorized response status code indicates that the request
     * has not been applied because it lacks valid authentication credentials for
     * the target resource]
     *
     * @const HTTP_UNAUTHORIZED
     */
    const HTTP_UNAUTHORIZED = 401;

    /**
     * [The HTTP 402 Payment Required response status code is reserved for future
     * use This status code is primarily intended for use in digital payment systems]
     *
     * @const HTTP_PAYMENT_REQUIRED
     */
    const HTTP_PAYMENT_REQUIRED = 402;

    /**
     * [The HTTP 403 Forbidden client error status response code indicates that
     * the server understood the request but refuses to authorize it]
     *
     * @const HTTP_FORBIDDEN
     */
    const HTTP_FORBIDDEN = 403;

    /**
     * [The HTTP 404 Not Found response status code indicates that the server
     * cannot find the requested resource]
     *
     * @const HTTP_NOT_FOUND
     */
    const HTTP_NOT_FOUND = 404;

    /**
     * [The HTTP 405 Method Not Allowed response status code indicates that the
     * request method is known by the server but is not supported by the target resource]
     *
     * @const HTTP_METHOD_NOT_ALLOWED
     */
    const HTTP_METHOD_NOT_ALLOWED = 405;

    /**
     * [The HTTP 406 Not Acceptable response status code indicates that the server
     * cannot produce a response matching the list of acceptable values defined
     * in the request's proactive content negotiation headers]
     *
     * @const HTTP_NOT_ACCEPTABLE
     */
    const HTTP_NOT_ACCEPTABLE = 406;

    /**
     * [The HTTP 407 Proxy Authentication Required status code is similar to 401
     * Unauthorized, but it indicates that the client needs to authenticate itself
     * in order to use a proxy]
     *
     * @const HTTP_PROXY_AUTHENTICATION_REQUIRED
     */
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * [The HTTP 408 Request Timeout response status code means that the server
     * would like to shut down this unused connection]
     *
     * @const HTTP_REQUEST_TIMEOUT
     */
    const HTTP_REQUEST_TIMEOUT = 408;

    /**
     * [The HTTP 409 Conflict response status code indicates a request conflict
     * with the current state of the target resource]
     *
     * @const HTTP_CONFLICT
     */
    const HTTP_CONFLICT = 409;

    /**
     * [The HTTP 410 Gone response status code indicates that the target resource
     * is no longer available at the origin server and that this condition is likely
     * to be permanent]
     *
     * @const HTTP_GONE
     */
    const HTTP_GONE = 410;

    /**
     * [The HTTP 411 Length Required client error response code indicates that the
     * server refuses to accept the request without a defined Content-Length header]
     *
     * @const HTTP_LENGTH_REQUIRED
     */
    const HTTP_LENGTH_REQUIRED = 411;

    /**
     * [The HTTP 412 Precondition Failed client error response code indicates that
     * access to the target resource has been denied]
     *
     * @const HTTP_PRECONDITION_FAILED
     */
    const HTTP_PRECONDITION_FAILED = 412;

    /**
     * [The HTTP 413 Payload Too Large response status code indicates that the request
     * entity is larger than limits defined by the server]
     *
     * @const HTTP_PAYLOAD_TOO_LARGE
     */
    const HTTP_PAYLOAD_TOO_LARGE = 413;

    /**
     * [The HTTP 414 URI Too Long response status code indicates that the URI requested
     * by the client is longer than the server is willing to interpret]
     *
     * @const HTTP_URI_TOO_LONG
     */
    const HTTP_URI_TOO_LONG = 414;

    /**
     * [The HTTP 415 Unsupported Media Type response status code indicates that the
     * server refuses to accept the request because the payload format is in an unsupported format]
     *
     * @const HTTP_UNSUPPORTED_MEDIA_TYPE
     */
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * [The HTTP 416 Range Not Satisfiable response status code indicates that none
     * of the ranges in the Range header field overlap the current extent of the selected resource]
     *
     * @const HTTP_RANGE_NOT_SATISFIABLE
     */
    const HTTP_RANGE_NOT_SATISFIABLE = 416;

    /**
     * [The HTTP 417 Expectation Failed response status code indicates that the expectation
     * given in the request's Expect header could not be met by at least one of the inbound servers]
     *
     * @const HTTP_EXPECTATION_FAILED
     */
    const HTTP_EXPECTATION_FAILED = 417;

    /**
     * [The HTTP 418 I'm a teapot client error response code indicates that the server
     * refuses to brew coffee because it is a teapot]
     *
     * @const HTTP_IM_A_TEAPOT
     */
    const HTTP_IM_A_TEAPOT = 418;

    /**
     * [The HTTP 421 Misdirected Request status code indicates that the request was directed
     * at a server that is not able to produce a response]
     *
     * @const HTTP_MISDIRECTED_REQUEST
     */
    const HTTP_MISDIRECTED_REQUEST = 421;

    /**
     * [The HTTP 422 Unprocessable Entity response status code means the server understands
     * the content type of the request entity, and the syntax of the request entity is correct,
     * but it was unable to process the contained instructions]
     *
     * @const HTTP_UNPROCESSABLE_ENTITY
     */
    const HTTP_UNPROCESSABLE_ENTITY = 422;

    /**
     * [The HTTP 423 Locked status code means the resource that is being accessed is locked]
     *
     * @const HTTP_LOCKED
     */
    const HTTP_LOCKED = 423;

    /**
     * [The HTTP 424 Failed Dependency status code means that the request failed because it
     * depended on another request and that request failed]
     *
     * @const HTTP_FAILED_DEPENDENCY
     */
    const HTTP_FAILED_DEPENDENCY = 424;

    /**
     * [The HTTP 425 Too Early status code indicates that the server is unwilling to risk
     * processing a request that might be replayed]
     *
     * @const HTTP_TOO_EARLY
     */
    const HTTP_TOO_EARLY = 425;

    /**
     * [The HTTP 426 Upgrade Required response code indicates that the server refuses to
     * perform the request using the current protocol but might be willing to do so after
     * the client upgrades to a different protocol]
     *
     * @const HTTP_UPGRADE_REQUIRED
     */
    const HTTP_UPGRADE_REQUIRED = 426;

    /**
     * [The HTTP 428 Precondition Required status code indicates that the origin server requires
     * the request to be conditional]
     *
     * @const HTTP_PRECONDITION_REQUIRED
     */
    const HTTP_PRECONDITION_REQUIRED = 428;

    /**
     * [The HTTP 429 Too Many Requests response status code indicates that the user has sent too
     * many requests in a given amount of time ("rate limiting")]
     *
     * @const HTTP_TOO_MANY_REQUESTS
     */
    const HTTP_TOO_MANY_REQUESTS = 429;

    /**
     * [The HTTP 431 Request Header Fields Too Large response status code indicates that the server
     * is unwilling to process the request because its header fields are too large]
     *
     * @const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE
     */
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * [The HTTP 451 Unavailable For Legal Reasons client error response code indicates that the
     * user requested a resource that is not available due to legal reasons]
     *
     * @const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS
     */
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * [The HTTP 499 Client Closed Request response status code is used when the client closes
     * the connection before the server answers the request]
     *
     * @const HTTP_CLIENT_CLOSED_REQUEST
     */
    const HTTP_CLIENT_CLOSED_REQUEST = 499;

    /**
     * [The HTTP 500 Internal Server Error response status code indicates that the server
     * encountered an unexpected condition that prevented it from fulfilling the request]
     *
     * @const HTTP_INTERNAL_SERVER_ERROR
     */
    const HTTP_INTERNAL_SERVER_ERROR = 500;

    /**
     * [The HTTP 501 Not Implemented server error response code means that the server does
     * not support the functionality required to fulfill the request]
     *
     * @const HTTP_NOT_IMPLEMENTED
     */
    const HTTP_NOT_IMPLEMENTED = 501;

    /**
     * [The HTTP 502 Bad Gateway server error response code indicates that the server, while
     * acting as a gateway or proxy, received an invalid response from the inbound server it accessed
     * while attempting to fulfill the request]
     *
     * @const HTTP_BAD_GATEWAY
     */
    const HTTP_BAD_GATEWAY = 502;

    /**
     * [The HTTP 503 Service Unavailable server error response code indicates that the server
     * is not ready to handle the request]
     *
     * @const HTTP_SERVICE_UNAVAILABLE
     */
    const HTTP_SERVICE_UNAVAILABLE = 503;

    /**
     * [The HTTP 504 Gateway Timeout server error response code indicates that the server, while
     * acting as a gateway or proxy, did not get a response in time from the upstream server
     * that it needed in order to complete the request]
     *
     * @const HTTP_GATEWAY_TIMEOUT
     */
    const HTTP_GATEWAY_TIMEOUT = 504;

    /**
     * [The HTTP 505 HTTP Version Not Supported server error response code indicates that the server
     * does not support the HTTP protocol version used in the request]
     *
     * @const HTTP_VERSION_NOT_SUPPORTED
     */
    const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * [The HTTP 506 Variant Also Negotiates server error response code indicates that the server
     * has an internal configuration error: the chosen variant resource is configured to engage
     * in transparent content negotiation itself, and is therefore not a proper end point in the
     * negotiation process]
     *
     * @const HTTP_VARIANT_ALSO_NEGOTIATES
     */
    const HTTP_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * [The HTTP 507 Insufficient Storage server error response code indicates that the server is
     * unable to store the representation needed to complete the request]
     *
     * @const HTTP_INSUFFICIENT_STORAGE
     */
    const HTTP_INSUFFICIENT_STORAGE = 507;

    /**
     * [The HTTP 508 Loop Detected status code indicates that the server terminated an operation
     * because it encountered an infinite loop while processing a request with "Depth: infinity"]
     *
     * @const HTTP_LOOP_DETECTED
     */
    const HTTP_LOOP_DETECTED = 508;

    /**
     * [The HTTP 510 Not Extended server error response code indicates that further extensions to
     * the request are required for the server to fulfill it]
     *
     * @const HTTP_NOT_EXTENDED
     */
    const HTTP_NOT_EXTENDED = 510;

    /**
     * [The HTTP 511 Network Authentication Required server error response code indicates that the client
     * needs to authenticate to gain network access]
     *
     * @const HTTP_NETWORK_AUTHENTICATION_REQUIRED
     */
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * [The HTTP 599 Network Connect Timeout Error status code is used to indicate network connection timeout
     * beyond the control of the client or server]
     *
     * @const HTTP_NETWORK_CONNECT_TIMEOUT_ERROR
     */
    const HTTP_NETWORK_CONNECT_TIMEOUT_ERROR = 599;

    /**
     * [The GET method requests a representation of the specified resource Requests using GET should only retrieve data]
     *
     * @const HTTP_GET
     */
    const HTTP_GET = 'GET';

    /**
     * [The HEAD method asks for a response identical to a GET request, but without the response body]
     *
     * @const HTTP_HEAD
     */
    const HTTP_HEAD = 'HEAD';

    /**
     * [The POST method submits an entity to the specified resource, often causing a change in state or side effects on the server]
     *
     * @const HTTP_POST
     */
    const HTTP_POST = 'POST';

    /**
     * [The PUT method replaces all current representations of the target resource with the request payload]
     *
     * @const HTTP_PUT
     */
    const HTTP_PUT = 'PUT';

    /**
     * [The DELETE method deletes the specified resource]
     *
     * @const HTTP_DELETE
     */
    const HTTP_DELETE = 'DELETE';

    /**
     * [The CONNECT method establishes a tunnel to the server identified by the target resource]
     *
     * @const HTTP_CONNECT
     */
    const HTTP_CONNECT = 'CONNECT';

    /**
     * [The OPTIONS method describes the communication options for the target resource]
     *
     * @const HTTP_OPTIONS
     */
    const HTTP_OPTIONS = 'OPTIONS';

    /**
     * [The TRACE method performs a message loop-back test along the path to the target resource]
     *
     * @const HTTP_TRACE
     */
    const HTTP_TRACE = 'TRACE';

    /**
     * [The PATCH method applies partial modifications to a resource]
     *
     * @const HTTP_PATCH
     */
    const HTTP_PATCH = 'PATCH';
}
