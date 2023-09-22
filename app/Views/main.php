<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        th,td, h1{
            text-align:center;
        }
        .add{
            position: relative;
            top:0;
            margin-top: 20px;
            margin-left: 87%;
            width: 150px;
            height: 40px;
        }
        .cat{
            position: absolute;
            top:0 ;
            margin-top: 20px;
            width: 150px;
            height: 40px;
        }
        li{
            list-style-type: none;
        }
    </style>
</head>
<body style="  background-color: gray ;">
<div class="container">
        <a href="/main/create" class="add btn btn-primary mb-1">Add Product</a>
        <a href="/main/category" class="cat btn btn-primary mb-3">Add Category</a>
        <h1>Product List</h1>
        <table class="table table-bordered" style="  background-color: aliceblue ;">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Category</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $ibon): ?>
                <tr>
                    <td><?= $ibon['ProductName'] ?></td>
                    <td><?= $ibon['ProductDescription'] ?></td>
                    <ul> 
                        <td>
                                <li>
                                    <a href="/main/listByCategory?category=<?= urlencode($ibon['ProductCategory']) ?>">
                                        <?= $ibon['ProductCategory'] ?>
                                    </a>
                                </li> 
                        </td>
                    </ul>
                    <td><?= $ibon['ProductQuantity'] ?></td>
                    <td><?= $ibon['ProductPrice'] ?></td>
                    <td>
                         <a href="/main/edit/<?= $ibon['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="/main/delete/<?= $ibon['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-4j+3s1Pj8w6t4+XW3UvI3/5XpGy9Gg5xKv+Z6a7u8z5w+qQ9zJQzUew+0R6wXpG" crossorigin="anonymous"></script>
</body>
</html>