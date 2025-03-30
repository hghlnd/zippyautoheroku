<?php
function get_all_types() {
    global $db;
    return $db->query('SELECT * FROM types ORDER BY type')->fetchAll();
}
?>