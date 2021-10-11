<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_20_143030_create_scramble_table extends BaseCreateTableMigration
{

    protected $tableName = 'tournament_scramble';
    protected $tableComment = '';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->integer('tournament_id')->comment('');
        $table->string('winner')->comment('');
        $table->string('loser')->comment('');
        $table->dateTime('created_at')->comment('Время создания');

        $this->addForeign($table, 'tournament_id' ,'tournament_tournament');
    }
}