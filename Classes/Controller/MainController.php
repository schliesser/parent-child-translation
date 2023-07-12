<?php

declare(strict_types=1);

namespace Twt\ParentChildTranslation\Controller;

use Psr\Http\Message\ResponseInterface;
use Twt\ParentChildTranslation\Domain\Repository\MainRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MainController extends ActionController
{
    private MainRepository $mainRepository;

    public function __construct(MainRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('items', $this->mainRepository->findAll());

        return $this->htmlResponse();
    }
}
