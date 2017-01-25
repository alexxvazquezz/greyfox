<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
      .background {
        background: #e3e3e3;
        padding: 2em;
        }
    </style>
  </head>

  <body>


    <div class="background">
      <h1>Tasks:</h1>

      <ul>
        <li>
          <strong>Title: </strong><?php echo $task['title']; ?>
        </li>

        <li>
          <strong>Due date: </strong> <?php echo $task['due']; ?>
        </li>

        <li>
          <strong>Owner: </strong> <?php echo $task['assigned_to']; ?>
        </li>

        <li>
          <strong>Status: </strong>

          <?php if($task['completed']) : ?>
            <span>&#9989;</span>
          <?php else : ?>
            <span>&#10060;</span>
          <?php endif; ?>

        </li>
      </ul>

    </div>


  </body>

</html>
