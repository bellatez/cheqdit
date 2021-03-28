 <?php

namespace App\Models;

use App\Models\Form;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
    	'form_id',
    	'report_num',
    	'vehicle_reg',
    	'fleet_num',
    	'vehicle',
    	'reading_start',
    	'reading_end',
    	'signature'
    ];

    public function form()
    {
        return $this->belongsTo(Form::class)->withDefault();
    }
}
