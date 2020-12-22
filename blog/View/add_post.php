<?php
/**
 * @author           Pierre-Henry Soria <phy@hizup.uk>
 * @copyright        (c) 2015-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 * @link             http://hizup.uk
 */
?>
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>


<div class="container">
    <div class="row">
       	<form action="" method="post">
            <div class="col-md-1">&nbsp;
            </div>
       	    <div class="col-md-10">
                <div class="well" style="margin: 2rem 0;">
                	<div class="form-group">
	      		<input type="text" placeholder="Title" name="title" class="form-control" id="title" required="required" />
        	</div>
	                <div class="form-group">
	                    <textarea id="editor" placeholder="Blog content" name="body" class="form-control" rows="3">
	                    </textarea>                    
	                </div>

	               <div class="form-row">
	                  	<input type="submit" class="btn btn-sm btn-success btn-block" name="add_submit" value="Add" />
	                </div>
               	</div>
            <div class="col-md-1">&nbsp;</div>
            </div>
        </form>
    </div>
</div>


<?php require 'inc/footer.php' ?>
