<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
  protected $table = 'items';

  protected $fillable = ['name', 'completed'];

  public function createNew($name) {
    $this->task = $name;
    $this->completed = false;
    $this->save();
  }

  public function unCheck() {
    $this->completed = false;
    $this->save();
  }

  public function check() {
    $this->completed = true;
    $this->save();
  }

}
