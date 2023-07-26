<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
$template = new Template('templates/frontpage.php');
if( ! empty( $_GET['category'] ) ) {
    $template->title = 'Jobs in ' . $job->getCategory( $_GET['category'] )->name;
    $template->jobs = $job->getByCategory( $_GET['category'] );
} else {
    $template->title = 'Latest job';
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();
echo $template;