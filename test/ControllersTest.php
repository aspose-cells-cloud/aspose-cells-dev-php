<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ControllersTests.php.cs">
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
require_once('test\CellsApiTestBase.php');
use \Aspose\Cells\Dev\Configuration;
use \Aspose\Cells\Dev\ApiException;
use \Aspose\Cells\Dev\ObjectSerializer;
use \Aspose\Cells\Dev\CellsApiTestBase;
use \Aspose\Cells\Dev\Api\CellsDevApi;

use \Aspose\Cells\Dev\Model\ConvertRequest; 
use \Aspose\Cells\Dev\Model\DigitalSignaturFile; 
use \Aspose\Cells\Dev\Model\DigitalSignaturRequest; 
use \Aspose\Cells\Dev\Model\MergeRequest; 
use \Aspose\Cells\Dev\Model\ProtectionRequest; 
use \Aspose\Cells\Dev\Model\ReplaceRequest; 
use \Aspose\Cells\Dev\Model\RequestFile; 
use \Aspose\Cells\Dev\Model\RequestParameter; 
use \Aspose\Cells\Dev\Model\ResponseFile; 
use \Aspose\Cells\Dev\Model\ResponseFiles; 
use \Aspose\Cells\Dev\Model\SearchRequest; 
use \Aspose\Cells\Dev\Model\SplitRequest; 
use \Aspose\Cells\Dev\Model\TextItem; 
use \Aspose\Cells\Dev\Model\TextItems; 

use PHPUnit\Framework\TestCase;
class ControllersTest extends \PHPUnit_Framework_TestCase
{

	protected  $instance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->instance = new CellsDevApi();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**ve
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_pdf()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'pdf';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_docx()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'docx';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_pptx()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'pptx';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_json()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'json';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_markdown()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'markdown';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_png()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'png';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_ods()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'ods';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_numbers()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'numbers';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for conver workbook to one of the available formats.
    **/

    public function testPostConvertWorkbook_html()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'html';

        $request = new ConvertRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostConvertWorkbook($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_pdf()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'pdf';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_docx()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'docx';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_pptx()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'pptx';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_json()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'json';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_markdown()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'markdown';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_png()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'png';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_ods()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'ods';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_numbers()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'numbers';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for merge multi workbook into one of the available formats.
    **/

    public function testPostMerge_html()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'html';

        $request = new MergeRequest();
        $request->setFormat($format);  

        $request->setInOneSheet(true);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostMerge($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_pdf()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'pdf';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_docx()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'docx';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_pptx()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'pptx';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_json()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'json';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_markdown()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'markdown';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_png()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'png';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_ods()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'ods';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_numbers()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'numbers';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for split files to  the available format files.
    **/

    public function testPostSplit_html()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $format = 'html';

        $request = new SplitRequest();
        $request->setFormat($format);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSplit($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for search text in files.
    **/

    public function testPostSearch_123()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $text = '123';

        $request = new SearchRequest();
        $request->setText($text);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSearch($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for search text in files.
    **/

    public function testPostSearch_test()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $text = 'test';

        $request = new SearchRequest();
        $request->setText($text);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostSearch($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for replace in files.
    **/

    public function testPostReplace_123_456()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $newValue = '123';
        $oldValue = '456';

        $request = new ReplaceRequest();
        $request->setNewValue($newValue);  

        $request->setOldValue($oldValue);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostReplace($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for replace in files.
    **/

    public function testPostReplace_testnew_testold()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $newValue = 'testnew';
        $oldValue = 'testold';

        $request = new ReplaceRequest();
        $request->setNewValue($newValue);  

        $request->setOldValue($oldValue);  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostReplace($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for encrypt files with password.
    **/

    public function testPostEncryptWithPassword()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $request = new ProtectionRequest();
        $request->setPassword("123456");  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostEncryptWithPassword($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for decrypt files with password.
    **/

    public function testPostDecryptWithPassword()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';

        $request = new ProtectionRequest();
        $request->setPassword("123456");  


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostDecryptWithPassword($request);
        $this->assertNotNull($actual);
    }

    /**
    * Test for digital signature for files.
    **/

    public function testPostDigitalSignature()
    {
        $localBook1 = 'Book1.xlsx';
        $localMyDoc = 'myDocument.xlsx';
        $localPfx = 'roywang.pfx';

        $request = new DigitalSignaturRequest();
        $request_localPfx = CellsApiTestBase::getDigitalSignaturFile($localPfx, "12345");

        $request->setDigitalSignaturFiles(array($request_localPfx ));


        $request_localBook1 = CellsApiTestBase::getRequestFile($localBook1);

        $request_localMyDoc = CellsApiTestBase::getRequestFile($localMyDoc);

        $request->setFiles(array($request_localBook1 ,$request_localMyDoc ));
         

        $actual =  $this->instance->PostDigitalSignature($request);
        $this->assertNotNull($actual);
    }
}