<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'Action';
$_lang['action_desc'] = 'The Action that this Rule will apply to.';
$_lang['activate'] = 'Activate';
$_lang['constraint'] = 'Constraint';
$_lang['constraint_class'] = 'Constraint Class';
$_lang['constraint_class_desc'] = 'Optional. If set, along with the Constraint Field and Constraint options, will restrict this rule to the constraints applied.';
$_lang['constraint_desc'] = 'Optional. The value of the Constraint Field that should be checked against.';
$_lang['constraint_field'] = 'Constraint Field';
$_lang['constraint_field_desc'] = 'Optional. The field by which this constraint should be applied.';
$_lang['containing_panel'] = 'Containing Panel';
$_lang['containing_panel_desc'] = 'The ID of the containing Form Panel the field is in. This is sometimes necessary for certain rules, so that the system can know what form or panel the field is in.';
$_lang['deactivate'] = 'Deactivate';
$_lang['default_value'] = 'Default Value';
$_lang['export'] = 'ייצא';
$_lang['fc.action_create'] = 'Create Resource';
$_lang['fc.action_update'] = 'Update Resource';
$_lang['field'] = 'Field';
$_lang['field_desc'] = 'This is the field to affect. This may also be a tab, or TV. If it is a TV, please specify in this format: "tv#", where # is the ID of the TV.';
$_lang['field_default'] = 'Field Default Value';
$_lang['field_label'] = 'Field Label';
$_lang['field_visible'] = 'Field Visible';
$_lang['fields'] = 'Fields';
$_lang['file'] = 'File';
$_lang['filter_by_action'] = 'Filter by Action...';
$_lang['filter_by_rule_type'] = 'Filter by Rule...';
$_lang['filter_by_search'] = 'Search...';
$_lang['for_parent'] = 'For Parent';
$_lang['for_parent_desc'] = 'Check this when you want this rule to apply to the parent. Only use with Resources or objects with a `parent` field. Useful for the "create" page of Resources.';
$_lang['form_customization_msg'] = 'Here is a list of currently applied Rules. More information on Rules and Form Customization can be found <a href="http://rtfm.modx.com/display/revolution20/Customizing+the+Manager" target="_blank">here</a>. Please note that improper Rules might cause problems with your MODX Revolution installation. Inactive Rules are faded gray.';
$_lang['form_rules'] = 'Form Rules';
$_lang['import'] = 'Import';
$_lang['import_from_xml'] = 'Import New Set from XML';
$_lang['label'] = 'Label';
$_lang['original_value'] = 'Original Value';
$_lang['profile'] = 'Profile';
$_lang['profile_create'] = 'Create New Profile';
$_lang['profile_err_nfs'] = 'Form Customization Profile not found with ID [[+id]].';
$_lang['profile_err_ns'] = 'Form Customization Profile not specified!';
$_lang['profile_err_remove'] = 'An error occurred while trying to remove the Profile.';
$_lang['profile_err_save'] = 'An error occurred while trying to save the Profile.';
$_lang['profile_msg'] = 'Here you can specify Sets for this Profile. A Set is a collection of Rules that apply for a given page (Update or Create Resource). They can also be restricted to certain Templates, or other field values on the Resource. Constraints for the Create Resource Sets will execute based on the parent of the newly created Resource\'s value.';
$_lang['profile_new'] = 'New Form Customizaton Profile';
$_lang['profile_remove'] = 'Delete Profile';
$_lang['profile_remove_confirm'] = 'Are you sure you want to completely remove this Profile? This is irreversible.';
$_lang['profile_remove_multiple'] = 'Delete Multiple Profiles';
$_lang['profile_remove_multiple_confirm'] = 'Are you sure you want to completely remove these Profiles? This is irreversible.';
$_lang['profile_usergroup_err_ae'] = 'That User Group is already assigned to this Profile!';
$_lang['profile_usergroups_msg'] = 'Here you can assign the User Groups that will use this Profile. If no User Groups are assigned, all Users will use this Profile.';
$_lang['profiles'] = 'Form Customization Profiles';
$_lang['profiles_msg'] = 'This is a list of your Form Customization Profiles. Profiles can contain many Form Customization Rules, and can be activated or deactivated. They can also be configured to only apply to certain User Groups.';
$_lang['rank'] = 'Rank';
$_lang['rank_desc'] = 'The order the Rule is executed in. A lower number means that it will be executed earlier.';
$_lang['region'] = 'Region';
$_lang['regions'] = 'Regions';
$_lang['rule'] = 'Rule';
$_lang['rule_create'] = 'Create Rule';
$_lang['rule_desc'] = 'The type of Rule that will be applied to this field.';
$_lang['rule_description_desc'] = 'Optional. A description of the rule.';
$_lang['rule_err_ae'] = 'A rule already exists for that field!';
$_lang['rule_err_duplicate'] = 'An error occurred while trying to duplicate the rule.';
$_lang['rule_err_nf'] = 'Rule not found.';
$_lang['rule_err_ns'] = 'Rule not specified.';
$_lang['rule_err_remove'] = 'An error occurred while trying to remove the rule.';
$_lang['rule_err_save'] = 'An error occurred while trying to save the rule.';
$_lang['rule_remove'] = 'Delete Rule';
$_lang['rule_remove_confirm'] = 'Are you sure you want to remove this Rule?';
$_lang['rule_remove_multiple'] = 'Delete Multiple Rules';
$_lang['rule_remove_multiple_confirm'] = 'Are you sure you want to remove these Rules? This is irreversible.';
$_lang['rule_update'] = 'Update Rule';
$_lang['rule_value_desc'] = 'The value to set in the Rule.';
$_lang['rules'] = 'Rules';
$_lang['set'] = 'Set';
$_lang['set_and_fields'] = 'Set Information and Fields';
$_lang['set_change_template'] = 'Change Template For Set';
$_lang['set_change_template_confirm'] = 'Are you sure you want to do this? This will change the Template that these Rules apply to. If so, MODX will first save your changes before reloading the page to refresh the new TVs for the new Template.';
$_lang['set_constraint_field_desc'] = 'Setting the Constraint field will prevent the rules in this Set from executing unless the field for this Resource matches the "constraint" value.';
$_lang['set_constraint_desc'] = 'Set the value of the field (specified above) to restrict the rules in this Set from being executed unless the Resource has this value on the specified constraint field.';
$_lang['set_create'] = 'Create New Set';
$_lang['set_err_nfs'] = 'No Set found with ID [[+id]]';
$_lang['set_err_ns'] = 'No Set specified.';
$_lang['set_fields_msg'] = 'Here you can adjust the fields for this page, including their visibility, labels and default values. Just double-click on a row to edit its value. Leave a field empty to use the default setting.';
$_lang['set_import_err_upload'] = 'An error occurred while trying to find the XML file. Please specify a valid file.';
$_lang['set_import_err_xml'] = 'An error occurred importing the XML file. Please ensure you specified a valid Form Customization Set XML File.';
$_lang['set_import_msg'] = 'Select an XML file to import a Form Customization Set from. It must be in the correct XML Form Customization format.';
$_lang['set_msg'] = 'Here you can edit what fields, tabs and Template Variables show for this page, as well as their labels and default values. Just double-click on a column to edit its value. You can also use the tab key to progress through the grid. Leave a field blank to use the default setting.';
$_lang['set_new'] = 'Create New Set';
$_lang['set_remove'] = 'Delete Set';
$_lang['set_remove_confirm'] = 'Are you sure you want to permanently remove this set? This is irreversable.';
$_lang['set_remove_multiple'] = 'Delete Multiple Sets';
$_lang['set_remove_multiple_confirm'] = 'Are you sure you want to permanently remove these sets? This is irreversable.';
$_lang['set_tab_err_ae'] = 'A tab already exists with that ID. Please specify another.';
$_lang['set_tabs_msg'] = 'Here you adjust the tabs and regions for this page, including their visibility and title. Just double-click on a row to edit its value. Leave a field empty to use the default setting.';
$_lang['set_template_desc'] = 'Choosing a Template will limit the rules in the Set from executing unless the Resource has the specified Template.';
$_lang['set_tvs_msg'] = 'Here you can set visibility, labels, default values and the tabs they reside in by double-clicking on the row in the grid. Note: If you move a TV to another Region, you can adjust the order of the TV in the "Region Rank" field. Leave a field empty to use the default setting.';
$_lang['sets'] = 'Form Customization Sets';
$_lang['simplexml_err_nf'] = 'MODX requires the SimpleXML PHP extension to use this feature. Please ensure the extension is installed before continuing.';
$_lang['tab'] = 'Tab';
$_lang['tab_create'] = 'Create New Tab';
$_lang['tab_id'] = 'ID';
$_lang['tab_name'] = 'Tab Name';
$_lang['tab_title'] = 'Title';
$_lang['tab_new'] = 'New Tab';
$_lang['tab_rank'] = 'Region Rank';
$_lang['tab_remove'] = 'Delete Tab';
$_lang['tab_remove_confirm'] = 'Are you sure you want to delete this tab?';
$_lang['tab_visible'] = 'Tab Visible';
$_lang['tabs'] = 'Tabs';
$_lang['tv'] = 'Template Variable';
$_lang['tv_default'] = 'TV Default Value';
$_lang['tv_label'] = 'TV Label';
$_lang['tv_name'] = 'Name';
$_lang['tv_move'] = 'Move TV to Tab';
$_lang['tv_visible'] = 'TV Visible';
$_lang['tvs'] = 'Template Variables';
$_lang['usergroup'] = 'User Group';
$_lang['usergroup_create'] = 'Add User Group';
$_lang['usergroup_desc'] = 'Optional. If set, will restrict this Profile to only Users in the specified User Group.';
$_lang['usergroup_remove'] = 'Remove User Group From Profile';
$_lang['usergroup_remove_confirm'] = 'Are you sure you want this Profile to no longer apply to Users in this User Group?';
$_lang['usergroups'] = 'User Groups';
$_lang['visible'] = 'Visible';
$_lang['xmlwriter_err_nf'] = 'MODX requires the XMLWriter PHP extension to use this feature. Please ensure the extension is installed before continuing.';
