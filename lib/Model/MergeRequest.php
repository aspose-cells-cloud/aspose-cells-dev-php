<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergeRequest.cs">
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

class MergeRequest implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergeRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'format' => 'string',
        'in_one_sheet' => 'bool',
        'files' => '\Aspose\Cells\Cloud\Model\RequestFile[]',
        'load_extension_parameters' => '\Aspose\Cells\Cloud\Model\RequestParameter[]',
        'save_extension_parameters' => '\Aspose\Cells\Cloud\Model\RequestParameter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'format' => null  ,
        'in_one_sheet' => null  ,
        'files' => null  ,
        'load_extension_parameters' => null  ,
        'save_extension_parameters' => null  
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
         'format' => 'Format' ,
         'in_one_sheet' => 'InOneSheet' ,
         'files' => 'Files' ,
         'load_extension_parameters' => 'LoadExtensionParameters' ,
         'save_extension_parameters' => 'SaveExtensionParameters' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat' ,
        'in_one_sheet' => 'setInOneSheet' ,
        'files' => 'setFiles' ,
        'load_extension_parameters' => 'setLoadExtensionParameters' ,
        'save_extension_parameters' => 'setSaveExtensionParameters' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat' ,
        'in_one_sheet' => 'getInOneSheet' ,
        'files' => 'getFiles' ,
        'load_extension_parameters' => 'getLoadExtensionParameters' ,
        'save_extension_parameters' => 'getSaveExtensionParameters' 
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['in_one_sheet'] = isset($data['in_one_sheet']) ? $data['in_one_sheet'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['load_extension_parameters'] = isset($data['load_extension_parameters']) ? $data['load_extension_parameters'] : null;
        $this->container['save_extension_parameters'] = isset($data['save_extension_parameters']) ? $data['save_extension_parameters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format'' can't be null";
        }
        if ($this->container['in_one_sheet'] === null) {
            $invalidProperties[] = "'in_one_sheet'' can't be null";
        }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files'' can't be null";
        }
        if ($this->container['load_extension_parameters'] === null) {
            $invalidProperties[] = "'load_extension_parameters'' can't be null";
        }
        if ($this->container['save_extension_parameters'] === null) {
            $invalidProperties[] = "'save_extension_parameters'' can't be null";
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
        if ($this->container['format'] === null) {
                    return false;
                }
        if ($this->container['in_one_sheet'] === null) {
                    return false;
                }
        if ($this->container['files'] === null) {
                    return false;
                }
        if ($this->container['load_extension_parameters'] === null) {
                    return false;
                }
        if ($this->container['save_extension_parameters'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets format
     *
     * @return bool
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param bool $format Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }
   /**
     * Gets in_one_sheet
     *
     * @return bool
     */
    public function getInOneSheet()
    {
        return $this->container['in_one_sheet'];
    }

    /**
     * Sets in_one_sheet
     *
     * @param bool $in_one_sheet Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setInOneSheet($in_one_sheet)
    {
        $this->container['in_one_sheet'] = $in_one_sheet;

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
     * Gets save_extension_parameters
     *
     * @return bool
     */
    public function getSaveExtensionParameters()
    {
        return $this->container['save_extension_parameters'];
    }

    /**
     * Sets save_extension_parameters
     *
     * @param bool $save_extension_parameters Get or set the flag indicating whether the rule is an \"above average\" rule.    'true' indicates 'above average'.  Default value is true.
     *
     * @return $this
     */
    public function setSaveExtensionParameters($save_extension_parameters)
    {
        $this->container['save_extension_parameters'] = $save_extension_parameters;

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
