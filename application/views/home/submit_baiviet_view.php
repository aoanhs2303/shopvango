<script src="<?php echo base_url(); ?>includehome/js/ng-file-upload-shim.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>includehome/js/ng-file-upload.min.js" type="text/javascript"></script>
<div ng-controller = "SubmitRecipeCtrl">
    <?php
        if (isset($_FILES['attachments'])) {
            $msg = "";
            $targetFile = "files/sanpham/" . basename($_FILES['attachments']['name'][0]);
            if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], $targetFile))
                $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => $targetFile);
            exit(json_encode($msg));
        }
    ?>
    <section class="submit-recipe-page-wrap padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-12">
                    <form class="submit-recipe-form" name="myForm">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" placeholder="Nhập tiêu đề ..." class="form-control" name="name"
                                data-error="Tiêu đề không được để trống" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="select2" name="filter-by">
                                <option value="congthucchung">Công thức chung</option>
                                <option value="banhmi">Bánh Mì</option>
                                <option value="banhngot">Bánh Ngọt</option>
                                <option value="banhquy">Bánh Quy</option>
                            </select>
                        </div>
                        <div>
                                <fieldset>
                                    <input type="file" ngf-select ng-model="picFile" name="file" accept="image/*" ngf-max-size="2MB" required ngf-model-invalid="errorFile">
                                    <i ng-show="myForm.file.$error.required">*Không được để trống</i><br>
                                    <i ng-show="myForm.file.$error.maxSize">File too large {{errorFile.size / 1000000|number:1}}MB: max 2M</i>
                                    <img ng-show="myForm.file.$valid" ngf-thumbnail="picFile" class="thumb">
                                    <button ng-click="picFile = null" ng-show="picFile">Remove</button><br>
                                    <button ng-disabled="!myForm.$valid" ng-click="uploadPic(picFile)">Submit</button>
                                    <span class="progress" ng-show="picFile.progress >= 0">
                                        <div style="width:{{picFile.progress}}%" ng-bind="picFile.progress + '%'"></div>
                                    </span>
                                    <span ng-show="picFile.result">Upload Successful</span>
                                    <span class="err" ng-show="errorMsg">{{errorMsg}}</span>
                                </fieldset>
                                <br>
                        </div>

                        <div class="additional-input-wrap">
                            <label>Upload hình bài viết</label>
                            <div class="form-group">
                                <ul class="upload-img">
                                    <li><img src="<?php echo base_url() . 'includehome/'?>img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                    <li><img src="<?php echo base_url() . 'includehome/'?>img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                    <li><img src="<?php echo base_url() . 'includehome/'?>img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                    <li><img src="<?php echo base_url() . 'includehome/'?>img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                    <li><img src="<?php echo base_url() . 'includehome/'?>img/figure/upload-banner1.jpg" alt="Upload Image"></li>
                                </ul>
                                <button type="button" class="btn-upload"><i class="fas fa-cloud-upload-alt"></i>UPLOAD</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Giới thiệu</label>
                            <textarea placeholder="Nhập lời giới thiệu" class="textarea form-control" name="message" id="form-message"
                                rows="7" cols="20" data-error="Giới thiệu khong được để trống" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="additional-input-wrap">
                            <label>Upload hình Slide</label>
                            <div class="form-group">
                                <ul class="upload-img">
                                    <li><img src="<?php echo base_url() . 'includehome/'?>img/figure/upload-slide.jpg" alt="Upload Image"></li>
                                </ul>
                                <button type="button" class="btn-upload"><i class="fas fa-cloud-upload-alt"></i>UPLOAD</button>
                            </div>
                        </div>
                        <div class="additional-input-wrap">
                            <label>Thành phần:</label>
                            <div class="row no-gutters" ng-repeat="thanhphan in listThanhPhan">
                                <div class="col-8">
                                    <div class="form-group additional-input-box icon-right">
                                        <i class="fas fa-arrows-alt"></i>
                                        <input type="text" placeholder="Nhập tên thành phần ..." class="form-control" name="name" value="{{thanhphan.name}}">
                                        <i ng-click="removeThanhPhan($index)" class="fas fa-times"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="button" ng-click="addThanhPhan()" class="btn-upload">
                                <i class="flaticon-add-plus-button"></i>THÊM THÀNH PHẦN
                            </button>
                        </div>
                        <div class="form-group">
                            <label>Hướng dẫn chi tiết</label>
                            <div class="summernote"></div>
                        </div>
                        <button type="submit" class="btn-submit">ĐỒNG Ý</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Submit Recipe Area End Here -->
    </div>
    <!-- Search Box Start Here -->
    <div id="search" class="search-wrap">
        <button type="button" class="close">×</button>
        <form class="search-form">
            <input type="search" value="" placeholder="Type here........" />
            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
        </form>
    </div>
    <!-- Search Box End Here -->
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Login</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="login-form">
                        <input class="main-input-box" type="text" placeholder="User Name" />
                        <input class="main-input-box" type="password" placeholder="Password" />
                        <div class="inline-box mb-5 mt-4">
                            <div class="checkbox checkbox-primary">
                                <input id="modal-checkbox" type="checkbox">
                                <label for="modal-checkbox">Remember Me</label>
                            </div>
                            <label class="lost-password"><a href="#">Lost your password?</a></label>
                        </div>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" type="submit" value="Login">Login</button>
                            <a href="#" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                        </div>
                    </form>
                    <label>Login connect with your Social Network</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End-->



<script>
    var app = angular.module('myApp', ['ngFileUpload'])
    app.controller('SubmitRecipeCtrl', function($scope, $http, $rootScope, Upload) {
        console.log("controller");
        $scope.listThanhPhan = [ {"name": ""} ]
        $scope.addThanhPhan = function() {
            console.log("add thanh phan");
            $scope.thanhphan = {"name": ""};
            $scope.listThanhPhan.push($scope.thanhphan);
            console.log($scope.listThanhPhan);
        }
        $scope.removeThanhPhan = function(index) {
            console.log(index);
            $scope.listThanhPhan.splice(index, 1);
        }

        $scope.submit = function() {
            if ($scope.form.file.$valid && $scope.file) {
                $scope.upload($scope.file);
            }
        };

        $scope.uploadPic = function(file) {
            file.upload = Upload.upload({
                url: 'https://angular-file-upload-cors-srv.appspot.com/upload',
                data: {file: file},
            });

            file.upload.then(function (response) {
                $timeout(function () {
                    file.result = response.data;
                });
            }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
            }, function (evt) {
                // Math.min is to fix IE which reports 200% sometimes
                file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
            });
        }

    })
</script>