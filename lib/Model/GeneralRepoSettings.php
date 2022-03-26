<?php
/**
 * GeneralRepoSettings
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gitea API.
 *
 * This documentation describes the Gitea API.
 *
 * The version of the OpenAPI document: 1.17.0+dev-334-gf36701c70
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Efsa\Client\Gitea\Model;

use \ArrayAccess;
use \Efsa\Client\Gitea\ObjectSerializer;

/**
 * GeneralRepoSettings Class Doc Comment
 *
 * @category Class
 * @description GeneralRepoSettings contains global repository settings exposed by API
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GeneralRepoSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeneralRepoSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'httpGitDisabled' => 'bool',
        'lfsDisabled' => 'bool',
        'migrationsDisabled' => 'bool',
        'mirrorsDisabled' => 'bool',
        'starsDisabled' => 'bool',
        'timeTrackingDisabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'httpGitDisabled' => null,
        'lfsDisabled' => null,
        'migrationsDisabled' => null,
        'mirrorsDisabled' => null,
        'starsDisabled' => null,
        'timeTrackingDisabled' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'httpGitDisabled' => 'http_git_disabled',
        'lfsDisabled' => 'lfs_disabled',
        'migrationsDisabled' => 'migrations_disabled',
        'mirrorsDisabled' => 'mirrors_disabled',
        'starsDisabled' => 'stars_disabled',
        'timeTrackingDisabled' => 'time_tracking_disabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'httpGitDisabled' => 'setHttpGitDisabled',
        'lfsDisabled' => 'setLfsDisabled',
        'migrationsDisabled' => 'setMigrationsDisabled',
        'mirrorsDisabled' => 'setMirrorsDisabled',
        'starsDisabled' => 'setStarsDisabled',
        'timeTrackingDisabled' => 'setTimeTrackingDisabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'httpGitDisabled' => 'getHttpGitDisabled',
        'lfsDisabled' => 'getLfsDisabled',
        'migrationsDisabled' => 'getMigrationsDisabled',
        'mirrorsDisabled' => 'getMirrorsDisabled',
        'starsDisabled' => 'getStarsDisabled',
        'timeTrackingDisabled' => 'getTimeTrackingDisabled'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['httpGitDisabled'] = $data['httpGitDisabled'] ?? null;
        $this->container['lfsDisabled'] = $data['lfsDisabled'] ?? null;
        $this->container['migrationsDisabled'] = $data['migrationsDisabled'] ?? null;
        $this->container['mirrorsDisabled'] = $data['mirrorsDisabled'] ?? null;
        $this->container['starsDisabled'] = $data['starsDisabled'] ?? null;
        $this->container['timeTrackingDisabled'] = $data['timeTrackingDisabled'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets httpGitDisabled
     *
     * @return bool|null
     */
    public function getHttpGitDisabled()
    {
        return $this->container['httpGitDisabled'];
    }

    /**
     * Sets httpGitDisabled
     *
     * @param bool|null $httpGitDisabled httpGitDisabled
     *
     * @return self
     */
    public function setHttpGitDisabled($httpGitDisabled)
    {
        $this->container['httpGitDisabled'] = $httpGitDisabled;

        return $this;
    }

    /**
     * Gets lfsDisabled
     *
     * @return bool|null
     */
    public function getLfsDisabled()
    {
        return $this->container['lfsDisabled'];
    }

    /**
     * Sets lfsDisabled
     *
     * @param bool|null $lfsDisabled lfsDisabled
     *
     * @return self
     */
    public function setLfsDisabled($lfsDisabled)
    {
        $this->container['lfsDisabled'] = $lfsDisabled;

        return $this;
    }

    /**
     * Gets migrationsDisabled
     *
     * @return bool|null
     */
    public function getMigrationsDisabled()
    {
        return $this->container['migrationsDisabled'];
    }

    /**
     * Sets migrationsDisabled
     *
     * @param bool|null $migrationsDisabled migrationsDisabled
     *
     * @return self
     */
    public function setMigrationsDisabled($migrationsDisabled)
    {
        $this->container['migrationsDisabled'] = $migrationsDisabled;

        return $this;
    }

    /**
     * Gets mirrorsDisabled
     *
     * @return bool|null
     */
    public function getMirrorsDisabled()
    {
        return $this->container['mirrorsDisabled'];
    }

    /**
     * Sets mirrorsDisabled
     *
     * @param bool|null $mirrorsDisabled mirrorsDisabled
     *
     * @return self
     */
    public function setMirrorsDisabled($mirrorsDisabled)
    {
        $this->container['mirrorsDisabled'] = $mirrorsDisabled;

        return $this;
    }

    /**
     * Gets starsDisabled
     *
     * @return bool|null
     */
    public function getStarsDisabled()
    {
        return $this->container['starsDisabled'];
    }

    /**
     * Sets starsDisabled
     *
     * @param bool|null $starsDisabled starsDisabled
     *
     * @return self
     */
    public function setStarsDisabled($starsDisabled)
    {
        $this->container['starsDisabled'] = $starsDisabled;

        return $this;
    }

    /**
     * Gets timeTrackingDisabled
     *
     * @return bool|null
     */
    public function getTimeTrackingDisabled()
    {
        return $this->container['timeTrackingDisabled'];
    }

    /**
     * Sets timeTrackingDisabled
     *
     * @param bool|null $timeTrackingDisabled timeTrackingDisabled
     *
     * @return self
     */
    public function setTimeTrackingDisabled($timeTrackingDisabled)
    {
        $this->container['timeTrackingDisabled'] = $timeTrackingDisabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


