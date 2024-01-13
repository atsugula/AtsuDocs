<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Label
 *
 * @property $id
 * @property $name
 * @property $color
 * @property $description
 * @property $created_by
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property LabelsNote[] $labelsNotes
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Label extends Model
{
    use SoftDeletes;

    static $rules = [
		'name' => 'required',
		'color' => 'required',
		'created_by' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','color','description','created_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labelsNotes()
    {
        return $this->hasMany('App\Models\LabelsNote', 'label_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }
    

}
