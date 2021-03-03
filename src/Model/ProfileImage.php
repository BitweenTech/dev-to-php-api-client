<?php
/**
 * ProfileImage
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
 * ProfileImage Class Doc Comment
 *
 * @category Class
 * @description Profile image
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProfileImage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProfileImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'typeOf' => 'string',
        'imageOf' => 'string',
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
        'typeOf' => null,
        'imageOf' => null,
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
        'typeOf' => 'type_of',
        'imageOf' => 'image_of',
        'profileImage' => 'profile_image',
        'profileImage90' => 'profile_image_90'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'typeOf' => 'setTypeOf',
        'imageOf' => 'setImageOf',
        'profileImage' => 'setProfileImage',
        'profileImage90' => 'setProfileImage90'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'typeOf' => 'getTypeOf',
        'imageOf' => 'getImageOf',
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

    const TYPE_OF_PROFILE_IMAGE = 'profile_image';
    const IMAGE_OF_USER = 'user';
    const IMAGE_OF_ORGANIZATION = 'organization';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeOfAllowableValues()
    {
        return [
            self::TYPE_OF_PROFILE_IMAGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageOfAllowableValues()
    {
        return [
            self::IMAGE_OF_USER,
            self::IMAGE_OF_ORGANIZATION,
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
        $this->container['typeOf'] = $data['typeOf'] ?? null;
        $this->container['imageOf'] = $data['imageOf'] ?? null;
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

        $allowedValues = $this->getTypeOfAllowableValues();
        if (!is_null($this->container['typeOf']) && !in_array($this->container['typeOf'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'typeOf', must be one of '%s'",
                $this->container['typeOf'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getImageOfAllowableValues();
        if (!is_null($this->container['imageOf']) && !in_array($this->container['imageOf'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'imageOf', must be one of '%s'",
                $this->container['imageOf'],
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
     * Gets typeOf
     *
     * @return string|null
     */
    public function getTypeOf()
    {
        return $this->container['typeOf'];
    }

    /**
     * Sets typeOf
     *
     * @param string|null $typeOf typeOf
     *
     * @return self
     */
    public function setTypeOf($typeOf)
    {
        $allowedValues = $this->getTypeOfAllowableValues();
        if (!is_null($typeOf) && !in_array($typeOf, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'typeOf', must be one of '%s'",
                    $typeOf,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['typeOf'] = $typeOf;

        return $this;
    }

    /**
     * Gets imageOf
     *
     * @return string|null
     */
    public function getImageOf()
    {
        return $this->container['imageOf'];
    }

    /**
     * Sets imageOf
     *
     * @param string|null $imageOf Discriminates what is the type of the profile image owner (user or organization)
     *
     * @return self
     */
    public function setImageOf($imageOf)
    {
        $allowedValues = $this->getImageOfAllowableValues();
        if (!is_null($imageOf) && !in_array($imageOf, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'imageOf', must be one of '%s'",
                    $imageOf,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['imageOf'] = $imageOf;

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

