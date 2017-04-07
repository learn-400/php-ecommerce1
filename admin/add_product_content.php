		<div class="container-fluid">
		<div class="row-fluid">
				
			<?php include("sidebar.php");?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Category</a>
					</li>

				</ul>
			</div>
			

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Category</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Add Product</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Product Name</label>
							  <div class="controls">
								<input type="text" class="span3 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" placeholder="Category Name">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Product Category</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen">
									<option>None</option>
									<option>Option 2</option>
								  </select>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError1">Product Brands</label>
								<div class="controls">
								  <select id="selectError1" data-rel="chosen">
									<option>None</option>
									<option>Option 2</option>
								  </select>
								</div>
							  </div>
							  
							  
							<div class="control-group">
							  <label class="control-label" for="fileInput">Product image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>          
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Product Short Description</label>
							  <div class="controls">
								<textarea class="" id="textarea2" rows="3" style="width:36%"></textarea>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="textarea1">Product Long Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea1" rows="3"></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save Category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
				
		</div><!--/row-->
			
			
				<!-- content ends -->
			</div><!--/#content.span10-->
					</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
		
	</div><!--/.fluid-container-->