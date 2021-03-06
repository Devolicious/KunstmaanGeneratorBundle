<?php
namespace Kunstmaan\GeneratorBundle\Tests\Helper;

use Kunstmaan\GeneratorBundle\Helper\GeneratorUtils;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-03 at 09:50:30.
 */
class GeneratorUtilsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeneratorUtils
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new GeneratorUtils;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::getFieldsFromMetadata
     * @todo   Implement testGetFieldsFromMetadata().
     */
    public function testGetFieldsFromMetadata()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::prepend
     * @todo   Implement testPrepend().
     */
    public function testPrepend()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::replace
     * @todo   Implement testReplace().
     */
    public function testReplace()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }



    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testCleanPrefixWhenPrefixEmpty()
    {
        $response = GeneratorUtils::cleanPrefix('');
        $this->assertEquals(null, $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testCleanPrefixShouldConvertToLowercase()
    {
        $response = GeneratorUtils::cleanPrefix('TEST');
        $this->assertEquals('test_', $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testCleanPrefixShouldAppendUnderscore()
    {
        $response = GeneratorUtils::cleanPrefix('test');
        $this->assertEquals('test_', $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testCleanPrefixShouldAppendUnderscoreOnlyWhenNeeded()
    {
        $response = GeneratorUtils::cleanPrefix('test_');
        $this->assertEquals('test_', $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testCleanPrefixShouldLeaveUnderscoresInPlace()
    {
        $response = GeneratorUtils::cleanPrefix('test_bundle');
        $this->assertEquals('test_bundle_', $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testCleanPrefixShouldLeaveSingleUnderscore()
    {
        $response = GeneratorUtils::cleanPrefix('test____');
        $this->assertEquals('test_', $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testShouldConvertOnlyUnderscoresToNull()
    {
        $response = GeneratorUtils::cleanPrefix('____');
        $this->assertEquals(null, $response);
    }

    /**
     * @covers Kunstmaan\GeneratorBundle\Helper\GeneratorUtils::cleanPrefix
     */
    public function testSpacesShouldCreateEmptyPrefix()
    {
        $response = GeneratorUtils::cleanPrefix('  ');
        $this->assertEquals(null, $response);
    }
}
