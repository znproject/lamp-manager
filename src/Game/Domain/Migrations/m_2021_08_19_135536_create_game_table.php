<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_19_135536_create_game_table extends BaseCreateTableMigration
{

    protected $tableName = 'game_game';
    protected $tableComment = '';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->integer('category_id')->comment('');
        $table->integer('partner_id')->comment('');
        $table->string('title')->comment('Название');
        $table->text('description')->nullable()->comment('Описание');
        $table->string('logo')->comment('Логотип');
        $table->string('link')->comment('Ссылка на игру');
        $table->smallInteger('status_id')->comment('Статус');
        $table->dateTime('created_at')->comment('Время создания');

        $this->addForeign($table, 'category_id', 'game_category');
        $this->addForeign($table, 'partner_id', 'game_partner');
    }
}