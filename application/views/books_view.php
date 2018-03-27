<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ; ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css') ; ?>">
</head>
<body>
	<div class="container">
		<h1>Belajar Codeigneter</h1>
		<h3>Books Store</h3>

		<button type="button" class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i>Add Book</button>
		<br><br>

		<table id="table_id" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>Book Id</th>
				<th>Book ISBN</th>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Category</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- link to jquery -->
	<script src="<?php echo base_url('assets/jquery/jquery-3.2.1.min.js') ; ?>"></script>

	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ; ?>"></script>

	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ; ?>"></script>

	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js') ; ?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#table_id').DataTable();
		});

		var	save_method;
		var table;

		function add_book(){
			save_method='add';
			$('#form')[0].reset();
			$('#modal_form').modal('show');
		}
	</script>

<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body form">
      <form action="#" id="form">
      	
      </form>
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>