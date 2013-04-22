<?php include('header.php');
//include('../inc/projects.php');
//$objproject = new Project();
//$projects = $objproject->get_projects();
$pro1 = null;
$pro1->id = 1;
$pro1->name = 'A';

$projects = array($pro1);
?>
<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Actions</th>
</tr>
<?php foreach($projects as $project): ?>
<tr>
<td><?php echo $project->id; ?></td>
<td><?php echo $project->name; ?></td>
<td><a href="project_edit.php?id=<?php echo $project->id; ?>">Edit</a> - <a href="project_delete.php?id=<?php echo $project->id; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
<?php include('footer.php'); ?>
