<?php
namespace Digiturax\DxUploadNotification\Tests\Unit\Controller;

/**
 * Test case.
 */
class UploadNotificationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Digiturax\DxUploadNotification\Controller\UploadNotificationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Digiturax\DxUploadNotification\Controller\UploadNotificationController::class)
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
    public function listActionFetchesAllUploadNotificationsFromRepositoryAndAssignsThemToView()
    {

        $allUploadNotifications = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $uploadNotificationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $uploadNotificationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allUploadNotifications));
        $this->inject($this->subject, 'uploadNotificationRepository', $uploadNotificationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('uploadNotifications', $allUploadNotifications);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenUploadNotificationToView()
    {
        $uploadNotification = new \Digiturax\DxUploadNotification\Domain\Model\UploadNotification();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('uploadNotification', $uploadNotification);

        $this->subject->showAction($uploadNotification);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenUploadNotificationToUploadNotificationRepository()
    {
        $uploadNotification = new \Digiturax\DxUploadNotification\Domain\Model\UploadNotification();

        $uploadNotificationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $uploadNotificationRepository->expects(self::once())->method('add')->with($uploadNotification);
        $this->inject($this->subject, 'uploadNotificationRepository', $uploadNotificationRepository);

        $this->subject->createAction($uploadNotification);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenUploadNotificationToView()
    {
        $uploadNotification = new \Digiturax\DxUploadNotification\Domain\Model\UploadNotification();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('uploadNotification', $uploadNotification);

        $this->subject->editAction($uploadNotification);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenUploadNotificationInUploadNotificationRepository()
    {
        $uploadNotification = new \Digiturax\DxUploadNotification\Domain\Model\UploadNotification();

        $uploadNotificationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $uploadNotificationRepository->expects(self::once())->method('update')->with($uploadNotification);
        $this->inject($this->subject, 'uploadNotificationRepository', $uploadNotificationRepository);

        $this->subject->updateAction($uploadNotification);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenUploadNotificationFromUploadNotificationRepository()
    {
        $uploadNotification = new \Digiturax\DxUploadNotification\Domain\Model\UploadNotification();

        $uploadNotificationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $uploadNotificationRepository->expects(self::once())->method('remove')->with($uploadNotification);
        $this->inject($this->subject, 'uploadNotificationRepository', $uploadNotificationRepository);

        $this->subject->deleteAction($uploadNotification);
    }
}
