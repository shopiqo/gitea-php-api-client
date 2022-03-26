<?php
/**
 * MigrateRepoOptions
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
 * MigrateRepoOptions Class Doc Comment
 *
 * @category Class
 * @description MigrateRepoOptions options for migrating repository&#39;s this is used to interact with api v1
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MigrateRepoOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MigrateRepoOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authPassword' => 'string',
        'authToken' => 'string',
        'authUsername' => 'string',
        'cloneAddr' => 'string',
        'description' => 'string',
        'issues' => 'bool',
        'labels' => 'bool',
        'lfs' => 'bool',
        'lfsEndpoint' => 'string',
        'milestones' => 'bool',
        'mirror' => 'bool',
        'mirrorInterval' => 'string',
        'private' => 'bool',
        'pullRequests' => 'bool',
        'releases' => 'bool',
        'repoName' => 'string',
        'repoOwner' => 'string',
        'service' => 'string',
        'uid' => 'int',
        'wiki' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authPassword' => null,
        'authToken' => null,
        'authUsername' => null,
        'cloneAddr' => null,
        'description' => null,
        'issues' => null,
        'labels' => null,
        'lfs' => null,
        'lfsEndpoint' => null,
        'milestones' => null,
        'mirror' => null,
        'mirrorInterval' => null,
        'private' => null,
        'pullRequests' => null,
        'releases' => null,
        'repoName' => null,
        'repoOwner' => null,
        'service' => null,
        'uid' => 'int64',
        'wiki' => null
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
        'authPassword' => 'auth_password',
        'authToken' => 'auth_token',
        'authUsername' => 'auth_username',
        'cloneAddr' => 'clone_addr',
        'description' => 'description',
        'issues' => 'issues',
        'labels' => 'labels',
        'lfs' => 'lfs',
        'lfsEndpoint' => 'lfs_endpoint',
        'milestones' => 'milestones',
        'mirror' => 'mirror',
        'mirrorInterval' => 'mirror_interval',
        'private' => 'private',
        'pullRequests' => 'pull_requests',
        'releases' => 'releases',
        'repoName' => 'repo_name',
        'repoOwner' => 'repo_owner',
        'service' => 'service',
        'uid' => 'uid',
        'wiki' => 'wiki'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authPassword' => 'setAuthPassword',
        'authToken' => 'setAuthToken',
        'authUsername' => 'setAuthUsername',
        'cloneAddr' => 'setCloneAddr',
        'description' => 'setDescription',
        'issues' => 'setIssues',
        'labels' => 'setLabels',
        'lfs' => 'setLfs',
        'lfsEndpoint' => 'setLfsEndpoint',
        'milestones' => 'setMilestones',
        'mirror' => 'setMirror',
        'mirrorInterval' => 'setMirrorInterval',
        'private' => 'setPrivate',
        'pullRequests' => 'setPullRequests',
        'releases' => 'setReleases',
        'repoName' => 'setRepoName',
        'repoOwner' => 'setRepoOwner',
        'service' => 'setService',
        'uid' => 'setUid',
        'wiki' => 'setWiki'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authPassword' => 'getAuthPassword',
        'authToken' => 'getAuthToken',
        'authUsername' => 'getAuthUsername',
        'cloneAddr' => 'getCloneAddr',
        'description' => 'getDescription',
        'issues' => 'getIssues',
        'labels' => 'getLabels',
        'lfs' => 'getLfs',
        'lfsEndpoint' => 'getLfsEndpoint',
        'milestones' => 'getMilestones',
        'mirror' => 'getMirror',
        'mirrorInterval' => 'getMirrorInterval',
        'private' => 'getPrivate',
        'pullRequests' => 'getPullRequests',
        'releases' => 'getReleases',
        'repoName' => 'getRepoName',
        'repoOwner' => 'getRepoOwner',
        'service' => 'getService',
        'uid' => 'getUid',
        'wiki' => 'getWiki'
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

    const SERVICE_GIT = 'git';
    const SERVICE_GITHUB = 'github';
    const SERVICE_GITEA = 'gitea';
    const SERVICE_GITLAB = 'gitlab';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceAllowableValues()
    {
        return [
            self::SERVICE_GIT,
            self::SERVICE_GITHUB,
            self::SERVICE_GITEA,
            self::SERVICE_GITLAB,
        ];
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
        $this->container['authPassword'] = $data['authPassword'] ?? null;
        $this->container['authToken'] = $data['authToken'] ?? null;
        $this->container['authUsername'] = $data['authUsername'] ?? null;
        $this->container['cloneAddr'] = $data['cloneAddr'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['issues'] = $data['issues'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['lfs'] = $data['lfs'] ?? null;
        $this->container['lfsEndpoint'] = $data['lfsEndpoint'] ?? null;
        $this->container['milestones'] = $data['milestones'] ?? null;
        $this->container['mirror'] = $data['mirror'] ?? null;
        $this->container['mirrorInterval'] = $data['mirrorInterval'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['pullRequests'] = $data['pullRequests'] ?? null;
        $this->container['releases'] = $data['releases'] ?? null;
        $this->container['repoName'] = $data['repoName'] ?? null;
        $this->container['repoOwner'] = $data['repoOwner'] ?? null;
        $this->container['service'] = $data['service'] ?? null;
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['wiki'] = $data['wiki'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cloneAddr'] === null) {
            $invalidProperties[] = "'cloneAddr' can't be null";
        }
        if ($this->container['repoName'] === null) {
            $invalidProperties[] = "'repoName' can't be null";
        }
        $allowedValues = $this->getServiceAllowableValues();
        if (!is_null($this->container['service']) && !in_array($this->container['service'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'service', must be one of '%s'",
                $this->container['service'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets authPassword
     *
     * @return string|null
     */
    public function getAuthPassword()
    {
        return $this->container['authPassword'];
    }

    /**
     * Sets authPassword
     *
     * @param string|null $authPassword authPassword
     *
     * @return self
     */
    public function setAuthPassword($authPassword)
    {
        $this->container['authPassword'] = $authPassword;

        return $this;
    }

    /**
     * Gets authToken
     *
     * @return string|null
     */
    public function getAuthToken()
    {
        return $this->container['authToken'];
    }

    /**
     * Sets authToken
     *
     * @param string|null $authToken authToken
     *
     * @return self
     */
    public function setAuthToken($authToken)
    {
        $this->container['authToken'] = $authToken;

        return $this;
    }

    /**
     * Gets authUsername
     *
     * @return string|null
     */
    public function getAuthUsername()
    {
        return $this->container['authUsername'];
    }

    /**
     * Sets authUsername
     *
     * @param string|null $authUsername authUsername
     *
     * @return self
     */
    public function setAuthUsername($authUsername)
    {
        $this->container['authUsername'] = $authUsername;

        return $this;
    }

    /**
     * Gets cloneAddr
     *
     * @return string
     */
    public function getCloneAddr()
    {
        return $this->container['cloneAddr'];
    }

    /**
     * Sets cloneAddr
     *
     * @param string $cloneAddr cloneAddr
     *
     * @return self
     */
    public function setCloneAddr($cloneAddr)
    {
        $this->container['cloneAddr'] = $cloneAddr;

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
     * Gets issues
     *
     * @return bool|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param bool|null $issues issues
     *
     * @return self
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return bool|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param bool|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets lfs
     *
     * @return bool|null
     */
    public function getLfs()
    {
        return $this->container['lfs'];
    }

    /**
     * Sets lfs
     *
     * @param bool|null $lfs lfs
     *
     * @return self
     */
    public function setLfs($lfs)
    {
        $this->container['lfs'] = $lfs;

        return $this;
    }

    /**
     * Gets lfsEndpoint
     *
     * @return string|null
     */
    public function getLfsEndpoint()
    {
        return $this->container['lfsEndpoint'];
    }

    /**
     * Sets lfsEndpoint
     *
     * @param string|null $lfsEndpoint lfsEndpoint
     *
     * @return self
     */
    public function setLfsEndpoint($lfsEndpoint)
    {
        $this->container['lfsEndpoint'] = $lfsEndpoint;

        return $this;
    }

    /**
     * Gets milestones
     *
     * @return bool|null
     */
    public function getMilestones()
    {
        return $this->container['milestones'];
    }

    /**
     * Sets milestones
     *
     * @param bool|null $milestones milestones
     *
     * @return self
     */
    public function setMilestones($milestones)
    {
        $this->container['milestones'] = $milestones;

        return $this;
    }

    /**
     * Gets mirror
     *
     * @return bool|null
     */
    public function getMirror()
    {
        return $this->container['mirror'];
    }

    /**
     * Sets mirror
     *
     * @param bool|null $mirror mirror
     *
     * @return self
     */
    public function setMirror($mirror)
    {
        $this->container['mirror'] = $mirror;

        return $this;
    }

    /**
     * Gets mirrorInterval
     *
     * @return string|null
     */
    public function getMirrorInterval()
    {
        return $this->container['mirrorInterval'];
    }

    /**
     * Sets mirrorInterval
     *
     * @param string|null $mirrorInterval mirrorInterval
     *
     * @return self
     */
    public function setMirrorInterval($mirrorInterval)
    {
        $this->container['mirrorInterval'] = $mirrorInterval;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool|null $private private
     *
     * @return self
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets pullRequests
     *
     * @return bool|null
     */
    public function getPullRequests()
    {
        return $this->container['pullRequests'];
    }

    /**
     * Sets pullRequests
     *
     * @param bool|null $pullRequests pullRequests
     *
     * @return self
     */
    public function setPullRequests($pullRequests)
    {
        $this->container['pullRequests'] = $pullRequests;

        return $this;
    }

    /**
     * Gets releases
     *
     * @return bool|null
     */
    public function getReleases()
    {
        return $this->container['releases'];
    }

    /**
     * Sets releases
     *
     * @param bool|null $releases releases
     *
     * @return self
     */
    public function setReleases($releases)
    {
        $this->container['releases'] = $releases;

        return $this;
    }

    /**
     * Gets repoName
     *
     * @return string
     */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
     * Sets repoName
     *
     * @param string $repoName repoName
     *
     * @return self
     */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;

        return $this;
    }

    /**
     * Gets repoOwner
     *
     * @return string|null
     */
    public function getRepoOwner()
    {
        return $this->container['repoOwner'];
    }

    /**
     * Sets repoOwner
     *
     * @param string|null $repoOwner Name of User or Organisation who will own Repo after migration
     *
     * @return self
     */
    public function setRepoOwner($repoOwner)
    {
        $this->container['repoOwner'] = $repoOwner;

        return $this;
    }

    /**
     * Gets service
     *
     * @return string|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param string|null $service service
     *
     * @return self
     */
    public function setService($service)
    {
        $allowedValues = $this->getServiceAllowableValues();
        if (!is_null($service) && !in_array($service, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'service', must be one of '%s'",
                    $service,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return int|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int|null $uid deprecated (only for backwards compatibility)
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets wiki
     *
     * @return bool|null
     */
    public function getWiki()
    {
        return $this->container['wiki'];
    }

    /**
     * Sets wiki
     *
     * @param bool|null $wiki wiki
     *
     * @return self
     */
    public function setWiki($wiki)
    {
        $this->container['wiki'] = $wiki;

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


