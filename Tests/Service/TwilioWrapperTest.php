<?php
namespace Vresh\TwilioBundle\Tests\DependencyInjection;

use Vresh\TwilioBundle\Service\TwilioWrapper,
    Vresh\TwilioBundle\Service\TwilioCapabilityWrapper;

/**
 * Test the TwilioWrapper
 *
 * @author Fridolin Koch <info@fridokoch.de>
 *
 */
class TwilioWrapperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Vresh\TwilioBundle\Service\TwilioWrapper()
     */
    public function testTwilioWrapper()
    {
        $twilio = new TwilioWrapper('AAAA', 'XXXX');
        //check if instance
        $this->assertInstanceOf('Vresh\TwilioBundle\Service\TwilioWrapper', $twilio);
    }

    /**
     * @covers \Vresh\TwilioBundle\Service\TwilioWrapper::createInstance()
     */
    public function testCreateInstance()
    {
        $twilio = new TwilioWrapper('AAAA', 'XXXX');
        //create other instance
        $otherInstance = $twilio->createInstance('BBBB', 'CCCCC');
        //check class
        $this->assertInstanceOf('\Services_Twilio', $otherInstance);
    }

    /**
     * @covers \Vresh\TwilioBundle\Service\TwilioCapabilityWrapper()
     */
    public function testCapabilityWrapper()
    {
        $twilio = new TwilioCapabilityWrapper('AAAA', 'XXXX');
        //check class
        $this->assertInstanceOf('\Services_Twilio_Capability', $twilio);
    }

    /**
     * @covers \Vresh\TwilioBundle\Service\TwilioCapabilityWrapper()::createInstnace()
     */
    public function testCapabilityCreateInstance()
    {
        $twilio = new TwilioCapabilityWrapper('AAAA', 'XXXX');
        //create other instance
        $otherInstance = $twilio->createInstance('BBBB', 'CCCCC');
        //check class
        $this->assertInstanceOf('\Services_Twilio_Capability', $otherInstance);
    }
}