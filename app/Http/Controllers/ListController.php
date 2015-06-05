<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

use App\Models\Item;

class ListController extends BaseController {

  private $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  private function getTask() {
    return $this->request->input('task');
  }

  public function add() {
    // Get the task to be added
    $listItem = $this->getTask();
    // Add the new item
    $item = new Item;
    $item->createNew($listItem);

    return redirect()->back();
  }

  public function check() {
    // Get the task to update
    $listItem = $this->getTask();
    // Update the task
    Item::find($listItem)->check();

    return redirect()->back();
  }

  public function unCheck() {
    // Get the task to update
    $listItem = $this->getTask();
    // Update task
    Item::find($listItem)->unCheck();

    return redirect()->back();
  }

  public function remove() {
    // Get task
    $listItem = $this->getTask();
    // Remove task
    Item::find($listItem)->delete();

    return redirect()->back();
  }
}
