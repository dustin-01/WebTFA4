<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserPasswords extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'password' => ['type' => 'VARCHAR', 'constraint' => 255, 'default' => ''],
        ]);

        $this->db->table('users')->update([
            'password' => password_hash('TFA4demo!', PASSWORD_DEFAULT),
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'password');
    }
}
