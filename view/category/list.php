<?php
    include 'display/header.php';
?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> List Category
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th style="width: 60%">Giới thiệu</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <!-- <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th style="width: 60%">Giới thiệu</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </tfoot> -->
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
                                            <?php echo $result['summary'] ?>
                                        </td>
                                        <td style="text-align: center">
                                            <a class="btn btn-success" href="?controller=category&action=edit&id=<?php echo $result['id'] ?>">Edit</a>
                                        </td>
                                        <td style="text-align: center">
                                            <a class="btn btn-danger" href="?controller=category&action=delete&id=<?php echo $result['id'] ?>">Delete</button>
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
