<?php
$files = array();
for ($i = 1; $i <= 61; $i++) {
    if ($i > 50) {
        $filename = 'pt' . ($i - 50) . '.php';
        $files[$filename] = 'Pattern' . ($i - 50);
    } else {
        $filename = 'pro' . $i . '.php';
        $files[$filename] = 'Program ' . $i;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="links">
            <ul>
                <?php foreach ($files as $file => $name): ?>
                <li><a href="#<?php echo $file; ?>">
                        <?php echo $name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="files">
            <?php foreach ($files as $file => $name): ?>
            <iframe src="<?php echo $file; ?>" id="<?php echo $file; ?>" style="display: none;"></iframe>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var links = document.querySelectorAll('.links a');
        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var fileId = this.getAttribute('href').substring(1);
                var iframes = document.querySelectorAll('.files iframe');
                iframes.forEach(function(iframe) {
                    iframe.style.display = 'none';
                });
                document.getElementById(fileId).style.display = 'block';
            });
        });
    });
    </script>
</body>

</html>