<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_05_141726_create_wallet_table extends BaseCreateTableMigration
{

    protected $tableName = 'money_wallet';
    protected $tableComment = 'Кошельки';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->integer('identity_id')->comment('ID учетной записи пользователя');
        $table->integer('currency_id')->comment('Валюта');
        $table->float('amount')->nullable()->comment('Сумма');
        $table->dateTime('created_at')->comment('Время создания');

        $table->unique(['identity_id', 'currency_id']);
        $this->addForeign($table, 'identity_id', 'user_identity');
        $this->addForeign($table, 'currency_id', 'geo_currency');
    }
}