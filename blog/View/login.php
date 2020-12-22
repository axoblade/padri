<style type="text/css">
	Result Skip Results Iframe
EDIT ON
.back {
  background: #e2e2e2;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
}

.div-center {
  width: 400px;
  height: 400px;
  background-color: #fff;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: none;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}
</style>
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<div class="back">


	<div class="div-center">


	    <div class="content">

			<form action="" method="post">
				<div class="form-group">
			    	<label for="exampleInputEmail1">Email:</label>
			        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required="required" />
			    </div>

			    <div class="form-group">
			    	<label for="exampleInputPassword1">Password:</label>
			        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="required" />
			    </div>

			    <p><input type="submit" class="btn btn-sm btn-primary btn-block" value="Log In" /></p>
			</form>
		</div>
	</div>
</div>

<?php require 'inc/footer.php' ?>
