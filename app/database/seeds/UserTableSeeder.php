<?php

class UserTableSeeder extends Seeder {
  public function run() {
    DB::table('users')->delete();

    User::create(array('email' => 'cfk.quan@gmail.com',
                       'password' => Hash::make('dummypassword')
                       ));
  }
}
