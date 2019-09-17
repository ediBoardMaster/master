<div id="wizard_vertical">
	<h2>Conference details</h2>
	<section>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_name">Name</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter your conference name" name="name">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_alias">Alias</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter your alias" name="alias">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_email">Email</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter your email" name="email">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_date">Date Start</label>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class="form-group">
					<input type="date" class="form-control" name="date_start">
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<label>Date End </label>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class="form-group">
					<input type="date" class="form-control" name="date_end">
				</div>
			</div>
		</div>
		<div class="row clearfix mb-2">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_type">Conference type</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<select class="form-control">
					<option></option>
					<option value="1">asd</option>
				</select>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_url">Website URL</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter your URL" name="URL">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_phone">Phone Number</label>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter your phone" name="phone">
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<label for="conference_fax">Fax </label>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter your fax" name="fax">
				</div>
			</div>
		</div>
	</section>
	<h2>Address</h2>
	<section>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label>Address line 1</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" name="Address_line_1" class="form-control" placeholder="Address">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label>Address line 2</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" name="Address_line_2" class="form-control" placeholder="Address">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label>Address line 3</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" name="Address_line_3" class="form-control" placeholder="Address">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label>City</label>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-8">
				<div class="form-group">
					<input type="text" name="city" class="form-control" placeholder="Enter the city">
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
				<label for="conference_date">State</label>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class="form-group">
					<select name="state">
						<option></option>
					</select>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<label>ZIP Code </label>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class="form-group">
					<input type="text" class="form-control" name="zip_code" placeholder="ZIP Code">
				</div>
			</div>
		</div>
	</section>
	<h2>Logo Upload</h2>
	<section>
		<div class="form-group">
			<input name="logo" type="file" onchange="readURL(this);" accept="image/*"/>
		</div>
		<dir class="put_image">
			<img src="" style="display: none;" class="logo_preview">
		</dir>
	</section>
	<h2>Submission Setting</h2>
	<section>
		<div class="row clearfix">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<label><b>Presentaion Mode</b></label>
			</div>
		</div>
		<div class="row clearfix">
			@for ($i = 1; $i <= 5; $i++)
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="checkbox">
					<input id="checkbox_{{ $i }}" type="checkbox">
					<label for="checkbox_{{ $i }}">
						Mode {{ $i }}
					</label>
				</div>
			</div>
			@endfor
		</div>
		<div class="row clearfix mb-3">
			<div class="col-lg-3 col-md-3 col-sm-4 form-control-label">
				<label for="conference_type"><b>Submission structure</b></label>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8">
				<select class="form-control">
					<option></option>
					<option value="1">asd</option>
				</select>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<label>flow kat sini</label>
			</div>
		</div>
	</section>
</div>