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
          <strong>Name: </strong> <?php echo $tasks['title'];?>
        </li>

        <li>
          <strong>Due Date: </strong> <?php echo $tasks['due'];?>
        </li>

        <li>
          <strong>Owner: </strong><?php echo $tasks['assigned_to'];?>
        </li>

        <li>
          <strong>Status: </strong><?php echo $tasks['completed'] ? 'Completed' : 'Incompleted'; ?>
        </li>


      </ul>
    </div>
  </body>
</html>
