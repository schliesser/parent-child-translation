<?php

declare(strict_types = 1);

namespace Twt\ParentChildTranslation\Domain\Repository;

use Twt\ParentChildTranslation\Domain\Model\Main;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Mains
 *
 * @extends Repository<Main>
 */
class MainRepository extends Repository
{
    public function initializeObject(): void
    {
        /** @var Typo3QuerySettings $defaultQuerySettings */
        $defaultQuerySettings = $this->createQuery()->getQuerySettings();
        $defaultQuerySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($defaultQuerySettings);
    }
}
