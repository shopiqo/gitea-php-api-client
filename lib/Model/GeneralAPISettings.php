<?php
/**
 * GeneralAPISettings
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
 * GeneralAPISettings Class Doc Comment
 *
 * @category Class
 * @description GeneralAPISettings contains global api settings exposed by it
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GeneralAPISettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeneralAPISettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defaultGitTreesPerPage' => 'int',
        'defaultMaxBlobSize' => 'int',
        'defaultPagingNum' => 'int',
        'maxResponseItems' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'defaultGitTreesPerPage' => 'int64',
        'defaultMaxBlobSize' => 'int64',
        'defaultPagingNum' => 'int64',
        'maxResponseItems' => 'int64'
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
        'defaultGitTreesPerPage' => 'default_git_trees_per_page',
        'defaultMaxBlobSize' => 'default_max_blob_size',
        'defaultPagingNum' => 'default_paging_num',
        'maxResponseItems' => 'max_response_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultGitTreesPerPage' => 'setDefaultGitTreesPerPage',
        'defaultMaxBlobSize' => 'setDefaultMaxBlobSize',
        'defaultPagingNum' => 'setDefaultPagingNum',
        'maxResponseItems' => 'setMaxResponseItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultGitTreesPerPage' => 'getDefaultGitTreesPerPage',
        'defaultMaxBlobSize' => 'getDefaultMaxBlobSize',
        'defaultPagingNum' => 'getDefaultPagingNum',
        'maxResponseItems' => 'getMaxResponseItems'
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
        $this->container['defaultGitTreesPerPage'] = $data['defaultGitTreesPerPage'] ?? null;
        $this->container['defaultMaxBlobSize'] = $data['defaultMaxBlobSize'] ?? null;
        $this->container['defaultPagingNum'] = $data['defaultPagingNum'] ?? null;
        $this->container['maxResponseItems'] = $data['maxResponseItems'] ?? null;
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
     * Gets defaultGitTreesPerPage
     *
     * @return int|null
     */
    public function getDefaultGitTreesPerPage()
    {
        return $this->container['defaultGitTreesPerPage'];
    }

    /**
     * Sets defaultGitTreesPerPage
     *
     * @param int|null $defaultGitTreesPerPage defaultGitTreesPerPage
     *
     * @return self
     */
    public function setDefaultGitTreesPerPage($defaultGitTreesPerPage)
    {
        $this->container['defaultGitTreesPerPage'] = $defaultGitTreesPerPage;

        return $this;
    }

    /**
     * Gets defaultMaxBlobSize
     *
     * @return int|null
     */
    public function getDefaultMaxBlobSize()
    {
        return $this->container['defaultMaxBlobSize'];
    }

    /**
     * Sets defaultMaxBlobSize
     *
     * @param int|null $defaultMaxBlobSize defaultMaxBlobSize
     *
     * @return self
     */
    public function setDefaultMaxBlobSize($defaultMaxBlobSize)
    {
        $this->container['defaultMaxBlobSize'] = $defaultMaxBlobSize;

        return $this;
    }

    /**
     * Gets defaultPagingNum
     *
     * @return int|null
     */
    public function getDefaultPagingNum()
    {
        return $this->container['defaultPagingNum'];
    }

    /**
     * Sets defaultPagingNum
     *
     * @param int|null $defaultPagingNum defaultPagingNum
     *
     * @return self
     */
    public function setDefaultPagingNum($defaultPagingNum)
    {
        $this->container['defaultPagingNum'] = $defaultPagingNum;

        return $this;
    }

    /**
     * Gets maxResponseItems
     *
     * @return int|null
     */
    public function getMaxResponseItems()
    {
        return $this->container['maxResponseItems'];
    }

    /**
     * Sets maxResponseItems
     *
     * @param int|null $maxResponseItems maxResponseItems
     *
     * @return self
     */
    public function setMaxResponseItems($maxResponseItems)
    {
        $this->container['maxResponseItems'] = $maxResponseItems;

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


