<script src="<?php echo Yii::app()->baseUrl; ?>/ckeditor/ckeditor.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/ckfinder/ckfinder.js"></script> 
<script type="text/javascript">

    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '/yii/mysite/ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileField;
        finder.popup();

        // It can also be done in a single line, calling the "static"
        // popup( basePath, width, height, selectFunction ) function:
        // CKFinder.popup( '../', null, null, SetFileField ) ;
        //
        // The "popup" function can also accept an object as the only argument.
        // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
    }

    // This is a sample function which is called when a file is selected in CKFinder.
    function SetFileField( fileUrl )
    {
        document.getElementById( 'Movie_image' ).value = fileUrl;
    }
    //var editor = CKEDITOR.replace( 'detail' );
    //editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );

    // Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
    // The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
    CKFinder.setupCKEditor( 'editor', '/yiiProjects/moviestop/ckfinder/' ) ;

    // It is also possible to pass an object with selected CKFinder properties as a second argument.
    // CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
</script> 
<!-- End Box -->
<?php echo $form->textFieldGroup($model, 'image', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 255)))); ?>
<div class="form-group">
    <label class="col-sm-3 control-label" for="image">&nbsp;</label>
    <div class="col-sm-9">
        <input type="button" value="Browse Server" onclick="BrowseServer();" />
    </div>
</div>
