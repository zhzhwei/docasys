<?php
namespace Digiturax\DxUploadNotification\Controller;

/***
 *
 * This file is part of the "Upload Notification" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * UploadNotificationController
 */
class UploadNotificationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $uploadNotifications = $this->uploadNotificationRepository->findAll();
        $this->view->assign('uploadNotifications', $uploadNotifications);
    }

    /**
     * action show
     * 
     * @param \Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification
     * @return void
     */
    public function showAction(\Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification)
    {
        $this->view->assign('uploadNotification', $uploadNotification);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Digiturax\DxUploadNotification\Domain\Model\UploadNotification $newUploadNotification
     * @return void
     */
    public function createAction(\Digiturax\DxUploadNotification\Domain\Model\UploadNotification $newUploadNotification)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->uploadNotificationRepository->add($newUploadNotification);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification
     * @ignorevalidation $uploadNotification
     * @return void
     */
    public function editAction(\Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification)
    {
        $this->view->assign('uploadNotification', $uploadNotification);
    }

    /**
     * action update
     * 
     * @param \Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification
     * @return void
     */
    public function updateAction(\Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->uploadNotificationRepository->update($uploadNotification);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification
     * @return void
     */
    public function deleteAction(\Digiturax\DxUploadNotification\Domain\Model\UploadNotification $uploadNotification)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->uploadNotificationRepository->remove($uploadNotification);
        $this->redirect('list');
    }

    /**
     * action overview
     * 
     * @return void
     */
    public function overviewAction()
    {

    }

    /**
     * action send
     * 
     * @return void
     */
    public function sendAction()
    {

    }
}
