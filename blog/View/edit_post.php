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

<?php if (empty($this->oPost)): ?>
    <p class="error">Post Data Not Found!</p>
<?php else: ?>

    
       <div class="container">
    <div class="row">
        <form action="" method="post">
            <div class="col-md-10">
                <div class="well" style="margin: 2rem 0;">
                    <div class="form-group">
                <input type="text" class="form-control" name="title" id="title" value="<?=htmlspecialchars($this->oPost->title)?>" required="required"/>
            </div>
                    <div class="form-group">
                        <textarea id="editor" name="body" rows="5" cols="35"><?=htmlspecialchars($this->oPost->body)?>>
                        </textarea>                    
                    </div>

                   <div class="form-row">
                        <input type="submit" class="btn btn-sm btn-success btn-block" name="edit_submit" value="Update" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endif ?>

<?php require 'inc/footer.php' ?>
