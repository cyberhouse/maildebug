<?php

namespace Cyberhouse\Maildebug\Domain\Model;

class Message extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * subject
	 *
	 * @var string
	 */
	protected $subject;

	/**
	 * date
	 *
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * from
	 *
	 * @var string
	 */
	protected $txMaildebugFrom;

	/**
	 * to
	 *
	 * @var string
	 */
	protected $txMaildebugTo;

	/**
	 * cc
	 *
	 * @var string
	 */
	protected $cc;

	/**
	 * bcc
	 *
	 * @var string
	 */
	protected $bcc;

	/**
	 * contentType
	 *
	 * @var string
	 */
	protected $contentType;

	/**
	 * body
	 *
	 * @var string
	 */
	protected $body;

	/**
	 * Returns the subject
	 *
	 * @return string $subject
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Sets the subject
	 *
	 * @param string $subject
	 * @return void
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * Returns the date
	 *
	 * @return \DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Returns the from
	 *
	 * @return string $from
	 */
	public function getTxMaildebugFrom() {
		return $this->txMaildebugFrom;
	}

	public function getFrom() {
		return $this->txMaildebugFrom;
	}

	/**
	 * Sets the from
	 *
	 * @param string $from
	 * @return void
	 */
	public function setTxMaildebugFrom($from) {
		$this->txMaildebugFrom = $from;
	}

	/**
	 * Returns the to
	 *
	 * @return string $to
	 */
	public function getTxMaildebugTo() {
		return $this->txMaildebugTo;
	}

	public function getTo() {
		return $this->txMaildebugTo;
	}

	/**
	 * Sets the to
	 *
	 * @param string $to
	 * @return void
	 */
	public function setTxMaildebugTo($to) {
		$this->txMaildebugTo = $to;
	}

	/**
	 * Returns the cc
	 *
	 * @return string $cc
	 */
	public function getCc() {
		return $this->cc;
	}

	/**
	 * Sets the cc
	 *
	 * @param string $cc
	 * @return void
	 */
	public function setCc($cc) {
		$this->cc = $cc;
	}

	/**
	 * Returns the bcc
	 *
	 * @return string $bcc
	 */
	public function getBcc() {
		return $this->bcc;
	}

	/**
	 * Sets the bcc
	 *
	 * @param string $bcc
	 * @return void
	 */
	public function setBcc($bcc) {
		$this->bcc = $bcc;
	}

	/**
	 * Returns the contentType
	 *
	 * @return string $contentType
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Sets the contentType
	 *
	 * @param string $contentType
	 * @return void
	 */
	public function setContentType($contentType) {
		$this->contentType = $contentType;
	}

	/**
	 * Returns the body
	 *
	 * @return string $body
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * Sets the body
	 *
	 * @param string $body
	 * @return void
	 */
	public function setBody($body) {
		$this->body = $body;
	}

}