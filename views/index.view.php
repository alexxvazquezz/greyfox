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
    <nav>
      <ul>
        <li><a href="/GreyFox/about.php">About</a></li>
      </ul>
      <ul>
        <li><a href="/GreyFox/contact.php">Contact</a></li>
      </ul>
    </nav>
    <ul>
      <?php foreach($tasks as $task) : ?>
        <li>
          <?php if($task->completed) : ?>
            <strike><?php echo $task->description; ?></strike>
          <?php else:  ?>
            <?php echo $task->description; ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>

</html>
