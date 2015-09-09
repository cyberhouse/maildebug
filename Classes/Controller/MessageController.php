<?php

namespace Cyberhouse\Maildebug\Controller;

class MessageController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * messageRepository
	 *
	 * @var \Cyberhouse\Maildebug\Domain\Repository\MessageRepository
	 */
	protected $messageRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$messages = $this->messageRepository->findAll();
		$this->view->assign('messages', $messages);
	}

	/**
	 * action show
	 *
	 * @param \Cyberhouse\Maildebug\Domain\Model\Message
	 * @return void
	 */
	public function showAction(\Cyberhouse\Maildebug\Domain\Model\Message $message) {
		$this->view->assign('message', $message);
	}

	/**
	 * injectMessageRepository
	 *
	 * @param \Cyberhouse\Maildebug\Domain\Repository\MessageRepository $messageRepository
	 * @return void
	 */
	public function injectMessageRepository(\Cyberhouse\Maildebug\Domain\Repository\MessageRepository $messageRepository) {
		$this->messageRepository = $messageRepository;
	}

}

?>