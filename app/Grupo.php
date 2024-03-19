namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['nombre'];

    // Relación uno a muchos con Usuario
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    // Relación uno a muchos con Curso
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
