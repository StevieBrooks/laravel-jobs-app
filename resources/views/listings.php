<h1><?php echo $heading; ?></h1>
<?php foreach ($listings as $listing): ?>
    <div style="padding: 1rem; border-bottom: 1px solid">
        <h2><?php echo $listing['title']; ?></h2>
        <p><?php echo $listing['description']; ?></p>
    </div>
<?php endforeach; ?>