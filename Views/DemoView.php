
<?php
include './Models/DemoModel.php';
include './Controllers/DemoController.php';

$params = checkParam();
echo get_data_by_name($params);

?>

<form method="get" action="/index.php" enctype="text/plain">
    <input name="name" placeholder="Vui long nhap ten ....">
    <button type="submit">Submit</button>
</form>
