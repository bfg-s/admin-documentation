<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\City.
 *
 * @property \Bfg\Comcode\Subjects\ClassSubject $class
 * @property \Illuminate\Database\Eloquent\Collection<int, \Bfg\Wood\Models\ModelField> $fields
 * @property null|int $fields_count
 * @property string $foreign_id
 * @property \Bfg\Comcode\Subjects\AnonymousClassSubject $migration_class
 * @property string $table
 * @property \Illuminate\Database\Eloquent\Collection<int, \Bfg\Wood\Models\ModelImplement> $implements
 * @property null|int $implements_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Bfg\Wood\Models\ModelObserver> $observers
 * @property null|int $observers_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Bfg\Wood\Models\ModelRelation> $related
 * @property null|int $related_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Bfg\Wood\Models\ModelRelation> $relations
 * @property null|int $relations_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Bfg\Wood\Models\ModelTrait> $traits
 * @property null|int $traits_count
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @property int $id
 * @property string $name
 * @property string $code
 * @property array $preview
 * @property null|\Illuminate\Support\Carbon $created_at
 * @property null|\Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City wherePreview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = ["name", "preview"];

    /**
     * The attributes that should be cast.
     * @var array<string, string>
     */
    protected $casts = ["preview" => "array"];
}
