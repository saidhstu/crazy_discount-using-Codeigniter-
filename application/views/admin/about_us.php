<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('admin_header.php');?>
<?php include('admin_sidebar.php');?>


<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Website Title and Description</h2>
        <div class="block sloginblock">               
         <form>
            <table class="form">					
                <tr>
                    <td>
                        <label>About Us</label>
                    </td>
                    <td>

                        <div class="form-group">
                          
                          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                       
                    </td>
                </tr>
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>


<?php include('admin_footer.php');?>
