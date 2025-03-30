<?php
function get_filtered_vehicles($sort, $make_id, $type_id, $class_id) {
    global $db;
    $query = "SELECT V.*, M.make, T.type, C.class
              FROM vehicles V
              JOIN makes M ON V.makeID = M.makeID
              JOIN types T ON V.typeID = T.typeID
              JOIN classes C ON V.classID = C.classID";
    $conditions = [];
    if ($make_id) $conditions[] = "V.makeID = :make_id";
    if ($type_id) $conditions[] = "V.typeID = :type_id";
    if ($class_id) $conditions[] = "V.classID = :class_id";
    if ($conditions) $query .= " WHERE " . implode(" AND ", $conditions);
    $query .= ($sort === 'year') ? " ORDER BY V.year DESC" : " ORDER BY V.price DESC";

    $stmt = $db->prepare($query);
    if ($make_id) $stmt->bindValue(':make_id', $make_id, PDO::PARAM_INT);
    if ($type_id) $stmt->bindValue(':type_id', $type_id, PDO::PARAM_INT);
    if ($class_id) $stmt->bindValue(':class_id', $class_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}
?>