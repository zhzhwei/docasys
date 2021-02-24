<?php
namespace Digiturax\DxPswProducts\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Richard Braun <braun@digiturax.de>
 */
class ProductcategoryControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxPswProducts\Controller\ProductcategoryController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Digiturax\DxPswProducts\Controller\ProductcategoryController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProductcategoriesFromRepositoryAndAssignsThemToView()
    {

        $allProductcategories = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $productcategoryRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $productcategoryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProductcategories));
        $this->inject($this->subject, 'productcategoryRepository', $productcategoryRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('productcategories', $allProductcategories);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
