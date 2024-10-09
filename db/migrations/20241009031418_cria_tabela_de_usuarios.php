<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CriaTabelaDeUsuarios extends AbstractMigration
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
        $table = $this->table('usuarios');
        $table->addColumn('nome', 'string')
            ->addColumn('usuario', 'string')
            ->addColumn('email', 'string')
            ->addColumn('senha', 'string')
            ->addIndex(['usuario', 'email'], ['unique' => true])
            ->addTimestamps("criado_em")
            ->create();
    }
}
