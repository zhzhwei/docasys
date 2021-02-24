<?php
namespace Digiturax\DxPswProducts\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Richard Braun <braun@digiturax.de>
 */
class ProductControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxPswProducts\Controller\ProductController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Digiturax\DxPswProducts\Controller\ProductController::class)
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
    public function listActionFetchesAllProductsFromRepositoryAndAssignsThemToView()
    {

        $allProducts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $productRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $productRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProducts));
        $this->inject($this->subject, 'productRepository', $productRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('products', $allProducts);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
