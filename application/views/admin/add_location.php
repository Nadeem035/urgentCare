<div class="page animsition">
    <div class="page-header">
      	<h1 class="page-title">
      		<?=$page_title?>
		</h1>
      	<ol class="breadcrumb">
	        <li><a href="<?=BASEURL?>admin">Admin</a></li>
            <li><?=$page_title?></li>
      	</ol>
      	<div class="page-header-actions">
	        <a class="btn btn-sm btn-primary btn-round" href="<?=BASEURL?>" target="_blank">
          		<i class="icon md-link" aria-hidden="true"></i>
	          	<span class="hidden-xs">Website</span>
	        </a>
      	</div><!-- /page-header-actions -->
    </div><!-- /page-header -->
    <?php if (isset($_GET['msg'])):?>
		<div class="bg-success well">
			<p><?=$_GET['msg']?></p>
		</div>
	<?php endif;?>
    <div class="page-content container-fluid">
      	<div class="panel">
	        <div class="panel-heading">
	          	<h3 class="panel-title"><?=$page_title?></h3>
	        </div><!-- /panel-heading -->
	        <div class="panel-body">
	          <form id="exampleFullForm" autocomplete="off" enctype="multipart/form-data" method="post" action="
	          	<?php
		  		if($mode != 'edit')echo BASEURL."admin/post-location";
			  	else echo BASEURL."admin/update-location";
		  		?>">
		  		<?php
				$required_string = "required";
				if(isset($mode) && $mode=="edit") {?>
					<input type="hidden" name="mode" value="edit" />
					<input type="hidden" name="aid" value="<?=$_GET['id']?>" />
					<input type="hidden" name="security" value="1ee344ecee344e778694777eb3323a" />
				<?php $required_string = '';
				}?>

	            <div class="row row-lg">
					
					<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">State 
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<select name="state_id" class="form-control" required>
									<option value="">Select State</option>
									<?php foreach ($states as $key => $state): ?>
										<option value="<?=$state['state_id']?>" <?=($state['state_id'] == $q['state_id']) ? 'selected' : ''?> ><?=$state['name']?></option>
									<?php endforeach ?>
								</select>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">City 
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<select name="city_id" class="form-control" required>
									<option value="">Select City</option>
									<?php foreach ($cities as $key => $city): ?>
										<option value="<?=$city['city_id']?>" <?=($city['city_id'] == $q['city_id']) ? 'selected' : ''?> ><?=$city['name']?></option>
									<?php endforeach ?>
								</select>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Name
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?=$q['name']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Slug
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="slug" placeholder="URL Slug" required="" value="<?=$q['slug']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Address
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="address" placeholder="Address" required="" value="<?=$q['address']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Phone
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="phone" placeholder="Phone" required="" value="<?=$q['phone']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Timings
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="timings" placeholder="Timings" required="" value="<?=$q['timings']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Goole Map
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="google_map" placeholder="Google Map" required="" value="<?=$q['google_map']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-12 form-horizontal">
		            	<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Walk In Urgent Care Note</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea class="form-control" placeholder="Walk In Urgent Care Note" name="walk_in_urgent_care"><?=$q['walk_in_urgent_care']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /12/form-horizontal -->

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Services</label>
							<div class=" col-lg-12 col-sm-9">
								<?php if ($mode == 'edit'): ?>
									<?php $servicesIds = explode(',', $q['services']); ?>
								<?php else: ?>
									<?php $servicesIds = array(); ?>
								<?php endif ?>
								<?php foreach ($services as $key => $service): ?>
									<?php if (in_array($service['service_id'], $servicesIds)): ?>
										<input type="checkbox" name="services[]" value="<?=$service['service_id']?>" checked> <?=$service['title']?><br>
									<?php else: ?>
										<input type="checkbox" name="services[]" value="<?=$service['service_id']?>"> <?=$service['title']?><br>
									<?php endif ?>
								<?php endforeach ?>	
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-12 form-horizontal">
		            	<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Detail</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea class="form-control" placeholder="Detail" name="detail" data-plugin="summernote"><?=$q['detail']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /12/form-horizontal -->

					<div class="col-lg-12 form-horizontal">
		            	<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">About Our Services Note</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea class="form-control" placeholder="About Our Services Note" name="about_our_services"><?=$q['about_our_services']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /12/form-horizontal -->

					<div class="col-lg-12 form-horizontal">
		            	<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Facebook Link</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea class="form-control" placeholder="Facebook Link" name="facebook"><?=$q['facebook']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /12/form-horizontal -->

					<div class="col-lg-12 form-horizontal">
		            	<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Linkedin Link</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea class="form-control" placeholder="Linkedin Link" name="linkedin"><?=$q['linkedin']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /12/form-horizontal -->

					<div class="col-lg-12 form-horizontal">
		            	<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Twitter Link</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea class="form-control" placeholder="Twitter Link" name="twitter"><?=$q['twitter']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /12/form-horizontal -->

	              	<div class="col-lg-12 form-horizontal">
		                <div class="example-wrap">
							<h4 class="example-title">Image</h4>
							<div class="example">
								<input type="file" id="input-file-now" data-plugin="dropify" required data-default-file="<?=UPLOADS.$q['image']?>"/>
								<input type="text" name="image" required value="<?=$q['image']?>" hidden>
							</div><!-- /example -->
						</div><!-- /example-wrap -->
	              	</div><!-- /12/form-horizontal -->

	              	<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Meta Title
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" required="" value="<?=$q['meta_title']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	              	<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Meta Keywords
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="meta_key" placeholder="Meta Keywords" required="" value="<?=$q['meta_key']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Meta Description
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea name="meta_desc" class="form-control" rows="5" required=""><?=$q['meta_desc']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	              	<div class="col-lg-6 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Status 
								<span class="required">*</span>
							</label>
							<div class=" col-lg-12 col-sm-9">
								<select name="status" class="form-control" required>
									<?php if ($q['status'] == 0): ?>
										<option value="1">Active</option>
										<option value="0" selected>Inactive</option>
									<?php else: ?>
										<option value="1" selected>Active</option>
										<option value="0">Inactive</option>
									<?php endif ?>
								</select>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->
					


	              	<div class="form-group form-material col-lg-12 text-right padding-top-m">
	                	<button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
	              	</div><!-- /form-group -->
	            </div><!-- /row/row-lg -->
	          </form>
	        </div><!-- /panel-body -->
      </div><!-- /panel -->
    </div>
</div><!-- /page/animsition -->

<script>
$(function(){
	$("#input-file-now").on('change',function(){
		$("#validateButton1").text('Wait File Is Uploading');
		var data = new FormData();
    	data.append('img', $(this).prop('files')[0]);
	    $.ajax({
	        type: 'POST',
	        processData: false,
	        contentType: false,
	        data: data,
	        url: '<?=BASEURL?>admin/post-photo-ajax',
	        dataType : 'json',
	        success: function(resp){
	        	// resp = $.parseJSON(resp);
	        	console.log(resp.data);
	       		if (resp.status == true)
	       		{
	       			$("#validateButton1").removeAttr('disabled');
	       			$("#validateButton1").text('Submit');
	       			$("input[name='image']").val(resp.data);
	       		}
	       		else
	       		{
	       			alert(resp.msg)
	       			$("#validateButton1").text('Upload An Image First');
	       		}
	        }
	    });
	});


	$(document).on('change', 'select[name="state_id"]', function(event) {
		event.preventDefault();
		$id = $(this).val();
		$('select[name="city_id"]').html('<option value="">Select City</option>');
		if ($id.length > 0) {
			$(".theatre-cover").fadeIn(100);
			$.post('<?=BASEURL."admin/get-city-by-state-ajax"?>', {id: $id}, function(resp) {
				resp = $.parseJSON(resp);
				$(".theatre-cover").fadeOut(100);
				if (resp.status == true) {
					$('select[name="city_id"]').html(resp.data);
				}
				else{
					alert(resp.msg);
				}
			});
		}
	});


});//onload
</script>