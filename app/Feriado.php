<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feriado extends Model
{

    protected $table = 'detalleferiado';

    protected $primaryKey = 'IdDetalleFeriado';

    protected $fillable = [
        'FechaDiaFeriado', 'DescripcionFeriado', 'TipoDetalleEspecial', 'RepetirFeriado'
    ];

    public $timestamps = false;


    public function setEntryDateAttribute($input)
            {
                $this->attributes['entry_date'] = 
                Feriado::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
            }


     public function getEntryDateAttribute($input)
            {
                return Feriado::createFromFormat('Y-m-d', $input)
                  ->format(config('app.date_format'));
            }

}
