<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CriaTabelaDeSenhas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('senhas');

        $table = $this->table('senhas')->addTimestampsWithTimezone(null, 'atualizado_em');

        $table->addColumn('id_senha', 'integer')
            ->addColumn('apelido', 'string')
            ->addColumn('plataforma', 'string')
            ->addColumn('usuario', 'string')
            ->addColumn('senha', 'string')
            ->addColumn('criado_em', 'datetime')
            ->addColumn('atualizado_em', 'datetime', ['null' => true])
            ->create();
    }
}
