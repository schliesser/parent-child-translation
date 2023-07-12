<?php

declare(strict_types = 1);

namespace Twt\ParentChildTranslation\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Main extends AbstractEntity
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
     * squeeze
     *
     * @var ObjectStorage<Squeeze>
     *
     * @Cascade("remove")
     *
     * @Lazy
     */
    protected ObjectStorage $squeeze;

    /**
     * __construct
     */
    public function __construct()
    {
        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject(): void
    {
        $this->squeeze = new ObjectStorage();
    }

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
    public function getChild(): Child|null
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

    /**
     * Adds a Squeeze
     *
     * @param Squeeze $squeeze
     *
     * @return void
     */
    public function addSqueeze(Squeeze $squeeze): void
    {
        $this->squeeze->attach($squeeze);
    }

    /**
     * Removes a Squeeze
     *
     * @param Squeeze $squeezeToRemove The Squeeze to be removed
     *
     * @return void
     */
    public function removeSqueeze(Squeeze $squeezeToRemove): void
    {
        $this->squeeze->detach($squeezeToRemove);
    }

    /**
     * Returns the squeeze
     *
     * @return ObjectStorage<Squeeze>
     */
    public function getSqueeze(): ObjectStorage
    {
        return $this->squeeze;
    }

    /**
     * Sets the squeeze
     *
     * @param ObjectStorage<Squeeze> $squeeze
     *
     * @return void
     */
    public function setSqueeze(ObjectStorage $squeeze): void
    {
        $this->squeeze = $squeeze;
    }
}
