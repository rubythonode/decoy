// --------------------------------------------------
// Manifest - hash map of JS modules
// --------------------------------------------------
define(function (require) {
	
	// list each module by ID and require path
	// (note: they must be required here for the build step)
	return {
		'standard-list': require('decoy/views/standard-list'),
		'moderation': require('decoy/views/moderation'),
		'autocomplete': require('decoy/views/autocomplete'),
		'datalist': require('decoy/views/datalist'),
		'many-to-many': require('decoy/views/many-to-many'),
		'task-method': require('decoy/views/task-method'),
		'ajax-progress': require('decoy/views/ajax-progress')
	};
});