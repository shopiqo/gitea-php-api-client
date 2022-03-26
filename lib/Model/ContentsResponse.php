<?php
/**
 * ContentsResponse
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
 * ContentsResponse Class Doc Comment
 *
 * @category Class
 * @description ContentsResponse contains information about a repo&#39;s entry&#39;s (dir, file, symlink, submodule) metadata and content
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContentsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'links' => '\Efsa\Client\Gitea\Model\FileLinksResponse',
        'content' => 'string',
        'downloadUrl' => 'string',
        'encoding' => 'string',
        'gitUrl' => 'string',
        'htmlUrl' => 'string',
        'name' => 'string',
        'path' => 'string',
        'sha' => 'string',
        'size' => 'int',
        'submoduleGitUrl' => 'string',
        'target' => 'string',
        'type' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'links' => null,
        'content' => null,
        'downloadUrl' => null,
        'encoding' => null,
        'gitUrl' => null,
        'htmlUrl' => null,
        'name' => null,
        'path' => null,
        'sha' => null,
        'size' => 'int64',
        'submoduleGitUrl' => null,
        'target' => null,
        'type' => null,
        'url' => null
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
        'links' => '_links',
        'content' => 'content',
        'downloadUrl' => 'download_url',
        'encoding' => 'encoding',
        'gitUrl' => 'git_url',
        'htmlUrl' => 'html_url',
        'name' => 'name',
        'path' => 'path',
        'sha' => 'sha',
        'size' => 'size',
        'submoduleGitUrl' => 'submodule_git_url',
        'target' => 'target',
        'type' => 'type',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'content' => 'setContent',
        'downloadUrl' => 'setDownloadUrl',
        'encoding' => 'setEncoding',
        'gitUrl' => 'setGitUrl',
        'htmlUrl' => 'setHtmlUrl',
        'name' => 'setName',
        'path' => 'setPath',
        'sha' => 'setSha',
        'size' => 'setSize',
        'submoduleGitUrl' => 'setSubmoduleGitUrl',
        'target' => 'setTarget',
        'type' => 'setType',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'content' => 'getContent',
        'downloadUrl' => 'getDownloadUrl',
        'encoding' => 'getEncoding',
        'gitUrl' => 'getGitUrl',
        'htmlUrl' => 'getHtmlUrl',
        'name' => 'getName',
        'path' => 'getPath',
        'sha' => 'getSha',
        'size' => 'getSize',
        'submoduleGitUrl' => 'getSubmoduleGitUrl',
        'target' => 'getTarget',
        'type' => 'getType',
        'url' => 'getUrl'
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
        $this->container['links'] = $data['links'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['downloadUrl'] = $data['downloadUrl'] ?? null;
        $this->container['encoding'] = $data['encoding'] ?? null;
        $this->container['gitUrl'] = $data['gitUrl'] ?? null;
        $this->container['htmlUrl'] = $data['htmlUrl'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['sha'] = $data['sha'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['submoduleGitUrl'] = $data['submoduleGitUrl'] ?? null;
        $this->container['target'] = $data['target'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * Gets links
     *
     * @return \Efsa\Client\Gitea\Model\FileLinksResponse|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Efsa\Client\Gitea\Model\FileLinksResponse|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content `content` is populated when `type` is `file`, otherwise null
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets downloadUrl
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
     * Sets downloadUrl
     *
     * @param string|null $downloadUrl downloadUrl
     *
     * @return self
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding `encoding` is populated when `type` is `file`, otherwise null
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets gitUrl
     *
     * @return string|null
     */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
     * Sets gitUrl
     *
     * @param string|null $gitUrl gitUrl
     *
     * @return self
     */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;

        return $this;
    }

    /**
     * Gets htmlUrl
     *
     * @return string|null
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     *
     * @param string|null $htmlUrl htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets sha
     *
     * @return string|null
     */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
     * Sets sha
     *
     * @param string|null $sha sha
     *
     * @return self
     */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets submoduleGitUrl
     *
     * @return string|null
     */
    public function getSubmoduleGitUrl()
    {
        return $this->container['submoduleGitUrl'];
    }

    /**
     * Sets submoduleGitUrl
     *
     * @param string|null $submoduleGitUrl `submodule_git_url` is populated when `type` is `submodule`, otherwise null
     *
     * @return self
     */
    public function setSubmoduleGitUrl($submoduleGitUrl)
    {
        $this->container['submoduleGitUrl'] = $submoduleGitUrl;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string|null $target `target` is populated when `type` is `symlink`, otherwise null
     *
     * @return self
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type `type` will be `file`, `dir`, `symlink`, or `submodule`
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


