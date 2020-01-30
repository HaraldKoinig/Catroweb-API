<?php

/**
 * SecurityController
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use OpenAPI\Server\Api\SecurityApiInterface;
use OpenAPI\Server\Model\APIValidationResponse;
use OpenAPI\Server\Model\InlineObject;
use OpenAPI\Server\Model\Login;
use OpenAPI\Server\Model\LoginResponseOK;
use OpenAPI\Server\Model\Logout;
use OpenAPI\Server\Model\Register;

/**
 * SecurityController Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Server\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class SecurityController extends Controller
{

    /**
     * Operation checkTokenPost
     *
     * Checking token
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function checkTokenPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $token = $request->headers->get('token');
        $inlineObject = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $token = $this->deserialize($token, 'string', 'string');
            $inlineObject = $this->deserialize($inlineObject, 'OpenAPI\Server\Model\InlineObject', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($token, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("OpenAPI\Server\Model\InlineObject");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($inlineObject, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->checkTokenPost($token, $inlineObject, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'OK - Sent token is valid for the given username';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK - Sent token is valid for the given username';
                    break;
                case 401:
                    $message = 'NOT OK - Authentification required (missing token/username)';
                    break;
                case 403:
                    $message = 'NOT OK - Invalid credentials';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation loginPost
     *
     * Login a user
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function loginPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $login = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $login = $this->deserialize($login, 'OpenAPI\Server\Model\Login', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("OpenAPI\Server\Model\Login");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($login, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->loginPost($login, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'OK';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'NOT OK - Bad request';
                    break;
                case 401:
                    $message = 'NOT OK - Authorization required';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation logoutPost
     *
     * Log out a user
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function logoutPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $token = $request->headers->get('token');
        $logout = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $token = $this->deserialize($token, 'string', 'string');
            $logout = $this->deserialize($logout, 'OpenAPI\Server\Model\Logout', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($token, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("OpenAPI\Server\Model\Logout");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($logout, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->logoutPost($token, $logout, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'OK';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'NOT OK - Bad Request';
                    break;
                case 401:
                    $message = 'NOT OK - Invalid credentials';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation registerUserPost
     *
     * Registering a user
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function registerUserPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $register = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $register = $this->deserialize($register, 'OpenAPI\Server\Model\Register', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("OpenAPI\Server\Model\Register");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($register, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->registerUserPost($register, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'OK - User registerd';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK - User registerd';
                    break;
                case 400:
                    $message = 'NOT OK - Malformed request body';
                    break;
                case 422:
                    $message = 'NOT OK - Unable to process entity';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation registerValidationPost
     *
     * Validation of user input in the registration process
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function registerValidationPostAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $register = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $register = $this->deserialize($register, 'OpenAPI\Server\Model\Register', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("OpenAPI\Server\Model\Register");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($register, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->registerValidationPost($register, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'OK - User validated';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'OK - User validated';
                    break;
                case 400:
                    $message = 'NOT OK - Malformed request body';
                    break;
                case 422:
                    $message = 'NOT OK - Unable to process entity';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return SecurityApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('security');
    }
}
