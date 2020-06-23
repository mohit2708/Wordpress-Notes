```php
<?php
   /*
   Plugin Name: Jobs Manager   
   description: All Jobs Maneger
   Version: 1.0
   Author: Mr. Mohit Saxena
   */

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
    <h2>All Job Manager</h2>
    
   </div>
  <?php
 }

add_submenu_page(
    'all-job-manager',       // parent slug
    'Testing',    // page title
    'Testing',             // menu title
    'manage_options',           // capability
    'testing', // slug
    'testing' // callback
); 
function testing(){
  ?>
   <div class='wrap'>
    <h2>Testing Page</h2>
    This is a Test Page
   </div>
  <?php
 } 

}

add_action('admin_menu','jobs_manager_admin_menu'); 
```
