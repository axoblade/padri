<?php
/**
 * @author           Pierre-Henry Soria <phy@hizup.uk>
 * @copyright        (c) 2015-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 * @link             http://hizup.uk
 */
?>
<?php if(!empty($_SESSION['is_logged'])): ?>

    <button type="button" class="btn btn-sm" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=edit&amp;id=<?=$oPost->id?>'">Edit</button>
    <form action="<?=ROOT_URL?>?p=blog&amp;a=delete&amp;id=<?=$oPost->id?>" method="post">
    	<button type="submit" class="btn btn-sm" name="delete" value="1" >Delete</button>
    </form>

<?php endif ?>
