<?php

namespace Cyberhouse\Maildebug\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class MessageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * @param int $limit
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findAll($limit = 100) {
		$query = $this->createQuery();

		$ordering = array(
			'uid' => QueryInterface::ORDER_DESCENDING
		);

		$query->setLimit($limit);
		$query->setOrderings($ordering);
		$query->getQuerySettings()->setRespectStoragePage(FALSE);

		return $query->execute();
	}
}