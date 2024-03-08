<?php

namespace App\Models;

use App\Models\User;
use App\Enum\ReviewStars;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property string|null $text
 * @property int|null $rating
 * @property ReviewStars $stars
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User|null $user
 * @method static \Database\Factories\ProductReviewFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereStars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductReview whereUserId($value)
 * @mixin \Eloquent
 */
class ProductReview extends Model
{
    use HasFactory;

    protected $tables = 'product_reviews';

    protected $fillable = [
        'text',
        'rating',
        'stars',
    ];

    protected $casts = [
        'rating' => 'int',
        'stars' => ReviewStars::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
