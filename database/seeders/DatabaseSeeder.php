<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@ksi.com',
            'password' => bcrypt('admin12345'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 1,
            'children_id' => 1,
            'value' => ''
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 2,
            'children_id' => 1,
            'value' => '<h1><strong>PRE SOCIALISATION</strong></h1><pre>Australia-Indonesia Partnership Funding</pre><div>The Knowledge Sector Initiative (KSI) supports Indonesian policymakers to develop more effective development policies through better use of research, data, and analysis. KSI works with research providers and government agencies to strengthen the quality and policy-relevance of research and how it used for policymaking. KSI also works to improve regulations and practices that support quality research and make using evidence in policymaking easier.</div>'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 3,
            'children_id' => 1,
            'value' => 'img/keynote.png'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 4,
            'children_id' => 1,
            'value' => '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.<br><br></div><blockquote><blockquote><blockquote><strong>Koneksi will focus on the following two End of Investment Outcomes :</strong></blockquote></blockquote></blockquote><ol><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</li><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</li></ol>'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 5,
            'children_id' => 1,
            'value' => 'img/speaker.png'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 5,
            'children_id' => 2,
            'value' => '<div><strong>Australia-Indonesia Partnership Funding</strong></div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</div>'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 6,
            'children_id' => 1,
            'value' => '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.<br><br></div><div><strong>Koneksi will focus on the following two End of Investment Outcomes :<br></strong><br></div><ol><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</li><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</li></ol>'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 7,
            'children_id' => 1,
            'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.'
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 11,
            'children_id' => 1,
            'value' => ''
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 11,
            'children_id' => 2,
            'value' => ''
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 11,
            'children_id' => 3,
            'value' => ''
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 11,
            'children_id' => 4,
            'value' => ''
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 11,
            'children_id' => 5,
            'value' => ''
        ]);

        \App\Models\Dashboard::create([
            'parent_id' => 11,
            'children_id' => 6,
            'value' => ''
        ]);

    }
}
