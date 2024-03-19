namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['titulo', 'portada', 'contenido', 'grupo_id', 'kit_id'];

    // Relación muchos a uno con Grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    // Relación muchos a uno con KitRobotica
    public function kitRobotica()
    {
        return $this->belongsTo(KitRobotica::class, 'kit_id');
    }
}
