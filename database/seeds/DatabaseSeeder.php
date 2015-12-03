<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(['cwid' => '123978', 'firstName' => 'Mickey', 'lastName' => 'Mouse', 'email' => 'mmouse@mines.edu', 'password' => bcrypt('password'), 'languages' => '', 'classes' => '', 'teamStyle' => '', 'admin' => 'true']);
        User::create(['cwid' => '444321', 'firstName' => 'Donald', 'lastName' => 'Duck', 'email' => 'dduck@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '261', 'teamStyle' => 'social', 'admin' => 'false']);
        User::create(['cwid' => '999777', 'firstName' => 'Jane', 'lastName' => 'Jetson', 'email' => 'jjetson@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '262', 'teamStyle' => 'competitive', 'admin' => 'false']);
        User::create(['cwid' => '555123', 'firstName' => 'Frodo', 'lastName' => 'Baggins', 'email' => 'fbaggins@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Python', 'classes' => '306', 'teamStyle' => 'np', 'admin' => 'false']);
        User::create(['cwid' => '988777', 'firstName' => 'Bilbo', 'lastName' => 'Baggins', 'email' => 'bbaggins@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '406', 'teamStyle' => 'social', 'admin' => 'false']);
        User::create(['cwid' => '478234', 'firstName' => 'Winnie', 'lastName' => 'Poohbear', 'email' => 'wpoohbe@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '261', 'teamStyle' => 'competitive', 'admin' => 'false']);
        User::create(['cwid' => '120978', 'firstName' => 'Daffy', 'lastName' => 'Duck', 'email' => 'daduck@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Python', 'classes' => '262', 'teamStyle' => 'np', 'admin' => 'false']);
        User::create(['cwid' => '409123', 'firstName' => 'Wile', 'lastName' => 'Coyote', 'email' => 'wcoyote@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '306', 'teamStyle' => 'social', 'admin' => 'false']);
        User::create(['cwid' => '128745', 'firstName' => 'Road', 'lastName' => 'Runner', 'email' => 'rrunner@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '406', 'teamStyle' => 'competitive', 'admin' => 'false']);
        User::create(['cwid' => '765120', 'firstName' => 'Marge', 'lastName' => 'Simpson', 'email' => 'msimpso@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Python', 'classes' => '261', 'teamStyle' => 'np', 'admin' => 'false']);
        User::create(['cwid' => '876123', 'firstName' => 'Charlie', 'lastName' => 'Brown', 'email' => 'cbrown@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '262', 'teamStyle' => 'social', 'admin' => 'false']);
        User::create(['cwid' => '333221', 'firstName' => 'Lucy', 'lastName' => 'VanPelt', 'email' => 'lvanpel@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '306', 'teamStyle' => 'competitive', 'admin' => 'false']);
        User::create(['cwid' => '752412', 'firstName' => 'Bugs', 'lastName' => 'Bunny', 'email' => 'bbunny@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Python', 'classes' => '406', 'teamStyle' => 'np', 'admin' => 'false']);
        User::create(['cwid' => '532109', 'firstName' => 'Lois', 'lastName' => 'Griffin', 'email' => 'lgriffi@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '261', 'teamStyle' => 'social', 'admin' => 'false']);
        User::create(['cwid' => '223311', 'firstName' => 'Wilma', 'lastName' => 'Flinstone', 'email' => 'wflinst@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '262', 'teamStyle' => 'competitive', 'admin' => 'false']);
        User::create(['cwid' => '443322', 'firstName' => 'Fred', 'lastName' => 'Flinstone', 'email' => 'fflinst@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '306', 'teamStyle' => 'np', 'admin' => 'false']);
        User::create(['cwid' => '443311', 'firstName' => 'Peppa', 'lastName' => 'Pig', 'email' => 'ppig@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '406', 'teamStyle' => 'social', 'admin' => 'false']);
        User::create(['cwid' => '784512', 'firstName' => 'Turanga', 'lastName' => 'Leela', 'email' => 'tleela@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Python', 'classes' => '261', 'teamStyle' => 'competitive', 'admin' => 'false']);
        User::create(['cwid' => '834421', 'firstName' => 'Felix', 'lastName' => 'Cat', 'email' => 'fcat@mines.edu', 'password' => bcrypt('password'), 'languages' => 'C++', 'classes' => '262', 'teamStyle' => 'np', 'admin' => 'false']);
        User::create(['cwid' => '920451', 'firstName' => 'Top', 'lastName' => 'Cat', 'email' => 'tcat@mines.edu', 'password' => bcrypt('password'), 'languages' => 'Java', 'classes' => '306', 'teamStyle' => 'social', 'admin' => 'false']);

    }
}