namespace App;

use Illuminate\Database\Eloquent\Model;

class KitRobotica extends Model
{
    protected $fillable = ['nombre'];

    // Relación uno a muchos con Curso
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
