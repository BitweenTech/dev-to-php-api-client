<?php
/**
 * SharedUser
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DEV API (beta)
 *
 * Access Forem articles, users and other resources via API.  For a real-world example of Forem in action, check out [DEV](https://www.dev.to).  All endpoints that don't require authentication are CORS enabled.  Dates and date times, unless otherwise specified, must be in the [RFC 3339](https://tools.ietf.org/html/rfc3339) format.  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 0.9.5
 * Contact: yo@dev.to
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bitween\DevTo\Model;

use \ArrayAccess;
use \Bitween\DevTo\ObjectSerializer;

/**
 * SharedUser Class Doc Comment
 *
 * @category Class
 * @description The resource creator
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SharedUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SharedUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'username' => 'string',
        'twitterUsername' => 'string',
        'githubUsername' => 'string',
        'websiteUrl' => 'string',
        'profileImage' => 'string',
        'profileImage90' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'username' => null,
        'twitterUsername' => null,
        'githubUsername' => null,
        'websiteUrl' => 'url',
        'profileImage' => null,
        'profileImage90' => null
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
        'name' => 'name',
        'username' => 'username',
        'twitterUsername' => 'twitter_username',
        'githubUsername' => 'github_username',
        'websiteUrl' => 'website_url',
        'profileImage' => 'profile_image',
        'profileImage90' => 'profile_image_90'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'username' => 'setUsername',
        'twitterUsername' => 'setTwitterUsername',
        'githubUsername' => 'setGithubUsername',
        'websiteUrl' => 'setWebsiteUrl',
        'profileImage' => 'setProfileImage',
        'profileImage90' => 'setProfileImage90'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'username' => 'getUsername',
        'twitterUsername' => 'getTwitterUsername',
        'githubUsername' => 'getGithubUsername',
        'websiteUrl' => 'getWebsiteUrl',
        'profileImage' => 'getProfileImage',
        'profileImage90' => 'getProfileImage90'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['twitterUsername'] = $data['twitterUsername'] ?? null;
        $this->container['githubUsername'] = $data['githubUsername'] ?? null;
        $this->container['websiteUrl'] = $data['websiteUrl'] ?? null;
        $this->container['profileImage'] = $data['profileImage'] ?? null;
        $this->container['profileImage90'] = $data['profileImage90'] ?? null;
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
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets twitterUsername
     *
     * @return string|null
     */
    public function getTwitterUsername()
    {
        return $this->container['twitterUsername'];
    }

    /**
     * Sets twitterUsername
     *
     * @param string|null $twitterUsername twitterUsername
     *
     * @return self
     */
    public function setTwitterUsername($twitterUsername)
    {
        $this->container['twitterUsername'] = $twitterUsername;

        return $this;
    }

    /**
     * Gets githubUsername
     *
     * @return string|null
     */
    public function getGithubUsername()
    {
        return $this->container['githubUsername'];
    }

    /**
     * Sets githubUsername
     *
     * @param string|null $githubUsername githubUsername
     *
     * @return self
     */
    public function setGithubUsername($githubUsername)
    {
        $this->container['githubUsername'] = $githubUsername;

        return $this;
    }

    /**
     * Gets websiteUrl
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['websiteUrl'];
    }

    /**
     * Sets websiteUrl
     *
     * @param string|null $websiteUrl websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->container['websiteUrl'] = $websiteUrl;

        return $this;
    }

    /**
     * Gets profileImage
     *
     * @return string|null
     */
    public function getProfileImage()
    {
        return $this->container['profileImage'];
    }

    /**
     * Sets profileImage
     *
     * @param string|null $profileImage Profile image (640x640)
     *
     * @return self
     */
    public function setProfileImage($profileImage)
    {
        $this->container['profileImage'] = $profileImage;

        return $this;
    }

    /**
     * Gets profileImage90
     *
     * @return string|null
     */
    public function getProfileImage90()
    {
        return $this->container['profileImage90'];
    }

    /**
     * Sets profileImage90
     *
     * @param string|null $profileImage90 Profile image (90x90)
     *
     * @return self
     */
    public function setProfileImage90($profileImage90)
    {
        $this->container['profileImage90'] = $profileImage90;

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

