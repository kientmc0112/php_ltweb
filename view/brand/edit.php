<?php
    include 'display/header.php';
?>
 <div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">

            <span>Edit Brand</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row justify-content-center" style="margin-bottom:40px">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12 col-lg-12">
                                            <div class="panel panel-primary">
                                                <div class="panel-body">
                                                    <form method="POST">
                                                    <div class="row" style="margin-bottom:40px">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Tên hãng</label>
                                                                <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Trụ sở chính</label>
                                                                <input type="text" name="position" class="form-control" value="<?php echo $data['position'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Giới thiệu</label>
                                                                <textarea name="summary" style="width: 100%;height: 100px;"><?php echo $data['summary'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="btn btn-success" name="save" type="submit">Lưu</button>
                                                            <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include 'display/footer.php';
?>
