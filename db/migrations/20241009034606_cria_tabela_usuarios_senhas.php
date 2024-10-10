<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CriaTabelaUsuariosSenhas extends AbstractMigration
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
        $table = $this->table('usuarios_senhas', ['id' => false, 'primary_key' => ['id_usuario', 'id_senha']]);

        $table->addColumn('id_usuario', 'integer', ['null' => false, 'signed' => false])
              ->addForeignKey('id_usuario', 'usuarios', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);

        $table->addColumn('id_senha', 'integer', ['null' => false, 'signed' => false])
              ->addForeignKey('id_senha', 'senhas', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION']);

        $table->create();
    }
}
