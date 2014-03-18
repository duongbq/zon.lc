<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($blog['Post']['title']); ?></h1>

<p><small>Created: <?php echo $blog['Post']['created']; ?></small></p>

<p><?php echo h($blog['Post']['body']); ?></p>