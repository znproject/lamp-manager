<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_20_141811_create_subscription_table extends BaseCreateTableMigration
{

    protected $tableName = 'tournament_subscription';
    protected $tableComment = 'Подписка на уведомления о начале турнира';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->integer('tournament_id')->comment('Турнир');
        $table->integer('identity_id')->comment('ID учетной записи пользователя');
        $table->smallInteger('status_id')->comment('Статус');
        $table->dateTime('created_at')->comment('Время создания');

        $this->addForeign($table, 'tournament_id' ,'tournament_tournament');
        $this->addForeign($table, 'identity_id' ,'user_identity');
    }
}