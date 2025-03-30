<?php
function get_all_classes() {
    global $db;
    return $db->query('SELECT * FROM classes ORDER BY class')->fetchAll();
}
?>