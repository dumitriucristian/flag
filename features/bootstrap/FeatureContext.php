<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit\Framework\Assert as PHPUnit;
use Imbo\BehatApiExtension\Context\ApiContext;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends ApiContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given some step with :arg1 argument
     */
    public function someStepWithArgument($arg1)
    {

        return true;
    }


    /**
     * @Then number step with :arg1 is true
     */
    public function numberStepWithIsTrue($arg1)
    {
      return true;
    }
    /**
     * @Given number step with :arg1
     */
    public function numberStepWith($arg1)
    {
        return true;
    }


    /**
     * @Then assert is true
     */
    public function assertIsTrue()
    {
      return   PHPUnit::assertEquals(1,1);
    }





}
