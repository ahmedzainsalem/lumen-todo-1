<html>
  <head>
    <title>To do List with Lumen</title>
  </head>
  <body>
  <h1>All Tasks (<?= count($items) ?>)</h1>
    <table border="1">
      <thead>
        <tr>
          <td>List item</td>
          <td>Completed</td>
          <td>Complete</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($items as $item) { ?>
          <tr>
            <td class="name"><?= $item->task ?></td>
            <td><?= $item->completed ?></td>
            <td class="complete">

            <?php if ( ! $item->completed) { ?>
              <form action="<?= route('task.check') ?>" method="post">
                <input type="hidden" name="task" value="<?= $item->id ?>">
                <button>&#9744;</button>
              </form>
            <?php } else { ?>
              <form action="<?= route('task.uncheck') ?>" method="post">
                <input type="hidden" name="task" value="<?= $item->id ?>">
                <button>&#9745;</button>
              </form>
            <?php } ?>
            <form action="<?= route('task.remove') ?>" method="post">
              <input type="hidden" name="task" value="<?= $item->id ?>">
              <button>&#10005;</button>
            </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <form id="add-item" action="<?= route('task.add') ?>" method="post">
      <input type="text" name="task">
      <button type="submit">Add Item</button>
    </form>
  </body>
</html>
