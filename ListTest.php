<!DOCTYPE html>
<title>My Example</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<div class="container-fluid">
		
<div class="list-group">
<a href="#" class="list-group-item">These Boots Are Made For Walking</a>
<a href="#" class="list-group-item active">Eleanor, Put Your Boots On</a>
<a href="#" class="list-group-item">Puss 'n' Boots</a>
<a href="#" class="list-group-item">Die With Your Boots On</a>
<a href="#" class="list-group-item">Fairies Wear Boots</a>
</div>

</div>
		
<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>