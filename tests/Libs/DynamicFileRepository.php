<?php

namespace Tests\Libs;

use Illuminate\Support\Collection;
use ZnCore\Base\Exceptions\NotFoundException;
use ZnCore\Base\Legacy\Yii\Helpers\ArrayHelper;
use ZnCore\Domain\Base\Repositories\BaseFileCrudRepository;
use ZnCore\Domain\Entities\DynamicEntity;
use ZnCore\Domain\Helpers\EntityHelper;
use ZnCore\Domain\Helpers\FilterHelper;
use ZnCore\Domain\Interfaces\Libs\EntityManagerInterface;
use ZnCore\Domain\Libs\Query;

class DynamicFileRepository extends BaseFileCrudRepository
{

    private $fileName;

//    public function all(Query $query = null)
//    {
//        $items = $this->getItems();
//        if ($query) {
//            $items = FilterHelper::filterItems($items, $query);
//        }
//        $collection = new Collection();
//        $entityClassName = $this->getEntityClass();
//        $items = $this->getItems();
//        $attributes = array_keys($items[0]);
//        foreach ($items as $item) {
//            $entityInstance = new DynamicEntity(null, $attributes);//$this->createEntity($entityClassName, $item);
//            EntityHelper::setAttributes($entityInstance, $item);
//            $collection->add($entityInstance);
//        }
//        return $collection;
//
//       // return $this->getEntityManager()->createEntityCollection($this->getEntityClass(), $items);
//    }

    public function setFileName(string $fileName) {
        $this->fileName = $fileName;
    }

    public function fileName(): string
    {
        return $this->fileName;
    }

    public function getEntityClass(): string
    {
        return DynamicEntity::class;
    }

    public function allAsArray(Query $query = null): array {
        $query = Query::forge($query);
        $items = $this->getItems();
        if ($query) {
            $items = FilterHelper::filterItems($items, $query);
        }
        return $items;
    }

    public function oneByIdAsArray(int $id, Query $query = null): array {
        $query = Query::forge($query);
        $query->where('id', $id);
        $items = $this->allAsArray($query);
        if(empty($items)) {
            throw new NotFoundException();
        }
        return ArrayHelper::first($items);
    }

    public function dumpAll(array $items) {
        $this->setItems($items);
    }
}
