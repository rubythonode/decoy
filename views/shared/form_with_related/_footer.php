<? 

/*
This partial is used to generate the last part of the a form
with a related data sidebar.  It expects:
	
	- controller : A string depicting the controller.  This is used in
		generating links.  I.e. 'admin.news'
	
	- item (optional) : The data that is being edited

	- related (optional) : An array of data needed to generate the sidebar
	  list view
	  
 	- parent_id (optional) : The id of the parent row of the model
    that is the parent of what is being edited.  If news has mas 
    many photos and this form is for photos, it is the id of the
    associated news article

*/

?>

		<?=render('decoy::shared.form_with_related._split', array(
			'controller' => $controller,
			'item'       => @$item,
			'parent_id'       => @$parent_id,
		))?>

		<?
		// If there is related data, loop through each list of related data
		// and display the list
		if (!empty($related)) {
			foreach($related as $list) {
				
				// If list is an array, display it using standard list
				if (is_array($list)) {
				
					// Automatically set the list to sidebar mode
					$list['sidebar'] = true;
					
					// Display it
					echo render('decoy::shared.list._standard', $list);
				
				// Otherwise, treat $list as straight HTML that should be echoed
				} else echo $list;
			}	
		}
		?>

		<? if (empty($item)): ?>
			<p><legend>Related</legend></p>
			<p><i class="icon-info-sign"></i> You must create a new entry before you can add related content.</p>
		<? endif ?>
	</div>
</div>