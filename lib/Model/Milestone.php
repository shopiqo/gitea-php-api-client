<?php
/**
 * Milestone
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
 * Milestone Class Doc Comment
 *
 * @category Class
 * @description Milestone milestone is a collection of issues on one repository
 * @package  Efsa\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Milestone implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Milestone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'closed_at' => '\DateTime',
        'closed_issues' => 'int',
        'created_at' => '\DateTime',
        'description' => 'string',
        'due_on' => '\DateTime',
        'id' => 'int',
        'open_issues' => 'int',
        'state' => 'string',
        'title' => 'string',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'closed_at' => 'date-time',
        'closed_issues' => 'int64',
        'created_at' => 'date-time',
        'description' => null,
        'due_on' => 'date-time',
        'id' => 'int64',
        'open_issues' => 'int64',
        'state' => null,
        'title' => null,
        'updated_at' => 'date-time'
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
        'closed_at' => 'closed_at',
        'closed_issues' => 'closed_issues',
        'created_at' => 'created_at',
        'description' => 'description',
        'due_on' => 'due_on',
        'id' => 'id',
        'open_issues' => 'open_issues',
        'state' => 'state',
        'title' => 'title',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'closed_at' => 'setClosedAt',
        'closed_issues' => 'setClosedIssues',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'due_on' => 'setDueOn',
        'id' => 'setId',
        'open_issues' => 'setOpenIssues',
        'state' => 'setState',
        'title' => 'setTitle',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'closed_at' => 'getClosedAt',
        'closed_issues' => 'getClosedIssues',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'due_on' => 'getDueOn',
        'id' => 'getId',
        'open_issues' => 'getOpenIssues',
        'state' => 'getState',
        'title' => 'getTitle',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['closed_at'] = $data['closed_at'] ?? null;
        $this->container['closed_issues'] = $data['closed_issues'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['due_on'] = $data['due_on'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['open_issues'] = $data['open_issues'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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
     * Gets closed_at
     *
     * @return \DateTime|null
     */
    public function getClosedAt()
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param \DateTime|null $closed_at closed_at
     *
     * @return self
     */
    public function setClosedAt($closed_at)
    {
        $this->container['closed_at'] = $closed_at;

        return $this;
    }

    /**
     * Gets closed_issues
     *
     * @return int|null
     */
    public function getClosedIssues()
    {
        return $this->container['closed_issues'];
    }

    /**
     * Sets closed_issues
     *
     * @param int|null $closed_issues closed_issues
     *
     * @return self
     */
    public function setClosedIssues($closed_issues)
    {
        $this->container['closed_issues'] = $closed_issues;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets due_on
     *
     * @return \DateTime|null
     */
    public function getDueOn()
    {
        return $this->container['due_on'];
    }

    /**
     * Sets due_on
     *
     * @param \DateTime|null $due_on due_on
     *
     * @return self
     */
    public function setDueOn($due_on)
    {
        $this->container['due_on'] = $due_on;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets open_issues
     *
     * @return int|null
     */
    public function getOpenIssues()
    {
        return $this->container['open_issues'];
    }

    /**
     * Sets open_issues
     *
     * @param int|null $open_issues open_issues
     *
     * @return self
     */
    public function setOpenIssues($open_issues)
    {
        $this->container['open_issues'] = $open_issues;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state StateType issue state type
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


