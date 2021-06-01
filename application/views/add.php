<html>
    <head>
        <title>codeigniter CRUD</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" name="frmAdd" action="index.php/register">
                        <h3>Add User</h3>

                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="txtFname">
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="txtLname">
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="txtAddress">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="txtEmail">
                        </div>

                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" name="txtMobile">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add user now" name="btnadd" class="btn btn-primary btn-lg">
                        </div>

                    </form>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <h4>example ckeditor</h4>
	 <textarea name="name" id="editor" ></textarea>
		<script type="text/javascript">

CKEDITOR.replace( "editor") ;
</script>
	
		</div>
    </body>
</html> 