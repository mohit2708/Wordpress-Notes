```php
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php
$job_tittle = $_POST['job_tittle'];
$job_description = $_POST['job_description'];
$company_name = $_POST['company_name'];
$company_url = $_POST['company_url'];


if (isset($_POST['insert'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . "mmjobs";

        $wpdb->insert(
                $table_name, //table
                array('job_tittle' => $job_tittle, 'job_description' => $job_description, 'company_name' => $company_name, 'company_url' => $company_url), //data
                array('%s', '%s') //data format			
        );
        //$message.="Job inserted";
        echo "<script>location.replace('admin.php?page=all-job-manager');</script>";
    }

?> 

<!-- <?php //if (isset($message)): ?><div class="updated"><p><?php //echo $message; ?></p></div><?php //endif; ?> -->
<form name="addjobform" id="addjobform" action="#" method="post">

    <div class="form-row">
  <div class="form-group col-md-6">
      <label>Job Tittle</label>
      <input type="text" class="form-control" id="job_tittle" name="job_tittle" placeholder="Enter Job Tittle">
    </div>
    <div class="form-group col-md-6">
      <label>Job Description</label>
      <input type="text" class="form-control" id="job_description" name="job_description" placeholder="Enter Job Description">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Company Name</label>
      <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name">
    </div>
    <div class="form-group col-md-6">
      <label>Company URL</label>
      <input type="text" class="form-control" id="company_url" name="company_url" placeholder="Enter Company URL">
    </div>
  </div>
  <input type='submit' name="insert" value='Save' class='btn btn-primary'>
</form>
```
