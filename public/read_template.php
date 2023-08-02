<?php
// search form
echo "<form role='search' action='/webshop/public/search.php'>
    <div class='input-group col-md-3 pull-left margin-right-1em'>";
$search_value = isset($search_term) ? "value='{$search_term}'" : "";
echo "<input type='text' class='form-control searchbar-placeholder' placeholder='Type product name or description...' name='s' id='srch-term' required {$search_value} />
        <div class='input-group-btn'>
            <button class='btn btn-primary' type='submit'><i class='glyphicon glyphicon-search'></i></button>
        </div>
    </div>
</form>";

// create product button
echo "<div class='right-button-margin'>
    <a href='/webshop/public/create_product.php' class='btn btn-primary pull-right createproduct-btn-text'>
        <span class='glyphicon glyphicon-plus'></span> Create Product
    </a>
</div>";

// display the products if there are any
if ($total_rows > 0) {

  echo "<table class='table table-hover table-responsive table-bordered'>
        <tr>
            <th class='extrabold-text'>Product</th>
            <th class='extrabold-text'>Price</th>
            <th class='extrabold-text'>Description</th>
            <th class='extrabold-text'>Category</th>
            <th class='extrabold-text'>Actions</th>
        </tr>";

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    extract($row);

    echo "<tr>
                <td class='light-text'>{$name}</td>
                <td class='light-text'>{$price}</td>
                <td class='light-text'>{$description}</td>
                <td class='light-text'>";
    $category->id = $category_id;
    $category->readName();
    echo $category->name;
    echo "</td>";

    echo "<td>";

    // read product button
    echo "<a href='/webshop/public/read_one.php?id={$id}' class='btn btn-primary left-margin bold-text '>
                        <span class='glyphicon glyphicon-list'></span> Read
                    </a>";

    // edit product button
    echo "<a href='/webshop/public/update_product.php?id={$id}' class='btn btn-info left-margin bold-text '>
                        <span class='glyphicon glyphicon-edit'></span> Edit
                    </a>";

    // delete product button
    echo "<a delete-id='{$id}' class='btn btn-danger delete-object bold-text '>
                        <span class='glyphicon glyphicon-remove'></span> Delete
                    </a>";

    echo "</td>";

    echo "</tr>";

  }

  echo "</table>";

  // paging buttons
  include_once "paging.php";
}

// tell the user there are no products
else {
  echo "<div class='alert alert-danger'>No products found.</div>";
}
?>

