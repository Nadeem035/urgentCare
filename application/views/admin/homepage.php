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
	          <form id="exampleFullForm" autocomplete="off" enctype="multipart/form-data" method="post" action="<?=BASEURL.'admin/update-homepage'?>">

	            <div class="row row-lg">

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box Heading 1</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="colored_box_1_heading" placeholder="Colored Box Heading 1" value="<?=$q['colored_box_1_heading']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box detail 1</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea name="colored_box_1_detail" class="form-control" row="3"><?=$q['colored_box_1_detail']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	            </div><!-- /row/row-lg -->

	            <div class="row row-lg">

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box Heading 2</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="colored_box_2_heading" placeholder="Colored Box Heading 2" value="<?=$q['colored_box_2_heading']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->
					
					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box detail 2</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea name="colored_box_2_detail" class="form-control" row="3"><?=$q['colored_box_2_detail']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	            </div><!-- /row/row-lg -->

	            <div class="row row-lg">

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box Heading 3</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="colored_box_3_heading" placeholder="Colored Box Heading 3" value="<?=$q['colored_box_3_heading']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->
					
					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box detail 3</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea name="colored_box_3_detail" class="form-control" row="3"><?=$q['colored_box_3_detail']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	            </div><!-- /row/row-lg -->

	            <div class="row row-lg">

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box Heading 4</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="colored_box_4_heading" placeholder="Colored Box Heading 4" value="<?=$q['colored_box_4_heading']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->
					
					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Colored Box detail 4</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea name="colored_box_4_detail" class="form-control" row="3"><?=$q['colored_box_4_detail']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	            </div><!-- /row/row-lg -->

	            <div class="row row-lg">

					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Home Page Features Heading</label>
							<div class=" col-lg-12 col-sm-9">
								<input type="text" class="form-control" name="features_heading" placeholder="Home Page Features Heading" value="<?=$q['features_heading']?>">
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->
					
					<div class="col-lg-12 form-horizontal">
						<div class="form-group form-material">
							<label class="col-lg-12 col-sm-3 control-label">Home Page Features Tagline</label>
							<div class=" col-lg-12 col-sm-9">
								<textarea name="features_tagline" class="form-control" row="3"><?=$q['features_tagline']?></textarea>
							</div><!-- /12 -->
						</div><!-- /form-group -->
					</div><!-- /form-horizontal -->

	            </div><!-- /row/row-lg -->

	            <div class="row row-lg">

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
	       			$("input[name='home_about_us_image']").val(resp.data);
	       		}
	       		else
	       		{
	       			alert(resp.msg)
	       			$("#validateButton1").text('Upload An Image First');
	       		}
	        }
	    });
	})
})
</script>