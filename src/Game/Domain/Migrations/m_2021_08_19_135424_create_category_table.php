<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_19_135424_create_category_table extends BaseCreateTableMigration
{

    protected $tableName = 'game_category';
    protected $tableComment = '';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->integer('parent_id')->nullable()->comment('Родительская категория');
        $table->string('title')->comment('Название');
        $table->text('description')->nullable()->comment('Описание');
        $table->smallInteger('status_id')->comment('Статус');
        $table->dateTime('created_at')->comment('Время создания');

        $this->addForeign($table, 'parent_id', $this->tableName);
    }
}