<script type="text/javascript">
function del_q(id) {
    cnfr = confirm("Wait a min. Are you really going to delete the Service with id:" + id);
    if (cnfr) {
        document.location = "<?=BASEURL?>admin/delete-service?id="+id;
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
                            <button id="addToTable" class="btn btn-primary" type="button" onClick="document.location='<?=BASEURL?>admin/add-service';">
                                <i class="icon md-plus" aria-hidden="true"></i> Add service
                            </button>
                        </div><!-- /margin-bottom-15 -->
                    </div><!-- /6 -->
                </div><!-- /row -->
                <table class="table table-bordered table-hover dataTable table-striped width-full" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Title</th>
                            <th>Parent</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Order</th>
                            <th>Title</th>
                            <th>Parent</th>
                            <th>Image</th>
                            <th>Featured</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (count($services) > 0) {
                            foreach ($services as $q): ?>
                                <tr>
                                    <td><?=$q['order']?></td>
                                    <td><?=$q['title']?></td>
                                    <td><?=$q['Parent']?></td>
                                    <td><img src="<?=UPLOADS.$q['image']?>" width="150"></td>
                                    <td>
                                        <?php if ($q['featured'] == 0): ?>
                                            <span class="badge badge-danger">no</span>
                                        <?php else: ?>
                                            <span class="badge badge-success">yes</span>
                                        <?php endif ?>
                                    </td>
                                    <td class="actions">
                                        <a href="<?=BASEURL?>admin/edit-service?id=<?=$q['service_id']?>" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-toggle="tooltip" data-original-title="Edit"><i class="icon md-edit" aria-hidden="true"></i></a> &nbsp;&nbsp;
                                        <a href="javascript:del_q('<?=$q['service_id']?>')" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row" data-toggle="tooltip" data-original-title="Remove"><i class="icon md-delete" aria-hidden="true"></i></a> &nbsp;&nbsp;
                                    </td>
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

