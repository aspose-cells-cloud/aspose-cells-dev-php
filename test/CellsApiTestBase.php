<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ApiExceptionphp.cs">
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

namespace Aspose\Cells\Dev;
require_once('vendor\autoload.php');

use \Aspose\Cells\Dev\Api\CellsApi;
use \Aspose\Cells\Dev\Model\RequestFile;
use \Aspose\Cells\Dev\Model\DigitalSignaturFile;

class CellsApiTestBase
{

    public static function getFullFilename( $filename )
    {
        $cwd = getcwd();
        $parents = "/";
        $png = "TestData/" . $filename;
        $file = null;
        for ($x=0; $x <= 10; $x++) {
            $path = $cwd . $parents . $png;
            if (file_exists($path)) {
                $file = $path;
                break;
            }
            $parents = $parents . "../";
        }

      return $file;
    }

    public static function getRequestFile( $filename)
    {
        $requestFile = new RequestFile();
        $path = self::getFullFilename( $filename);
        $fp = fopen($path, "r");
        if ($fp) {
            $filesize = filesize($path);
            $content = fread($fp, $filesize);
            $requestFile->setData(chunk_split(base64_encode($content)));
            $requestFile->setName($filename);
        }
        fclose($fp);
        return $requestFile;
    }

    public static function getDigitalSignaturFile( $filename,$password)
    {
        $digitalSignaturFile = new DigitalSignaturFile();
        $path = self::getFullFilename( $filename);
        $fp = fopen($path, "r");
        if ($fp) {
            $filesize = filesize($path);
            $content = fread($fp, $filesize);
            $digitalSignaturFile->setData(chunk_split(base64_encode($content)));
            $digitalSignaturFile->setName($filename);
            $digitalSignaturFile->setPassword($password);
        }
        fclose($fp);
        return $digitalSignaturFile;
    }
}

