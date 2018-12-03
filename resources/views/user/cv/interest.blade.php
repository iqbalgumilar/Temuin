<div class="card">
    <div class="card-header text-center">
        <strong>INTEREST</strong>
        <div class="float-right">
            <span class="" style="cursor: pointer" id="tambahInterest">
                <i class="fa fa-plus-circle text-success"></i>
            </span>
            <span class="" style="cursor: pointer" id="hapusInterest">
                <i class="fa fa-minus-circle text-danger"></i>
            </span>
        </div>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" id="form-interest" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="interest-input" class=" form-control-label">Interest</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="interest-input" id="interest-input" rows="3" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>