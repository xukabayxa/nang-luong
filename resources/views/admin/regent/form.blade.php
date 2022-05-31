<div class="row">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				<h6>Thông tin chung</h6>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="form-label">Họ tên</label>
							<span class="text-danger">(*)</span>
							<input class="form-control" type="text" ng-model="form.full_name">
							<span class="invalid-feedback d-block" role="alert">
								<strong><% errors.full_name[0] %></strong>
							</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="form-label">Địa chỉ</label>
							<span class="text-danger">(*)</span>
							<input class="form-control" type="text" ng-model="form.address">
							<span class="invalid-feedback d-block" role="alert">
								<strong><% errors.address[0] %></strong>
							</span>
						</div>
					</div>

				</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">SĐT</label>
                            <span class="text-danger">(*)</span>
                            <input class="form-control" type="text" ng-model="form.phone_number">
                            <span class="invalid-feedback d-block" role="alert">
								<strong><% errors.phone_number[0] %></strong>
							</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Ngày sinh</label>
                            <span class="text-danger">(*)</span>
                            <div class="input-group mb-0">
{{--                                <input class="form-control date" type="text" data-model="form.date_of_birth">--}}
                                <input class="form-control" date-form type="text" ng-model="form.date_of_birth"/>

                                <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                            </div>

                            <span class="invalid-feedback d-block" role="alert">
								<strong><% errors.date_of_birth[0] %></strong>
							</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Chức danh nghề nghiệp</label>
                            <input class="form-control" type="text" ng-model="form.career_titles">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Giới thiệu</label>
                            <textarea id="my-textarea" class="form-control" ng-model="form.intro" rows="3"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Giới tính</label>
                            <span class="text-danger">(*)</span>
                            <div class="form-radio mt-2">
                                <div class="radio radio-inline radio-inverse">
                                    <label>
                                        <input type="radio" ng-model="form.sex" value="1">
                                        <i class="helper"></i>Nam
                                    </label>
                                </div>
                                <div class="radio radio-inline radio-inverse">
                                    <label>
                                        <input type="radio" ng-model="form.sex" value="0">
                                        <i class="helper"></i>Nữ
                                    </label>
                                </div>
                            </div>
                            <span class="invalid-feedback d-block" role="alert" ng-if="errors && errors.sex">
                                        <strong><% errors.sex[0] %></strong>
                                    </span>
                        </div>
                    </div>
                </div>
			</div>
		</div>

		<div class="card">
			<div class="card-header d-flex align-items-center">
				<h6 class="mb-0">Mạng xã hội</h6>
				<div class="text-danger ml-1"></div>
			</div>
			<div class="card-body">
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Facebook</label>
                            <input class="form-control" type="text" ng-model="form.facebook">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" ng-model="form.email">
                        </div>
                    </div>
				</div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Skype</label>
                            <input class="form-control" type="text" ng-model="form.skype">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Twitter</label>
                            <input class="form-control" type="text" ng-model="form.twitter">
                        </div>
                    </div>
                </div>

			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">
				<h6>Ảnh đại diện</h6>
			</div>
			<div class="card-body">
                <div class="form-group text-center mb-4">
                    <div class="main-img-preview">
                        <p class="help-block-img">* Ảnh định dạng: jpg, png không quá 2MB.</p>
                        <img class="thumbnail img-preview" ng-src="<% form.image.path %>">
                    </div>
                    <div class="input-group" style="width: 100%; text-align: center">
                        <div class="input-group-btn" style="margin: 0 auto">
                            <div class="fileUpload fake-shadow cursor-pointer">
                                <label class="mb-0" for="<% form.image.element_id %>">
                                    <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                </label>
                                <input class="d-none" id="<% form.image.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png">
                            </div>
                        </div>
                    </div>
                    <span class="invalid-feedback d-block" role="alert">
				<strong><% errors.image[0] %></strong>
			</span>
                </div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<h6>Thông tin khác</h6>
			</div>
			<div class="card-body">
                <div class="form-group">
                    <label class="form-label">Hiển thị ngoài trang chủ</label>
                    <span class="text-danger">(*)</span>
                    <select class="form-control" ng-model="form.show_home_page">
                        <option value="1" ng-selected="form.show_home_page == 1">Hiển thị</option>
                        <option value="0" ng-selected="form.show_home_page == 0">Không</option>
                    </select>
                    <span class="invalid-feedback d-block" role="alert">
								<strong><% errors.show_home_page[0] %></strong>
                    </span>
                </div>
			</div>
		</div>
	</div>
</div>

<div class="row">
    <div class="card-block">
        <ul class="nav nav-tabs  tabs nav-quotation" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hang_hoa" role="tab" aria-expanded="true">
                    Hàng hóa
                </a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" data-toggle="tab" href="#tong_hop_km" role="tab" aria-expanded="false">
                    Tổng hợp hàng khuyến mại
                </a>
            </li>
        </ul>
        <div class="tab-content tab-custom">
            <div class="tab-pane p-0 active" id="hang_hoa">
                <div class="row">
                  <p>1</p>
                </div>
            </div>
            <div class="tab-pane p-0" id="tong_hop_km">
                <div class="row">
                    <p>2</p>
                </div>
            </div>

        </div>
    </div>
</div>
<hr>
<div class="text-right">
	<button type="submit" class="btn btn-success btn-cons" ng-click="submit()" ng-disabled="loading.submit">
		<i ng-if="!loading.submit" class="fa fa-save"></i>
		<i ng-if="loading.submit" class="fa fa-spin fa-spinner"></i>
		Lưu
	</button>
	<a href="{{ route('User.index') }}" class="btn btn-danger btn-cons">
		<i class="fa fa-remove"></i> Hủy
	</a>
</div>
