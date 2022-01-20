<form id="mainform" name="mainform" method="POST" action="../lib/save.php">

    <!-- meta info -->
    <input type="hidden" id="table" name="table" value="image">
    <input type="hidden" id="pkey" name="pkey" value="img_id">
    <input type="hidden" id="afterinsert" name="afterinsert" value="steden2.php">
    <input type="hidden" id="afterupdate" name="afterupdate" value="steden2.php">
    <!-- end meta info -->

    <div class="form-group row">
        <label for="img_id" class="col-sm-4 col-form-label">Id</label>
        <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="img_id" name="img_id" value="@img_id@">
        </div>
    </div>

    <div class="form-group row">
        <label for="img_title" class="col-sm-4 col-form-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control-plaintext" id="img_title" name="img_title" value="@img_title@">
        </div>
    </div>

    <div class="form-group row">
        <label for="img_filename" class="col-sm-4 col-form-label">Filename</label>
        <div class="col-sm-8">
            <input type="text" class="form-control-plaintext" id="img_filename" name="img_filename" value="@img_filename@">
        </div>
    </div>

    <div class="form-group row">
        <label for="img_width" class="col-sm-4 col-form-label">Width</label>
        <div class="col-sm-8">
            <input type="text" class="form-control-plaintext" id="img_width" name="img_width" value="@img_width@">
        </div>
    </div>

    <div class="form-group row">
        <label for="img_height" class="col-sm-4 col-form-label">Height</label>
        <div class="col-sm-8">
            <input type="text" class="form-control-plaintext" id="img_height" name="img_height" value="@img_height@">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-4 col-form-label"></label>
        <div class="col-sm-8">
            <input type="submit">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-4 col-form-label"></label>
        <div class="col-sm-8">
            <img alt=@img_title@ class="img-fluid" style="width: 75%;" src="img/@img_filename@">
        </div>
    </div>

</form>
