<?php

declare(strict_types = 1);

namespace Twt\ParentChildTranslation\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Squeeze extends AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected string $title = '';

    /**
     * child
     *
     * @var Child|null
     */
    protected Child|null $child = null;

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

    /**
     * Returns the child
     *
     * @return Child|null
     */
    public function getChild(): ?Child
    {
        return $this->child;
    }

    /**
     * Sets the child
     *
     * @param Child $child
     *
     * @return void
     */
    public function setChild(Child $child): void
    {
        $this->child = $child;
    }
}
