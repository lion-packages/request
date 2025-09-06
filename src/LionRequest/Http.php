<?php

declare(strict_types=1);

namespace Lion\Request;

/**
 * Defines HTTP status codes and request methods as constants.
 *
 * This class provides a comprehensive list of HTTP status codes and request
 * methods that can be used to handle HTTP responses and requests within an
 * application.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods
 */
abstract class Http
{
    /**
     * This interim response indicates that the client should continue the request
     * or ignore the response if the request is already finished.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/100
     *
     * @const CONTINUE
     */
    public const int CONTINUE = 100;

    /**
     * This code is sent in response to an Upgrade request header from the client
     * and indicates the protocol the server is switching to.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/101
     *
     * @const SWITCHING_PROTOCOLS
     */
    public const int SWITCHING_PROTOCOLS = 101;

    /**
     * This code was used in WebDAV contexts to indicate that a request has been
     * received by the server, but no status was available at the time of the
     * response.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/102
     *
     * @const PROCESSING
     */
    public const int PROCESSING = 102;

    /**
     * This status code is primarily intended to be used with the Link header,
     * letting the user agent start preloading resources while the server prepares a
     * response or preconnect to an origin from which the page will need resources.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/103
     *
     * @const EARLY_HINTS
     */
    public const int EARLY_HINTS = 103;

    /**
     * The request succeeded. The result and meaning of "success" depends on the
     * HTTP method:
     *
     * - GET: The resource has been fetched and transmitted in the message body.
     * - HEAD: Representation headers are included in the response without any
     * message body.
     * - PUT or POST: The resource describing the result of the action is
     * transmitted in the message body.
     * - TRACE: The message body contains the request as received by the server.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/200
     *
     * @const OK
     */
    public const int OK = 200;

    /**
     * The request succeeded, and a new resource was created as a result. This is
     * typically the response sent after POST requests, or some PUT requests.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/201
     *
     * @const CREATED
     */
    public const int CREATED = 201;

    /**
     * The request has been received but not yet acted upon. It is noncommittal,
     * since there is no way in HTTP to later send an asynchronous response
     * indicating the outcome of the request. It is intended for cases where another
     * process or server handles the request, or for batch processing.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/202
     *
     * @const ACCEPTED
     */
    public const int ACCEPTED = 202;

    /**
     * This response code means the returned metadata is not exactly the same as is
     * available from the origin server, but is collected from a local or a
     * third-party copy. This is mostly used for mirrors or backups of another
     * resource. Except for that specific case, the 200 OK response is preferred to
     * this status.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/203
     *
     * @const NON_AUTHORITATIVE_INFORMATION
     */
    public const int NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * There is no content to send for this request, but the headers are useful. The
     * user agent may update its cached headers for this resource with the new ones.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/204
     *
     * @const NO_CONTENT
     */
    public const int NO_CONTENT = 204;

    /**
     * Tells the user agent to reset the document which sent this request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/205
     *
     * @const RESET_CONTENT
     */
    public const int RESET_CONTENT = 205;

    /**
     * This response code is used in response to a range request when the client has
     * requested a part or parts of a resource.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/206
     *
     * @const PARTIAL_CONTENT
     */
    public const int PARTIAL_CONTENT = 206;

    /**
     * Conveys information about multiple resources, for situations where multiple
     * status codes might be appropriate.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/207
     *
     * @const MULTI_STATUS
     */
    public const int MULTI_STATUS = 207;

    /**
     * Used inside a <dav:propstat> response element to avoid repeatedly enumerating
     * the internal members of multiple bindings to the same collection.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/208
     *
     * @const ALREADY_REPORTED
     */
    public const int ALREADY_REPORTED = 208;

    /**
     * The server has fulfilled a GET request for the resource, and the response is
     * a representation of the result of one or more instance-manipulations applied
     * to the current instance.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/226
     *
     * @const IM_USED
     */
    public const int IM_USED = 226;

    /**
     * In agent-driven content negotiation, the request has more than one
     * possible response and the user agent or user should choose one of them. There
     * is no standardized way for clients to automatically choose one of the
     * responses, so this is rarely used.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/300
     *
     * @const MULTIPLE_CHOICES
     */
    public const int MULTIPLE_CHOICES = 300;

    /**
     * The URL of the requested resource has been changed permanently. The new URL
     * is given in the response.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/301
     *
     * @const MOVED_PERMANENTLY
     */
    public const int MOVED_PERMANENTLY = 301;

    /**
     * This response code means that the URI of requested resource has been changed
     * temporarily. Further changes in the URI might be made in the future, so the
     * same URI should be used by the client in future requests.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/302
     *
     * @const FOUND
     */
    public const int FOUND = 302;

    /**
     * The server sent this response to direct the client to get the requested
     * resource at another URI with a GET request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/303
     *
     * @const SEE_OTHER
     */
    public const int SEE_OTHER = 303;

    /**
     * This is used for caching purposes. It tells the client that the response has
     * not been modified, so the client can continue to use the same cached version
     * of the response.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/304
     *
     * @const NOT_MODIFIED
     */
    public const int NOT_MODIFIED = 304;

    /**
     * Defined in a previous version of the HTTP specification to indicate that a
     * requested response must be accessed by a proxy. It has been deprecated due to
     * security concerns regarding in-band configuration of a proxy.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/305
     *
     * @const USE_PROXY
     */
    public const int USE_PROXY = 305;

    /**
     * This response code is no longer used; but is reserved. It was used in a
     * previous version of the HTTP/1.1 specification.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/306
     *
     * @const UNUSED
     */
    public const int UNUSED = 306;

    /**
     * The server sends this response to direct the client to get the requested
     * resource at another URI with the same method that was used in the prior
     * request. This has the same semantics as the 302 Found response code, with the
     * exception that the user agent must not change the HTTP method used: if a POST
     * was used in the first request, a POST must be used in the redirected request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/307
     *
     * @const TEMPORARY_REDIRECT
     */
    public const int TEMPORARY_REDIRECT = 307;

    /**
     * This means that the resource is now permanently located at another URI,
     * specified by the Location response header. This has the same semantics as the
     * 301 Moved Permanently HTTP response code, with the exception that the user
     * agent must not change the HTTP method used: if a POST was used in the first
     * request, a POST must be used in the second request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/308
     *
     * @const PERMANENT_REDIRECT
     */
    public const int PERMANENT_REDIRECT = 308;

    /**
     * The server cannot or will not process the request due to something that is
     * perceived to be a client error (e.g., malformed request syntax, invalid
     * request message framing, or deceptive request routing).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/400
     *
     * @const BAD_REQUEST
     */
    public const int BAD_REQUEST = 400;

    /**
     * Although the HTTP standard specifies "unauthorized", semantically this
     * response means "unauthenticated". That is, the client must authenticate
     * itself to get the requested response.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/401
     *
     * @const UNAUTHORIZED
     */
    public const int UNAUTHORIZED = 401;

    /**
     * The initial purpose of this code was for digital payment systems, however
     * this status code is rarely used and no standard convention exists.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/402
     *
     * @const PAYMENT_REQUIRED
     */
    public const int PAYMENT_REQUIRED = 402;

    /**
     * The client does not have access rights to the content; that is, it is
     * unauthorized, so the server is refusing to give the requested resource.
     * Unlike 401 Unauthorized, the client's identity is known to the server.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/403
     *
     * @const FORBIDDEN
     */
    public const int FORBIDDEN = 403;

    /**
     * The server cannot find the requested resource. In the browser, this means the
     * URL is not recognized. In an API, this can also mean that the endpoint is
     * valid but the resource itself does not exist. Servers may also send this
     * response instead of 403 Forbidden to hide the existence of a resource from an
     * unauthorized client. This response code is probably the most well known due
     * to its frequent occurrence on the web.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/404
     *
     * @const NOT_FOUND
     */
    public const int NOT_FOUND = 404;

    /**
     * The request method is known by the server but is not supported by the target
     * resource. For example, an API may not allow DELETE on a resource, or the
     * TRACE method entirely.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/405
     *
     * @const METHOD_NOT_ALLOWED
     */
    public const int METHOD_NOT_ALLOWED = 405;

    /**
     * This response is sent when the web server, after performing server-driven
     * content negotiation, doesn't find any content that conforms to the criteria
     * given by the user agent.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/406
     *
     * @const NOT_ACCEPTABLE
     */
    public const int NOT_ACCEPTABLE = 406;

    /**
     * This is similar to 401 Unauthorized but authentication is needed to be done
     * by a proxy.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/407
     *
     * @const PROXY_AUTHENTICATION_REQUIRED
     */
    public const int PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * This response is sent on an idle connection by some servers, even without any
     * previous request by the client. It means that the server would like to shut
     * down this unused connection. This response is used much more since some
     * browsers use HTTP pre-connection mechanisms to speed up browsing. Some
     * servers may shut down a connection without sending this message.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/408
     *
     * @const REQUEST_TIMEOUT
     */
    public const int REQUEST_TIMEOUT = 408;

    /**
     * This response is sent when a request conflicts with the current state of the
     * server. In WebDAV remote web authoring, 409 responses are errors sent to the
     * client so that a user might be able to resolve a conflict and resubmit the
     * request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/409
     *
     * @const CONFLICT
     */
    public const int CONFLICT = 409;

    /**
     * This response is sent when the requested content has been permanently deleted
     * from server, with no forwarding address. Clients are expected to remove their
     * caches and links to the resource. The HTTP specification intends this status
     * code to be used for "limited-time, promotional services". APIs should not
     * feel compelled to indicate resources that have been deleted with this status
     * code.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/410
     *
     * @const GONE
     */
    public const int GONE = 410;

    /**
     * Server rejected the request because the Content-Length header field is not
     * defined and the server requires it.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/411
     *
     * @const LENGTH_REQUIRED
     */
    public const int LENGTH_REQUIRED = 411;

    /**
     * In conditional requests, the client has indicated preconditions in its
     * headers which the server does not meet.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/412
     *
     * @const PRECONDITION_FAILED
     */
    public const int PRECONDITION_FAILED = 412;

    /**
     * The request body is larger than limits defined by server. The server might
     * close the connection or return an Retry-After header field.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/413
     *
     * @const PAYLOAD_TOO_LARGE
     */
    public const int PAYLOAD_TOO_LARGE = 413;

    /**
     * The URI requested by the client is longer than the server is willing to
     * interpret.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/414
     *
     * @const URI_TOO_LONG
     */
    public const int URI_TOO_LONG = 414;

    /**
     * The media format of the requested data is not supported by the server, so the
     * server is rejecting the request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/415
     *
     * @const UNSUPPORTED_MEDIA_TYPE
     */
    public const int UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * The ranges specified by the Range header field in the request cannot be
     * fulfilled. It's possible that the range is outside the size of the target
     * resource's data.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/416
     *
     * @const RANGE_NOT_SATISFIABLE
     */
    public const int RANGE_NOT_SATISFIABLE = 416;

    /**
     * This response code means the expectation indicated by the Expect request
     * header field cannot be met by the server.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/417
     *
     * @const EXPECTATION_FAILED
     */
    public const int EXPECTATION_FAILED = 417;

    /**
     * The server refuses the attempt to brew coffee with a teapot.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/418
     *
     * @const IM_A_TEAPOT
     */
    public const int IM_A_TEAPOT = 418;

    /**
     * The request was directed at a server that is not able to produce a response.
     * This can be sent by a server that is not configured to produce responses for
     * the combination of scheme and authority that are included in the request URI.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/421
     *
     * @const MISDIRECTED_REQUEST
     */
    public const int MISDIRECTED_REQUEST = 421;

    /**
     * The request was well-formed but was unable to be followed due to semantic
     * errors.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/422
     *
     * @const UNPROCESSABLE_ENTITY
     */
    public const int UNPROCESSABLE_ENTITY = 422;

    /**
     * The resource that is being accessed is locked.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/423
     *
     * @const LOCKED
     */
    public const int LOCKED = 423;

    /**
     * The request failed due to failure of a previous request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/424
     *
     * @const FAILED_DEPENDENCY
     */
    public const int FAILED_DEPENDENCY = 424;

    /**
     * Indicates that the server is unwilling to risk processing a request that
     * might be replayed.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/425
     *
     * @const TOO_EARLY
     */
    public const int TOO_EARLY = 425;

    /**
     * The server refuses to perform the request using the current protocol but
     * might be willing to do so after the client upgrades to a different protocol.
     * The server sends an Upgrade header in a 426 response to indicate the required
     * protocol(s).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/426
     *
     * @const UPGRADE_REQUIRED
     */
    public const int UPGRADE_REQUIRED = 426;

    /**
     * The origin server requires the request to be conditional. This response is
     * intended to prevent the 'lost update' problem, where a client GETs
     * aresource's state, modifies it and PUTs it back to the server, when meanwhile
     * a third party has modified the state on the server, leading to a conflict.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/428
     *
     * @const PRECONDITION_REQUIRED
     */
    public const int PRECONDITION_REQUIRED = 428;

    /**
     * The user has sent too many requests in a given amount of time (rate limiting).
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/429
     *
     * @const TOO_MANY_REQUESTS
     */
    public const int TOO_MANY_REQUESTS = 429;

    /**
     * The server is unwilling to process the request because its header fields are
     * too large. The request may be resubmitted after reducing the size of the
     * request header fields.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/431
     *
     * @const REQUEST_HEADER_FIELDS_TOO_LARGE
     */
    public const int REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * The user agent requested a resource that cannot legally be provided, such as
     * a web page censored by a government.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/451
     *
     * @const UNAVAILABLE_FOR_LEGAL_REASONS
     */
    public const int UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * The server has encountered a situation it does not know how to handle. This
     * error is generic, indicating that the server cannot find a more appropriate
     * 5XX status code to respond with.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/500
     *
     * @public const INTERNAL_SERVER_ERROR
     */
    public const int INTERNAL_SERVER_ERROR = 500;

    /**
     * The request method is not supported by the server and cannot be handled. The
     * only methods that servers are required to support (and therefore that must
     * not return this code) are GET and HEAD.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/501
     *
     * @const NOT_IMPLEMENTED
     */
    public const int NOT_IMPLEMENTED = 501;

    /**
     * This error response means that the server, while working as a gateway to get
     * a response needed to handle the request, got an invalid response.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/502
     *
     * @const BAD_GATEWAY
     */
    public const int BAD_GATEWAY = 502;

    /**
     * The server is not ready to handle the request. Common causes are a server
     * that is down for maintenance or that is overloaded. Note that together with
     * this response, a user-friendly page explaining the problem should be sent.
     * This response should be used for temporary conditions and the Retry-After
     * HTTP header should, if possible, contain the estimated time before the
     * recovery of the service. The webmaster must also take care about the
     * caching-related headers that are sent along with this response, as these
     * temporary condition responses should usually not be cached.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/503
     *
     * @const SERVICE_UNAVAILABLE
     */
    public const int SERVICE_UNAVAILABLE = 503;

    /**
     * This error response is given when the server is acting as a gateway and
     * cannot get a response in time.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/504
     *
     * @const GATEWAY_TIMEOUT
     */
    public const int GATEWAY_TIMEOUT = 504;

    /**
     * The HTTP version used in the request is not supported by the server.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/505
     *
     * @const VERSION_NOT_SUPPORTED
     */
    public const int VERSION_NOT_SUPPORTED = 505;

    /**
     * The server has an internal configuration error: during content negotiation,
     * the chosen variant is configured to engage in content negotiation itself,
     * which results in circular references when creating responses.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/506
     *
     * @const VARIANT_ALSO_NEGOTIATES
     */
    public const int VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * The method could not be performed on the resource because the server is
     * unable to store the representation needed to successfully complete the
     * request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/507
     *
     * @const INSUFFICIENT_STORAGE
     */
    public const int INSUFFICIENT_STORAGE = 507;

    /**
     * The server detected an infinite loop while processing the request.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/508
     *
     * @const LOOP_DETECTED
     */
    public const int LOOP_DETECTED = 508;

    /**
     * The client request declares an HTTP Extension (RFC 2774) that should be used
     * to process the request, but the extension is not supported.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/510
     *
     * @const NOT_EXTENDED
     */
    public const int NOT_EXTENDED = 510;

    /**
     * Indicates that the client needs to authenticate to gain network access.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/511
     *
     * @const NETWORK_AUTHENTICATION_REQUIRED
     */
    public const int NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * The GET method requests a representation of the specified resource. Requests
     * using GET should only retrieve data and should not contain a request content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/GET
     *
     * @const GET
     */
    public const string GET = 'GET';

    /**
     * The HEAD method asks for a response identical to a GET request, but without a
     * response body.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/HEAD
     *
     * @const HEAD
     */
    public const string HEAD = 'HEAD';

    /**
     * The POST method submits an entity to the specified resource, often causing a
     * change in state or side effects on the server.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/POST
     *
     * @const POST
     */
    public const string POST = 'POST';

    /**
     * The PUT method replaces all current representations of the target resource
     * with the request content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/PUT
     *
     * @const PUT
     */
    public const string PUT = 'PUT';

    /**
     * The DELETE method deletes the specified resource.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/DELETE
     *
     * @const DELETE
     */
    public const string DELETE = 'DELETE';

    /**
     * The CONNECT method establishes a tunnel to the server identified by the
     * target resource.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/CONNECT
     *
     * @const CONNECT
     */
    public const string CONNECT = 'CONNECT';

    /**
     * The OPTIONS method describes the communication options for the target
     * resource.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/OPTIONS
     *
     * @const OPTIONS
     */
    public const string OPTIONS = 'OPTIONS';

    /**
     * The TRACE method performs a message loop-back test along the path to the
     * target resource.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/TRACE
     *
     * @const TRACE
     */
    public const string TRACE = 'TRACE';

    /**
     * The PATCH method applies partial modifications to a resource.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Methods/PATCH
     *
     * @const PATCH
     */
    public const string PATCH = 'PATCH';
}
