<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;

class m_2021_08_20_141026_create_tournament_table extends BaseCreateTableMigration
{

    protected $tableName = 'tournament_tournament';
    protected $tableComment = 'Турнир';

    public function tableStructure(Blueprint $table): void
    {
        $table->integer('id')->autoIncrement()->comment('Идентификатор');
        $table->integer('game_id')->comment('Игра');
        $table->integer('wallet_id')->comment('Кошелек');
        $table->integer('deposit_amount')->comment('Сумма взноса');
        $table->integer('prize_fund')->comment('Призовой фонд');
        $table->integer('player_limit')->comment('Лимит кол-ва игроков');
        $table->integer('winner_player_limit')->comment('Лимит кол-ва победителей');
        $table->smallInteger('status_id')->comment('Статус');
        $table->dateTime('begin_at')->comment('Время начала турнира');
        $table->dateTime('created_at')->comment('Время создания');

        $this->addForeign($table, 'game_id' ,'game_game');
        $this->addForeign($table, 'wallet_id' ,'money_wallet');
    }
}