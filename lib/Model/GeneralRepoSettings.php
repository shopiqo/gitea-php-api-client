<?php
/**
 * GeneralRepoSettings
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\Client
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

namespace Efsa\Client\Model;

use \ArrayAccess;
use \Efsa\Client\ObjectSerializer;

/**
 * GeneralRepoSettings Class Doc Comment
 *
 * @category Class
 * @description GeneralRepoSettings contains global repository settings exposed by API
 * @package  Efsa\Client
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
        'http_git_disabled' => 'bool',
        'lfs_disabled' => 'bool',
        'migrations_disabled' => 'bool',
        'mirrors_disabled' => 'bool',
        'stars_disabled' => 'bool',
        'time_tracking_disabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'http_git_disabled' => null,
        'lfs_disabled' => null,
        'migrations_disabled' => null,
        'mirrors_disabled' => null,
        'stars_disabled' => null,
        'time_tracking_disabled' => null
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
        'http_git_disabled' => 'http_git_disabled',
        'lfs_disabled' => 'lfs_disabled',
        'migrations_disabled' => 'migrations_disabled',
        'mirrors_disabled' => 'mirrors_disabled',
        'stars_disabled' => 'stars_disabled',
        'time_tracking_disabled' => 'time_tracking_disabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'http_git_disabled' => 'setHttpGitDisabled',
        'lfs_disabled' => 'setLfsDisabled',
        'migrations_disabled' => 'setMigrationsDisabled',
        'mirrors_disabled' => 'setMirrorsDisabled',
        'stars_disabled' => 'setStarsDisabled',
        'time_tracking_disabled' => 'setTimeTrackingDisabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'http_git_disabled' => 'getHttpGitDisabled',
        'lfs_disabled' => 'getLfsDisabled',
        'migrations_disabled' => 'getMigrationsDisabled',
        'mirrors_disabled' => 'getMirrorsDisabled',
        'stars_disabled' => 'getStarsDisabled',
        'time_tracking_disabled' => 'getTimeTrackingDisabled'
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
        $this->container['http_git_disabled'] = $data['http_git_disabled'] ?? null;
        $this->container['lfs_disabled'] = $data['lfs_disabled'] ?? null;
        $this->container['migrations_disabled'] = $data['migrations_disabled'] ?? null;
        $this->container['mirrors_disabled'] = $data['mirrors_disabled'] ?? null;
        $this->container['stars_disabled'] = $data['stars_disabled'] ?? null;
        $this->container['time_tracking_disabled'] = $data['time_tracking_disabled'] ?? null;
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
     * Gets http_git_disabled
     *
     * @return bool|null
     */
    public function getHttpGitDisabled()
    {
        return $this->container['http_git_disabled'];
    }

    /**
     * Sets http_git_disabled
     *
     * @param bool|null $http_git_disabled http_git_disabled
     *
     * @return self
     */
    public function setHttpGitDisabled($http_git_disabled)
    {
        $this->container['http_git_disabled'] = $http_git_disabled;

        return $this;
    }

    /**
     * Gets lfs_disabled
     *
     * @return bool|null
     */
    public function getLfsDisabled()
    {
        return $this->container['lfs_disabled'];
    }

    /**
     * Sets lfs_disabled
     *
     * @param bool|null $lfs_disabled lfs_disabled
     *
     * @return self
     */
    public function setLfsDisabled($lfs_disabled)
    {
        $this->container['lfs_disabled'] = $lfs_disabled;

        return $this;
    }

    /**
     * Gets migrations_disabled
     *
     * @return bool|null
     */
    public function getMigrationsDisabled()
    {
        return $this->container['migrations_disabled'];
    }

    /**
     * Sets migrations_disabled
     *
     * @param bool|null $migrations_disabled migrations_disabled
     *
     * @return self
     */
    public function setMigrationsDisabled($migrations_disabled)
    {
        $this->container['migrations_disabled'] = $migrations_disabled;

        return $this;
    }

    /**
     * Gets mirrors_disabled
     *
     * @return bool|null
     */
    public function getMirrorsDisabled()
    {
        return $this->container['mirrors_disabled'];
    }

    /**
     * Sets mirrors_disabled
     *
     * @param bool|null $mirrors_disabled mirrors_disabled
     *
     * @return self
     */
    public function setMirrorsDisabled($mirrors_disabled)
    {
        $this->container['mirrors_disabled'] = $mirrors_disabled;

        return $this;
    }

    /**
     * Gets stars_disabled
     *
     * @return bool|null
     */
    public function getStarsDisabled()
    {
        return $this->container['stars_disabled'];
    }

    /**
     * Sets stars_disabled
     *
     * @param bool|null $stars_disabled stars_disabled
     *
     * @return self
     */
    public function setStarsDisabled($stars_disabled)
    {
        $this->container['stars_disabled'] = $stars_disabled;

        return $this;
    }

    /**
     * Gets time_tracking_disabled
     *
     * @return bool|null
     */
    public function getTimeTrackingDisabled()
    {
        return $this->container['time_tracking_disabled'];
    }

    /**
     * Sets time_tracking_disabled
     *
     * @param bool|null $time_tracking_disabled time_tracking_disabled
     *
     * @return self
     */
    public function setTimeTrackingDisabled($time_tracking_disabled)
    {
        $this->container['time_tracking_disabled'] = $time_tracking_disabled;

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


