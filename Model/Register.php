<?php
/**
 * Register
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Register model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Register 
{
        /**
     * EMail of the user. Validation via /registerValidation
     *
     * @var string|null
     * @SerializedName("email")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $email;

    /**
     * Username. Validation via /registerValidation
     *
     * @var string|null
     * @SerializedName("username")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $username;

    /**
     * A secure password. Validation via /registerValidation
     *
     * @var string|null
     * @SerializedName("password")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $password;

    /**
     * The locale, in which the answer message shoudl be translated. If not given default will be &#39;en&#39;.
     *
     * @var string|null
     * @SerializedName("locale")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $locale;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->username = isset($data['username']) ? $data['username'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
        $this->locale = isset($data['locale']) ? $data['locale'] : null;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email  EMail of the user. Validation via /registerValidation
     *
     * @return $this
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets username.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets username.
     *
     * @param string|null $username  Username. Validation via /registerValidation
     *
     * @return $this
     */
    public function setUsername($username = null)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password.
     *
     * @param string|null $password  A secure password. Validation via /registerValidation
     *
     * @return $this
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets locale.
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Sets locale.
     *
     * @param string|null $locale  The locale, in which the answer message shoudl be translated. If not given default will be 'en'.
     *
     * @return $this
     */
    public function setLocale($locale = null)
    {
        $this->locale = $locale;

        return $this;
    }
}


