<?php
/**
 * Register.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.11
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the Register model.
 *
 * @author  OpenAPI Generator team
 */
class Register
{
  /**
   * Indicates wether sent user should be verified or registerd.
   *
   * @var bool|null
   * @SerializedName("dry-run")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $dryRun;

  /**
   * EMail of the user.
   *
   * @var string|null
   * @SerializedName("email")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $email;

  /**
   * Name of the user.
   *
   * @var string|null
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   * @Assert\Length(
   *     max=180
   * )
   * @Assert\Length(
   *     min=3
   * )
   */
  protected $username;

  /**
   * A secure password.
   *
   * @var string|null
   * @SerializedName("password")
   * @Assert\Type("string")
   * @Type("string")
   * @Assert\Length(
   *     max=4096
   * )
   * @Assert\Length(
   *     min=6
   * )
   */
  protected $password;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->dryRun = isset($data['dryRun']) ? $data['dryRun'] : false;
    $this->email = isset($data['email']) ? $data['email'] : null;
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->password = isset($data['password']) ? $data['password'] : null;
  }

  /**
   * Gets dryRun.
   */
  public function isDryRun(): ?bool
  {
    return $this->dryRun;
  }

  /**
   * Sets dryRun.
   *
   * @param bool|null $dryRun indicates wether sent user should be verified or registerd
   *
   * @return $this
   */
  public function setDryRun(bool $dryRun = null)
  {
    $this->dryRun = $dryRun;

    return $this;
  }

  /**
   * Gets email.
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * Sets email.
   *
   * @param string|null $email EMail of the user
   *
   * @return $this
   */
  public function setEmail(string $email = null)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @param string|null $username Name of the user
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @param string|null $password a secure password
   *
   * @return $this
   */
  public function setPassword(string $password = null)
  {
    $this->password = $password;

    return $this;
  }
}
