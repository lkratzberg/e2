<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
      $this->app->db()->createTable('throws', [
          'player_1_throw' => 'varchar(255)',
          'player_2_throw' => 'varchar(255)',
          'winner' => 'varchar(255)',
      ]);

      dump('Migration complete; check the database for your new tables.');
    }

    public function seed()
    {
        # Set up throw details
        # Note that `id` is omitted as that's created automatically using the db()->insert method
        $throw = [
            'player_1_throw' => 'rock',
            'player_2_throw' => 'paper',
            'winner' => 'user',
        ];

        # Insert product
        $this->app->db()->insert('throws', $throw);

        # Display all products to confirm results
        dump($this->app->db()->all('throws'));
    }

    public function fresh() {
        $this->migrate();
        $this->seed();
    }
}
