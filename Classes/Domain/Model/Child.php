<?php

declare(strict_types = 1);

namespace Twt\ParentChildTranslation\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Child extends AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected string $title = '';

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
