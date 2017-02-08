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
<<<<<<< HEAD:views/index.view.php
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </nav>
    <h2>My Tasks</h2>
=======
        <li><a href="/GreyFox/about.php">About</a></li>
      </ul>
      <ul>
        <li><a href="/GreyFox/contact.php">Contact</a></li>
      </ul>
    </nav>
>>>>>>> e0a22e381dd0c9d5f6f0b166dcad471d54a6bcd8:views/index.view.php
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
