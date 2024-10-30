<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Page extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','image','content','keywords','active'];


    // ----------------------------------------------------------------------------------- //

    /// global scope defined on booted function
    protected static function booted()
    {
    
        // set product slug once enter product name
        static::creating(function (Page $page) {
            $page->slug = Str::slug($page->title);
        });
    }


    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/thumbnail/pages/' . $this->image);
        // storage/thumbnail/pages/{image_name}

    } // $page->image_url

    public function getImageUrllAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/pages/' . $this->image);
        // storage/thumbnail/pages/{image_name}

    } // $page->image_url

    
   
}