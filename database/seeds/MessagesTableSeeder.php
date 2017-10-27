<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'from' => 'Karl Stephens',
                'message' => 'Are you still interested in a golf weekend? I\'ll do one next week, join us if you want.',
                'online' => 1,
                'image' => 'iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAC/VBMVEVv8sUAAABv88Zu88Vu8MNt
7sFt8sRu8cRw9Mdq6L1w88Zx9shdy6X///9s7MADBQRo47lr6r5m37Vf0Kpp5bpj2K969Mp19Mlh
1KxXvpsSJyAKFxMJCQkECghn4bdcyaNbxqFaxKBYwZ1OrIsGDguB985n4LZi1q5Zwp5GmX0gRjkN
HBd+9s1w9MZStJI5fWYtY1EXFhYPDw8GBgZj2rFdzadKo4U2dWAcPzKP99Nr679l3bRWvJlUuJVJ
oINInYAiSzwUKyMaGRlw9sht78Jg0qtQro5Dk3g4e2Q0cl0mUkNBQEA2NTUXNCoWMSgdHR0HEQ2a
+dmF9c979sty88dez6hbx6JRsZA/i3FwcXAwaVZVWFZPTk4eQjYzMjIPIRsLGRT8/PzA9eO5+OKl
+t2T+daK99KH+NG+0ctu9cZp5rth1a1fz6mPkJBMpodBj3Q9hWxiYmIxbVgrXkxKSkoZOC0VLiUk
JCQTExO9+eSv+uDG6d2n9NrD39aV9dTC2tKp48/B1M2A88zGx8a6ysR07MOrtbGJppxVupiEhoZF
lnp3dnc7gGhnZmZTVFQsYE4qXEspWUkoVkdGRkYlUEEjTkAuLi4sKysnJSb39/f09PTg+PDF7+Gy
9t+s+d6a9ta06Nas69XQ0tG03M549sur2MiL5caD0LWnraugo6Kenp6Sl5WNjI1+gYA+iG47g2o3
eWJeYWAiICEJFRHM/ezr6+ux+uHE8OHf4uGe+NnG49nU2ti85Naf8NSO7cx77ca1xsC7u7tx3rix
urePyranu7W0tLSEwKuaqqSInpeKlpJeq5CIiopNqIl1k4l7e3tKiXNcfnNHhG9obmxqampiaGZb
WltPX1ktZVI9R0M8OjsnLywYIR7U/vDW9Ono6Oi59eC369mW7tCd585t88WY28Sf08F44r6I2r2p
yL1007OWv7GYt6xxyatrqpR4m4+Dj4tUpIlrmYlel4N8h4Nlhnt4fHtYinlWbWU0Wk06Uko0UEY0
T0YwPDgrOzYw8UU0AAAH3klEQVRo3u3YZVAbQRgG4P0udxd3N0JIiAKluBaou7u7u7u7u7u7u7u7
u7u7t9NLWtpAaQkttDNtnh8kXG73ze5mvk0WeXh4eHh4/ONobAbKOAzMmcHMEoCjjELoTCzqwf/u
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',
                'messageable_id' => 1,
                'messageable_type' => 'App\\\Models\\\Employee',
                'deleted_at' => NULL,
                'created_at' => '2017-10-19 23:51:56',
                'updated_at' => '2017-10-19 23:51:56',
            ),
        ));
        
        
    }
}
