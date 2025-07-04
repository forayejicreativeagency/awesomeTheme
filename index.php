<?php
// Start capturing content
ob_start();
?>
<!-- Write the main page content here -->
 <section class="fca-section">
    <div class="fca-section-inner">
        Hello World
    </div>
 </section>

<?php
// Assign the buffered content to $content
$content = ob_get_clean();

// Include the layout and pass the content
include('layout/main.php');
