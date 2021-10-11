<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_05_142431_create_transaction_table extends BaseCreateTableMigration
{

    protected $tableName = 'money_transaction';
    protected $tableComment = 'Транзакции';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->float('amount')->comment('Сумма');
        //$table->integer('currency_id')->comment('Валюта');
        $table->integer('type_id')->comment('Тип операции');
        $table->integer('sender_id')->comment('Отправитель');
        $table->integer('recipient_id')->comment('Получатель');
        $table->longText('data')->nullable()->comment('Данные');
        $table->text('description')->nullable()->comment('Описание');
        $table->smallInteger('status_id')->comment('Статус');
        $table->dateTime('donned_at')->nullable()->comment('Время проведения операции');
        $table->dateTime('created_at')->comment('Время создания');

        $this->addForeign($table, 'sender_id', 'money_wallet');
        $this->addForeign($table, 'recipient_id', 'money_wallet');
    }
}