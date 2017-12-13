<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function publish(Collection $collection)
    {
        return $this->collections()->save($collection);
    }

    public function saveScore(Score $score)
    {
        return $this->scores()->save($score);
    }

}