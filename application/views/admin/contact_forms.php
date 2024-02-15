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
                <table class="table table-bordered table-hover dataTable table-striped width-full" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (count($contact_forms) > 0) {
                            foreach ($contact_forms as $key => $q): ?>
                                <tr>
                                    <td><?=($key+1)?></td>
                                    <td><?=$q['name']?></td>
                                    <td><?=$q['subject']?></td>
                                    <td><?=$q['email']?></td>
                                    <td><?=$q['msg']?></td>
                                    <td><?=$q['type']?></td>
                                    <td class="actions">
                                        <select class="form-control" data-id="<?=$q['contact_form_id']?>">
                                            <option value="null">Change Status</option>
                                            <option value="0">New</option>
                                            <option value="1">Seen</option>
                                        </select>
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
$(document).on('change', 'select', function(event) {
    event.preventDefault();
    $this = $(this);
    $status = $this.val();
    if ($status != 'null') {
        $id = $this.attr('data-id');
        $.post('<?=BASEURL."admin/change-form-status"?>', {
            status: $status,
            id: $id
        }, function(resp) {
            resp = $.parseJSON(resp);
            alert(resp.msg);
            location.reload();
        });
    }
});
</script>