<?php

use Illuminate\Database\Seeder;

class UserActivationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_activations')->delete();
        
        \DB::table('user_activations')->insert(array (
            0 => 
            array (
                'user_id' => 4,
                'token' => 'eeeef2fab1ce02b56c9c182944989b96ce48293d9a96363bf8463f236eb39669',
                'created_at' => '2017-02-04 19:43:16',
            ),
            1 => 
            array (
                'user_id' => 6,
                'token' => '78558f7e82d235998b7116a815efb9af2d55327506f1857ca114f05def921572',
                'created_at' => '2017-02-04 19:51:01',
            ),
            2 => 
            array (
                'user_id' => 7,
                'token' => 'b8f07e97276c6ffcf9c7affaea2f2a96a421cf48de10d4ec4a77c69b23668f3c',
                'created_at' => '2017-02-04 20:05:15',
            ),
            3 => 
            array (
                'user_id' => 8,
                'token' => '0d7bdd657fdf76a1089ed54e224e32c22501a9883269aeac9114fdb28f1a845c',
                'created_at' => '2017-02-04 20:05:47',
            ),
            4 => 
            array (
                'user_id' => 9,
                'token' => '184c36223da41fd0e24fccb8834fd599e238c69c3a16fddd7b3da29c55d226e3',
                'created_at' => '2017-02-04 20:08:00',
            ),
            5 => 
            array (
                'user_id' => 10,
                'token' => 'ab2c3b915cd836e4bfa5763dc70757be3d3f61de1ba6bf1ddac78147f48426cb',
                'created_at' => '2017-02-04 20:27:28',
            ),
            6 => 
            array (
                'user_id' => 11,
                'token' => 'd1811ac60c847b0b2b163266e34099b27a9e4b4099b0cc16b4fe3ae24e6da3e0',
                'created_at' => '2017-02-05 00:57:38',
            ),
            7 => 
            array (
                'user_id' => 12,
                'token' => 'ec0f1a38d8a9fcd176ac0647238d515aff4c94cb5c1a8bc1795a05e3ce88fb34',
                'created_at' => '2017-02-05 01:09:46',
            ),
            8 => 
            array (
                'user_id' => 13,
                'token' => '5d6e97044cadf4ca0e8ac56a8e1f65901a0a3bc6b7fc601b4fa9f767e214071a',
                'created_at' => '2017-02-05 01:11:28',
            ),
            9 => 
            array (
                'user_id' => 15,
                'token' => '0cd58c5290cc9ca4ded9968a936282c0da0749dbaaa8620ba6e3a8987dd6466f',
                'created_at' => '2017-02-05 01:22:14',
            ),
            10 => 
            array (
                'user_id' => 1,
                'token' => '76fd00a3850da3c3a3352c5b21c89753fed3e28f2875c5b4b441f5f66e6f87f6',
                'created_at' => '2017-02-05 15:56:23',
            ),
            11 => 
            array (
                'user_id' => 17,
                'token' => 'cfb2352c5c797f1c94ff24d77f9c35b08ca7bd9ba374064e8a2f342d6af61572',
                'created_at' => '2017-02-05 16:00:34',
            ),
            12 => 
            array (
                'user_id' => 20,
                'token' => '222a248a027c0f4f5090470f57b74324db522a67b1638a69127689fedceafb18',
                'created_at' => '2017-02-05 16:19:53',
            ),
            13 => 
            array (
                'user_id' => 21,
                'token' => '2b28353f14710343c3cbf5bcd91138fd8839e46d4042d78b40207494a042fbda',
                'created_at' => '2017-02-05 16:59:58',
            ),
            14 => 
            array (
                'user_id' => 22,
                'token' => 'a3f5bffa18acdb224e496b5de5669d5b07cc140e1019fd18fa75f70926ab402b',
                'created_at' => '2017-02-05 17:05:07',
            ),
            15 => 
            array (
                'user_id' => 23,
                'token' => 'cca68f38da3cc61ae4eaa6c6d442065d69378f36097b12b54947fade50f724bc',
                'created_at' => '2017-02-05 17:06:11',
            ),
        ));
        
        
    }
}