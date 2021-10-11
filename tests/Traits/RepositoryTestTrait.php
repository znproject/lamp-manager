<?php

namespace Tests\Traits;

use Tests\Libs\DynamicFileRepository;
use ZnCore\Base\Libs\App\Helpers\ContainerHelper;

trait RepositoryTestTrait
{

    abstract protected function itemsFileName(): string;

    protected function itemsDirectory(): string {

    }

    protected function getRepository(): DynamicFileRepository
    {
        /** @var DynamicFileRepository $repository */
        $repository = ContainerHelper::getContainer()->get(DynamicFileRepository::class);
        $repository->setFileName($this->itemsFileName());
        return $repository;
    }

    protected function getRepositoryByName(string $name): DynamicFileRepository
    {
        /** @var DynamicFileRepository $repository */
        $repository = ContainerHelper::getContainer()->get(DynamicFileRepository::class);
        $itemsFileName = $this->itemsDirectory() . '/' . $name;
        $repository->setFileName($itemsFileName);
        return $repository;
    }
}
