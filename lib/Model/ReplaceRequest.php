<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReplaceRequest.cs">
 *   Copyright (c) 2023 Aspose.Cells Dev
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Dev\Model;

use \ArrayAccess;
use \Aspose\Cells\Dev\ObjectSerializer;

class ReplaceRequest implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplaceRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'new_value' => 'string',
        'old_value' => 'string',
        'files' => '\Aspose\Cells\Cloud\Model\RequestFile[]',
        'load_extension_parameters' => '\Aspose\Cells\Cloud\Model\RequestParameter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'new_value' => null  ,
        'old_value' => null  ,
        'files' => null  ,
        'load_extension_parameters' => null  
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
         'new_value' => 'NewValue' ,
         'old_value' => 'OldValue' ,
         'files' => 'Files' ,
         'load_extension_parameters' => 'LoadExtensionParameters' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'new_value' => 'setNewValue' ,
        'old_value' => 'setOldValue' ,
        'files' => 'setFiles' ,
        'load_extension_parameters' => 'setLoadExtensionParameters' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'new_value' => 'getNewValue' ,
        'old_value' => 'getOldValue' ,
        'files' => 'getFiles' ,
        'load_extension_parameters' => 'getLoadExtensionParameters' 
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
        return self::$swaggerModelName;
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
        $this->container['new_value'] = isset($data['new_value']) ? $data['new_value'] : null;
        $this->container['old_value'] = isset($data['old_value']) ? $data['old_value'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['load_extension_parameters'] = isset($data['load_extension_parameters']) ? $data['load_extension_parameters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['new_value'] === null) {
            $invalidProperties[] = "'new_value'' can't be null";
        }
        if ($this->container['old_value'] === null) {
            $invalidProperties[] = "'old_value'' can't be null";
        }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files'' can't be null";
        }
        if ($this->container['load_extension_parameters'] === null) {
            $invalidProperties[] = "'load_extension_parameters'' can't be null";
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
        if ($this->container['new_value'] === null) {
                    return false;
                }
        if ($this->container['old_value'] === null) {
                    return false;
                }
        if ($this->container['files'] === null) {
                    return false;
                }
        if ($this->container['load_extension_parameters'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets new_value
     *
     * @return bool
     */
    public function getNewValue()
    {
        return $this->container['new_value'];
    }

    /**
     * Sets new_value
     *
     * @param bool $new_value Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setNewValue($new_value)
    {
        $this->container['new_value'] = $new_value;

        return $this;
    }
   /**
     * Gets old_value
     *
     * @return bool
     */
    public function getOldValue()
    {
        return $this->container['old_value'];
    }

    /**
     * Sets old_value
     *
     * @param bool $old_value Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setOldValue($old_value)
    {
        $this->container['old_value'] = $old_value;

        return $this;
    }
   /**
     * Gets files
     *
     * @return bool
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param bool $files Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }
   /**
     * Gets load_extension_parameters
     *
     * @return bool
     */
    public function getLoadExtensionParameters()
    {
        return $this->container['load_extension_parameters'];
    }

    /**
     * Sets load_extension_parameters
     *
     * @param bool $load_extension_parameters Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setLoadExtensionParameters($load_extension_parameters)
    {
        $this->container['load_extension_parameters'] = $load_extension_parameters;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }      
}
