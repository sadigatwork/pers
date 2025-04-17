// Certification.php
use Spatie\Translatable\HasTranslations;

class Certification extends Model {
    use HasTranslations;
    
    public $translatable = ['title', 'description'];
}