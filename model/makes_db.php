<?php
function get_all_makes() {
    global $db;
    $query = 'SELECT * FROM makes ORDER BY make';
    return $db->query($query)->fetchAll();
}
?>