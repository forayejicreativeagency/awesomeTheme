<?php
// Start capturing content
ob_start();
?>


<!-- Write the main page content here -->
 <!-- Site Header -->
 <header id="siteHeader" class="fca-section">
    <div class="fca-section-inner fca-flex-row fca-jsb-aic">
        <a href="/" class="fca-site-logo">
            <img src="./images/fariowala.svg" alt="" class="site-logo-icon">
        </a>
    </div>
 </header>



<?php
// Assign the buffered content to $content
$content = ob_get_clean();

// Include the layout and pass the content
include('layout/main.php');
