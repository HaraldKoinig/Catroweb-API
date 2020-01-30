<?php
/**
 * ProjectsApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server
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

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\FeaturedProject;
use OpenAPI\Server\Model\Project;
use OpenAPI\Server\Model\UploadError;

/**
 * ProjectsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface ProjectsApiInterface
{

    /**
     * Operation projectProjectIdGet
     *
     * Get the information of a project
     *
     * @param  string $projectId  UUID/ID of any given project (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project
     *
     */
    public function projectProjectIdGet($projectId, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsFeaturedGet
     *
     * Get the currently featured projects
     *
     * @param  string $platform   (optional)
     * @param  string $maxVersion   (optional)
     * @param  int $limit   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\FeaturedProject[]
     *
     */
    public function projectsFeaturedGet($platform = null, $maxVersion = null, $limit = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsMostDownloadedGet
     *
     * Get the most downloaded projects
     *
     * @param  string $maxVersion   (optional)
     * @param  int $limit   (optional, default to 20)
     * @param  int $offset   (optional, default to 0)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsMostDownloadedGet($maxVersion = null, $limit = 20, $offset = 0, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsMostViewedGet
     *
     * Get the most viewed projects
     *
     * @param  string $maxVersion   (optional)
     * @param  int $limit   (optional, default to 20)
     * @param  int $offset   (optional, default to 0)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsMostViewedGet($maxVersion = null, $limit = 20, $offset = 0, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsPublicUserUserIdGet
     *
     * Get the public projects of a user, if user is logged in, then there will also be private programs
     *
     * @param  string $userId  UUID/ID of any given user (required)
     * @param  string $maxVersion  Only shows project with a smaller version number than max version (optional)
     * @param  int $limit  How many projects should be shown at maximum (optional, default to 20)
     * @param  int $offset  How many projects should be shown at maximum (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsPublicUserUserIdGet($userId, $maxVersion = null, $limit = 20, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsRandomProgramsGet
     *
     * Get random projects
     *
     * @param  string $maxVersion   (optional)
     * @param  int $limit   (optional, default to 20)
     * @param  int $offset   (optional, default to 0)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsRandomProgramsGet($maxVersion = null, $limit = 20, $offset = 0, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsRecentGet
     *
     * Get the most recent programs
     *
     * @param  string $maxVersion   (optional)
     * @param  int $limit   (optional, default to 20)
     * @param  int $offset   (optional, default to 0)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsRecentGet($maxVersion = null, $limit = 20, $offset = 0, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsSearchGet
     *
     * Search for programs associated with a keywords
     *
     * @param  string $query   (optional)
     * @param  string $maxVersion   (optional)
     * @param  int $limit   (optional, default to 20)
     * @param  int $offset   (optional, default to 0)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsSearchGet($query = null, $maxVersion = null, $limit = 20, $offset = 0, &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsUploadPost
     *
     * Upload a catrobat program
     *
     * @param  string $token   (required)
     * @param  string $token  Upload token of the user (optional)
     * @param  string $checksum  Checksum of the *.catrobat file (optional)
     * @param  UploadedFile $file  *.catrobat file (optional)
     * @param  string $flavor  The flavor the uploaded program is associated with. (optional, default to ''pocketcode'')
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function projectsUploadPost($token, $token = null, $checksum = null, UploadedFile $file = null, $flavor = ''pocketcode'', &$responseCode, array &$responseHeaders);

    /**
     * Operation projectsUserUserIdGet
     *
     * Get the projects of a user, if user is logged in, then there will also be private programs
     *
     * @param  string $userId  UUID/ID of any given user (required)
     * @param  string $token   (required)
     * @param  string $maxVersion  Only shows project with a smaller version number than max version (optional)
     * @param  int $limit  How many projects should be shown at maximum (optional, default to 20)
     * @param  int $offset  How many projects should be shown at maximum (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Project[]
     *
     */
    public function projectsUserUserIdGet($userId, $token, $maxVersion = null, $limit = 20, $offset = null, &$responseCode, array &$responseHeaders);
}
