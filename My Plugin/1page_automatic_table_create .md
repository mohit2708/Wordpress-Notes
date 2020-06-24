```php
<?php
   /*
   Plugin Name: Jobs Manager   
   description: All Jobs Maneger
   Version: 1.0
   Author: Mr. Mohit Saxena
   */

function mm_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "mmjobs";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
            id int(9) NOT NULL AUTO_INCREMENT,
            first_name varchar(250) CHARACTER SET utf8 NOT NULL,
            last_name varchar(250) CHARACTER SET utf8 NOT NULL,
            contact int(10),
            email varchar(250) CHARACTER SET utf8 NOT NULL,
            job_tittle varchar(250),
            job_description varchar(250),
            company_name varchar(250),
            company_url varchar(250),
            created_at TIMESTAMP,
            PRIMARY KEY (`id`)
          ) $charset_collate; ";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
}

// run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'mm_create_table');


function jobs_manager_admin_menu(){

add_menu_page('All Job Manager', 'Job Portal', 'manage_options','all-job-manager','acutions_recent_bids_list','dashicons-chart-area', 56);   
function acutions_recent_bids_list(){
  ?>
   <!-- <div class='wrap'>
    <h2>All Job Manager</h2>    
   </div> -->
  <?php
 }
add_submenu_page(
    'all-job-manager',       // parent slug
    'All Job Manager',    // page title
    'All Job Manager',             // menu title
    'manage_options',           // capability
    'all-job-manager', // slug
    'all_job_manager' // callback
); 
function all_job_manager(){
  ?>
   <div class='wrap'>
    <h2>All Job Manager</h2>
    <?php include('/list-job.php'); ?>
    </div>
  <?php
 }


add_submenu_page(
    'all-job-manager',       // parent slug
    'Add New Job',    // page title
    'Add New Job',             // menu title
    'manage_options',           // capability
    'add-new-job', // slug
    'add_job' // callback
); 

function add_job(){
  ?>
   <div class='wrap'>
    <h2>Add New Job</h2>
    <?php include('/add-job.php'); ?>
   </div>
  <?php
 }


add_submenu_page(
    'all-job-manager',       // parent slug
    'All Applied Job',    // page title
    'All Applied Job',             // menu title
    'manage_options',           // capability
    'all-applied-job', // slug
    'all_applied_job' // callback
); 
function all_applied_job(){
  ?>
   <div class='wrap'>
    <h2>All Applied Job</h2>
    All Applied Job
   </div>
  <?php
 } 

}

add_action('admin_menu','jobs_manager_admin_menu'); 

```
