<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
   public function allData()
   {
      return [
          [
           'nip' => '1234',
           'nama' => 'Andi',
           'mapel'=> 'website'

       ],
       [
        'nip' => '12345',
        'nama' => 'Nowo',
        'mapel'=> 'IPAS'

    ],
    [
        'nip' => '12346',
        'nama' => 'Dewi',
        'mapel'=> 'Biologi'
    ]
    ];
   }
}
