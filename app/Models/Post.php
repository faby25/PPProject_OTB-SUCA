<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory;

    // protected $guarded= ['id'];
    //protected $fillable= ['title','excerpt','body'];

    protected $with=['category', 'user'];//todos los post incluiran su categoria y usuario o autor
    // protected $guarded=[];

    public function scopeFilter($query, array $filters)
    {
      $query->when($filters['search']?? false, function($query,$search){
        $query->where(function($query){
          $query->where('title','like','%'.$search. '%')
          ->orWhere('body','like','%'.$search.'%');
        });
      });
        $query->when($filters['category']?? false, function($query,$category){

          $query->whereHas('category',function($query){
            $query->Where('slug',$category);
          });
        });

        $query->when($filters['user']?? false, function($query,$user){
          $query->whereHas('user',function($query){
            $query->Where('username',$user);
          });
        });
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
