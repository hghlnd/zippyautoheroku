<!DOCTYPE html>
<html><head><title>Zippy Used Autos</title></head>
<body>
<h1>Zippy Used Autos</h1>
<form method="get">
<select name="make_id" onchange="this.form.submit()">
<option value="">-- Filter by Make --</option>
<?php foreach ($makes as $make): ?>
<option value="<?= $make['makeID'] ?>" <?= ($make_id == $make['makeID']) ? 'selected' : '' ?>><?= $make['make'] ?></option>
<?php endforeach; ?>
</select>
<select name="type_id" onchange="this.form.submit()">
<option value="">-- Filter by Type --</option>
<?php foreach ($types as $type): ?>
<option value="<?= $type['typeID'] ?>" <?= ($type_id == $type['typeID']) ? 'selected' : '' ?>><?= $type['type'] ?></option>
<?php endforeach; ?>
</select>
<select name="class_id" onchange="this.form.submit()">
<option value="">-- Filter by Class --</option>
<?php foreach ($classes as $class): ?>
<option value="<?= $class['classID'] ?>" <?= ($class_id == $class['classID']) ? 'selected' : '' ?>><?= $class['class'] ?></option>
<?php endforeach; ?>
</select>
<select name="sort" onchange="this.form.submit()">
<option value="price" <?= ($sort == 'price') ? 'selected' : '' ?>>Price</option>
<option value="year" <?= ($sort == 'year') ? 'selected' : '' ?>>Year</option>
</select></form>
<table>
<tr><th>Year</th><th>Make</th><th>Model</th><th>Type</th><th>Class</th><th>Price</th></tr>
<?php foreach ($vehicles as $v): ?>
<tr><td><?= $v['year'] ?></td><td><?= $v['make'] ?></td><td><?= $v['model'] ?></td><td><?= $v['type'] ?></td><td><?= $v['class'] ?></td><td>$<?= number_format($v['price'], 2) ?></td></tr>
<?php endforeach; ?>
</table>
</body></html>