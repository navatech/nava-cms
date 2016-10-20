<?php
/* @var $this yii\web\View */
use navatech\language\Translate;

$this->title = 'SaLon';
?>
<div class="hompage-content">
	<form method="post" class="form-horizontal">
		<div class="row">
			<div class="col-sm-8">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Họ Tên</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Họ Tên">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Số điện thoại</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Salon</label>
					<div class="col-sm-9">
						<select class="form-control">
							<option>Hà Nội Việt Nam</option>
							<option>Hà Nội Việt Nam</option>
							<option>Hà Nội Việt Nam</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Stylist</label>
					<div class="col-sm-9">
						<div class="btn-group">
							<button type="button" class="btn btn-danger">Action</button>
							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<label for="inputEmail3" class="control-label">Giờ hẹn: Vui lòng chọn khung giờ phù hợp</label>
						<ul class="list-time">
							<li>
								<a href="javascript:void(0)">8:00</a>
							</li>
							<li>
								<a href="javascript:void(0)">8:30</a>
							</li>
							<li>
								<a href="javascript:void(0)">9:00</a>
							</li>
							<li>
								<a href="javascript:void(0)">9:30</a>
							</li>
							<li>
								<a href="javascript:void(0)">10:00</a>
							</li>
							<li>
								<a href="javascript:void(0)">10:30</a>
							</li>
							<li>
								<a href="javascript:void(0)">13:00</a>
							</li>
							<li>
								<a href="javascript:void(0)">13:30</a>
							</li>
							<li>
								<a href="javascript:void(0)">14:00</a>
							</li>
							<li>
								<a href="javascript:void(0)">14:30</a>
							</li>
							<li>
								<a href="javascript:void(0)">15:00</a>
							</li>
							<li>
								<a href="javascript:void(0)">15:30</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Mã khuyến mại</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Mã khuyến mại">
					</div>
					<div class="col-sm-4">
						<button type="submit" class="btn btn-lg btn-success pull-right">Đặt Lịch</button>
					</div>
				</div>

			</div>
			<div class="col-sm-4 promotion">
				<div class="list-promotion">
					<h3 class="text-center">Khuyến Mãi</h3>
					<div class="promotion-item">
						Mừng khai trương nhập mã <b>KHAITRUONG</b> để giảm giá 50%
					</div>
					<div class="promotion-item">
						từ ngày 15/9 đến ngày 20/10 nhập mã <b>PHUNUVIETNAM</b> để giảm giá 60%
					</div>
				</div>
			</div>

		</div>
	</form>
</div>
