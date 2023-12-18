<table class="is-hoverable w-full text-left">
    <?php
    include "./components/client/client_table_header.php";
    include "./components/client/client_table_body.php";
    ?>
</table>
<?php
echo generatePagination(1, 5);
?>