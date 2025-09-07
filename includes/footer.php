<footer>
    <div class="container">
        <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Buy me a coffee', '#333333', 'F2F81KTQX0');kofiwidget2.draw();</script> 
    </div>
</footer>

<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-auth-compat.js"></script>

<?php 
// Correctly require the config file from the parent directory
require_once __DIR__ . '/../config.php'; 
?>

<script>
    // This dynamic line passes the config from PHP to JavaScript
    const firebaseConfig = <?php echo json_encode($firebaseConfig); ?>;
    firebase.initializeApp(firebaseConfig);
</script>

<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>

<?php 
// Send the output buffer and turn off buffering
ob_end_flush(); 
?>

</body>
</html>