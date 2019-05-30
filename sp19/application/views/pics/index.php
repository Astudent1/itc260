<?php
//application/views/pics/index.php
?>
<h2><?php echo $title; ?></h2>

<?php foreach ($default_tags as $tag): ?>

    <a href="<?=site_url('pics/view/' . $tag);?>">
        <button type="button" class="btn btn-primary"><?=$tag?></button>
    </a>

<?php endforeach; ?>
<h3>Search by tag:</h3>
<input type="input" name="tagname" id="tagname" class="form-control form-control-lg" />
<button type="button" id="submit" class="btn btn-primary">Submit</button>

<script>
    var submitButton = document.querySelector('#submit');
    var tagName = '';
    submitButton.addEventListener('click', function() {
        tagName = document.querySelector('#tagname').value;
        window.location.href = '<?=site_url('pics/view/')?>' + tagName;
    });
</script>