<?php
/**
 * Project.
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
 * The version of the OpenAPI document: v1.0.12
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
 * Class representing the Project model.
 *
 * @author  OpenAPI Generator team
 */
class Project
{
  /**
   * @var string|null
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $id;

  /**
   * @var string|null
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * @var string|null
   * @SerializedName("author")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $author;

  /**
   * @var string|null
   * @SerializedName("description")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $description;

  /**
   * @var string|null
   * @SerializedName("version")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $version;

  /**
   * @var int|null
   * @SerializedName("views")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $views;

  /**
   * @var int|null
   * @SerializedName("download")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $download;

  /**
   * @var bool|null
   * @SerializedName("private")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $private;

  /**
   * Available flavors.
   *
   * @var string|null
   * @SerializedName("flavor")
   * @Assert\Choice({ "pocketcode", "pocketalice", "pocketgalaxy", "pocketphiro", "phirocode", "luna", "create@school", "embroidery", "arduino" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $flavor;

  /**
   * @var int|null
   * @SerializedName("uploaded")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $uploaded;

  /**
   * @var string|null
   * @SerializedName("uploaded_string")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $uploadedString;

  /**
   * @var string|null
   * @SerializedName("screenshot_large")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $screenshotLarge;

  /**
   * @var string|null
   * @SerializedName("screenshot_small")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $screenshotSmall;

  /**
   * @var string|null
   * @SerializedName("projectUrl")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $projectUrl;

  /**
   * @var string|null
   * @SerializedName("downloadUrl")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $downloadUrl;

  /**
   * filesize in megabytes.
   *
   * @var float|null
   * @SerializedName("filesize")
   * @Assert\Type("float")
   * @Type("float")
   */
  protected $filesize;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->author = isset($data['author']) ? $data['author'] : null;
    $this->description = isset($data['description']) ? $data['description'] : null;
    $this->version = isset($data['version']) ? $data['version'] : null;
    $this->views = isset($data['views']) ? $data['views'] : null;
    $this->download = isset($data['download']) ? $data['download'] : null;
    $this->private = isset($data['private']) ? $data['private'] : null;
    $this->flavor = isset($data['flavor']) ? $data['flavor'] : null;
    $this->uploaded = isset($data['uploaded']) ? $data['uploaded'] : null;
    $this->uploadedString = isset($data['uploadedString']) ? $data['uploadedString'] : null;
    $this->screenshotLarge = isset($data['screenshotLarge']) ? $data['screenshotLarge'] : null;
    $this->screenshotSmall = isset($data['screenshotSmall']) ? $data['screenshotSmall'] : null;
    $this->projectUrl = isset($data['projectUrl']) ? $data['projectUrl'] : null;
    $this->downloadUrl = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
    $this->filesize = isset($data['filesize']) ? $data['filesize'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @return $this
   */
  public function setId(string $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets author.
   */
  public function getAuthor(): ?string
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @return $this
   */
  public function setAuthor(string $author = null)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets description.
   */
  public function getDescription(): ?string
  {
    return $this->description;
  }

  /**
   * Sets description.
   *
   * @return $this
   */
  public function setDescription(string $description = null)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Gets version.
   */
  public function getVersion(): ?string
  {
    return $this->version;
  }

  /**
   * Sets version.
   *
   * @return $this
   */
  public function setVersion(string $version = null)
  {
    $this->version = $version;

    return $this;
  }

  /**
   * Gets views.
   */
  public function getViews(): ?int
  {
    return $this->views;
  }

  /**
   * Sets views.
   *
   * @return $this
   */
  public function setViews(int $views = null)
  {
    $this->views = $views;

    return $this;
  }

  /**
   * Gets download.
   */
  public function getDownload(): ?int
  {
    return $this->download;
  }

  /**
   * Sets download.
   *
   * @return $this
   */
  public function setDownload(int $download = null)
  {
    $this->download = $download;

    return $this;
  }

  /**
   * Gets private.
   */
  public function isPrivate(): ?bool
  {
    return $this->private;
  }

  /**
   * Sets private.
   *
   * @return $this
   */
  public function setPrivate(bool $private = null)
  {
    $this->private = $private;

    return $this;
  }

  /**
   * Gets flavor.
   */
  public function getFlavor(): ?string
  {
    return $this->flavor;
  }

  /**
   * Sets flavor.
   *
   * @param string|null $flavor Available flavors
   *
   * @return $this
   */
  public function setFlavor(string $flavor = null)
  {
    $this->flavor = $flavor;

    return $this;
  }

  /**
   * Gets uploaded.
   */
  public function getUploaded(): ?int
  {
    return $this->uploaded;
  }

  /**
   * Sets uploaded.
   *
   * @return $this
   */
  public function setUploaded(int $uploaded = null)
  {
    $this->uploaded = $uploaded;

    return $this;
  }

  /**
   * Gets uploadedString.
   */
  public function getUploadedString(): ?string
  {
    return $this->uploadedString;
  }

  /**
   * Sets uploadedString.
   *
   * @return $this
   */
  public function setUploadedString(string $uploadedString = null)
  {
    $this->uploadedString = $uploadedString;

    return $this;
  }

  /**
   * Gets screenshotLarge.
   */
  public function getScreenshotLarge(): ?string
  {
    return $this->screenshotLarge;
  }

  /**
   * Sets screenshotLarge.
   *
   * @return $this
   */
  public function setScreenshotLarge(string $screenshotLarge = null)
  {
    $this->screenshotLarge = $screenshotLarge;

    return $this;
  }

  /**
   * Gets screenshotSmall.
   */
  public function getScreenshotSmall(): ?string
  {
    return $this->screenshotSmall;
  }

  /**
   * Sets screenshotSmall.
   *
   * @return $this
   */
  public function setScreenshotSmall(string $screenshotSmall = null)
  {
    $this->screenshotSmall = $screenshotSmall;

    return $this;
  }

  /**
   * Gets projectUrl.
   */
  public function getProjectUrl(): ?string
  {
    return $this->projectUrl;
  }

  /**
   * Sets projectUrl.
   *
   * @return $this
   */
  public function setProjectUrl(string $projectUrl = null)
  {
    $this->projectUrl = $projectUrl;

    return $this;
  }

  /**
   * Gets downloadUrl.
   */
  public function getDownloadUrl(): ?string
  {
    return $this->downloadUrl;
  }

  /**
   * Sets downloadUrl.
   *
   * @return $this
   */
  public function setDownloadUrl(string $downloadUrl = null)
  {
    $this->downloadUrl = $downloadUrl;

    return $this;
  }

  /**
   * Gets filesize.
   */
  public function getFilesize(): ?float
  {
    return $this->filesize;
  }

  /**
   * Sets filesize.
   *
   * @param float|null $filesize filesize in megabytes
   *
   * @return $this
   */
  public function setFilesize(float $filesize = null)
  {
    $this->filesize = $filesize;

    return $this;
  }
}
