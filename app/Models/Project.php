<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','img','technologies','repo_link','demo_link'];
    protected $casts = [
        "technologies" => "array"
    ];
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($project) {
            // Hapus gambar lama jika gambar baru diupload
            if ($project->isDirty('img') && $project->getOriginal('img')) {
                Storage::disk('public')->delete($project->getOriginal('img'));
            }
        });

        static::deleting(function ($project) {
            // Hapus gambar dari storage jika ada
            if ($project->img) {
                Storage::disk('public')->delete($project->img);
            }
        });
    }
}
