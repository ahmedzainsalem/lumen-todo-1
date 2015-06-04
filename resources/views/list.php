<html>
  <head>
    <title>To do List with Lumen</title>
  </head>
  <body>
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
              <form action="/list/check" method="post">
                <input type="hidden" name="task" value="<?= $item->id ?>">
                <button>&#9744;</button>
              </form>
            <?php } else { ?>
              <form action="/list/uncheck" method="post">
                <input type="hidden" name="task" value="<?= $item->id ?>">
                <button>&#9745;</button>
              </form>
            <?php } ?>
            <form action="/list/remove" method="post">
              <input type="hidden" name="task" value="<?= $item->id ?>">
              <button>&#10005;</button>
            </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <form id="add-item" action="/list/add" method="post">
      <input type="text" name="task">
      <button type="submit">Add Item</button>
    </form>
  </body>
</html>
