<script type="text/javascript">
function del_q(id) {
    cnfr = confirm("Wait a min. Are you really going to delete the Location with id:" + id);
    if (cnfr) {
        document.location = "<?=BASEURL?>admin/delete-location?id="+id;
    }
}
</script>

<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title" style="text-transform: capitalize;"><?=$page_title?></h1>
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
    
    <div class="page-content">
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Data</h3>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="margin-bottom-15">
                            <button id="addToTable" class="btn btn-primary" type="button" onClick="document.location='<?=BASEURL?>admin/add-location';">
                                <i class="icon md-plus" aria-hidden="true"></i> Add Location
                            </button>
                        </div><!-- /margin-bottom-15 -->
                    </div><!-- /6 -->
                </div><!-- /row -->
                <table class="table table-bordered table-hover dataTable table-striped width-full" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Action</th>
                            <th>Facilities</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Action</th>
                            <th>Facilities</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (count($locations) > 0) {
                            foreach ($locations as $q): ?>
                                <tr>
                                    <td><?=$q['name']?></td>
                                    <td><?=$q['address']?></td>
                                    <td><?=$q['city']?></td>
                                    <td class="actions">
                                        <a href="<?=BASEURL?>admin/edit-location?id=<?=$q['location_id']?>" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a> &nbsp;&nbsp;
                                        <a href="javascript:del_q('<?=$q['location_id']?>')" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row" data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a> &nbsp;&nbsp;
                                    </td>
                                    <td><a href="javascript://" data-id="<?=$q['location_id']?>" data-name="<?=$q['name']?>" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row btn-facilities" data-toggle="tooltip" data-original-title="Remove"><i class="icon md-eye" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php endforeach;
                        } //end if
                        else {
                            ?>
                            <tr>
                                <td>
                                    Nothing found.
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                        }?>
                    </tbody>
                </table>
            </div><!-- /panel-body -->
        </div><!-- /panel -->
      <!-- End Panel Basic -->
    </div><!-- /page-content -->
</div><!-- /page/animsition -->



<script>
$(document).on('click', '.btn-facilities', function(event) {
    event.preventDefault();
    $this = $(this);
    $id = $this.attr('data-id');
    $.post('<?=BASEURL."admin/get-location-facilities"?>', {id: $id}, function(resp) {
        resp = $.parseJSON(resp);
        $("#modal-1 .modal-title").text($this.attr('data-name'));
        $("#modal-1 input[name='location_id']").val($id);
        $("#modal-1 table tbody").html(resp.html);
        $("#modal-1").modal('show');
    });
});
$(document).on('submit', '#modal-1 form', function(event) {
    event.preventDefault();
    $form = $(this);
    $.post('<?=BASEURL."admin/post-location-facility"?>', {data: $form.serialize()}, function(resp) {
        resp = $.parseJSON(resp);
        alert(resp.msg);
        $("#modal-1 table tbody").append(resp.html);
    });
});
$(document).on('click', '.btnDelete', function(event) {
    event.preventDefault();
    $this = $(this);
    $.post('<?=BASEURL."admin/delete-location-facility"?>', {id: $this.attr('data-id')}, function(resp) {
        resp = $.parseJSON(resp);
        if (resp.status == true) {
            $this.parent('td').parent('tr').remove();
        }
        alert(resp.msg);
    });
});
</script>

<div class="modal fade" id="modal-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

                <hr>

                <form>
                    <input type="hidden" name="location_id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Heading</label>
                                <select name="heading" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="urgent care">Urgent Care</option>
                                    <option value="onsite lab & x-rays">Onsite Lab & x-rays</option>
                                    <option value="vaccinations">Vaccinations</option>
                                    <option value="primary care">Primary Care</option>
                                    <option value="physical exams">Physical Exams</option>
                                </select>
                            </div><!-- /form-group -->
                        </div><!-- /12 -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div><!-- /form-group -->
                        </div><!-- /12 -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div><!-- /form-group -->
                        </div><!-- /12 -->
                    </div><!-- /row -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- #modal-1 -->