<?php
/**
 * StopWatch
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
 * StopWatch Class Doc Comment
 *
 * @category Class
 * @description StopWatch represent a running stopwatch
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StopWatch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StopWatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created' => '\DateTime',
        'duration' => 'string',
        'issueIndex' => 'int',
        'issueTitle' => 'string',
        'repoName' => 'string',
        'repoOwnerName' => 'string',
        'seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created' => 'date-time',
        'duration' => null,
        'issueIndex' => 'int64',
        'issueTitle' => null,
        'repoName' => null,
        'repoOwnerName' => null,
        'seconds' => 'int64'
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
        'created' => 'created',
        'duration' => 'duration',
        'issueIndex' => 'issue_index',
        'issueTitle' => 'issue_title',
        'repoName' => 'repo_name',
        'repoOwnerName' => 'repo_owner_name',
        'seconds' => 'seconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'duration' => 'setDuration',
        'issueIndex' => 'setIssueIndex',
        'issueTitle' => 'setIssueTitle',
        'repoName' => 'setRepoName',
        'repoOwnerName' => 'setRepoOwnerName',
        'seconds' => 'setSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'duration' => 'getDuration',
        'issueIndex' => 'getIssueIndex',
        'issueTitle' => 'getIssueTitle',
        'repoName' => 'getRepoName',
        'repoOwnerName' => 'getRepoOwnerName',
        'seconds' => 'getSeconds'
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
        $this->container['created'] = $data['created'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['issueIndex'] = $data['issueIndex'] ?? null;
        $this->container['issueTitle'] = $data['issueTitle'] ?? null;
        $this->container['repoName'] = $data['repoName'] ?? null;
        $this->container['repoOwnerName'] = $data['repoOwnerName'] ?? null;
        $this->container['seconds'] = $data['seconds'] ?? null;
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
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets issueIndex
     *
     * @return int|null
     */
    public function getIssueIndex()
    {
        return $this->container['issueIndex'];
    }

    /**
     * Sets issueIndex
     *
     * @param int|null $issueIndex issueIndex
     *
     * @return self
     */
    public function setIssueIndex($issueIndex)
    {
        $this->container['issueIndex'] = $issueIndex;

        return $this;
    }

    /**
     * Gets issueTitle
     *
     * @return string|null
     */
    public function getIssueTitle()
    {
        return $this->container['issueTitle'];
    }

    /**
     * Sets issueTitle
     *
     * @param string|null $issueTitle issueTitle
     *
     * @return self
     */
    public function setIssueTitle($issueTitle)
    {
        $this->container['issueTitle'] = $issueTitle;

        return $this;
    }

    /**
     * Gets repoName
     *
     * @return string|null
     */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
     * Sets repoName
     *
     * @param string|null $repoName repoName
     *
     * @return self
     */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;

        return $this;
    }

    /**
     * Gets repoOwnerName
     *
     * @return string|null
     */
    public function getRepoOwnerName()
    {
        return $this->container['repoOwnerName'];
    }

    /**
     * Sets repoOwnerName
     *
     * @param string|null $repoOwnerName repoOwnerName
     *
     * @return self
     */
    public function setRepoOwnerName($repoOwnerName)
    {
        $this->container['repoOwnerName'] = $repoOwnerName;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int|null
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int|null $seconds seconds
     *
     * @return self
     */
    public function setSeconds($seconds)
    {
        $this->container['seconds'] = $seconds;

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


