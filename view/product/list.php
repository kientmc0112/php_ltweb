<?php
    require_once 'model/DBConfig.php';
    $db = new Database;
    $db->connect();

    include 'display/header.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> Danh sách sản phẩm
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="db_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">STT</th>
                                    <th style="width: 10%">Name</th>
                                    <th style="width: 20%">Image</th>
                                    <th style="width: 30%">Summary</th>
                                    <th style="width: 10%">Brand</th>
                                    <th style="width: 10%">Category</th>
                                    <th style="width: 10%">State</th>
                                    <th style="width: 10%">Price</th>
                                    <th style="width: 5%">Edit</th>
                                    <th style="width: 5%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach($data as $result) {
                                ?>
                                <tr>
                                    <td style="text-align: center">
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>
                                        <?php echo $result['name'] ?>
                                    </td>
                                    <td>
                                        <img style="width: 100%" src="images/product/larg/<?php echo $result['url'] ?>">
                                    </td>
                                    <td>
                                        <?php echo $result['summary'] ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $db->getName($result['brand_id'], 'brands');
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $db->getName($result['category_id'], 'categories');
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            if($result['state'] == 1) echo 'Còn hàng';
                                            else echo 'Hết hàng';
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $result['cost'] ?>
                                    </td>
                                    <td style="text-align: center">
                                        <a class="btn btn-success" href="?controller=product&action=edit&id=<?php echo $result['id'] ?>"><i class="far fa-edit"></i></a>
                                    </td>
                                    <td style="text-align: center">
                                        <a class="btn btn-danger" href="?controller=product&action=delete&id=<?php echo $result['id'] ?>"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<?php
    include 'display/footer.php';
?>
