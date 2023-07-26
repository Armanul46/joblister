<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if( isset( $_POST['submit'] ) ) {
    
    $data                  = array();
    $data['job_title']     = ! empty( $_POST['job_title'] ) ? $_POST['job_title'] : '';
    $data['company']       = ! empty( $_POST['company'] ) ? $_POST['company'] : '';
    $data['category_id']   = ! empty( $_POST['category'] ) ? $_POST['category'] : '';
    $data['description']   = ! empty( $_POST['description'] ) ? $_POST['description'] : '';
    $data['location']      = ! empty( $_POST['location'] ) ? $_POST['location'] : '';
    $data['salary']        = ! empty( $_POST['salary'] ) ? $_POST['salary'] : '';
    $data['contact_user']  = ! empty( $_POST['contact_user'] ) ? $_POST['contact_user'] : '';
    $data['contact_email'] = ! empty( $_POST['contact_email'] ) ? $_POST['contact_email'] : '';

    if( $job->create( $data ) ) {
        redirect( 'index.php', 'your job has been listed', 'success' );
    } else {
        redirect( "index.php", "Something went wrong", 'error' );
    }
}

$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();
echo $template;