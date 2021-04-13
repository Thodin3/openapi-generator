<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Api;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpNotImplementedException;

/**
 * AbstractStoreApi Class Doc Comment
 *
 * @package OpenAPIServer\Api
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractStoreApi
{

    /**
     * @var ContainerInterface|null Slim app container instance
     */
    protected $container;

    /**
     * Route Controller constructor receives container
     *
     * @param ContainerInterface|null $container Slim app container instance
     */
    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    /**
     * DELETE deleteOrder
     * Summary: Delete purchase order by ID
     * Notes: For valid response try integer IDs with value &lt; 1000. Anything above 1000 or nonintegers will generate API errors
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function deleteOrder(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $orderId = $args['orderId'];
        $message = "How about implementing deleteOrder as a DELETE method in OpenAPIServer\Api\StoreApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getInventory
     * Summary: Returns pet inventories by status
     * Notes: Returns a map of status codes to quantities
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getInventory(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $message = "How about implementing getInventory as a GET method in OpenAPIServer\Api\StoreApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * GET getOrderById
     * Summary: Find purchase order by ID
     * Notes: For valid response try integer IDs with value &lt;&#x3D; 5 or &gt; 10. Other values will generated exceptions
     * Output-Formats: [application/xml, application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function getOrderById(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $orderId = $args['orderId'];
        $message = "How about implementing getOrderById as a GET method in OpenAPIServer\Api\StoreApi class?";
        throw new HttpNotImplementedException($request, $message);
    }

    /**
     * POST placeOrder
     * Summary: Place an order for a pet
     * Output-Formats: [application/xml, application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws HttpNotImplementedException to force implementation class to override this method
     */
    public function placeOrder(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing placeOrder as a POST method in OpenAPIServer\Api\StoreApi class?";
        throw new HttpNotImplementedException($request, $message);
    }
}
