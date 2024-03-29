<?php
    include 'display/header.php';
?>
<div class="container-fluid">
    <!-- Area Chart Example-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-plus"></i>
            <span>Add Product</span>
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
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label>Danh mục</label>
                                                                <select name="category" class="form-control">
                                                                <?php
                                                                foreach($data1 as $result1) {
                                                                ?>
                                                                <option value="<?php echo $result1['id'] ?>"><?php echo $result1['name'] ?></option>
                                                                <?php
                                                                    }
                                                                ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tên sản phẩm</label>
                                                                <input type="text" name="name" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Giá sản phẩm</label>
                                                                <input type="number" name="cost" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hãng</label>
                                                                <select name="brand" class="form-control">
                                                                <?php
                                                                foreach($data2 as $result2) {
                                                                ?>
                                                                <option value="<?php echo $result2['id'] ?>"><?php echo $result2['name'] ?></option>
                                                                <?php
                                                                    }
                                                                ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Trạng thái</label>
                                                                <select name="state" class="form-control">
                                                                    <option value="1">Còn hàng</option>
                                                                    <option value="0">Hết hàng</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Ảnh sản phẩm</label>
                                                                <input class="btn btn-primary" name="file" id="file" onclick="document.getElementById('file1').click();" value="Upload">
                                                                <input type="file" name="file1" id="file1" onchange="readURL(this)" style="visibility: hidden">
                                                                <img id="image1" class="thumbnail" width="100%" src="images/product/<?php echo $result['image'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Giới thiệu</label>
                                                                <textarea id="editor" name="summary" style="width: 100%;height: 100px;"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="btn btn-success" name="add" type="submit">Thêm sản phẩm</button>
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
<script type="text/javascript">
    function handleFileSelect(event) {
        var files = event.target.files;
        image = files[0]['name'];
    }
    document.getElementById("file1").addEventListener('change', handleFileSelect, true);
    function readURL(input) {
        if(input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#image1").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!-- DataTables Example -->

<?php
    include 'display/footer.php';
?>
