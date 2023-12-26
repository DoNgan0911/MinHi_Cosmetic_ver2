<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
        [
            'name'=>'Cao Sy Ky',
            'address'=>'Quan 2 TP HCM',
            'phone'=>'0865217637',
            'postcode'=>'064303002139',
            'email'=>'csk@gmail.com',
            'birthday'=>'2003/10/09',
            'total'=>0,
            'enable'=>true,
            'password'=>bcrypt('csk@123'),
            'role'=>'admin'
        ],
        [
            'name'=>'Ly Tran Anh Qui',
            'address'=>'Quan 8 TP HCM',
            'phone'=>'0836274635',
            'postcode'=>'086387446297',
            'email'=>'ltaq@gmail.com',
            'birthday'=>'1998/09/21',
            'total'=>1688000,
            'enable'=>true,
            'password'=>bcrypt('ltaq@123'),
            'role'=>'customer'
        ],
        [
            'name' => 'Nguyen Van B',
            'address' => 'Quan 7 TP HCM',
            'phone' => '0836274636',
            'postcode' => '086387446298',
            'email' => 'nvb@gmail.com',
            'birthday' => '1990/05/12',
            'total' => 2080000,
            'enable' => true,
            'password' => bcrypt('nvb@123'),
            'role' => 'customer'
        ],
        [
            'name' => 'Tran Thi C',
            'address' => 'Quan 1 TP HCM',
            'phone' => '0836274637',
            'postcode' => '086387446299',
            'email' => 'ttc@gmail.com',
            'birthday' => '1985/12/30',
            'total' => 4120000,
            'enable' => true,
            'password' => bcrypt('ttc@123'),
            'role' => 'customer'
        ],
        [
            'name' => 'Le Van D',
            'address' => 'Quan 4 TP HCM',
            'phone' => '0836274638',
            'postcode' => '086387446300',
            'email' => 'lvd@gmail.com',
            'birthday' => '1993/08/18',
            'total' => 0,
            'enable' => true,
            'password' => bcrypt('lvd@123'),
            'role' => 'customer'
        ],
        [
            'name' => 'Pham Thi E',
            'address' => 'Quan 2 TP HCM',
            'phone' => '0836274639',
            'postcode' => '086387446301',
            'email' => 'pte@gmail.com',
            'birthday' => '1988/04/25',
            'total' => 0,
            'enable' => true,
            'password' => bcrypt('pte@123'),
            'role' => 'customer'
        ],
        [
            'name' => 'Hoang Van F',
            'address' => 'Quan 5 TP HCM',
            'phone' => '0836274640',
            'postcode' => '086387446302',
            'email' => 'hvf@gmail.com',
            'birthday' => '1996/02/09',
            'total' => 0,
            'enable' => true,
            'password' => bcrypt('hvf@123'),
            'role' => 'customer'
        ],
        [
            'name' => 'Do Thi G',
            'address' => 'Quan 3 TP HCM',
            'phone' => '0836274641',
            'postcode' => '086387446303',
            'email' => 'dtg@gmail.com',
            'birthday' => '1991/11/15',
            'total' => 0,
            'enable' => true,
            'password' => bcrypt('dtg@123'),
            'role' => 'customer'
        ],
        [
            'name' => 'Nguyen Van H',
            'address' => 'Quan 6 TP HCM',
            'phone' => '0836274642',
            'postcode' => '086387446304',
            'email' => 'nvh@gmail.com',
            'birthday' => '1987/07/22',
            'total' => 0,
            'enable' => true,
            'password' => bcrypt('nvh@123'),
            'role' => 'customer'
        ],
        ]);
    }
}
